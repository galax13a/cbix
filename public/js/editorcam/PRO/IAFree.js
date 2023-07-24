class IAFree {
    static get toolbox() {
      return {
        title: 'IAFree',
        icon: '👾',
      };
    }
  
    constructor({ data, api, config }) {
      this.api = api;
      this.data = data || {};
      this.config = config;
  
      // Creando el elemento de entrada para el tema
      this.topicElement = document.createElement('input');
      this.topicElement.className = 'input-cb';
      this.topicElement.placeholder = 'Enter a topic...';
      this.topicElement.addEventListener('blur', this.fetchMetaData.bind(this));

      // Creando el elemento de visualización para la cita
      this.quoteText = document.createElement('div');
      this.quoteText.className = 'cdx-input cdx-quote__text';
      this.quoteText.contentEditable = 'true';
      this.quoteText.dataset.placeholder = 'Quote will appear here...';

      this.loadingElement = document.createElement('div');
      this.loadingElement.style.display = 'none';
      this.loadingElement.style.textAlign = 'center';
      this.loadingImage = document.createElement('img');
      this.loadingImage.src = '/icons/load.gif';
      this.loadingImage.alt = 'Loading';
      this.loadingElement.appendChild(this.loadingImage);

    }
  
    render() {
      const container = document.createElement('blockquote');
      container.className = 'cdx-block cdx-quote';
     
      this.topicElement.value = this.data.topic || '';
      this.quoteText.textContent = this.data.quote || '';

      container.appendChild(this.topicElement);
      container.appendChild(this.quoteText);
  
      return container;
    }

    async fetchMetaData() {
        this.loadingElement.style.display = 'block';

        const metadata = await this.fetchFromServer(this.topicElement.value);
        this.quoteText.textContent = metadata.quote;
        
        this.loadingElement.style.display = 'none';
    }
    
    fetchFromServer(topic) {
        return fetch('/get-ai-free', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ topic })
        }).then(response => response.json());
    }
  
    save(blockContent) {
      return {
        topic: blockContent.querySelector('.input-cb').value,
        quote: blockContent.querySelector('.cdx-quote__text').textContent,
      };
    }
  }
  
window.IAFree = IAFree;
