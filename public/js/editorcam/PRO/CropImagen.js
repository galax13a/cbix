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
        this.container.className = 'd-flex flex-column align-items-center'; // Bootstrap 5 class

        // Input to load the image
        this.imageInput = document.createElement('input');
        this.imageInput.type = 'file';
        this.imageInput.accept = 'image/*';
        this.imageInput.className = 'mb-2'; // Bootstrap 5 class for margin
        this.imageInput.addEventListener('change', this.handleImageUpload.bind(this));
        this.container.appendChild(this.imageInput);

        // Radio buttons for aspect ratio
        this.aspectHorizontal = this.createRadio('aspect', 'Horizontal', true);
        this.aspectVertical = this.createRadio('aspect', 'Vertical', false);
        this.aspectFree = this.createRadio('aspect', 'Free', false);
        this.container.appendChild(this.aspectHorizontal);
        this.container.appendChild(this.aspectVertical);
        this.container.appendChild(this.aspectFree);

        // Crop Button
        this.cropButton = document.createElement('button');
        this.cropButton.textContent = "Crop";
        this.cropButton.className = 'btn btn-primary mb-2';
        this.cropButton.addEventListener('click', this.cropImage.bind(this));
        this.cropButton.style.display = 'none';
        this.container.appendChild(this.cropButton);

        // Download Button
        this.downloadButton = document.createElement('a');
        this.downloadButton.textContent = "Download 🔽";
        this.downloadButton.style.display = 'none';
        this.downloadButton.className = 'btn btn-secondary mb-2';
        this.downloadButton.addEventListener('click', this.handleDownload.bind(this));
        this.container.appendChild(this.downloadButton);

        // Insert Image Button
        this.insertButton = document.createElement('button');
        this.insertButton.textContent = "Upload Server";
        this.insertButton.className = 'btn btn-cb custom-link mb-2';
        this.insertButton.addEventListener('click', this.insertImage.bind(this));
        this.insertButton.style.display = 'none';
        this.container.appendChild(this.insertButton);

        // Image element for preview
        this.imageElement = document.createElement('img');
        this.imageElement.className = 'img-fluid'; // Bootstrap 5 class for responsive images
        this.container.appendChild(this.imageElement);

         if (this.data.imageUrl) {
        this.imageElement.src = this.data.imageUrl;
    }
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
        label.className = 'mx-1'; // Bootstrap 5 class for margin
        return label;
    }

    updateAspectRatio() {
        if (this.cropper) {
            if (this.aspectHorizontal.querySelector('input').checked) {
                this.cropper.setAspectRatio(16 / 9);
            } else if (this.aspectVertical.querySelector('input').checked) {
                this.cropper.setAspectRatio(9 / 16);
            } else {
                this.cropper.setAspectRatio(NaN); // Free aspect ratio
            }
        }
    }

    handleImageUpload(event) {
        this.cropButton.style.display = 'block';
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                this.imageElement.src = e.target.result;
                if (this.cropper) {
                    this.cropper.destroy();
                }
                this.updateAspectRatio(); // set aspect ratio based on selected radio button
                this.cropper = new Cropper(this.imageElement);
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
            this.insertButton.style.display = 'inline-block';
            this.downloadButton.href = this.imageElement.src;
            this.downloadButton.download = 'cropped-image.png';
        }
    }

    handleDownload() {
        this.imageElement.removeAttribute('src');
        this.imageElement.alt = "Please upload a new image.";
        this.downloadButton.style.display = 'none';
        this.cropButton.style.display = 'none';
        this.insertButton.style.display = 'none';
    }

    notifiter (msg='Ready OK Msg',type='success'){
        let eventDetail = {
            type: type,
            message: msg,
            position: 'center-center',
        };
        let notifyEvent = new CustomEvent('notify', { detail: eventDetail });
        window.dispatchEvent(notifyEvent);        
    }

    insertImage() {
   
    this.loadingElement = document.createElement('div');
    this.loadingElement.textContent = "Uploading...";
    this.container.appendChild(this.loadingElement);
    this.notifiter('Loading Upload...Server','warning');

    let url = this.imageElement.src;

    fetch('/editorjs/uploadcrop', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({ url })
    })
    .then(response => response.json())
    .then(data => {
             
        if (data.success && data.url) {
            this.imageElement.src = data.url;
            this.notifiter('Ready Upload Imagen Crop!! ');
        } else {                  
            this.notifiter('Error uploading image!!','failure');     
        }
        this.insertButton.style.display = 'none';   
        this.loadingElement.style.display = 'none';

    });
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
