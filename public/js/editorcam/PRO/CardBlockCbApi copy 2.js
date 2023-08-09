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
            this.container.className = 'container p-1 mb-4 mt-2';
            this.ToolMenu  = this.createToolMenu();
            this.urlInput = this.createInput();    
            this.urlInput.classList.add('input-link-editor');     
            this.butonLink = this.createButtonSubmit('Create Profile');

            this.loadingElement = document.createElement('div');
            this.loadingImage = document.createElement('img');
            this.loadingImage.src = '/icons/load.gif';
            this.loadingElement.appendChild(this.loadingImage);
            this.loadingElement.style.display = 'none';    
            this.iframeElement = document.createElement('iframe');

            this.iframeElement.classList.add('iframe-url-editor');
        
            this.cardData = {
                username: this.data.username,
                token_balance: this.data.token_balance,
                num_followers: this.data.num_followers,
                num_viewers: this.data.num_viewers,
                last_broadcast: this.data.last_broadcast,
            };
    
            //this.render();
        }
        
        render() {    

            this.urlInput.value = this.data.url || '';
            this.urlInput.placeholder = '🔗 Get Api Chaturbate...';            
            this.container.appendChild(this.ToolMenu);  
            const row = this.ToolMenu.querySelector("#row-container");
            const column = this.createColumn('col-12');         
            const linkcb = this.createLinkCB(); 
            row.appendChild(column);         
            column.appendChild(this.urlInput);
            column.appendChild(this.butonLink);             
            column.appendChild(linkcb);
            this.container.appendChild(this.loadingElement); 
            this.urlInput.style.width = '70%';
            return this.container;

    }
        createInput() {
            const input = document.createElement('input');           
            return input;
        }

        createToolMenu(){
            const row = this.createRow();            
            const Toolmenu = this.createContainer();
            Toolmenu.id = 'toolmenu';
            Toolmenu.className = 'p-2 m-2 shadow rounded-3';
            Toolmenu.appendChild(row);           
            return Toolmenu;
        }
    
        createColumn(coly = 'col-12'){
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
            row.id = 'row-container';
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
        createButtonSubmit(text = "Submit") {
            const button = document.createElement('a');
            button.className = 'btn btn-chatur shadow p-1 m-1 text-decoration-none';
            button.textContent = text;
            button.addEventListener('click', this.loadData.bind(this));             
            return button;
        }
        
        createLinkCB() {
            const container = document.createElement('div');
            container.className
            const link = document.createElement('a');
            link.className = 'custom-link text-decoration-none p-1';
            link.textContent = "Api.";
            link.href = "https://chaturbate.com/statsapi/authtoken/";
            link.target = "_blank"; 
           return link;
        }
        RenderCard(){
            if (this.cardData.username) {    
            const card  = document.createElement('div');
            card.innerHTML = `<p>Enlace a Chaturbate Existo,  ${this.cardData.username} </p>`;
            }else { 
                card.innerHTML = `<p>Enlace a Chaturbate Crea Api</p>`;
            }
            return card;
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
