class TikTokBlock {
    static get toolbox() {
      return {
        title: 'TikTok Video',
        icon: '<i class="fab fa-tiktok"></i>',
      };
    }
  
    constructor({ data, config, api, readOnly }) {
      this.data = data;
    }
  
    render() {
      const container = document.createElement('div');
      const input = document.createElement('input');
      const preview = document.createElement('div');
  
      input.type = 'text';
      input.placeholder = 'Inserte la URL de TikTok';
      input.value = this.data.url || '';
      input.style.width = '100%';
      input.addEventListener('input', () => {
        const url = input.value.trim();
        preview.innerHTML = '';
        if (url) {
          const iframe = document.createElement('iframe');
          iframe.width = '325px';
          iframe.height = '605px';
          iframe.src = url;
          iframe.allow = 'autoplay; encrypted-media';
          iframe.allowFullscreen = true;
          preview.appendChild(iframe);
        }
      });
  
      container.appendChild(input);
      container.appendChild(preview);
      return container;
    }
  
    save(blockContent) {
      const input = blockContent.querySelector('input');
      return {
        url: input.value.trim(),
      };
    }
  }
  
  window.TikTokBlock = TikTokBlock;
  