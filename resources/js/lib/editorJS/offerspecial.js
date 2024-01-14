// editorJS/offerspecial.js
export class Offerspecial {
    static get toolbox() {
      return {
        title: 'Special Offer',
        icon: '<i class="bx bxs-offer"></i>',
      };
    }
  
    constructor({ data }) {
      this.data = data || { selectedValue: null, backgroundColor: '', textColor: '' };
      this.wrapper = null;
    }
  
    createColorInput(type) {
        const rainbowColors = ['#FF0000', '#FF7F00', '#FFFF00', '#00FF00', '#0000FF', '#8B00FF'];
        const colorInput = document.createElement('input');
        colorInput.type = 'color';
        colorInput.className = `form-control form-control-color ${type} mx-auto mt-2`; // Clases de Bootstrap para centrar
        colorInput.title = `Choose your ${type === 'background' ? 'background' : 'text'} color`;
      
        // Obtener un color diferente para cada tipo (background o text)
        if (type === 'background') {
          colorInput.value = this.data.backgroundColor || rainbowColors[0];
        } else {
          colorInput.value = this.data.textColor || rainbowColors[1];
        }
      
        colorInput.addEventListener('input', () => this.handleColorInputChange(type));
        return colorInput;
      }
      
    handleColorInputChange(type) {
      const colorInput = this.wrapper.querySelector(`input[type="color"].${type}`);
      if (colorInput) {
        if (type === 'background') {
          this.data.backgroundColor = colorInput.value;
        } else {
          this.data.textColor = colorInput.value;
        }
        this.updateOffer();
      }
    }
  
    handleSelectBlur() {
      this.saveData();
      this.updateOffer();
    }
  
    render() {
      this.wrapper = document.createElement('div');
  
      const selectOptions = [
        { value: 'offer1', label: 'Offer 1' },
        { value: 'offer2', label: 'Offer 2' },
        { value: 'offer3', label: 'Offer 3' },
        { value: 'offerWithShadow', label: 'Offer with Shadow' },
      ];
  
      const select = document.createElement('select');
      select.innerHTML = selectOptions.map(option => `<option value="${option.value}">${option.label}</option>`).join('');
      select.value = this.data.selectedValue || '';
      select.addEventListener('change', () => this.updateOffer());
      select.addEventListener('blur', () => this.handleSelectBlur());
  
      this.wrapper.appendChild(select);
  
      if (this.data.selectedValue) {
        this.updateOffer();
      }
  
      // Set background color when rendering
      this.wrapper.style.backgroundColor = this.data.backgroundColor || 'initial';
  
      const backgroundColorInput = this.createColorInput('background');
      const textColorInput = this.createColorInput('text');
  
      this.wrapper.appendChild(backgroundColorInput);
      this.wrapper.appendChild(textColorInput);
  
      return this.wrapper;
    }
  
    updateOffer() {
      this.wrapper.innerHTML = '';
  
      let title, description, additionalStyles;
  
      switch (this.data.selectedValue) {
        case 'offer1':
          title = 'Offer 1';
          description = 'Save 10% on your purchase today.';
          additionalStyles = this.generateRandomStyle();
          break;
        case 'offer2':
          title = 'Offer 2';
          description = 'Save 15% on your purchase today.';
          additionalStyles = this.generateRandomStyle();
          break;
        case 'offer3':
          title = 'Offer 3';
          description = 'Save 20% on your purchase today.';
          additionalStyles = this.generateRandomStyle();
          break;
        case 'offerWithShadow':
          title = 'Offer with Shadow';
          description = 'Save 25% on your purchase today.';
          additionalStyles = this.generateRandomStyle() + 'box-shadow: 5px 5px 10px #888888;';
          break;
        default:
          break;
      }
  
      additionalStyles += `background-color: ${this.data.backgroundColor || 'initial'}; color: ${this.data.textColor || '#ff6600'};`;
  
      const contentDiv = document.createElement('div');
      const offerHtml = this.generateOfferHtml(title, description, additionalStyles, this.data.backgroundColor);
      contentDiv.innerHTML = offerHtml;
  
      const pElement = contentDiv.querySelector('p');
      if (pElement) {
        pElement.style.backgroundColor = this.data.backgroundColor || 'initial';
        pElement.style.color = this.data.textColor || '#ff6600';
      }
  
      const link = contentDiv.querySelector('a');
      link.addEventListener('click', async (event) => {
        event.preventDefault();
        const userLink = await this.customPrompt('Modify Link', 'Enter the new link:');
        if (userLink !== null) {
          link.href = userLink;
        }
      });
  
      this.wrapper.appendChild(contentDiv);
  
      const backgroundColorInput = this.createColorInput('background');
      const textColorInput = this.createColorInput('text');
  
      this.wrapper.appendChild(backgroundColorInput);
      this.wrapper.appendChild(textColorInput);
    }
  
    generateRandomStyle() {
      const commonColors = [
        '#fdeebd', '#fcf6f5', '#e6f7ff', '#f0f9e8', '#fff1e6', '#fce4ec',
        '#f0e6fc', '#e1f5fe', '#e8f5e9', '#fff9c4', '#ffe0b2', '#d1c4e9',
        '#f3e5f5', '#f1f8e9', '#f9fbe7', '#e3f2fd', '#e0f7fa', '#e0f2f1',
        '#e8eaf6', '#f3e5f5', '#f9fbe7', '#fff3e0', '#ffebee', '#e0f7fa',
        '#ede7f6', '#d0d9ff'
      ];
  
      const randomColor = commonColors[Math.floor(Math.random() * commonColors.length)];
      return `background-color: ${randomColor};`;
    }
  
    generateOfferHtml(title, description, additionalStyles = '', color = 'initial') {
      return `
        <p style="font-size: 24px; font-family: 'Arial', sans-serif; text-align: center; padding: 10px; border: 2px solid #cccccc; border-radius: 8px; ${additionalStyles} background-color: ${color};" contenteditable="true">
          SPECIAL OFFER!<br>
          ${title}<br>
          ${description} 
          <a href="#" style="color: #0066cc; text-decoration: underline; margin: 4px;">Shop now</a>.
        </p>
        <br>
      `;
    }
  
    async customPrompt(titulo, mensaje) {
      return new Promise((resolve) => {
        window.Notiflix.Confirm.prompt(
          titulo,
          mensaje,
          '👻 Link here!',
          'Ok',
          'Cancel',
          (clientAnswer) => {
            if (clientAnswer) {
              const urlPattern = /^(ftp|http|https):\/\/[^ "]+$/;
              if (urlPattern.test(clientAnswer)) {
                resolve(clientAnswer);
              } else {
                window.Notiflix.Notify.failure('Invalid URL. Please enter a valid URL.', {
                  position: 'center-center',
                });
                resolve(null);
              }
            } else {
              resolve(null);
            }
          },
          () => {
            resolve(null);
          }
        );
      });
    }
  
    saveData() {
      const selectElement = this.wrapper.querySelector('select');
      if (selectElement) {
        this.data.selectedValue = selectElement.value;
      }
  
      const backgroundColorInput = this.wrapper.querySelector('input[type="color"].background');
      if (backgroundColorInput) {
        this.data.backgroundColor = backgroundColorInput.value;
      }
  
      const textColorInput = this.wrapper.querySelector('input[type="color"].text');
      if (textColorInput) {
        this.data.textColor = textColorInput.value;
      }
    }
  
    save() {
      return this.data;
    }
  }
  