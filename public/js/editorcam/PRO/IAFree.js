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
    this.topicElement.className = 'input-link-editor';
    this.topicElement.placeholder = 'Enter a topic ✍🏼 ';

    // Creando el botón para generar
    this.generateButton = document.createElement('button');
    this.generateButton.innerText = 'Create Content AI';
    this.generateButton.addEventListener('click', this.fetchMetaData.bind(this));

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

    this.topicElement.style.width = '100%';
    this.topicElement.style.marginTop = '20px';
  }

  render() {
    const container = document.createElement('blockquote');
    container.className = 'cdx-block cdx-quote';
   
    this.topicElement.value = this.data.topic || '';
    this.quoteText.textContent = this.data.quote || '';
    this.generateButton.className = 'btn-web-link';
    this.generateButton.style.width = '100%';

    container.appendChild(this.topicElement);
    container.appendChild(this.generateButton); 
    container.appendChild(this.loadingElement);
    container.appendChild(this.quoteText);

    return container;
  }

  async fetchMetaData() {
      this.loadingElement.style.display = 'block';
      const metadata = await this.fetchFromServer(this.topicElement.value);
      const formattedQuote = metadata.quote.replace(/^"(.*)"$/, '$1');
      this.typeWriterEffect(formattedQuote);       
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

  // Función para implementar el efecto de escribir
  typeWriterEffect(text, i = 0) {
    if (i < text.length) {
      this.quoteText.textContent += text.charAt(i);
      i++;
      setTimeout(() => this.typeWriterEffect(text, i), 50);
    } else {
      this.loadingElement.style.display = 'none';
    }
  }

  save() {
    return {
      topic: this.topicElement.value,
      quote: this.quoteText.textContent,
    };
  }
}

window.IAFree = IAFree;
