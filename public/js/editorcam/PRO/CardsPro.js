class CardsPro {
    static get toolbox() {
        return {
            title: 'CardsPro',
            icon: '◼️',
        };
    }

    constructor() {
        this.offcanvasEl = document.getElementById('offcanvasComponents');
        this.bsOffcanvas = new bootstrap.Offcanvas(this.offcanvasEl);
    }

    showOffcanvas() {
        if (!this.offcanvasEl) {
            throw new Error('Offcanvas element not found');
        }

        const cardLineImage = document.getElementById('cardline1');
        cardLineImage.addEventListener('click', () => {            
               editor.blocks.insert('cardblock', {}, {}, editor.blocks.getBlocksCount(), true);
            this.bsOffcanvas.hide();
        });
        
        const cardImage = document.getElementById('cardimagen1');
        cardImage.addEventListener('click', () => {            
               editor.blocks.insert('cardblockimagen', {}, {}, editor.blocks.getBlocksCount(), true);
            this.bsOffcanvas.hide();
        });

        try {
            // Intenta abrir el offcanvas
            this.bsOffcanvas.show();
            console.log('ready card full');
        } catch (error) {
            // Si algo sale mal, registra el error en la consola
            console.log('Error showing offcanvas:', error);
        }
    }

    render() {
        // Return an empty element as this block has no visible rendering
        this.showOffcanvas();
        return undefined;
    }

    save() {
        // Return an empty object as this block does not store any state
        return {};
    }
}

window.CardsPro = CardsPro;
