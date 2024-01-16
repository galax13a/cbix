// CopysPlaycam-playcam.js

export class CopysPlaycam {
    constructor({ data, api }) {
        this.api = api;
        this.data = { strong: data.strong || '' };
        this.rulesElement = null;
        this.num = 7;

        this.bodyrules = document.createElement('div');
        this.container = document.createElement('div');

        this.ruleTitles = [
            'Acknowledge and adhere to the copyright notice!',
            'Respect the copyright rules for a positive interaction!',
            'Follow the guidelines to honor the copyright notice!',
            'Ensure a lawful experience by reading the copyright notice!',
            'Adhere to the copyright rules for a respectful environment!',
            'Responsible enjoyment through compliance with copyright rules!'
        ];
        this.ruleContents = [
            'Respect copyright and do not engage in unauthorized use of content.',
            'Show respect to the content creator and their virtual space.',
            'Avoid engaging in activities that violate platform rules and regulations.',
            'Participate in Cam2Cam sessions exclusively in Private Show mode.',
            'Acknowledge and respect the content creator\'s decisions, especially when they decline requests.',
            'For fellow models, enjoy the space respectfully without self-promotion or advertising.',
            'Ensure a positive atmosphere by contributing and respecting the community guidelines.',
            'Understand and comply with copyright laws; unauthorized use is subject to legal action.'
        ];
    }

    getRandomEmotions() {
        const emotions = [
            "😊", "😂", "😍", "😎", "😜", "😇", "😏", "🤔", "😢", "😠", "😱", "🥳"
        ];

        const randomIndex = Math.floor(Math.random() * emotions.length);
        return emotions[randomIndex];
    }

