export class CodexPlaycam {
  static get toolbox() {
    return {
      title: 'CodeX',
      icon: `<i class='bx bx-code' ></i>`,
    };
  }

  constructor({ data, api }) {
    this.data = data || {};
    this.api = api;

    this.container = document.createElement('div');
    this.container.classList.add('codexplaycam-container', 'container');

    this.row = document.createElement('div');
    this.row.classList.add('row');

    this.textareaCol = document.createElement('div');
    this.textareaCol.classList.add('col-12', 'mb-3');

    this.textarea = document.createElement('textarea');
    this.textarea.classList.add('form-control', 'codexplaycam-textarea');
    this.textarea.style.height = '90px';
    this.textarea.placeholder = 'Enter your HTML code here... 📋';
    this.textarea.addEventListener('input', this.handleTextareaInput.bind(this));

    this.textareaCol.appendChild(this.textarea);

    this.renderCol = document.createElement('div');
    this.renderCol.classList.add('col-12', 'mb-3');

    this.renderCodex = document.createElement('div');
    this.renderCodex.classList.add('codexplaycam-rendercodex');

    if (this.data.html) {
      this.textarea.value = this.data.html;
      this.renderCodex.innerHTML = this.data.html;
    }

    this.renderCol.appendChild(this.renderCodex);

    this.row.appendChild(this.textareaCol);
    this.row.appendChild(this.renderCol);

    this.container.appendChild(this.row);
  }

  handleTextareaInput() {
    const html = this.textarea.value;
    this.renderCodex.innerHTML = html;
  }

  render() {
    return this.container;
  }

  save() {
    const html = this.textarea.value;
    return {
      html,
    };
  }
}
