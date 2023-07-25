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
  
      this.topicElement = document.createElement('textarea');
      this.topicElement.className = 'input-link-editor';
      this.topicElement.placeholder = 'Enter a topic ✍🏼 ';

      this.generateButton = document.createElement('button');
      this.generateButton.innerText = 'Generate AI Article PRO 🦄';
      this.generateButton.addEventListener('click', this.fetchMetaData.bind(this));

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

      this.topicElement.style.width = '100%';
      this.topicElement.style.marginTop = '20px';
    }
  
    render() {
      const container = document.createElement('blockquote');
      container.className = 'cdx-block cdx-quote';
     
      this.topicElement.value = this.data.topic || '';
      this.generateButton.className = 'btn-web-link btn-web-link-pro';
      this.generateButton.style.width = '100%';

      container.appendChild(this.topicElement);
      container.appendChild(this.generateButton); 
      container.appendChild(this.loadingElement);
      container.appendChild(this.containerArticle);

      ClassicEditor
      .create(this.containerArticle)
      .then(editor => {
        this.editor = editor;
        if (this.data.article) {
          this.editor.setData(this.data.article);
        }
      })
      .catch(error => console.error(error));

      return container;
    }

    async fetchMetaData() {
      this.loadingElement.style.display = 'block';
      this.editor.setData(''); // Clear the previous content
      const metadata = await this.fetchFromServer(this.topicElement.value);
      const formattedQuote = metadata.quote.replace(/^"(.*)"$/, '$1');
      this.editor.setData(formattedQuote);
      this.loadingElement.style.display = 'none';
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
  
    save() {
      return {
        topic: this.topicElement.value,
        article: this.editor.getData(),
      };
    }
}
  
window.AIPro = AIPro;
