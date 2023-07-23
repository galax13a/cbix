class IframeUrlSimple {
    static get toolbox() {
        return {
            title: 'IframePRO',
            icon: '🌐',
            name: "IframeUrlSimple",
        };
    }

    static get isInline() {
        return false;
    }
  
    get shortcut() {
       // return 'Control+Shift+I';
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;
        this.container = document.createElement('div');
        this.urlInput = document.createElement('input');

        this.loadingElement = document.createElement('div');
        this.loadingImage = document.createElement('img');
        this.loadingImage.src = '/icons/load.gif';
        this.loadingElement.appendChild(this.loadingImage);
        this.loadingElement.style.display = 'none';

        this.iframeElement = document.createElement('iframe');

        this.urlInput.classList.add('input-url-editor');
        this.iframeElement.classList.add('iframe-url-editor');
        this.urlInput.classList.add('input-link-editor');
       
 

        this.render();
    }

    render() {
        this.urlInput.value = this.data.url || '';
        this.urlInput.placeholder = '🔗 Inserta la URL aquí...';
        this.urlInput.addEventListener('blur', this.loadIframe.bind(this));

        this.iframeElement.src = this.data.url || '';
        this.iframeElement.style.width = '100%';
        this.iframeElement.style.height = '600px';

        this.container.appendChild(this.urlInput);
        this.container.appendChild(this.iframeElement);
        this.urlInput.style.width = '100%';

        return this.container;
    }

    loadIframe() {
        const url = this.urlInput.value;

        const type_loading = "hourglass";
        const seg = 3000;
        dispatchLoadingEvent(type_loading, seg);

        fetch('/loadiframe', { // Reemplaza esto con tu ruta del servidor Laravel
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ url })
        }).then(response => response.json())
          .then(data => {
            this.loadingElement.style.display = 'none';
              if(data.iframe) {
                  this.iframeElement.src = data.iframe;
              }
              else {   
                let eventDetail = {
                    type: 'failure',  // Notification type
                    message: 'Error Url',  // Notification message                    
                };                
                let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
                window.dispatchEvent(notifyEvent);
              }
          });
    }

    save() {
        return {
            url: this.urlInput.value,
        };
    }
}

window.IframeUrlSimple = IframeUrlSimple;
