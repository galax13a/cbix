class Cardchatur {

    static get toolbox() {
        return {
            title: '<i class="bi bi-bookmark-star-fill"></i> Card Chaturbate',
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
        this.ToolMenu = this.createToolMenu();
        this.urlInput = this.createInput();
        this.urlInput.classList.add('input-link-editor');
        this.butonLink = this.createButtonSubmit('Create Card');

        this.loadingElement = document.createElement('div');
        this.loadingImage = document.createElement('img');
        this.loadingImage.src = '/icons/load.gif';
        this.loadingElement.appendChild(this.loadingImage);
        this.loadingElement.style.display = 'none';
        this.iframeElement = document.createElement('iframe');
        this.iframeElement.classList.add('iframe-url-editor');

        this.cardlistarmodels = null;
        this.dataModels = null;

        this.cardData = {
            username: this.data.username,
            token_balance: this.data.token_balance,
            num_followers: this.data.num_followers,
            num_viewers: this.data.num_viewers,
            last_broadcast: this.data.last_broadcast,
        };

        this.renderConstruct();
    }
    renderConstruct() {

        this.urlInput.value = this.data.url || '';
        this.urlInput.placeholder = '🔗 Your Nick Chaturbate...';
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

    render() {
        const render = this.createDiv('renderBlock', 'container m-2');
        const title_card = this.CreateH('2', null, false);
        title_card.innerHTML = `😼 Business Card, Chaturbate <hr>`;
        const title = this.CreateH('2', null, false);
        title.innerHTML = `<i class="bi bi-badge-wc"></i> Business Cams`;
        const title2 = this.CreateH('2', null, false);
        title2.innerHTML = `<i class="bi bi-badge-wc-fill"></i> More Cards`;
        const title3 = this.CreateH('2', null, false);
        title3.innerHTML = `<i class="bi bi-badge-wc-fill text-warning"></i> Top 10 Chaturbate`;
        title_card.className = 'text-center';
        this.container.appendChild(title_card);
        const contenedor = this.createDiv('contenedRen', 'container');
        const row = this.createRow();
        const col1 = this.createColumn('col-4');
        const col2 = this.createColumn('col-4');
        const col3 = this.createDiv('coly-3', 'col-4');
        const col3containerlista = this.createDiv('col-list-top10-chatur', 'container');

        const toolrender = this.createDiv('tolrender', 'container');

        contenedor.appendChild(row);

        const coly1 = row.appendChild(col1);
        const coly2 = row.appendChild(col2);
        const coly3 = row.appendChild(col3);

        coly1.appendChild(title);
        coly2.appendChild(title2);
        coly3.appendChild(title3);
        const Cardchatur = this.RenderCB();
        const CardSlider = this.RenderSlider();
        const CardListadoTop = this.RenderListModels();

        coly1.innerHTML += Cardchatur + '<br/><hr> ';
        coly2.innerHTML += CardSlider;
        coly3.appendChild(col3containerlista);
        col3containerlista.innerHTML = CardListadoTop;


        this.cardlistarmodels = col3containerlista; // culum3 data


        this.container.appendChild(contenedor);
        return this.container;

    }
    createInput() {
        const input = document.createElement('input');
        return input;
    }

    createToolMenu() {
        const row = this.createRow();
        const Toolmenu = this.createContainer();
        Toolmenu.id = 'toolmenu';
        Toolmenu.className = 'p-2 m-2 shadow rounded-3';
        Toolmenu.appendChild(row);
        return Toolmenu;
    }

    createColumn(coly = 'col-12') {
        const col = document.createElement('div');
        col.className = `${coly}`;
        return col;
    }
    CreateH(hh = 5, title = 'Card Render', editable = false) {
        const h = document.createElement(`h${hh}`);
        h.textContent = title;
        h.contentEditable = editable;
        return h;
    }
    createDiv(id = "divi", clase = null) {
        const div = document.createElement('div');
        div.id = id;
        div.className = `${clase}`;
        return div;
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
    createP() {//create P Html
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
        link.className = 'custom-link text-decoration-none p-1 ';
        link.textContent = "Api.";
        link.href = "https://chaturbate.com/statsapi/authtoken/";
        link.target = "_blank";
        return link;
    }
    RenderCard() {
        if (this.cardData.username) {
            const card = document.createElement('div');
            card.innerHTML = `<p>Enlace a Chaturbate Existo,  ${this.cardData.username} </p>`;
        } else {
            card.innerHTML = `<p>Enlace a Chaturbate Crea Api</p>`;
        }
        return card;
    }

    RenderListModels() {
        const temple = `
        <ol class="list-group list-group-numbered shadow m-1">
 
            <li class="list-group-item d-flex justify-content-between align-items-start ">
            <div class="ms-2 me-auto">
                <div class="">
                    <img src="https://roomimg.stream.highwebmedia.com/ri/livanddrew.jpg" class="img-fluid rounded-3 shadow" alt="livanddrew">
                </div>
            </div>
            <div class="col-md-6">
                <div class="fw-bold">🔺Liv and Drew</div>
                <p class="p-2">
                💡 Topic: Good vibes only! | New videos in bio! |  | -- At Goal: Sex at every goal! [every 1111 tokens] -- The goal will repeat 10 times
                </p>
            </div>
            <span class="badge bg-primary rounded-pill">5636</span>
            </li>
                  
            <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="">
                    <img src="https://roomimg.stream.highwebmedia.com/ri/itwasinsimpsons.jpg" class="img-fluid rounded-3 shadow" alt="itwasinsimpsons">
                </div>
            </div>
                <div class="col-md-6">
                    <div class="fw-bold">🔺Lisa</div>
                    <p class="p-2">
                    💡 Topic: take off bra!!!&lt;3 #18 #lovense #teen #new #brunette [2699 tokens remaining]
                    </p>
                </div>
                <span class="badge bg-primary rounded-pill">5750</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="">
                    <img src="https://roomimg.stream.highwebmedia.com/ri/bella_willis_.jpg" class="img-fluid rounded-3 shadow" alt="bella_willis_">
                </div>
            </div>
            <div class="col-md-6">
                <div class="fw-bold">🔺♡ BELLA ♡DAKOTA♡</div>
                <p class="p-2">
                💡 Topic: GOAL: boob flash [0 tokens remaining] welcome! Let's have a good time today💜 #new #shy #skinny #18 #asian
                </p>
            </div>
            <span class="badge bg-primary rounded-pill">4298</span>
            </li>
                </ol>
            `;

        return temple;
    }

    RenderSlider() {

        const temple = `
        <div id="carrusel_card" class="carousel slide rounded-3" style="height:260px;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/editorcam/imgs/cards/bck/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/editorcam/imgs/cards/bck/9.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/editorcam/imgs/cards/bck/25.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel_card" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carrusel_card" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        `;
        return temple;

    }
    RenderCB(data = null) {
        const temple = `
            <div class="card profile-card-1 shadow mb-4 mt-2 bg-light" id= "card-cb-defa" style="height:360px;">
            <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb"
            alt="profile-sample1" class="background" />
            <img src="https://roomimg.stream.highwebmedia.com/riw/${this.urlInput.value}.jpg" alt="profile-image" class="profile" />
            <div class="card-content mb-4 mt-2">
                <h2>${this.urlInput.value}  </h2>
                <a href="#" class="btn btn-chatur p-1 shadow text-decoration-none text-white"> <strong>Access Content 🔒</strong></a>
                    <div class="icon-block">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"> <i class="fab fa-twitch"></i></a>
                        <a href="#"> <i class="fab fa-discord"></i></a>
                        <a  href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
            </div>
         </div>
     `;
        return temple;

    }
    validateDomain(url) {
        if (!url.includes('chaturbate.com')) {
            let eventDetail = {
                type: 'failure',
                message: 'Failure,  Only Chaturbate.com',
                position: 'center-center',
            };
            let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
            window.dispatchEvent(notifyEvent);
            return false;
        }
        return true;
    }
    
    formatNumberWithDots(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
      }
      

    loadData() {
        const limit = 3;
        const type_loading = "hourglass";
        const seg = 1000;
        dispatchLoadingEvent(type_loading, seg);
        this.loadingElement.style.display = 'block';

        fetch('/chatur/lists/models10', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ limit })
        })
            .then(response => response.json())
            .then(data => {
                this.loadingElement.style.display = 'none';


                if (data && data.results) {
                    const container = document.getElementById('cards-container');
                    let htmlString = '<ol class="list-group list-group-numbered shadow">';
                    this.loadingElement.style.display = 'block';
                    data.results.forEach(result => {
                        htmlString += `
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto" data-iframe="${result.iframe_embed_revshare}">
                                <div class="col-10">
                                    <img src="${result.image_url_360x270}" class="img-fluid img-thumbnail border border-2 rounded-3 shadow img-clickable" alt="${result.username}">
                                    <i class="bi bi-vinyl-fill shadow rounded-circle" title = "Views Guys"></i>
                                    <span class="badge bg-primary rounded-pill shadow-sm">  ${this.formatNumberWithDots(result.num_users)}</span>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fw-bold">🔺${result.display_name || result.username}</div>
                                <p class="p-2">
                                💡 Topic: ${result.room_subject}
                                </p>                                
                            </div>
                      
                         
                        </li>`;
                    });

                    htmlString += '</ol>';
                    this.cardlistarmodels.innerHTML = htmlString; 
                
                    document.querySelectorAll('.img-clickable').forEach(imgElement => {
                        imgElement.addEventListener('click', (e) => {
                            const type_loading = "hourglass";
                            const seg = 2000;
                            dispatchLoadingEvent(type_loading, seg);
                          

                            const iframeContent = e.target.parentElement.parentElement.getAttribute('data-iframe');
                            const iframeContainer = document.getElementById('iframeContainer');
                            const iframeSpinner = document.getElementById('iframeSpinner');
                    
                            iframeContainer.innerHTML = iframeContent;
                            const iframeElement = iframeContainer.querySelector('iframe');
                            iframeElement.addEventListener('load', () => {
                                iframeSpinner.style.display = 'none'; // Ocultar el spinner una vez que el iframe esté cargado
                            });
                    
                            new bootstrap.Modal(document.getElementById('iframeModal')).show();
                        });
                    });

                    this.loadingElement.style.display = 'none';
                    

                } else {
                    let eventDetail = {
                        type: 'failure',
                        message: 'Error Url',
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
