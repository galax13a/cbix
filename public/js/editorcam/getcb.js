class GetChatur {
    static get toolbox() {
        return {
            title: 'Surf my chaturbate account',
            icon: '🔖',
            name: "BorderImagen26",
        };
    }

    static get isInline() {
        return false;
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;
        this.container = document.createElement('div');
        this.urlInput = document.createElement('input');
        this.titleElement = document.createElement('input');
        this.nameElement = document.createElement('input');
        this.imageElement = document.createElement('img');

        this.urlInput.classList.add('input-link-editor');
        this.titleElement.classList.add('input-cb');
        this.nameElement.classList.add('input-cb');
        this.imageElement.classList.add('img-cb-link');

        this.loadingElement = document.createElement('div');
        this.loadingElement.style.display = 'none';
        this.loadingElement.style.textAlign = 'center';
        this.loadingImage = document.createElement('img');
        this.loadingImage.src = '/icons/load.gif';
        this.loadingImage.alt = 'Loading';
        this.loadingElement.appendChild(this.loadingImage);

        this.linkButtonElement = document.createElement('a');
        this.linkButtonElement.className = 'btn btn-chatur style1';
        this.linkButtonElement.textContent = 'Live Show 🔓';
        this.linkButtonElement.style.maxWidth = '260px';
        this.linkButtonContainer = document.createElement('div');
        this.linkButtonContainer.id = 'container-link-btn-chatur';
        this.linkButtonContainer.classList.add('text-center');
        this.linkButtonElement.className = 'text-wrap text-capitalize custom-link';

        // Contenedor title model
        this.titleContainer = document.createElement('div');
        this.titleContainer.id = 'container-simple-cb-p';        
        this.titleModelElement = document.createElement('p');
        //this.titleContainer.appendChild(this.titleModelElement);      
        this.titleContainer.className = 'text-center shadow-sm p-2 m-2 rounded-3';

        this.render();
    }

    render() {    

        this.container.style.width = '100%';
        this.container.style.marginTop = '20px';

        this.urlInput.value = this.data.url || '';
        this.urlInput.placeholder = 'Insert Link Model Chatrurbate...';
        this.urlInput.style.width = '100%';
        this.urlInput.addEventListener('blur', this.fetchMetaData.bind(this));

        this.titleElement.value = this.data.title || '';
        this.titleElement.style.marginTop = '20px';
        this.titleElement.style.width = '100%';

        this.nameElement.value = this.data.name || '';
        this.nameElement.style.marginTop = '10px';
        this.nameElement.style.width = '100%';

        this.imageElement.src = this.data.image || '';
        this.imageElement.style.display = 'block';
        this.imageElement.style.maxWidth = '360px';
        this.imageElement.style.height = 'auto';
        this.imageElement.style.marginTop = '20px';

        this.container.appendChild(this.urlInput);
        this.container.appendChild(this.nameElement);
        this.container.appendChild(this.titleElement);
        this.container.appendChild(this.imageElement);
        this.container.appendChild(this.loadingElement);
        this.container.appendChild(this.linkButtonContainer);
        this.linkButtonContainer.appendChild(this.linkButtonElement);
        
        this.container.appendChild(this.titleContainer);           
        this.titleContainer.appendChild(this.titleModelElement); 
        //this.titleModelElement.textContent = this.titleElement.value;
        this.titleModelElement.contentEditable = "true";
        this.titleModelElement.textContent = this.data.titlemodel || this.titleElement.value;;
        this.titleElement.addEventListener('input', () => {
            //this.titleModelElement.textContent = this.titleElement.value;
        });

        return this.container;
    }

    async fetchMetaData() {
        const url = this.urlInput.value;
        this.loadingElement.style.display = 'block';

        const metadata = await this.fetchFromServer(url);

        this.titleElement.value = metadata.title;
        this.nameElement.value = metadata.name;
        this.imageElement.src = metadata.image;
        this.titleModelElement.textContent = this.titleElement.value;
        this.linkButtonElement.textContent = metadata.name + ' Live Show 🔓';
       
        this.loadingElement.style.display = 'none';
    }

    isValidURL(url) {
        try {
            new URL(url);
            return true;
        } catch {
            return false;
        }
    }

    isChaturbaURL(url) {
        const parsedURL = new URL(url);
        return parsedURL.hostname === 'chaturbate.com';
    }

    fetchFromServer(url) {
        return fetch('/getchatur', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ url })
        }).then(response => response.json());
    }

    save() {
        const url = `https://chatur.com/${this.nameElement.value}`;
        this.linkButtonElement.href = url;
        this.linkButtonElement.target = '_blank'; // Esto hará que la URL se abra en una nueva pestaña.
        // this.titleContainer.textContent = this.titleElement.value;

        return {
            url: this.urlInput.value,
            title: this.titleElement.value,
            name: this.nameElement.value,
            image: this.imageElement.src,
            button: this.linkButtonElement.href,
            titlemodel:   this.titleModelElement.innerText,
        };
    }
}
window.GetChatur = GetChatur;
