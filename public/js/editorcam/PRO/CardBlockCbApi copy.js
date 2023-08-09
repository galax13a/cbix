class Cardchatur {

        static get toolbox() {
            return {
                title: '<i class="bi bi-bookmark-star-fill"></i> Profile Api Cb',
                icon: '<i class="icon-tiktok"></i>',
                name: "CardBlockcbapi",
            };
        }
    
        static get isInline() {
            return false;
        }
      
        get shortcut() {
           // return 'Control+Shift+I';
        }
      
        constructor({ data, api, config }) {
            this.api = api;
            this.data = data || {};
            this.config = config;
            this.container = document.createElement('div');
            this.urlInput = document.createElement('input');    
            this.loadingElement = document.createElement('div');
            this.loadingImage = document.createElement('img');
            this.loadingImage.src = '/icons/load.gif';
            this.loadingElement.appendChild(this.loadingImage);
            this.loadingElement.style.display = 'none';    
            this.iframeElement = document.createElement('iframe');
    
            this.urlInput.classList.add('input-url-editor');
            this.iframeElement.classList.add('iframe-url-editor');
            this.urlInput.classList.add('input-link-editor');        
            this.cardData = {
                username: this.data.username,
                token_balance: this.data.token_balance,
                num_followers: this.data.num_followers,
                num_viewers: this.data.num_viewers,
                last_broadcast: this.data.last_broadcast,
            };
    
            this.render();
        }
    
        createCol(coly = 'col-12'){
            const col = document.createElement('div');
            col.className = `${coly}`;
            return col;
        }
        createContainer() {
            const container = document.createElement('div');
            container.className = 'container';
            return container;
        }
        createRow() {
            const row = document.createElement('div');
            row.className = 'row';
            return row;
        }
        createP(){//create P Html
            const p = document.createElement('p');
            return p;
        }
        createStrong() {
            const strong = document.createElement('strong');
            return strong;
        }
        createLinkCB() {
            const container = document.createElement('div');
            container.className
            const link = document.createElement('a');
            link.textContent = "Enlace a Chaturbate";
            link.href = "https://chaturbate.com/statsapi/authtoken/";
            link.target = "_blank"; 
           return link;
        }

        render() {    

            this.urlInput.value = this.data.url || '';
            this.urlInput.placeholder = '🔗 Get Api Chaturbate...';
            this.urlInput.addEventListener('blur', this.loadData.bind(this));          
            this.container.appendChild(this.urlInput);
            this.container.appendChild(this.loadingElement); 
            this.urlInput.style.width = '100%';
                       
            if (this.cardData.username) {                
                this.container.insertAdjacentHTML('afterbegin', `
                <div class="card">
                    <div class="card-header rounded-4">
                        <img src="https://roomimg.stream.highwebmedia.com/riw/${this.cardData.username}.jpg"
                            class="profile-image mx-auto"> 
                        <h2><span class="badge bg-dark  shadow-lg rounded-4">${this.cardData.username}</span></h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Token Balance: ${this.cardData.token_balance}</p>
                        <p> Winer </p>
                        <p class="card-text">👆 Votes Up: {{ $profile['votes_up'] }}</p>
                        <p class="card-text">👇Votes Down: {{ $profile['votes_down'] }}</p>
                        <p class="card-text">Satisfaction Score: {{ $profile['satisfaction_score'] }}</p>
                        <p class="card-text">Last Broadcast: ${new Date(this.cardData.last_broadcast).toLocaleString()}</p>
                        <p class="card-text">Number of Followers: ${this.cardData.num_followers}</p>
    
                        <p class="card-text">Time Online: {{ $profile['time_online'] }}</p>
                        <p class="card-text">Number of Viewers: {{ $profile['num_viewers'] }}</p>
                        <p class="card-text">Number of Registered Viewers: {{ $profile['num_registered_viewers'] }}</p>
                        <p class="card-text">Number of Tokened Viewers: {{ $profile['num_tokened_viewers'] }}</p>
                        <a href="${this.data.url}" target="_blank" class="btn btn-primary">Profile Chaturbate</a>
                    </div>
                </div>
                `);
            } else {

             
               
            }
            

            return this.container;
        }
        

        loadData() {
            const url = this.urlInput.value;
        
            const type_loading = "hourglass";
            const seg = 3000;
            dispatchLoadingEvent(type_loading, seg);
        
            fetch('/chatur/profile/api', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ url })
            })
            .then(response => response.json())
            .then(data => {
                this.loadingElement.style.display = 'none';
        
                if(data) {
                    // Crear la tarjeta con los datos obtenidos
                    this.container.innerHTML = `
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">${data.username}</h5>
                                <p class="card-text">Token Balance: ${data.token_balance}</p>
                                <p class="card-text">Followers: ${data.num_followers}</p>
                                <p class="card-text">Number of Viewers: ${data.num_viewers}</p>
                                <p class="card-text">Last Broadcast: ${new Date(data.last_broadcast).toLocaleString()}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    `;
                    this.cardData = data; // Almacenar los datos en cardData cuando se carguen
                } else {
                    let eventDetail = {
                        type: 'failure',  // Notification type
                        message: 'Error Url',  // Notification message                    
                    };                
                    let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
                    window.dispatchEvent(notifyEvent);
                }
            });
        }
        
        save() {
            return {
                url: this.urlInput.value,
                username: this.cardData.username,
                token_balance: this.cardData.token_balance,
                num_followers: this.cardData.num_followers,
                num_viewers: this.cardData.num_viewers,
                last_broadcast: this.cardData.last_broadcast,
            };
        }
        
    }
    
window.Cardchatur = Cardchatur;
