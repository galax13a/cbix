// br-editor.js

class BRPlaycams {
    constructor({ api }) {
      this.api = api;
    }
  
    render() {
      const brElement = document.createElement('br');
      const hrElement = document.createElement('hr');
      hrElement.style.borderTop = '3px dashed #ccc';
  
      const container = document.createElement('div');
      container.appendChild(brElement);
      container.appendChild(hrElement);
  
      return container;
    }
  
    save() {
      return {
        br: '<br>',
      };
    }
  
    static get isReadOnlySupported() {
      return true;
    }
  
    static get sanitize() {
      return {
        br: true,
      };
    }
  
    static get toolbox() {
      return {
        title: 'Line Break',
        icon: '<strong style="font-family: Arial, sans-serif;">B</strong>',
      };
    }
  }
  
  export default BRPlaycams;
  