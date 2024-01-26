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
        this.BtnAddWidget.className = 'btn btn-new';
        this.BtnAddWidget.style.backdropFilter = 'blur(10px) brightness(90%)';
        this.BtnAddWidget.dataset.bsToggle = 'modal';
        this.BtnAddWidget.dataset.bsTarget = '#modal-cards-playscam';
        this.BtnAddWidget.style.maxWidth = '330px';
        this.BtnAddWidget.innerHTML = '<i class="bx bxs-widget bx-spin fs-1 text-white  mx-4"></i> <strong class="fs-1 m-2"> Insert Widget Here</strong>';

        // container botons
        this.containerTools = document.createElement('div');
        this.containerTools.className = 'container text-center shadow-sm rounded-3 m-3';
        this.containerTools.style.minHeight = '60px';
        
        this.containerToolsRow = document.createElement('div');
        this.containerToolsRow.className = 'row';
        this.containerToolsCol = document.createElement('div');
        this.containerToolsCol.className = 'col';

        /* botton add imagen */
        this.changeImageBtn = document.createElement('button');
        this.changeImageBtn.innerHTML = '<i class="bx bx-image fs-1"></i> <strong class="fs-1 m-2 "> Change Image</strong>';
        this.changeImageBtn.className = 'btn btn-new';
        this.changeImageBtn.addEventListener('click', () => this.changeBackgroundImage()); 
        // end btn img
        
        this.contanerMain.appendChild(this.container); // main & container
        this.container.appendChild(this.widget_playcams); // container widplaycams

        /* tools bottons */
        this.contanerMain.appendChild(this.containerTools); // add tools bottons div
        this.containerTools.appendChild(this.containerToolsRow); // add row tools buttons

        this.col_BtnAddWidget = this.returnCol(this.BtnAddWidget); // create col
        this.col_BtnAddImg =  this.returnCol(this.changeImageBtn);  // create btn add img
      
        /* botton add imagen */
        this.Tools_Buttons_Widget = document.createElement('button');
        this.Tools_Buttons_Widget.innerHTML = `<i class='bx bxs-customize fs-1'></i><strong class="fs-1 m-2 "> Tools Rows Widget</strong>`;
        this.Tools_Buttons_Widget.className = 'btn btn-new';
        this.Tools_Buttons_Widget.addEventListener('click', () => this.changeTools_Buttons_Widget()); 
        // end btn img

        /* botton full ul */
        this.Tools_BtnFull_Widget = document.createElement('button');
        this.Tools_BtnFull_Widget.innerHTML = `<i class='bx bx-fullscreen fs-1'></i><strong class="fs-1 m-2 ">Full Bio</strong>`;
        this.Tools_BtnFull_Widget.className = 'btn btn-new';
        this.Tools_BtnFull_Widget.addEventListener('click', () => this.changeTools_Tools_BtnFull_Widget()); 
        // end btn full ul        

        this.col_BtnAddWidget = this.returnCol(this.BtnAddWidget); // create col
        this.col_BtnAddImg =  this.returnCol(this.changeImageBtn);  // create btn add img
        this.col_BtnWidgets =  this.returnCol(this.Tools_Buttons_Widget);  // create btn add col_BtnWidgets
        this.col_BtnFull_Widget =  this.returnCol(this.Tools_BtnFull_Widget);  // create btn add col_btn Full

        this.containerToolsRow.appendChild(this.BtnAddWidget); 
        this.containerToolsRow.appendChild(this.col_BtnAddImg);   
        this.containerToolsRow.appendChild(this.col_BtnFull_Widget);
        this.containerToolsRow.appendChild(this.col_BtnWidgets);  
          

        this.BtnAddWidget.addEventListener('click', () => {
            this.setWidget();
        });

        if (data && data.containerCard) {
            const decodedHTML = decodeURIComponent(data.containerCard);
            this.widget_playcams.innerHTML = decodedHTML;
        }
    }

    async changeTools_Tools_BtnFull_Widget(){
        console.log("changeTools_Tools_BtnFull_Widget");
    }

    changeTools_Buttons_Widget(){
        console.log('changeTools_Buttons_Widget');
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

    async changeBackgroundImage() {        
            // Example: contentElement.style.backgroundImage = 'url("your_new_image_url.jpg")';
            const contentElement = this.container;
            const existingBackgroundImageUrl = contentElement.style.backgroundImage.replace('url("', '').replace('")', '');
    
            
            if (existingBackgroundImageUrl && existingBackgroundImageUrl !== 'none') {
                const userChoice = confirm(`Do you want to remove the existing background image?\n\nCurrent Background Image`);
    
                if (userChoice) {
                    contentElement.style.backgroundImage = 'none';
                    contentElement.style.backgroundSize = 'initial';
                    return;
                } else return false;
            }
    
            if (existingBackgroundImageUrl === 'none') {
                //    return false;
            }
    
            const backgroundImageUrl = existingBackgroundImageUrl || await this.getBackgroundsForSearchTerms();
            const defaultBackgroundImageUrl = 'https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg';
    
            const imageUrl = await this.customPrompt('Image URL', 'Enter the URL of the image:', backgroundImageUrl || defaultBackgroundImageUrl);
    
            if (imageUrl) {
                const isImage = /\.(jpg|jpeg|png|gif|bmp)$/.test(imageUrl.toLowerCase());
    
                if (isImage) {
                    contentElement.style.backgroundImage = `url(${imageUrl})`;
                    contentElement.style.backgroundSize = 'cover';
                } else {
                    window.Notiflix.Notify.failure('Invalid image URL. Please enter a valid image URL.', {
                        position: 'center-center',
                    });
                    contentElement.style.backgroundImage = 'none';
                }
            } else {
                contentElement.style.backgroundImage = 'none';
            }
        }    

    async customPrompt(titulo, mensaje, backgroundImageUrl = null) {
            return new Promise((resolve) => {
                const linkText = backgroundImageUrl ? backgroundImageUrl : '👻 Link here!';
    
                window.Notiflix.Confirm.prompt(
                    titulo,
                    mensaje,
                    linkText,
                    'Ok',
                    'Cancel',
                    async (clientAnswer) => {
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
}
