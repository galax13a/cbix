class AIPro {
    static get toolbox() {
      return {
        title: 'AIPro',
        icon: '🦊',
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
      this.generateButton.innerText = 'Generate Article PRO 🦄';
      this.generateButton.addEventListener('click', this.fetchMetaData.bind(this));

      // Creando el elemento de visualización para el artículo
      this.containerArticle = document.createElement('div');
      this.containerArticle.className = 'cdx-input-articule';
      this.containerArticle.contentEditable = 'true';
      this.containerArticle.dataset.placeholder = 'Article will appear here...';

      // Creando el elemento de párrafo para el artículo
      this.articleText = document.createElement('p');
      this.containerArticle.appendChild(this.articleText);

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
      this.articleText.textContent = this.data.article || '';
      this.generateButton.className = 'btn-web-link btn-web-link-pro';
      this.generateButton.style.width = '100%';

      container.appendChild(this.topicElement);
      container.appendChild(this.generateButton); 
      container.appendChild(this.loadingElement);
      container.appendChild(this.containerArticle);

      return container;
    }

    async fetchMetaData() {
        this.loadingElement.style.display = 'block';
        this.articleText.textContent = ''; // Limpia el contenido anterior
        const metadata = await this.fetchFromServer(this.topicElement.value);
        const formattedQuote = metadata.quote.replace(/^"(.*)"$/, '$1');
        this.typeWriterEffect(formattedQuote);
    }
    
    fetchFromServer(topic) {
        return fetch('/get-ai-pro', {
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
        this.articleText.textContent += text.charAt(i);
        i++;
        setTimeout(() => this.typeWriterEffect(text, i), 50);
      } else {
        this.loadingElement.style.display = 'none';
      }
    }
  
    save() {
      return {
        topic: this.topicElement.value,
        article: this.containerArticle.textContent,
      };
    }
  }
  
window.AIPro = AIPro;
