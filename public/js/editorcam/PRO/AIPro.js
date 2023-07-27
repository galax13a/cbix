class AIPro {
    static get toolbox() {
        return {
            title: 'AIPro',
            icon: '🦊',
            name: 'AIProNext',
        };
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;

        this.topicElement = document.createElement('textarea');
        this.topicElement.className = 'input-link-editor';
        this.topicElement.placeholder = 'Write your topic or prompt and start writing for you ✍🏼 ';

        this.generateButton = document.createElement('button');
        this.generateButton.innerText = 'Generate AI Article PRO 🦄';
        this.generateButton.addEventListener('click', this.fetchMetaData.bind(this));

        this.copyButton = document.createElement('button');
        this.copyButton.innerText = 'Copy text📋';
        this.copyButton.className = 'btn-ia-pro';
        this.copyButton.className = 'btn-web-link btn-web-link-copy border-0 shadow';
        this.copyButton.addEventListener('click', this.copyToClipboard.bind(this));

        this.translateButton = document.createElement('button');
        this.translateButton.innerText = 'Translate English 🤝';
        this.translateButton.className = 'btn-ia-pro';
        this.translateButton.className = 'btn-web-link btn-web-link-pro border-0 shadow';
        this.translateButton.addEventListener('click', this.translateContent.bind(this));

        this.containerArticle = document.createElement('div');
        this.containerArticle.className = 'cdx-input-articule';
        this.containerArticle.contentEditable = 'true';
        this.containerArticle.dataset.placeholder = 'Article will appear here...';

        this.loadingElement = document.createElement('div');
        this.loadingElement.style.display = 'none';
        this.loadingElement.style.textAlign = 'center';
        this.loadingImage = document.createElement('img');
        this.loadingImage.src = '/icons/load.gif';
        this.loadingImage.alt = 'Loading';
        this.loadingElement.appendChild(this.loadingImage);

        this.timeElapsedElement = document.createElement('p');
        this.timeElapsedElement.style.textAlign = 'center';

        this.topicElement.style.width = '100%';
        this.topicElement.style.marginTop = '20px';
        this.topicElement.style.height = '99px';

        this.tokenSelect = document.createElement('select');
        this.tokenSelect.className = 'btn-web-link btn-web-link-pro border-0 shadow';
        [100, 200, 300, 500, 666, 888, 1200].forEach(token => {
            const option = document.createElement('option');
            option.value = token;
            option.text = token;
            this.tokenSelect.appendChild(option);
        });

        this.translateSelect = document.createElement('select');
        let defaultOption = new Option("No translation", "null");
        let englishOption = new Option("English", "en");
        let spanishOption = new Option("Spanish", "es");
        this.translateSelect.add(defaultOption);
        this.translateSelect.add(englishOption);
        this.translateSelect.add(spanishOption);
        this.translateSelect.className = 'select-lang';
        this.translateSelect.className = 'btn-web-link btn-web-link-pro border-0 shadow'; 

    }

    render() {
        const container = document.createElement('blockquote');
        container.className = 'cdx-block cdx-quote';

        this.topicElement.value = this.data.topic || '';
        this.generateButton.className = 'btn-web-link btn-web-link-pro border-0 shadow';
        this.generateButton.style.width = '100%';

        container.appendChild(this.topicElement);
        container.appendChild(this.generateButton); 
        container.appendChild(this.copyButton);
        //container.appendChild(this.translateButton);
        container.appendChild(this.translateSelect);
        container.appendChild(this.tokenSelect);
        container.appendChild(this.loadingElement);
        container.appendChild(this.timeElapsedElement);
        container.appendChild(this.containerArticle);
      

        ClassicEditor
        .create(this.containerArticle, {
            codeBlock: {
                languages: [
                    { language: 'css', label: 'CSS' },
                    { language: 'html', label: 'HTML' }
                ]
            }
        })
        .then(editor => {
            this.editor = editor;
            if (this.data.article) {
                this.editor.setData(this.data.article);
            }
        })
        .catch(error => console.error(error));
    
    
        

        return container;
    }

    copyToClipboard() {
        navigator.clipboard.writeText(this.editor.getData()).then(() => {
            let eventDetail = {
                type: 'success',
                message: 'Copied to clipboard successfully!',
                position: 'center-center',
            };
            let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
            window.dispatchEvent(notifyEvent);
        }).catch(err => console.error('Could not copy text: ', err));
    }

    async translateContent() {
        this.loadingElement.style.display = 'block';
        const content = this.editor.getData();   
    
        try {
            const tokens = this.tokenSelect.value;
            const translatedContent = await this.fetchFromServer(content, true, tokens);
            this.editor.setData(translatedContent.quote);
        } catch (error) {
            // Maneja el error
        } finally {
            this.loadingElement.style.display = 'none';
        }
    }

    async fetchMetaData() {
        this.loadingElement.style.display = 'block';
        this.editor.setData('⭐️⭐️⭐️ Generating article, this takes a few seconds or maximum 2 minutes 🍄'); 
  
        let seconds = 0;
        this.timeElapsedElement.innerText = 'Time elapsed: 0 seconds';
        const intervalId = setInterval(() => {
            seconds++;
            this.timeElapsedElement.innerText = `Time elapsed: ${seconds} seconds`;
        }, 1000);
  
        try {
            const tokens = this.tokenSelect.value;
            const metadata = await this.fetchFromServer(this.topicElement.value, false, tokens);
            this.editor.setData(metadata.quote);
            this.timeElapsedElement.innerText += ' - Done!';
        } catch (error) {
            this.timeElapsedElement.innerText += ' - Error!';
            let eventDetail = {
                type: 'failure',
                message: 'The server took too long to respond. Please try again.',
                position: 'center-center',
            };
            let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
            window.dispatchEvent(notifyEvent);
        } finally {
            clearInterval(intervalId);
            this.loadingElement.style.display = 'none';
        }
    }
    
    fetchFromServer(topic, translate = null, tokens = 100) {
        translate = this.translateSelect.value === "null" ? null : this.translateSelect.value;

        const fetchPromise = fetch('/get-ai-pro', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ topic, translate, tokens })
        }).then(response => response.json());

        // Crear una nueva promesa que se rechaza después de 120 segundos
        const timeoutPromise = new Promise((resolve, reject) => {
            const id = setTimeout(() => {
                clearTimeout(id);
                reject('Server timeout');
            }, 120 * 1000); // 2 minutes
        });

        return Promise.race([fetchPromise, timeoutPromise]);
    }

    save() {
        return {
            topic: this.topicElement.value,
            article: this.editor.getData(),
        };
    }
}

window.AIPro = AIPro; 
