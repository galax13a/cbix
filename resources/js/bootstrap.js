import _ from 'lodash';
window._ = _;

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'
window.bootstrap = bootstrap;

// Import Axios
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Notiflix from 'notiflix';

window.Notiflix = Notiflix;
  // Cambiar el color de fondo en Notiflix.Block
  /*
  Notiflix.Block.init({
    backgroundColor: 'rgba(0, 0, 0, 0.2)', // Color de fondo rojo con 80% de opacidad
    svgSize: '34px', // Cambiar el tamaño del SVG a 24px
});
*/