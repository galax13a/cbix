class EmoticonsBlock {
    static get toolbox() {
        return {
            title: 'Emoticons',
            icon: '😊',
        };
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;

        this.container = document.createElement('div');
        this.toolbarmenu = document.createElement('div');
        this.tool_title = document.createElement('h2');
        this.toolbarmenu.id = "tool-emotions";
        this.headerSelect = this.createHeaderSelect();
        this.emotionsList = this.createEmotionsList();
        this.emoticonsContainer = this.createEmoticonsContainer();

        // Create loading element
        this.loadingElement = document.createElement('div');
        this.loadingElement.style.display = 'none';
        this.loadingElement.style.textAlign = 'center';
        this.loadingImage = document.createElement('img');
        this.loadingImage.src = '/icons/load.gif';
        this.loadingImage.alt = 'Loading';
        this.loadingElement.appendChild(this.loadingImage);

        this.container.appendChild(this.toolbarmenu);
        this.tool_title.textContent = 'Emotions v1.11 :: 🐶🐱🐭🐹🐰🦊';

        this.toolbarmenu.appendChild(this.tool_title);
        this.toolbarmenu.appendChild(this.headerSelect);
        this.toolbarmenu.appendChild(this.emotionsList);
        
        this.container.appendChild(this.emoticonsContainer);
        this.container.appendChild(this.loadingElement);

       

        this.container.className = 'shadow p-2 m-2 mt-4 rounded-3 mb-4';
        this.toolbarmenu.className = 'shadow-sm p-2 mt-3 rounded-3 mb-4';

        this.loadEmoticons();
    }

    createHeaderSelect() {
        const select = document.createElement('select');
        ['extra','h1', 'h2', 'h3', 'h4', 'h5', 'h6'].forEach((header) => {
            const option = document.createElement('option');
            option.value = header;
            option.textContent = header;
            select.appendChild(option);
        });
        select.className = 'btn-web-link btn-web-link-pro border-0 shadow';
        select.addEventListener('change', () => this.updateEmoticonsSize());
        select.value = this.data.header ? this.data.header : 'h1';
        return select;
    }

    createEmotionsList() {
        const select = document.createElement('select');
        select.className = 'btn-web-link btn-web-link-pro border-0 shadow';
        select.addEventListener('change', () => this.updateEmoticonsCategory());
        select.value = this.data.emotion ? this.data.emotion : '';
        return select;
    }

    createEmoticonsContainer() {
        const div = document.createElement('div');
        div.className = 'emoticons';
        return div;
    }

    loadEmoticons() {
        // Show loading element
        this.loadingElement.style.display = 'block';

        fetch('/js/json/emotions.json')
            .then(response => response.json())
            .then(emoticons => {
                
                this.emoticons = emoticons;
                Object.keys(emoticons).forEach((category) => {
                    const option = document.createElement('option');
                    option.value = category;
                    option.textContent = category;
                    this.emotionsList.appendChild(option);
                });
                this.emotionsList.value = this.data.emotion ? this.data.emotion : Object.keys(emoticons)[0];

                // Populate the container with the first category's emoticons
                this.updateEmoticonsCategory();

                // Set initial emoticon size
                this.updateEmoticonsSize();

                // Hide loading element
                this.loadingElement.style.display = 'none';
            });
    }

    updateEmoticonsSize() {
        const headerMap = {
            'h1': '2em',
            'h2': '1.5em',
            'h3': '1.17em',
            'h4': '1em',
            'h5': '0.83em',
            'h6': '0.67em',
            'extra': '3em',
        };
        const headerSize = this.headerSelect.value;
        this.emoticonsContainer.style.fontSize = headerMap[headerSize];
    }

    updateEmoticonsCategory() {
        const category = this.emotionsList.value;
        const emoticons = this.emoticons[category];
        
        // Clear the container
        this.emoticonsContainer.innerHTML = '';

        // Populate the container with the selected category's emoticons
        emoticons.forEach((emoticon) => {
            const emoticonElement = document.createElement('span');
            emoticonElement.textContent = emoticon;
            emoticonElement.className = 'emoticon m-2 punter';
            emoticonElement.addEventListener('click', () => {
                navigator.clipboard.writeText(emoticonElement.textContent);
                let eventDetail = {
                    type: 'success',
                    message: 'Copy Emotion Ok, Good .',
                    position: 'center-center',
                };
                let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
                window.dispatchEvent(notifyEvent);
            });
            this.emoticonsContainer.appendChild(emoticonElement);
        });
    }

    render() {
        return this.container;
    }

    save() {
        this.data.header = this.headerSelect.value;
        this.data.emotion = this.emotionsList.value;
        return this.data;
    }
}

window.EmoticonsBlock = EmoticonsBlock;
