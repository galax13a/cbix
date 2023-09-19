class CropImagen {
    static get toolbox() {
        return {
            title: 'Crop Image',
            icon: '🖼️'
        };
    }

    constructor({ data, api }) {
        this.api = api;
        this.data = data || {};

        this.container = document.createElement('div');

        // Input para cargar la imagen
        this.imageInput = document.createElement('input');
        this.imageInput.type = 'file';
        this.imageInput.accept = 'image/*';
        this.imageInput.addEventListener('change', this.handleImageUpload.bind(this));
        this.container.appendChild(this.imageInput);

        // Radios para seleccionar aspecto
        this.aspectHorizontal = this.createRadio('aspect', 'Horizontal', true);
        this.aspectVertical = this.createRadio('aspect', 'Vertical', false);
        this.container.appendChild(this.aspectHorizontal);
        this.container.appendChild(this.aspectVertical);

        // Elemento de imagen para previsualización
        this.imageElement = document.createElement('img');
        this.container.appendChild(this.imageElement);

        // Botón Recortar
        this.cropButton = document.createElement('button');
        this.cropButton.textContent = "Crop";
        this.cropButton.addEventListener('click', this.cropImage.bind(this));
        this.container.appendChild(this.cropButton);

        // Botón Descargar
        this.downloadButton = document.createElement('a');
        this.downloadButton.textContent = "Download";
        this.downloadButton.style.display = 'none';  // Ocultar hasta que se recorte la imagen
        this.downloadButton.addEventListener('click', this.handleDownload.bind(this));
        this.container.appendChild(this.downloadButton);
    }

    createRadio(name, value, checked = false) {
        const label = document.createElement('label');
        const radio = document.createElement('input');
        radio.type = 'radio';
        radio.name = name;
        radio.value = value;
        radio.checked = checked;
        radio.addEventListener('change', this.updateAspectRatio.bind(this));
        label.appendChild(radio);
        label.appendChild(document.createTextNode(value));
        return label;
    }

    updateAspectRatio() {
        if (this.cropper) {
            if (this.aspectHorizontal.querySelector('input').checked) {
                this.cropper.setAspectRatio(16 / 9);
            } else {
                this.cropper.setAspectRatio(9 / 16);
            }
        }
    }

    handleImageUpload(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                this.imageElement.src = e.target.result;
                if (this.cropper) {
                    this.cropper.destroy();
                }
                const aspectRatio = this.aspectHorizontal.querySelector('input').checked ? 16 / 9 : 9 / 16;
                this.cropper = new Cropper(this.imageElement, {
                    aspectRatio: aspectRatio
                });
            }
            reader.readAsDataURL(file);
        }
    }

    cropImage() {
        if (this.cropper) {
            const croppedCanvas = this.cropper.getCroppedCanvas();
            if (!croppedCanvas) {
                console.error('Could not get cropped canvas.');
                return;
            }
            this.imageElement.src = croppedCanvas.toDataURL('image/png');
            this.cropper.destroy();
            this.cropButton.style.display = 'none';
            this.downloadButton.style.display = 'inline-block';
            this.downloadButton.href = this.imageElement.src;
            this.downloadButton.download = 'cropped-image.png';
        }
    }

    handleDownload() {
        this.imageElement.removeAttribute('src');
        this.imageElement.alt = "Please upload a new image.";
        this.downloadButton.style.display = 'none';
        this.cropButton.style.display = 'none';
    }

    render() {
        return this.container;
    }

    save() {
        return {
            imageUrl: this.imageElement.src
        };
    }
}

// Assigns the CropImagen class to the global scope
window.CropImagen = CropImagen;
