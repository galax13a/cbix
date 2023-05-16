//Import Bootstrap File
import './bootstrap';

// Import our custom CSS
import '../sass/app.scss'

// import alpine js
//import 'alpinejs';
window.addEventListener('notify', event => {
    const { type, message } = event.detail;
    Notiflix.Notify[type](message);
});
