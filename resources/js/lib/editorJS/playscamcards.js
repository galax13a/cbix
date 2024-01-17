// cards-playscam.js
export class CardsPlayscam {
  static get toolbox() {
      return {
          title: 'CardsPlayscam',
          icon: '<i class="bx bx-id-card"></i>',
      };
  }

  constructor({ api }) {
      this.api = api;

      this.container = document.createElement('div');
      this.container.classList.add('cardsplayscam-container', 'container');

      this.button = document.createElement('button');
      this.button.classList.add('btn', 'btn-primary', 'btn-block');
      this.button.textContent = 'Open Modal 🌐';
      this.button.dataset.bsToggle = 'modal';
      this.button.dataset.bsTarget = '#createDataModal';

      this.container.appendChild(this.button);
  }

  render() {
      return this.container;
  }

  save() {
      // No data to save for this component
      return {};
  }
}
