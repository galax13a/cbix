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
        this.id = data && data.id ? data.id : Date.now();
        this.imgBackground = data && data.backgroundImageUrl ? data.backgroundImageUrl : 'https://camcdn.net/s/images/dalun7d8/production/5d7d17531121d5c414bbcf5d18febbf1c9b4d19a-1900x1200.jpg?q=100';

        this.containerButton = document.createElement('div');
        this.contanerMain = document.createElement('div');
        this.contanerMain.id = 'contaner-main';
        

        this.container = document.createElement('ul');
        this.container.contentEditable = true;
        this.container.id = this.id;
        this.container.className = 'background-container';
        this.container.style.height = '100%';
        this.container.style.minHeight = '50vh';
        this.container.style.maxWidth = '98%';
        this.container.style.minWidth = '900px';
        this.container.style.display = 'block';
        this.container.style.position = 'relative';
        this.container.style.paddingTop = '32px';
        this.container.style.paddingBottom = '32px';
        this.container.style.margin = '0 auto';
        this.container.style.fontWeight = '400';
        this.container.style.backgroundImage = `url('${this.imgBackground}')`;
        this.container.style.backgroundAttachment = 'fixed';
        this.container.style.backgroundPosition = 'center';
        this.container.style.backgroundRepeat = 'repeat-x';
        this.container.style.backgroundSize = 'cover';

        this.widget_playcams = document.createElement('strong');
        this.widget_playcams.id = 'widget_playcams';
        this.widget_playcams.className = 'bg-opacity-60 mx-auto';
        this.widget_playcams.style.maxWidth = '900px';
        this.widget_playcams.style.minHeight = '260px';

        this.BtnAddWidget = document.createElement('div');
        this.BtnAddWidget.id = 'BtnAddWidget';
        this.BtnAddWidget.className = 'btn btn-new mt-3 p-3';
        this.BtnAddWidget.style.backdropFilter = 'blur(10px) brightness(90%)';
        this.BtnAddWidget.dataset.bsToggle = 'modal';
        this.BtnAddWidget.dataset.bsTarget = '#modal-cards-playscam';
        this.BtnAddWidget.style.maxWidth = '330px';
        this.BtnAddWidget.innerHTML = '<i class="bx bxs-widget bx-spin fs-1 text-white  mx-4"></i> <strong class="fs-1 m-2"> Insert Widget Here</strong>';

        // container botons
        this.containerTools = document.createElement('div');
        this.containerTools.className = 'container text-center';
        this.containerToolsRow = document.createElement('div');
        this.containerToolsRow.className = 'row';
        this.containerToolsCol = document.createElement('div');
        this.containerToolsCol.className = 'col';

        this.changeImageBtn = document.createElement('button');
        this.changeImageBtn.innerHTML = '<i class="bx bx-image fs-1"></i> <strong class="fs-1 m-2 "> Change Image</strong>';
        this.changeImageBtn.className = 'btn btn-new mt-3 p-3';
        this.changeImageBtn.addEventListener('click', () => this.changeBackgroundImage());       
        
        this.contanerMain.appendChild(this.container);
        this.container.appendChild(this.widget_playcams);

        /* tools bottons */
        this.contanerMain.appendChild(this.containerTools);
        this.containerTools.appendChild(this.containerToolsRow);

        this.col_BtnAddWidget = this.returnCol(this.BtnAddWidget); // create col
        this.col_BtnAddImg =  this.returnCol(this.changeImageBtn);
        //this.containerToolsRow.appendChild(this.col_BtnAddWidget);

        this.containerToolsRow.appendChild(this.BtnAddWidget);
        this.containerToolsRow.appendChild(this.col_BtnAddImg);
       // this.containerToolsCol.appendChild(this.changeImageBtn);        

        //this.contanerMain.appendChild(this.BtnAddWidget);               

        this.BtnAddWidget.addEventListener('click', () => {
            this.setWidget();
        });

        if (data && data.containerCard) {
            const decodedHTML = decodeURIComponent(data.containerCard);
            this.widget_playcams.innerHTML = decodedHTML;
        }
    }

    returnCol(element){
        var columna = document.createElement('div');
        columna.className = 'col';
        columna.appendChild(element);
        return columna;
    }

    setWidget() {
        localStorage.setItem('setWidgh', this.id);
    }

    render() {
        return this.contanerMain;
    }

    save() {
        const encodedHTML = encodeURIComponent(this.widget_playcams.innerHTML);    
        return {
            id: this.id,
            backgroundImageUrl: this.imgBackground,
            containerCard: encodedHTML || null,
        };
    
        }
}
