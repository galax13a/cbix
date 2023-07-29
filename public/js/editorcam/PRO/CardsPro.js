class CardsPro {
    static get toolbox() {
        return {
            title: 'CardsPro',
            icon: '<i class="fas fa-id-card"></i>',
        };
    }

    constructor() {             
                
    }
    render() {
        const event = new Event('open-card-pro');
        document.dispatchEvent(event);
        return undefined;
    }

    save() {
        // Return an empty object as this block does not store any state
        return {};
    }
}

window.CardsPro = CardsPro;
