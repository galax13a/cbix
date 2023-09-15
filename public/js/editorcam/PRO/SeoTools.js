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
        this.colImagen = this.createDiv('col-6');
        this.imagenSeo = this.createDiv('col', 'align-self-center', 'p-4', 'm-3');
        this.imagenSeo.innerHTML = `
        <a wire:key='temamenuen' href="javascript:void(0)" wire:click="toggleLanguage('es')"
        class="list-group-item list-group-item-action {{ $this->currentLanguage === 'en' ? 'bg-light' : 'munuselect' }}">Spanish</a>  
`;


        this.titleInput = this.createField('title', 'Meta Title', this.data.title, 'input:input-link-editor');
        this.descriptionInput = this.createField('description', 'Meta Description', this.data.description, 'textarea:codexpro-textarea');
        this.keywordsInput = this.createField('keywords', 'Meta Keywords', this.data.keywords, 'input:input-link-editor');
        this.tagsInput = this.createField('tags', 'Tags (separated by commas)', this.data.tags, 'input:input-link-editor');
        this.imageSrcInput = this.createField('imgSrc', 'Featured Image URL', this.data.imgSrc, 'input:input-link-editor:100%'); // New Image Input
        this.imageAltInput = this.createField('imgAlt', 'Featured Image Alt Text', this.data.imgAlt, 'input:input-link-editor:100%'); // New Alt Text Input

        this.tagsInput.classList.add('mb-3');
        this.editButton = this.createButton('SEO Tools 🛠️', this.toggleEditMode.bind(this));
        this.editButton.className = 'btn btn-cb custom-link w-100';
        this.saveButton = this.createButton('Save Seo Tools 🥸', this.toggleViewMode.bind(this));
        this.saveButton.className = 'btn btn-cb custom-link mb-2 w-100';
        this.updateVisibility();

        this.container.append(this.row);
        this.row.append(this.col);

        this.col.append(this.editButton, this.titleInput, this.descriptionInput, this.keywordsInput, this.tagsInput);
        this.row.appendChild(this.colImagen);
        this.colImagen.append(this.imageSrcInput, this.imageAltInput, this.saveButton);
        this.colImagen.appendChild(this.imagenSeo);
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

    updateVisibility() {
        const toggleDisplay = (element, isEditMode) => {
            element.style.display = isEditMode ? 'block' : 'none';
        };
        toggleDisplay(this.titleInput, this.isEditMode);
        toggleDisplay(this.descriptionInput, this.isEditMode);
        toggleDisplay(this.keywordsInput, this.isEditMode);
        toggleDisplay(this.tagsInput, this.isEditMode);
        toggleDisplay(this.imageSrcInput, this.isEditMode); // Show/hide image input
        toggleDisplay(this.imageAltInput, this.isEditMode); // Show/hide alt text input
        toggleDisplay(this.editButton, !this.isEditMode);
        toggleDisplay(this.saveButton, this.isEditMode);
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
