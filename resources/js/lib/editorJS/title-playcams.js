// title-playcams.js

export class TitlePlaycam {
    constructor({ data, api }) {
      this.api = api;
      this.data = { strong: data.strong || '' };
      this.titleElement = null;
      this.titles = [
        'HELLO GUYS!',
        'Welcome to the show!',
        'Join us for an amazing time!',
        'Greetings, dear viewers!'
      ];
      this.contents = [
        'We are glad to see you on our broadcast, we hope you have a good time!',
        'Get ready for an exciting experience with us!',
        'Sit back, relax, and enjoy the show!',
        'Thank you for tuning in, we appreciate your presence!'
      ];
    }
  
    render() {
      this.titleElement = document.createElement('strong');
      this.titleElement.contentEditable = true;
  
      if (this.data.strong) {
        this.titleElement.innerHTML = decodeURIComponent(this.data.strong);//this.data.strong;
      } else {
        const randomIndex = Math.floor(Math.random() * this.titles.length);
        const randomTitle = this.titles[randomIndex];
        const randomContent = this.contents[randomIndex];
  
        this.titleElement.innerHTML = `<strong rel="nofollow" style="display:block;margin-top:25px;margin-bottom:25px;text-align:center;position:relative;width:100%;box-sizing:border-box;line-height:initial;padding:25px 25px 25px 25px;border:3px solid #f63f58;border-radius:25px;background-color:#ffffff" target="_blank">
            <strong rel="nofollow" style="display:flex;flex-direction:column;line-height:initial" target="_blank">
              <strong rel="nofollow" style="display:block;font-family:Impact;color:#c2384b;font-weight:700;text-decoration:none;font-size:48px;font-variant:normal;text-transform:capitalize" target="_blank">${randomTitle}</strong>
              <strong rel="nofollow" style="display:block;line-height:1.5;font-family:Charcoal;font-size:20px;color:#f51f57;font-weight:400;text-decoration:none;margin-top:20px" target="_blank">
                ${randomContent}
              </strong>
            </strong>
          </strong>`;
      }
     //console.log(decodeURIComponent(this.data.strong));
      return this.titleElement;
    }

    save() {
      const cleanedHTML = this.titleElement.innerHTML.replace(/\n\s*/g, '');
      const encodedHTML = encodeURIComponent(cleanedHTML);
      this.data.strong = encodedHTML ;
    
      return this.data;
    }
  
    static get toolbox() {
      return {
        title: 'Title Bio',       
        icon: '<strong style="font-family: Arial, sans-serif;">T</strong>',
      };
    }
}
