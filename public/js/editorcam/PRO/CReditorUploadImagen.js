class CReditorUploadImagen {
    static get toolbox() {
        return {
            title: 'CR-Upload Image',
            icon: '<i class="bi bi-file-image"></i>'
        };
    }

    constructor({ data, api }) {
        this.api = api;
        this.data = data || {};

        this.container = document.createElement('div');
        this.container.className = 'd-flex flex-column align-items-center';

        // Input to load the image
        this.imageInput = document.createElement('input');
        this.imageInput.type = 'file';
        this.imageInput.accept = 'image/*';
        this.imageInput.className = 'mb-2';
        this.imageInput.addEventListener('change', this.handleImageUpload.bind(this));
        this.container.appendChild(this.imageInput);

        // Dropdown for dimensions
        this.dimensionDropdown = document.createElement('select');
        const dimensionsData = {
            'Mini 260': '260x260',
            'Mobile 320x568': '320x568',
            'Mobile HD 480x854': '480x854',
            'Tablet 768x1024': '768x1024',
            'HD 1024x768': '1024x768',
            'Tablet HD 1536x2048': '1536x2048',
            'Laptop 1366x768': '1366x768',
            'Laptop HD 1600x900': '1600x900',
            'PC 1920x1080': '1920x1080',
            'XL 2560x1440': '2560x1440',
            'XXL 3840x2160': '3840x2160',
            '4K UHD 3840x2160': '3840x2160',
            '8K UHD 7680x4320': '7680x4320'
        };
        
        console.log(dimensionsData);
        

        for (const [dim, dimensionValue] of Object.entries(dimensionsData)) {
            let option = document.createElement('option');
            option.value = dimensionValue;
            option.textContent = dim;
            this.dimensionDropdown.appendChild(option);
        }
        
        // Adding Custom option
        let customOption = document.createElement('option');
        customOption.value = 'Custom';
        customOption.textContent = 'Custom';
        this.dimensionDropdown.appendChild(customOption);
        this.dimensionDropdown.addEventListener('change', this.handleDimensionChange.bind(this));
        this.container.appendChild(this.dimensionDropdown);

        // Inputs for custom dimensions
        this.customWidthInput = document.createElement('input');
        this.customWidthInput.type = 'number';
        this.customWidthInput.placeholder = 'Width';
        this.customWidthInput.style.display = 'none';
        this.container.appendChild(this.customWidthInput);

        this.customHeightInput = document.createElement('input');
        this.customHeightInput.type = 'number';
        this.customHeightInput.placeholder = 'Height';
        this.customHeightInput.style.display = 'none';
        this.container.appendChild(this.customHeightInput);

        // Upload Button
        this.uploadButton = document.createElement('button');
        this.uploadButton.textContent = "Upload to Server";
        this.uploadButton.className = 'btn btn-cb custom-link mb-2';
        this.uploadButton.addEventListener('click', this.uploadToServer.bind(this));
        this.container.appendChild(this.uploadButton);

        // Image preview
        this.imageElement = document.createElement('img');
        this.imageElement.className = 'img-fluid';
        this.container.appendChild(this.imageElement);

        if (this.data.imageUrl) {
            this.imageElement.src = this.data.imageUrl;
        }
        this.imageUrlInput = document.createElement('input');
        this.imageUrlInput.type = 'text';
        this.imageUrlInput.className = 'form-control mb-2';
        this.imageUrlInput.placeholder = 'Image URL';
        this.imageUrlInput.addEventListener('blur', this.handleImageUrlChange.bind(this));
        this.container.appendChild(this.imageUrlInput);

        if (data && data.imageUrl) {
            this.imageUrlInput.value = data.imageUrl;
        }
        // Button to copy URL
        this.copyUrlButton = document.createElement('button');
        this.copyUrlButton.textContent = "Copy URL";
        this.copyUrlButton.className = 'btn btn-cb custom-link mb-2';
        this.copyUrlButton.addEventListener('click', this.copyImageUrl.bind(this));
        this.container.appendChild(this.copyUrlButton);
    }
    handleImageUrlChange() {
        this.imageElement.src = this.imageUrlInput.value;
    }

    copyImageUrl() {
        this.imageUrlInput.select();
        document.execCommand('copy');
        this.notifiter('URL copied to clipboard');
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

    handleImageUpload(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                this.imageElement.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }

    handleDimensionChange(event) {
        if (event.target.value === 'Custom') {
            this.customWidthInput.style.display = 'inline-block';
            this.customHeightInput.style.display = 'inline-block';
        } else {
            this.customWidthInput.style.display = 'none';
            this.customHeightInput.style.display = 'none';
        }
    }

    uploadToServer() {
        let url = this.imageElement.src;
        let dimension = this.dimensionDropdown.value;
        if (dimension === 'Custom') {
            dimension = `${this.customWidthInput.value}x${this.customHeightInput.value}`;
        }
       
        fetch('/editorjs/creditoruploadimagen', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ url, dimension })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success && data.url) {
                this.imageElement.src = data.url;
                this.notifiter('Ready Upload Imagen 😎 Px : ' + data.resize);
                console.log(data);
            } else {                  
                this.notifiter('Error uploading image !!','failure');   
                console.log(data);
            }
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

window.CReditorUploadImagen = CReditorUploadImagen;