    render() {

        this.rulesElement = document.createElement('strong');
        this.rulesElement.contentEditable = true;

        if (this.data.strong) {
            this.rulesElement.innerHTML = this.data.strong;
        } else {
            const randomIndex = Math.floor(Math.random() * this.ruleTitles.length);
            const randomTitle = this.ruleTitles[randomIndex];
            const randomContent = this.ruleContents[randomIndex];


            this.rulesElement.innerHTML = `
            <strong  id="card-strong" style="display: block; width: 98%; box-sizing: border-box; line-height: initial;" >
                <strong rel="nofollow" style="display:block;margin-top:25px;margin-bottom:25px;text-align:center;position:relative;
                    width:100%;box-sizing:border-box;line-height:initial;padding:25px 25px 25px 25px;border:3px solid #f63f58;border-radius:25px;
                    background-color:#ffffff" target="_blank" id="content-rules">
                    <strong rel="nofollow" style="display:block;font-family:Impact;color:#c2384b;font-weight:700;text-decoration:none;
                    font-size:48px;font-variant:normal;text-transform:capitalize" target="_blank" id="title-rule">
                    ${this.getRandomEmotions()} ${randomTitle}
                    
                    </strong>
                    <strong id="rulestitle2" rel="nofollow" style="display:block;line-height:1.5;font-family:Charcoal;font-size:20px;color:#f51f57;font-weight:400;
                    text-decoration:none;margin-top:20px" target="_blank">
                        ${randomContent}         
                    </strong>
                    <strong rel="nofollow" style="display:flex;flex-direction:column;margin-top:20px" target="_blank" id="contenido-playcam">            
                    <strong rel="nofollow" style="display:block;line-height:1.5;font-family:Charcoal;font-size:20px;color:#f51f57;font-weight:400;text-decoration:none;margin-top:20px" target="_blank">All content is the copyright of Loossers. Any unauthorized use of their profile, video, pictures, or audio in any form is NOT permissible without their expressed, written consent. Any act to promote or gain profit in any manner (e.g. either monetarily or socially) from the use of their profile, video, pictures, or audio in any form is a violation of their copyright and subject to legal action. By watching their streaming or videos, or viewing their photos, you acknowledge and agree that you shall not post, upload, publish, transmit, or make available in any way the content of this page including images and/or recording streamed live video available for download. This is intended as, and presented as a live, one-time, one-view presentation only. Penalties of Copyright Infringement: By reproducing, republishing or redistributing the work of a copyright holder without permission, you will be violating or infringing the Digital Millennium Copyright Act (DMCA) and international treaty.</strong>       
                
                    <strong rel="nofollow" style="display:block;line-height:1.5;font-family:Charcoal;font-size:20px;color:#f51f57;font-weight:400;
                        text-decoration:none;margin-top:20px" target="_blank">
                        I appreciate your assistance in reporting my content on platforms other than Chaturbate. Please leave me a message with any relevant links so that we can work together to remove unauthorized content. Thank you.
                        <br>
                        <a href="http://playscam.com/report/content">Report Content</a>
                        <a href="https://www.google.com/webmasters/tools/dmca-dashboard">Google DMCA Form</a>
                        <a href="https://www.youtube.com/copyright_complaint_form">YouTube CR</a>
                        <a href="https://www.facebook.com/help/contact/634636770043106">Facebook CR</a>
                        <a href="https://help.twitter.com/forms/dmca">Twitter DMCA</a>
                    </strong>
                </strong>    
                
            </strong>        
                `;
        }

        this.buttonsContainer = document.createElement('div');
        this.buttonsContainer.innerHTML = `
                <div class="btn-group m-3 shadow-lg rounded-4 p-3" role="group" aria-label="btn">
                            <button id="addRuleButton" class="btn-new  ">
                                <i class='bx bxs-message-alt-add fs-3'></i> Add Content
                            </button>
                            <button id="changeColorButton" class="btn-new  ">
                                <i class='bx bxs-paint fs-3'></i> Change Color
                            </button>                           
                            <button id="toggleShadowButton" class="btn-new  ">
                               <i class='bx bxs-sun fs-3'></i> Toggle Shadow
                             </button>
                             <button id="cardImagenButton" class="btn-new ">
                              <i class='bx bx-image fs-3'></i> Card Image
                           </button>
                            <button id="btn-noborder" class="btn-new ">
                               --Border
                            </button>
                            <button id="btn-noborder" class="btn-new ">
                                <label for="customRangePadding" class="form-label">Padding</label>
                                <input type="range" class="form-range" min="1" max="20" id="customRangePadding">
                            </button>
                            <button id="btn-noborder" class="btn-new ">
                                <label for="customRangeMargin" class="form-label">Range Margin</label>
                                <input type="range" class="form-range" min="26" max="98" id="customRangeMargin">
                            </button>                
                          
                </div>
    `;

        this.container.appendChild(this.rulesElement);
        this.container.appendChild(this.buttonsContainer);

        const self = this;
        this.buttonsContainer.querySelector("#addRuleButton").onclick = function () {
            self.addNewRule();
        };

        this.buttonsContainer.querySelector("#changeColorButton").onclick = function () {
            self.changeColors();
        };

        this.buttonsContainer.querySelector("#btn-noborder").onclick = function () {
            self.toggleBorder();
        };

        this.buttonsContainer.querySelector("#toggleShadowButton").onclick = () => {
            this.toggleShadow();
        };

        this.buttonsContainer.querySelector("#cardImagenButton").onclick = function () {
            self.cardImagen();
        };

        this.buttonsContainer.querySelector("#customRangePadding").addEventListener("input", () => {
            self.handleRangePaddingInput();
        });

        this.buttonsContainer.querySelector("#customRangeMargin").addEventListener("input", () => {
            self.handleRangeMarginInput();
        });

        return this.container;
    }

    async handleRangeMarginInput() {
        const rangeInput = this.buttonsContainer.querySelector("#customRangeMargin");
        const paddingPercentage = rangeInput.value + "%";
        const contentElement = this.rulesElement.querySelector("#card-strong");
        contentElement.style.width = paddingPercentage;
    }

