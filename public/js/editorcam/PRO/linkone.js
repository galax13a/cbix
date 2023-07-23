class LinkPage {
    static get toolbox() {
        return {
            title: 'LinkPage',
            icon: '<svg width="22px" height="22px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M8 18C5.17157 18 3.75736 18 2.87868 17.1213C2 16.2426 2 14.8284 2 12C2 9.17157 2 7.75736 2.87868 6.87868C3.75736 6 5.17157 6 8 6C10.8284 6 12.2426 6 13.1213 6.87868C14 7.75736 14 9.17157 14 12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 12C10 14.8284 10 16.2426 10.8787 17.1213C11.7574 18 13.1716 18 16 18C18.8284 18 20.2426 18 21.1213 17.1213C21.4211 16.8215 21.6186 16.4594 21.7487 16M22 12C22 9.17157 22 7.75736 21.1213 6.87868C20.2426 6 18.8284 6 16 6" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></g></svg>',
        };
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;
        this.container = document.createElement('div');
        this.urlInput = document.createElement('input');
        this.titleElement = document.createElement('h1');
        this.descriptionElement = document.createElement('p');

        this.loadingElement = document.createElement('div');
        this.loadingElement.style.display = 'none';
        this.loadingElement.style.textAlign = 'center';

        this.loadingImage = document.createElement('img');
        this.loadingImage.src = '/icons/load.gif';
        this.loadingImage.alt = 'Loading';

        this.loadingElement.appendChild(this.loadingImage);
        // this.urlInput.classList.add('input-cb');
        this.urlInput.classList.add('input-link-editor');
        this.titleElement.contentEditable = "true";
        this.descriptionElement.contentEditable = "true";
        //button link
        this.linkButtonElement = document.createElement('a');
        this.linkButtonElement.contentEditable = "true";
        this.linkButtonElement.rel = 'nofollow noopener';
        this.linkButtonElement.target = '_blank';
        this.randomNumber = Math.floor(Math.random() * (1000 - 10 + 1)) + 10;

        //buttonlink
        this.linkButtonElement.textContent = this.data.titlebutton || 'Enter Label Link';
        this.linkButtonElement.href = this.data.url || '';
        this.linkButtonElement.className = 'text-wrap text-capitalize p-2 text-decoration-none btn-web-link mb-4 bx-4';
        this.linkButtonElement.style.width = '90%';
                 
        this.linkContainer = document.createElement('div');
        this.linkContainer.id = 'container-link-page-' + this.randomNumber;
        this.linkContainer.className = 'block-container-link-page';

        this.render();
    }

    render() {
        this.container.style.width = '100%';
        this.container.style.marginTop = '20px';

        this.urlInput.value = this.data.url || '';
        this.urlInput.placeholder = '⛓Insert a link to a page...+Enter';
        this.urlInput.style.width = '100%';
        this.urlInput.addEventListener('blur', this.fetchMetaData.bind(this));

        this.titleElement.textContent = this.data.title || '';
        this.titleElement.style.marginTop = '20px';

        this.descriptionElement.textContent = this.data.description || '';
        this.descriptionElement.style.marginTop = '10px';

        this.container.appendChild(this.urlInput);
        this.container.appendChild(this.titleElement);
        this.container.appendChild(this.descriptionElement);
        this.container.appendChild(this.loadingElement);

        this.titleElement.textContent = this.data.title || '';
        this.descriptionElement.textContent = this.data.description || '';

        this.hr = document.createElement('hr');
        this.container.appendChild(this.linkContainer);
        this.linkContainer.appendChild(this.linkButtonElement);
        this.linkContainer.appendChild(this.hr);

        return this.container;
    }

    async fetchMetaData() {
        const url = this.urlInput.value;
        this.loadingElement.style.display = 'block';


        if (!this.isValidURL(url)) {
            let eventDetail = {
                type: 'failure',
                message: 'Select a valid url',
                position: 'center-center',
            };
            let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
            window.dispatchEvent(notifyEvent);
            return;
        }
        const metadata = await this.fetchFromServer(url);
        this.titleElement.textContent = metadata.title;
        this.descriptionElement.textContent = metadata.description;
        this.loadingElement.style.display = 'none';
        this.titleElement.textContent = this.data.title || metadata.title;
        this.descriptionElement.textContent = this.data.description || metadata.description;

        this.linkButtonElement.href = url;

    }

    isValidURL(url) {
        try {
            new URL(url);
            return true;
        } catch {
            return false;
        }
    }

    fetchFromServer(url) {

        return fetch('/getpage-editor', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ url })
        }).then(response => response.json());
    }

    save() {
        return {
            url: this.urlInput.value,
            title: this.titleElement.textContent,
            description: this.descriptionElement.textContent,
            titlebutton: this.linkButtonElement.textContent,
        };
    }
}
window.GetPage = LinkPage;