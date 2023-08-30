class CodexPro {
    static get toolbox() {
      return {
        title: 'CodexPro',
        icon: '<i class="bi bi-code-square"></i>',
      };
    }
  
    constructor({ data, api }) {
      this.data = data || {};
      this.api = api;
  
      this.container = document.createElement('div');
      this.container.classList.add('codexpro-container');
  
      this.toggleButton = document.createElement('button');
      this.toggleButton.classList.add('codexpro-toggle-button');
      this.toggleButton.textContent = 'View Code 📄';
      this.toggleButton.addEventListener('click', this.toggleView.bind(this));
  
      this.cssTextarea = document.createElement('textarea');
      this.cssTextarea.classList.add('codexpro-textarea');
      this.cssTextarea.value = this.data.css || '';
      this.cssTextarea.placeholder = 'Enter additional CSS here... 🎨';
      this.cssTextarea.addEventListener('input', this.handleCssInput.bind(this));
  
      this.textarea = document.createElement('textarea');
      this.textarea.classList.add('codexpro-textarea');
      this.textarea.value = this.data.content || '';
      this.textarea.placeholder = 'Enter your HTML code here... 📋';
      this.textarea.addEventListener('focus', this.handleTextareaFocus.bind(this));
      this.textarea.addEventListener('blur', this.handleTextareaBlur.bind(this));
  
      this.codeView = document.createElement('div');
      this.codeView.classList.add('codexpro-code-view');
      this.codeView.style.display = 'none';
      this.codeView.contentEditable = false; // Initially, set to false
      this.codeView.addEventListener('input', this.handleCodeViewInput.bind(this));
  
      this.container.appendChild(this.toggleButton);
      this.container.appendChild(this.cssTextarea);
      this.container.appendChild(this.textarea);
      this.container.appendChild(this.codeView);
      this.codeView.contentEditable = true; // Set to true when showing the HTML view
  
      if (this.data.content) {
        this.textarea.style.display = 'none';
        this.cssTextarea.style.display = 'none';
        this.codeView.style.display = 'block';
        this.updateCodeView();
      }
    }
  
    handleTextareaFocus() {
      this.toggleButton.style.display = 'none';
    }
  
    handleTextareaBlur() {
      this.updateCodeView();
      this.toggleButton.style.display = 'block';
    }
  
    toggleView() {
      if (this.textarea.style.display === 'none') {
        this.textarea.style.display = 'block';
        this.cssTextarea.style.display = 'block';
        this.codeView.style.display = 'none';
        this.codeView.contentEditable = false;
      } else {
        this.textarea.style.display = 'none';
        this.cssTextarea.style.display = 'none';
        this.codeView.style.display = 'block';
        this.updateCodeView();
        this.codeView.contentEditable = true; // Set to true when showing the HTML view
      }
    }
  
    handleCssInput() {
      this.updateCodeView();
    }
  
    handleCodeViewInput() {
      this.textarea.value = this.codeView.innerHTML;
    }
  
    updateCodeView() {
      this.codeView.innerHTML = `<style>${this.cssTextarea.value}</style>${this.textarea.value}`;
    }
  
    render() {
      return this.container;
    }
  
    save() {
      const content = this.textarea.value;
      const css = this.cssTextarea.value;
      return {
        content,
        css,
      };
    }
  }
  
  window.CodexPro = CodexPro;
  