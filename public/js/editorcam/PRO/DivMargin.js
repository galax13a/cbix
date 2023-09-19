class DivMargin {
    static get toolbox() {
        return {
            title: 'Div Margin</div>',
            icon: '📦',
            name: 'DivMargin',
        };
    }

    constructor({ data, api, config }) {
        this.api = api;
        this.data = data || {};
        this.config = config;

        this.container = document.createElement('div');
        this.elementsContainer = document.createElement('div');
        this.elementsContainer.id = 'container-element-divmargin';
        this.elementsContainer.className = 'w-100';

        // Padding selector
        this.paddingSelect = this.createSelect(
            [
                'p-0', 'p-1', 'p-2', 'p-3', 'p-4', 'p-5',
                'pt-0', 'pt-1', 'pt-2', 'pt-3', 'pt-4', 'pt-5',
                'pb-0', 'pb-1', 'pb-2', 'pb-3', 'pb-4', 'pb-5',
                'pl-0', 'pl-1', 'pl-2', 'pl-3', 'pl-4', 'pl-5',
                'pr-0', 'pr-1', 'pr-2', 'pr-3', 'pr-4', 'pr-5',
                'px-0', 'px-1', 'px-2', 'px-3', 'px-4', 'px-5',
                'py-0', 'py-1', 'py-2', 'py-3', 'py-4', 'py-5'
            ],
            'Padding'
        );
        
        this.paddingSelect.addEventListener('change', () => {
            this.previewDiv.className = this.paddingSelect.value + ' ' + this.marginSelect.value;
        });

        // Margin selector
        this.marginSelect = this.createSelect(
            [
                'm-0', 'm-1', 'm-2', 'm-3', 'm-4', 'm-5',
                'mt-0', 'mt-1', 'mt-2', 'mt-3', 'mt-4', 'mt-5',
                'mb-0', 'mb-1', 'mb-2', 'mb-3', 'mb-4', 'mb-5',
                'ml-0', 'ml-1', 'ml-2', 'ml-3', 'ml-4', 'ml-5',
                'mr-0', 'mr-1', 'mr-2', 'mr-3', 'mr-4', 'mr-5',
                'mx-0', 'mx-1', 'mx-2', 'mx-3', 'mx-4', 'mx-5',
                'my-0', 'my-1', 'my-2', 'my-3', 'my-4', 'my-5'
            ],
            'Margin'
        );
        
        this.marginSelect.addEventListener('change', () => {
            this.previewDiv.className = this.paddingSelect.value + ' ' + this.marginSelect.value;
        });

        this.elementsContainer.appendChild(this.paddingSelect);
        this.elementsContainer.appendChild(this.marginSelect);
        // Preview Div
        this.previewDiv = document.createElement('div');
        this.previewDiv.style.height = '50px';
        this.previewDiv.style.width = '100%';
        this.previewDiv.style.backgroundColor = 'lightgrey';

        this.container.appendChild(this.elementsContainer);
        this.container.appendChild(this.previewDiv);

        if (this.data.padding) {
            this.paddingSelect.value = this.data.padding;
        }
        if (this.data.margin) {
            this.marginSelect.value = this.data.margin;
        }

        this.applyStyles();
    }

    createSelect(optionsArray, label) {
        const labelElement = document.createElement('label');
        labelElement.textContent = label;

        const selectElement = document.createElement('select');
        optionsArray.forEach(optionValue => {
            const optionElement = document.createElement('option');
            optionElement.value = optionValue;
            optionElement.textContent = optionValue;
            selectElement.appendChild(optionElement);
        });

        this.elementsContainer.appendChild(labelElement);
        return selectElement;
    }

    applyStyles() {
        this.previewDiv.className = `${this.data.padding || ''} ${this.data.margin || ''}`;
    }

    render() {
        return this.container;
    }

    save() {
        return {
            padding: this.paddingSelect.value,
            margin: this.marginSelect.value
        };
    }
}

window.DivMargin = DivMargin;
