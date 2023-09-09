class ThemacomponentRender {
    static get toolbox() {
        return {
            title: 'RenderThemaComponent',
            icon: '<i class="bi bi-braces"></i>',
        };
    }

    constructor({ data }) {
        this.data = data || {};

        // Contenedor Principal
        this.container = document.createElement('div');
        this.container.classList.add('themacomponent-container');

        // Textarea para CodexComponent
        this.codexComponent = document.createElement('textarea');
        this.codexComponent.style.width = '100%';
        this.codexComponent.style.display = 'none';
        this.codexComponent.addEventListener('input', this.handleTextareaInput.bind(this));
        this.container.appendChild(this.codexComponent);

        // Input Element
        this.inputElement = document.createElement('input');
        this.inputElement.setAttribute('type', 'text');
        this.inputElement.setAttribute('placeholder', 'Sample Code <x-themacoms.botones-all />');
        this.inputElement.value = this.data.componentName || '';
        this.inputElement.className = 'input-link-editor';
        this.inputElement.style.width = '100%';
        this.inputElement.addEventListener('blur', this.handleBlur.bind(this));
        this.container.appendChild(this.inputElement);

        // Code View
        this.codeView = document.createElement('div');
        this.codeView.classList.add('codexpro-code-view');
        this.codeView.style.display = 'none';
        this.codeView.contentEditable = true;
        this.container.appendChild(this.codeView);
    }

    handleBlur() {
        this.fetchComponentCode(this.inputElement.value);
    }

    async fetchComponentCode(componentName) {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const dataToSend = {
            name: componentName,
            _token: token
        };

        try {
            const response = await fetch('/themas/component/render', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(dataToSend)
            });

            const responseData = await response.json();
            if (responseData.success) {
                this.codexComponent.value = responseData.data;
                this.codexComponent.style.display = 'block';
                this.codeView.innerHTML = responseData.data;
                this.codeView.style.display = 'block';
            } else {
                alert("Error fetching component code.");
            }
        } catch (error) {
            alert("Fetch error: ", error);
        }
    }

    handleTextareaInput() {
        this.codeView.innerHTML = this.codexComponent.value;
    }

    render() {
        return this.container;
    }

    save() {
        return {
            content: this.codexComponent.value
        };
    }
}

window.ThemacomponentRender = ThemacomponentRender;
