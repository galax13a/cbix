// menu.js
export function MenuStartBio() {
 
    var menuButton = document.getElementById('menuButton');
    var menuList = document.getElementById('menuList');
    var codeItem = document.getElementById('codeItem');
    var copyItem = document.getElementById('copyItem');
    var saveItem = document.getElementById('saveItem');
    var tabsContentContainer = document.getElementById("header-logito-cb");

    var offsetX, offsetY;

    function startDrag(e) {
        e.preventDefault();
        offsetX = e.clientX - menuButton.getBoundingClientRect().left;
        offsetY = e.clientY - menuButton.getBoundingClientRect().top;
        window.addEventListener("mousemove", drag);
        window.addEventListener("mouseup", stopDrag);
    }

    function drag(e) {
        var x = e.clientX - offsetX;
        var y = e.clientY - offsetY;

        // Verificar los límites de la ventana
        x = Math.min(window.innerWidth - menuButton.offsetWidth, Math.max(0, x));
        y = Math.min(window.innerHeight - menuButton.offsetHeight, Math.max(0, y));

        menuButton.style.left = x + "px";
        menuButton.style.top = y + "px";
    }

    function stopDrag() {
        window.removeEventListener("mousemove", drag);
        window.removeEventListener("mouseup", stopDrag);

        // Verificar si el menú se ha movido fuera de la pantalla
        if (parseInt(menuButton.style.left) < 0 ||
            parseInt(menuButton.style.top) < 0 ||
            parseInt(menuButton.style.left) + menuButton.offsetWidth > window.innerWidth ||
            parseInt(menuButton.style.top) + menuButton.offsetHeight > window.innerHeight) {
            // Volver a centrar el menú
            menuButton.style.left = (window.innerWidth - menuButton.offsetWidth) / 2 + "px";
            menuButton.style.top = (window.innerHeight - menuButton.offsetHeight) / 2 + "px";
        }

        localStorage.setItem('cb-menu-playscam-position', JSON.stringify({
            left: menuButton.style.left,
            top: menuButton.style.top
        }));
    }

    var savedPosition = localStorage.getItem('cb-menu-playscam-position');
    if (savedPosition) {
        var parsedPosition = JSON.parse(savedPosition);
        menuButton.style.left = parsedPosition.left;
        menuButton.style.top = parsedPosition.top;
    } else {

        menuButton.style.left = (window.innerWidth - menuButton.offsetWidth) / 4 + "px";
        menuButton.style.top = (window.innerHeight - menuButton.offsetHeight) / 2 + "px";
    }

    menuButton.addEventListener("mousedown", startDrag);

    var menuState = localStorage.getItem('cb-menu-playscam');

    if (menuState === 'block') {
        menuList.style.display = 'block';
    }

    menuButton.addEventListener('click', function () {
        menuList.style.display = (menuList.style.display === 'block') ? 'none' : 'block';
        localStorage.setItem('cb-menu-playscam', menuList.style.display);
    });

    menuList.addEventListener('click', function (event) {
        event.stopPropagation();
    });

    codeItem.addEventListener('click', function () {
        alert('Code clicked');
    });

    copyItem.addEventListener('click', function () {
        alert('Copy clicked');
    });

    saveItem.addEventListener('click', function () {
        alert('Save clicked');
    });

    tabsContentContainer.addEventListener('dblclick', function () {
        menuButton.style.left = (window.innerWidth - menuButton.offsetWidth) / 4 + "px";
        menuButton.style.top = (window.innerHeight - menuButton.offsetHeight) / 2 + "px";

        localStorage.setItem('cb-menu-playscam-position', JSON.stringify({
            left: menuButton.style.left,
            top: menuButton.style.top
        }));
    });
}

export function someOtherFunction() {
    // next
}
