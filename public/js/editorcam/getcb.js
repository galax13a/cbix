class GetChatur {
    static get toolbox() {
      return {
        title: 'GetChatur',
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
  
      this.render();
    }
  
    render() {
      this.container.style.width = '100%';
      this.container.style.marginTop = '20px';
  
      this.urlInput.value = this.data.url || '';
      this.urlInput.placeholder = 'Insert Link Model Chatrur...';
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
      this.container.appendChild(this.titleElement);
      this.container.appendChild(this.nameElement);
      this.container.appendChild(this.imageElement);
      this.container.appendChild(this.loadingElement);
      
  
      return this.container;
    }
  
    async fetchMetaData() {
      const url = this.urlInput.value;
      this.loadingElement.style.display = 'block';
  
      const metadata = await this.fetchFromServer(url);
  
      this.titleElement.value = metadata.title;
      this.nameElement.value = metadata.name;
      this.imageElement.src = metadata.image;

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
      return {
        url: this.urlInput.value,
        title: this.titleElement.value,
        name: this.nameElement.value,
        image: this.imageElement.src,
      };
    }
  }
  
  // Assigns the GetChatur class to a global property
  window.GetChatur = GetChatur;
  