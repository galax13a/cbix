export class CardsPlayscam {
    static get toolbox() {
        return {
            title: 'Playscam Cards',
            icon: '<i class="bx bx-id-card fs-2"></i>',
        };
        
    }

    constructor({ api, data }) {
        this.api = api;
        this.itemsrow = 0;
        
        this.imgMain = 'https://picsum.photos/900/';//'https://cdn.sanity.io/images/dalun7d8/production/407b81aadfbba767b95e679141480240d7798c48-1920x1200.jpg?q=100&quot';
      
        this.containerButton = document.createElement('div');
        this.contanerMain = document.createElement('div');
        this.contanerMain.id = 'contaner-main';

        this.container = document.createElement('strong');
        this.container.className = 'background-container';
        this.container.style.height = '100%';
        this.container.style.minHeight = '50vh';
        this.container.style.width = '100%';
        this.container.style.minWidth = '99%';
        //this.container.style.overflow = 'scroll';
        this.container.style.display = 'block';
        this.container.style.position = 'relative';
        this.container.style.paddingTop = '32px';
        this.container.style.paddingBottom = '32px';
        this.container.style.margin = '0 auto';
        this.container.style.fontWeight = '400';
        this.container.style.backgroundImage = "url('https://camcdn.net/s/images/dalun7d8/production/5d7d17531121d5c414bbcf5d18febbf1c9b4d19a-1900x1200.jpg?q=100')";
        this.container.style.backgroundAttachment = 'fixed';
        this.container.style.backgroundPosition = 'center';
        this.container.style.backgroundRepeat = 'repeat-x';
        this.container.style.backgroundSize = 'cover';


        this.widget_playcams = document.createElement('strong');
        this.widget_playcams.id = 'widget_playcams';
        this.widget_playcams.className = 'bg-opacity-60 mx-auto'; //bg-dark text-white 
        this.widget_playcams.style.maxWidth = '900px';
        this.widget_playcams.style.minHeight = '260px';
        //this.widget_playcams.innerHTML = '<div class="text-white display-2 text-center opacity-50">Cards Playscam</div>';
        
        this.BtnAddWidget = document.createElement('div');
        this.BtnAddWidget.id = 'BtnAddWidget';
        this.BtnAddWidget.className = 'container text-center  mb-2 shadow-lg p-4 rounded-4 d-flex cursor-pointer custom-cursor-on-hover';
        this.BtnAddWidget.style.backdropFilter = 'blur(10px) brightness(70%)';
        this.BtnAddWidget.dataset.bsToggle = 'modal';
        this.BtnAddWidget.dataset.bsTarget = '#modal-cards-playscam';
        this.BtnAddWidget.style.maxWidth = '330px';
        this.BtnAddWidget.innerHTML = '<i class="bx bxs-widget bx-spin fs-1 text-white  mx-4"></i> <strong class="fs-1 m-2"> Insert Widget Here</strong>';

        this.contanerMain.appendChild(this.container);
        this.container.appendChild(this.widget_playcams);         
        this.contanerMain.appendChild(this.BtnAddWidget);
        

        const cards = document.querySelectorAll('.snipcss-PN4eX');
        cards.forEach((card, index) => {
            card.addEventListener('click', () => {
                this.updatewidget_playcams(index);
            });
        });

        if (data && data.containerCard) {
            // Si hay datos guardados, actualizar el contenido
            const decodedHTML = decodeURIComponent(data.containerCard);
            this.widget_playcams.innerHTML = decodedHTML;
        }
    }

    updatewidget_playcams(index) {
        const cardDescription = document.getElementById(`card-description-${index}`);
        if (cardDescription) {
            const newContent = cardDescription.innerHTML;
           // this.widget_playcams.insertBefore(this.createContainer(newContent), this.BtnAddWidget);
            this.widget_playcams.appendChild(this.createContainer(newContent));
            document.querySelector("#modal-cards-playscam > div > div > div.modal-header > button").click();
        }
    }

    createContainer(content) {
        const newContainer = document.createElement('strong');
       // console.log('nuevo strong' +newContainer);
        newContainer.innerHTML = content;
        return newContainer;
    }
    
render() {
    // Devolver el contenido guardado o predeterminado
    const savedHTML = this.data && this.data.containerCard ? this.api.sanitizer.decodeHTML(this.data.containerCard) : '';
    return savedHTML || this.contanerMain;
}


    save() {
        const cleanedHTML = this.widget_playcams.innerHTML.replace(/\n\s*/g, '');
        const encodedHTML = encodeURIComponent(cleanedHTML);
        return {
            containerCard: encodedHTML || null,
        };
    }
}
