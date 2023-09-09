class ComponentsV1 {
  static get toolbox() {
    return {
      title: 'Create ComponentsV1',
      icon: '<i class="bi bi-cpu"></i>',
    };
  }

  constructor({ data, api }) {
    this.data = data || {};
    this.api = api;

    this.container = document.createElement('div');
    this.container.classList.add('codexpro-container');

    this.toggleButton = document.createElement('button');
    this.toggleButton.className = 'btn btn-outline-secondary custom-link mb-1 border border-0';
    this.toggleButton.textContent = 'View Code 📄';
    this.toggleButton.addEventListener('click', this.toggleView.bind(this));

    this.cssTextarea = this.createTextarea('css', 'Enter additional CSS here... 🎨', this.handleCssInput.bind(this));
    this.jsTextarea = this.createTextarea('js', 'Enter JavaScript code here... 🚀', this.handleJsInput.bind(this));
    this.phpTextarea = this.createTextarea('php', 'Enter PHP code here... 💻', this.handlePhpInput.bind(this)); // New PHP Textarea
    this.htmlcodex = this.createTextarea('content', 'Enter your HTML code here... 📋');

    this.createButtonElement = this.createButton('Create Component', this.createBladeComponent.bind(this));
    this.createButtonElement.className = 'custom-link btn btn-cb';
    this.createButtonElement.innerHTML = '<i class="bi bi-cpu"></i> Create Component';

    this.codeView = document.createElement('div');
    this.codeView.classList.add('codexpro-code-view');
    this.codeView.style.display = 'none';
    this.codeView.contentEditable = false; // Initially, set to false
    this.codeView.addEventListener('input', this.handleCodeViewInput.bind(this));

    this.container.append(this.createButtonElement, this.toggleButton, this.htmlcodex, this.cssTextarea, this.jsTextarea, this.phpTextarea);
    this.container.append(this.codeView);

    this.codeView.contentEditable = true; // Set to true when showing the HTML view

    if (this.data.content) {
      this.textarea.style.display = 'none';
      this.cssTextarea.style.display = 'none';
      this.jsTextarea.style.display = 'none';
      this.phpTextarea.style.display = 'none'; // Hide PHP Textarea
      this.codeView.style.display = 'block';
      this.updateCodeView();
    }
  }

  createTextarea(dataKey, placeholder, inputHandler, additionalEventHandlers = []) {
    const textarea = document.createElement('textarea');
    textarea.classList.add('codexpro-textarea');
    textarea.value = this.data[dataKey] || '';
    textarea.placeholder = placeholder;
    if (inputHandler) textarea.addEventListener('input', inputHandler);

    additionalEventHandlers.forEach(handler => {
      const [event, fn] = handler;
      textarea.addEventListener(event, fn);
    });

    return textarea;
  }
  createButton(text, eventListener) {
    const btn = document.createElement('button');
    btn.classList.add('codexpro-button');
    btn.textContent = text;
    btn.addEventListener('click', eventListener);
    return btn;
  }

  handleTextareaFocus() {
    this.toggleButton.style.display = 'none';
  }

  handleTextareaBlur() {
    this.updateCodeView();
    this.toggleButton.style.display = 'block';
  }

  toggleView() {
    //console.log("toggleView called");
    const allTextAreas = [this.htmlcodex, this.cssTextarea, this.jsTextarea, this.phpTextarea];
    const isHidden = this.htmlcodex.style.display === 'none';
    //console.log("isHidden: ", isHidden);

    if (isHidden) {
      allTextAreas.forEach(textArea => textArea.style.display = 'block');
      this.codeView.style.display = 'none';
    } else {
      allTextAreas.forEach(textArea => textArea.style.display = 'none');
      this.codeView.style.display = 'block';
      this.updateCodeView();
    }
  }

  handleCodeViewInput() {
    //console.log("handleCodeViewInput called, new value:", this.codeView.innerHTML);
    this.htmlcodex.value = this.codeView.innerHTML;
  }
  updateCodeView() {
    // console.log("Updating codeView with: ", this.htmlcodex.value);
    this.codeView.innerHTML = `
        <style>${this.cssTextarea.value}</style>
        <script>${this.jsTextarea.value}</script>
        <?php ${this.phpTextarea.value} ?>
        <section>${this.htmlcodex.value} </section>`;
  }


  handleCssInput() {
    this.updateCodeView();
  }

  handleJsInput() {
    this.updateCodeView();
  }

  handlePhpInput() { // New PHP input handler
    this.updateCodeView();
  }
  async customPrompt(titulo, mensaje) {
    return new Promise((resolve, reject) => {
      window.Notiflix.Confirm.prompt(
        titulo,
        mensaje,
        '🧊 Name Component',
        'Ok',
        'Cancel',
        (clientAnswer) => {
          resolve(clientAnswer);
        },
        () => {
          resolve(null);
        }
      );
    });
  }

  render() {
    return this.container;
  }

  copyToClipboard(text) {
    const textarea = document.createElement("textarea");
    textarea.value = text;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand("copy");
    document.body.removeChild(textarea);
}


  async createBladeComponent() {

    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const componentName = await this.customPrompt('Component Blade', 'Do not use - or strange characters, You can use spaces !!');
    if (!componentName) return //alert('Component no Apply');

    const dataToSend = {
      name: componentName,
      htmlcodex: this.htmlcodex.value,
      css: this.cssTextarea.value,
      js: this.jsTextarea.value,
      codex: this.phpTextarea.value,
      _token: token
    };

    try {
      const response = await fetch('/themas/components', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(dataToSend)
      });

      const responseData = await response.json();
      if (responseData.success) {
      
        window.Notiflix.Confirm.show(
          'Create Ok! Component =)',
           `you want to copy this new component : ${responseData.instruction}`,
          'Yes',
          'No',
          () => {
            this.copyToClipboard(responseData.instruction);
            let eventDetail = {
              type: 'success',
              message: 'Copy Ready Component ' + responseData.instruction,
              position: 'center-center',
          };
          let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
          window.dispatchEvent(notifyEvent);
          
          },
          () => {
             // is not client
          },
          {
          },
          );

      } else {
       
        let eventDetail = {
          type: 'failure',
          message: 'Error Create Component',
          position: 'center-center',
      };
      let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
      window.dispatchEvent(notifyEvent);
      }
    } catch (error) {
      console.error('Error sent componet :', error);
    }
  }

  save() {
    return {
      content: this.htmlcodex.value,  
      css: this.cssTextarea.value,
      js: this.jsTextarea.value,
      php: this.phpTextarea.value,
    };

  }
}

window.ComponentsV1 = ComponentsV1;
