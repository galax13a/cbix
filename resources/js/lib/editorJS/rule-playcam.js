// rule-playcam.js

export class RulesPlaycam {
    constructor({ data, api }) {
        this.api = api;
        this.data = { strong: data.strong || '' };
        this.rulesElement = null;
        this.num = 7;

        this.bodyrules = document.createElement('div');
        this.container = document.createElement('div');

        this.ruleTitles = [
            'Please read over my rules and be respectful of them!',
            'Follow the rules to ensure a positive experience!',
            'Respect the guidelines for a pleasant environment!',
            'Rules and guidelines for a great time!',
            'Adhere to these rules for a respectful interaction!',
            'Enjoy responsibly by following these rules!'
        ];
        this.ruleContents = [
            'Don\'t be rude.',
            'Be respectful with me and my room.',
            'No Fisting (this is against Chaturbate rules, please don\'t ask)',
            'Cam2Cam only in Private Show.',
            'No means No. If I turn down a request, then respect my wishes.',
            'If you\'re a model please enjoy my room and my friends, but do so with respect and do not advertise yourself or you will be banned.',
            'The most important thing is to have fun, keep the good vibes strong and contribute however/whenever you can! I appreciate all tips!'
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
           // this.rulesElement.innerHTML = this.data.strong;

            this.rulesElement.innerHTML = decodeURIComponent(this.data.strong);//this.data.strong;
        } else {
            const randomIndex = Math.floor(Math.random() * this.ruleTitles.length);
            const randomTitle = this.ruleTitles[randomIndex];
            const randomContent = this.ruleContents[randomIndex];


            this.rulesElement.innerHTML = `
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
                <strong rel="nofollow" style="display:flex;flex-direction:column;margin-top:20px" target="_blank" id="rules-playscam">            
                
                    <strong rel="nofollow" style="display:flex" target="_blank">
                        <strong rel="nofollow" style="display:block;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">1</strong>
                        <strong rel="nofollow" style="display:flex;flex:1;justify-content:start;align-items:center;justify-items:start;text-align:left;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">Don't be rude.</strong>
                    </strong>
                    <strong rel="nofollow" style="display:flex" target="_blank">
                        <strong rel="nofollow" style="display:block;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">2</strong>
                        <strong rel="nofollow" style="display:flex;flex:1;justify-content:start;align-items:center;justify-items:start;text-align:left;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">Be respectful with me and my room.</strong>
                    </strong>
                    <strong rel="nofollow" style="display:flex" target="_blank">
                        <strong rel="nofollow" style="display:block;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">3</strong>
                        <strong rel="nofollow" style="display:flex;flex:1;justify-content:start;align-items:center;justify-items:start;text-align:left;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">No Fisting (this is against Chaturbate rules, please dont ask)</strong>
                    </strong>
                    <strong rel="nofollow" style="display:flex" target="_blank">
                        <strong rel="nofollow" style="display:block;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">4</strong>
                        <strong rel="nofollow" style="display:flex;flex:1;justify-content:start;align-items:center;justify-items:start;text-align:left;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">Cam2Cam only in Private Show.</strong>
                    </strong>
                    <strong rel="nofollow" style="display:flex" target="_blank">
                        <strong rel="nofollow" style="display:block;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">5</strong>
                        <strong rel="nofollow" style="display:flex;flex:1;justify-content:start;align-items:center;justify-items:start;text-align:left;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">No means No. If I turn down a request, then respect my wishes.</strong>
                    </strong>
                    <strong rel="nofollow" style="display:flex" target="_blank">
                        <strong rel="nofollow" style="display:block;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">6</strong>
                        <strong rel="nofollow" style="display:flex;flex:1;justify-content:start;align-items:center;justify-items:start;text-align:left;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">If you're a model please enjoy my room and my friends, but do so with respect and do not advertise yourself or you will be banned.</strong>
                    </strong>
                    <strong rel="nofollow" style="display:flex" target="_blank">
                        <strong rel="nofollow" style="display:block;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">7</strong>
                        <strong rel="nofollow" style="display:flex;flex:1;justify-content:start;align-items:center;justify-items:start;text-align:left;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">The most important thing is to have fun, keep the good vibes strong and contribute however/whenever you can ! I appreciate all tips!</strong>
                    </strong>
                
                </strong>`;
        }

        this.buttonsContainer = document.createElement('div');
        this.buttonsContainer.innerHTML = `
            <div class="btn-group m-3" role="group" aria-label="btn">
                        <button id="addRuleButton" class="btn-new rounded-2 ">
                            <i class='bx bxs-message-alt-add fs-3'></i> Add Rule
                        </button>
                        <button id="changeColorButton" class="btn-new rounded-2 ">
                            <i class='bx bxs-paint fs-3'></i> Change Color
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

        return this.container;
    }

    save() {
        const cleanedHTML = this.rulesElement.innerHTML.replace(/\n\s*/g, '');
        const encodedHTML = encodeURIComponent(cleanedHTML);
        this.data.strong = encodedHTML;
        return this.data;
      //  return { strong: this.data.strong || this.rulesElement.innerHTML };
    }

    addNewRule() {

        this.num = this.num + 1;
        const rulesContainer = this.rulesElement.querySelector("#rules-playscam");
        const newRule = document.createElement('strong');
        newRule.setAttribute("rel", "nofollow");
        newRule.style.display = "flex";
        newRule.innerHTML = `
            <strong rel="nofollow" style="display:block;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">${this.num}</strong>
            <strong rel="nofollow" style="display:flex;flex:1;justify-content:start;align-items:center;justify-items:start;text-align:left;min-width:80px;margin-right:5px;font-family:Arial;color:#e7577c;font-weight:700;text-decoration:none;font-size:20px;font-variant:small-caps;text-transform:capitalize" target="_blank">New Rule</strong>
        `;
        rulesContainer.appendChild(newRule);
    }

    changeColors() {
        const primaryColor = this.getRandomColor();
        const lighterColor = this.lightenColor(primaryColor, 30); // 30% lighter

        const titleElement = this.rulesElement.querySelector("#title-rule");
        titleElement.style.color = primaryColor;

        const contentElement = this.rulesElement.querySelector("#rules-playscam");
        contentElement.style.color = lighterColor;

        const title2 = this.rulesElement.querySelector("#rulestitle2");
        title2.style.color = primaryColor;

        contentElement.style.border = `3px dashed ${primaryColor}`;
        contentElement.style.padding = '2px';
        contentElement.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.5)';
        contentElement.style.borderRadius = '26px';

        const borderglobal = this.rulesElement.querySelector("#content-rules");
        borderglobal.style.border = `3px solid  ${primaryColor}`;

        const contentElements = contentElement.querySelectorAll("*");
        contentElements.forEach(element => {
            element.style.color = this.getRandomColor();
        });
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

    static get toolbox() {
        return {
            title: 'Rules',
            icon: '<strong style="font-family: Arial, sans-serif;">R</strong>',
        };
    }
}
