export class CardsPlayscam {
    static get toolbox() {
        return {
            title: 'Playscam Cards',
            icon: '<i class="bx bx-id-card fs-2"></i>',
        };
    }

    constructor({ api }) {
        this.api = api;
        this.imgMain = 'https://cdn.sanity.io/images/dalun7d8/production/407b81aadfbba767b95e679141480240d7798c48-1920x1200.jpg?q=100&quot';
        this.container = document.createElement('div');
        this.container.id = 'Maincontainer-playscam';
        this.container.className = 'container-fluid bg-gray-200 p-4';
        this.container.style.backgroundImage = `url("${this.imgMain}")`;
        this.container.style.backgroundAttachment = 'fixed';
        this.container.style.backgroundPosition = 'center center';
        this.container.style.backgroundRepeat = 'repeat-x';
        this.container.style.backgroundSize = 'cover';

        this.innerContainer = document.createElement('div');
        this.innerContainer.id = 'widget-playcams';
        this.innerContainer.className = 'bg-opacity-60 mx-auto ';
        this.innerContainer.style.maxWidth = '800px';

        this.cardContainer = document.createElement('div');
        this.cardContainer.id = 'BtnAddWidget';
        this.cardContainer.className = 'overflow-hidden shadow-lg p-4 rounded-4 d-flex justify-content-center align-items-center cursor-pointer text-xl custom-cursor-on-hover';
        this.cardContainer.style.backdropFilter = 'blur(10px) brightness(70%)';
        this.cardContainer.dataset.bsToggle = 'modal';
        this.cardContainer.dataset.bsTarget = '#modal-cards-playscam';

        this.cardContent = document.createElement('div');
        this.cardContent.id = 'cardContent';
        this.cardContent.innerHTML = '<i class="bx bxs-widget bx-spin fs-1 text-white"></i> <strong class="fs-1"> Insert Widget Here </strong>';

        this.cardContainer.appendChild(this.cardContent);
        this.innerContainer.appendChild(this.cardContainer);
        this.container.appendChild(this.innerContainer);

        const cards = document.querySelectorAll('.snipcss-PN4eX');
        cards.forEach((card, index) => {
            card.addEventListener('click', () => {
                this.updateInnerContainer(index);
            });
        });
    }

    updateInnerContainer(index) {
        const cardDescription = document.getElementById(`card-description-${index}`);
        if (cardDescription) {
            const newContent = cardDescription.innerHTML;
            this.innerContainer.insertBefore(this.createContainer(newContent), this.cardContainer);
            document.querySelector("#modal-cards-playscam > div > div > div.modal-header > button").click();
        }
    }

    createContainer(content) {
        const newContainer = document.createElement('div');
        newContainer.innerHTML = content;
        return newContainer;
    }

    showModal() {
        const link = document.getElementById('modal-cards-playscam');
        if (link) {
            link.click();
            console.log('Modal abierto');
        }
    }

    render() {
        return this.container;
    }

    save() {
        const cleanedHTML = this.innerContainer.innerHTML.replace(/\n\s*/g, '');
        const encodedHTML = encodeURIComponent(cleanedHTML);
        return {
            containerCard: encodedHTML,
        };
    }
}