    async handleRangePaddingInput() {
        const rangeInput = this.buttonsContainer.querySelector("#customRangePadding");
        const paddingPercentage = rangeInput.value + "%";
        const contentElement = this.rulesElement.querySelector("#content-rules");
        contentElement.style.padding = paddingPercentage;
    }
    
    async cardImagen() {
        const contentElement = this.rulesElement.querySelector("#content-rules");
        const existingBackgroundImageUrl = contentElement.style.backgroundImage.replace('url("', '').replace('")', '');
    

      
        if (existingBackgroundImageUrl && existingBackgroundImageUrl !== 'none') {
            const userChoice = confirm(`Do you want to remove the existing background image?\n\nCurrent Background Image URL:\n${existingBackgroundImageUrl}`);
            
            if (userChoice) {
                // Eliminar la imagen de fondo y los estilos relacionados
                contentElement.style.backgroundImage = 'none';
                contentElement.style.backgroundSize = 'initial';
                // Puedes ajustar otros estilos relacionados con la imagen de fondo aquí
                return;
            }else return false;
        }

        if (existingBackgroundImageUrl==='none') {
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
                // Puedes ajustar otros estilos relacionados con la imagen de fondo aquí
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
    
    

    async getBackgroundsForSearchTerms() {

        const searchTerms = ["nature", "city", "technology", "ocean", "mountain", "space", "animals", "architecture", "food", "travel", "music", "abstract"];

        const apiKey = "g5QeRCqb7WugayETsY0NWbSk5gTIzagZQtRpi7Ql7bpoofhmKyIeJhQ7";
        async function getPexelsBackgroundImage(searchTerm) {
            const endpoint = `https://api.pexels.com/v1/search?query=${searchTerm}&per_page=1`;

            const response = await fetch(endpoint, {
                headers: {
                    Authorization: apiKey,
                },
            });

            const data = await response.json();

            if (data.photos && data.photos.length > 0) {
                const randomIndex = Math.floor(Math.random() * data.photos.length);
                return data.photos[randomIndex].src.original;
            } else {
                console.error(`No se encontraron imágenes para el término de búsqueda: ${searchTerm}`);
                return null;
            }
        }

        const backgroundUrls = await Promise.all(searchTerms.map(async term => {
            return await getPexelsBackgroundImage(term);
        }));
        const randomBackgroundUrl = backgroundUrls[Math.floor(Math.random() * backgroundUrls.length)];
        //console.log("URL img:", randomBackgroundUrl);
        return randomBackgroundUrl;
    }

    customPrompt(titulo, mensaje, backgroundImageUrl = null) {
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



    toggleShadow() {

        const contentElements = this.rulesElement.querySelectorAll("#content-rules, #contenido-playcam");

        if (!contentElements.length) {
            console.error("No se encontraron elementos con el id 'content-rules' o 'contenido-playcam'");
            return;
        }

        const boxShadowValue = contentElements[0].style.boxShadow;

        if (boxShadowValue && boxShadowValue !== 'none') {

            contentElements.forEach(element => {
                const existingStyles = element.getAttribute("style");
                const updatedStyles = existingStyles.replace(/box-shadow[^;]*;?/g, ''); // delete boxShadow
                element.setAttribute("style", updatedStyles);
            });
        } else {
            const primaryColor = this.getRandomColor();
            contentElements.forEach(element => {

                const existingStyles = element.getAttribute("style");
                const updatedStyles = `${existingStyles ? existingStyles + ';' : ''} box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);`;
                element.setAttribute("style", updatedStyles);
            });
        }
    }


    toggleBorder() {
        const contentElements = this.rulesElement.querySelectorAll("#content-rules, #contenido-playcam");
        const contentElement = this.rulesElement.querySelector("#content-rules");


        contentElement.style.padding = '2px';

        if (!contentElements.length) {
            console.error("NO FOUND ID STRONG ");
            return;
        }

        const borderValue = contentElements[0].style.border;

        if (borderValue && borderValue !== 'none') {

            const existingBorderStyle = contentElements[0].style.border;
            contentElements.forEach(element => {
                element.style.border = 'none';
                contentElement.style.padding = "40px";
            });
        } else {

            const primaryColor = this.getRandomColor();
            contentElements.forEach(element => {
                element.style.border = `3px solid ${primaryColor}`;
                element.style.padding = '4px';
                contentElement.style.padding = "40px";

            });
        }
    }


    addNewRule() { /* add content */

        this.num = this.num + 1;
        const rulesContainer = this.rulesElement.querySelector("#contenido-playcam");
        const subircontenido = this.rulesElement.querySelector("#content-rules");
        const newRule = document.createElement('strong');
        newRule.setAttribute("rel", "nofollow");
        newRule.style.display = "flex";
        newRule.innerHTML = `
        <strong rel="nofollow" style="display: flex; flex-direction: column; margin-top: 20px; color: rgb(150, 89, 83); 
            border: 3px dashed rgb(73, 12, 6); padding: 2px; box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 10px; border-radius: 26px;"
            margin-left:3px; margin-right:3px; margin-top:3px; "_blank" id="contenido-playcam">            
            <strong rel="nofollow" style="display: block; line-height: 1.5; font-family: Charcoal; font-size: 20px; color: rgb(235, 48, 180); 
            font-weight: 400; text-decoration: none; margin-top: 20px; margin-bottom:3px; " target="_blank">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nisl felis, ultrices finibus nibh in, sollicitudin laoreet sem. Morbi a maximus diam. Integer elementum, elit in mollis dapibus, leo dui mattis lectus, id gravida magna dui blandit ante. Cras ac egestas magna, vitae efficitur nisi. Ut mi neque, sagittis bibendum ex eu, dignissim gravida tellus. Suspendisse eu purus ac diam tristique tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus ut consectetur lectus, sed interdum sem. Pellentesque quis faucibus justo.
        </strong>      
         `;
        subircontenido.appendChild(newRule);
    }

    changeColors() {
        const primaryColor = this.getRandomColor();
        const lighterColor = this.lightenColor(primaryColor, 30); // 30% lighter


        const titleElement = this.rulesElement.querySelector("#title-rule");
        titleElement.style.color = primaryColor;

        const contentElement = this.rulesElement.querySelector("#content-rules");
        contentElement.style.color = lighterColor;

        const title2 = this.rulesElement.querySelector("#rulestitle2");
        title2.style.color = primaryColor;

        contentElement.style.border = `3px dashed ${primaryColor}`;
        contentElement.style.padding = '2px';

        contentElement.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.5)';
        contentElement.style.borderRadius = '26px';

        const borderglobal = this.rulesElement.querySelector("#content-rules");
        borderglobal.style.border = `3px solid  ${primaryColor}`;

        this.paddingStrong();

        const contentElements = contentElement.querySelectorAll("*");
        contentElements.forEach(element => {
            element.style.color = this.getRandomColor();
        });
    }

    paddingStrong() {
        const contentElement = this.rulesElement.querySelector("#content-rules");
        return contentElement.style.padding = "40px"; // padinng
    }
    getRandomColor() {
        return '#' + Math.floor(Math.random() * 16777215).toString(16);
    }

    lightenColor(color, percent) {
        const num = parseInt(color.slice(1), 16);
        const amt = Math.round(2.55 * percent);
        const R = (num >> 16) + amt;
        const G = (num >> 8 & 0x00FF) + amt;
        const B = (num & 0x0000FF) + amt;
        return `#${(1 << 24 | R << 16 | G << 8 | B).toString(16).slice(1)}`;
    }


    save() {
        return { strong: this.data.strong || this.rulesElement.innerHTML };
    }

    static get toolbox() {
        return {
            title: 'CopyRigth',
            icon: '<strong style="font-family: Arial, sans-serif;">©</strong>',
        };
    }
}
