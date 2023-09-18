class SEOTOOLS {
    static get toolbox() {
        return {
            title: 'SEO Tools',
            icon: '<i class="bi bi-bookmark-fill"></i>',
        };
    }

    constructor({ data, api }) {
        this.api = api;
        this.data = data || {};

        this.container = this.createDiv('container');
        this.row = this.createDiv('row');
        this.col = this.createDiv('col-6');
        this.col_edit = this.createDiv('col-12');
        this.colImagen = this.createDiv('col-6','text-center');
        this.imagenSeo = this.createDiv('col-6', 'align-self-center', 'p-4', 'm-3');   
        this.imagenSeo.className = 'text-center';
        this.imagenSeo.id = 'imagen-seo';

        this.titleInput = this.createField('title', 'Meta Title', this.data.title, 'input:input-link-editor');
        this.descriptionInput = this.createField('description', 'Meta Description', this.data.description, 'textarea:codexpro-textarea');
        this.keywordsInput = this.createField('keywords', 'Meta Keywords', this.data.keywords, 'input:input-link-editor');
        this.tagsInput = this.createField('tags', 'Tags (separated by commas)', this.data.tags, 'input:input-link-editor');
        this.imageSrcInput = this.createField('imgSrc', 'Featured Image URL', this.data.imgSrc, 'input:input-link-editor:100%'); // New Image Input
        this.imageAltInput = this.createField('imgAlt', 'Featured Image Alt Text', this.data.imgAlt, 'input:input-link-editor:100%'); // New Alt Text Input
        this.imageSrcInput.addEventListener('blur', this.loadImage.bind(this));
        
        this.tagsInput.classList.add('mb-3');
        this.editButton = this.createButton('SEO Tools 🛠️', this.toggleEditMode.bind(this));
        this.editButton.className = 'btn btn-cb custom-link w-100';
        this.saveButton = this.createButton('Save Seo Tools 🥸', this.toggleViewMode.bind(this));
        this.saveButton.className = 'btn btn-cb custom-link mb-2 w-100';

        this.container.append(this.row);
        this.row.append(this.col_edit);
        this.row.append(this.col);
        this.col_edit.append(this.editButton);
        this.col.append(this.titleInput, this.descriptionInput, this.keywordsInput, this.tagsInput);
        this.row.appendChild(this.colImagen);
        this.loadImage();
        this.colImagen.append(this.imageSrcInput, this.imageAltInput);
        this.colImagen.appendChild(this.imagenSeo);
        this.colImagen.id = 'colImagen';
        this.col.appendChild(this.saveButton);

        this.loadImage(); 
        this.updateVisibility();

    }
    updateVisibility() {
        const toggleDisplay = (element, isEditMode) => {
            if (element) {
                element.style.display = isEditMode ? 'block' : 'none';
            }
            
        };
        toggleDisplay(this.editButton, !this.isEditMode);
        toggleDisplay(this.saveButton, this.isEditMode);
        toggleDisplay(this.titleInput, this.isEditMode);
        toggleDisplay(this.descriptionInput, this.isEditMode);
        toggleDisplay(this.keywordsInput, this.isEditMode);
        toggleDisplay(this.tagsInput, this.isEditMode);
        toggleDisplay(this.imageSrcInput, this.isEditMode);
        toggleDisplay(this.imageAltInput, this.isEditMode);
        this.imagenSrc = this.colImagen.querySelector('img');
        toggleDisplay(this.imagenSrc, this.isEditMode);
        
    }

  loadImage() {
    const imageUrl = this.imageSrcInput.value;
    if (imageUrl) {        
        const existingImage = this.colImagen.querySelector('img');    
        if (existingImage) {         
            existingImage.setAttribute('src', imageUrl);
            existingImage.setAttribute('alt', this.imageAltInput.value);
        } else {    
            const imageElement = document.createElement('img');
            imageElement.setAttribute('src', imageUrl);
            imageElement.setAttribute('alt', this.imageAltInput.value);
            imageElement.classList.add('img-responsive'); 
            imageElement.style.maxWidth = '260px'; 
            imageElement.title = this.imageAltInput.value;        
            this.colImagen.appendChild(imageElement);
        }
    }
}
    
    createDiv(...classNames) {
        const div = document.createElement('div');
        classNames.forEach(className => {
            div.classList.add(className);
        });
        return div;
    }

    createField(name, placeholder, value = '', config) {
        const [type, className, width = '100%'] = config.split(':');
        let element;

        if (type === 'input') {
            element = document.createElement('input');
            element.setAttribute('type', 'text');
            element.style.width = width;
        } else if (type === 'textarea') {
            element = document.createElement('textarea');
        }
        element.setAttribute('name', name);
        element.setAttribute('placeholder', placeholder);
        element.classList.add(className);
        element.value = value;
        return element;
    }

    createButton(text, eventListener) {
        const btn = document.createElement('button');
        btn.classList.add('seotools-button');
        btn.innerHTML = `<strong>${text}</strong>`;
        btn.addEventListener('click', eventListener);
        return btn;
    }

    toggleEditMode() {
        this.isEditMode = true;
        this.updateVisibility();
    }

    toggleViewMode() {
        this.isEditMode = false;
        this.updateVisibility();
    }


    render() {
        return this.container;
    }

    save() {
        return {
            title: this.titleInput.value,
            description: this.descriptionInput.value,
            keywords: this.keywordsInput.value,
            tags: this.tagsInput.value.split(',').map(tag => tag.trim()),
            imgSrc: this.imageSrcInput.value, // Save image URL
            imgAlt: this.imageAltInput.value // Save alt text
        };
    }
}

window.SeoTools = SEOTOOLS;
