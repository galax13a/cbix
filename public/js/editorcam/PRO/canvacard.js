class CanvaCard {
    constructor(offcanvasId) {
        this.offcanvasEl = document.getElementById(offcanvasId);
        if (!this.offcanvasEl) {
            throw new Error('Offcanvas element not found');
        }
        this.bsOffcanvas = new bootstrap.Offcanvas(this.offcanvasEl);
        this.bsOffcanvas.hide();
    }

    showOffcanvas() {
        if (!this.bsOffcanvas) {
            throw new Error('Offcanvas has not been initialized');
        }
        this.bsOffcanvas.show();
    }

    hideOffcanvas() {
        if (!this.bsOffcanvas) {
            throw new Error('Offcanvas has not been initialized');
        }
        this.bsOffcanvas.hide();
    }
}

// Uso del CanvaCard en el ámbito global
window.canvaCard = new CanvaCard('offcanvasComponents');
