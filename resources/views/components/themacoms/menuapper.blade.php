<div>             
     <?php  ?>   
     <style>header { 
    display: block;
} 

header { 
    position: relative; 
    width: 100%; 
    z-index: 99999; 
    transition: .4s all;
    color: #007bff;
} 

header.fix_style { 
    position: fixed; 
    top: 0; 
    backdrop-filter: blur(5px); 
    background-color: #494343b4; 
    padding: 15px 0; 
    transition: none; 
    opacity: 0; 
    pointer-events: none;
} 

header.fixed { 
    pointer-events: all; 
    opacity: 1; 
    transition: .4s all;
} 

*,:after,:before { 
    box-sizing: border-box;
} 

.container { 
    width: 100%; 
    padding-right: 15px; 
    padding-left: 15px; 
    margin-right: auto; 
    margin-left: auto;
} 

@media (min-width: 576px){ 
  .container { 
    max-width: 540px;
  } 
}     

@media (min-width: 768px){ 
  .container { 
    max-width: 720px;
  } 
}     

@media (min-width: 992px){ 
  .container { 
    max-width: 960px;
  } 
}     

@media (min-width: 1200px){ 
  .container { 
    max-width: 1140px;
  } 
}     

@media screen and (min-width: 1200px){ 
  .container { 
    max-width: 1170px;
  } 
}     

nav { 
    display: block;
} 

.navbar { 
    position: relative; 
    display: -ms-flexbox; 
    display: flex; 
    -ms-flex-wrap: wrap; 
    flex-wrap: wrap; 
    -ms-flex-align: center; 
    align-items: center; 
    -ms-flex-pack: justify; 
    justify-content: space-between; 
    padding: .5rem 1rem;
} 

@media (min-width: 992px){ 
  .navbar-expand-lg { 
    -ms-flex-flow: row nowrap; 
    flex-flow: row nowrap; 
    -ms-flex-pack: start; 
    justify-content: flex-start;
  } 
}     

.navbar { 
    padding-left: 0; 
    padding-right: 0; 
    padding-top: 35px;
} 

header.fixed .navbar  { 
    padding: 0;
} 

a { 
    color: #007bff; 
    text-decoration: none; 
    background-color: transparent;
} 

a { 
    text-decoration: none; 
    color: var(--body-text-purple);
} 

.navbar-brand { 
    display: inline-block; 
    padding-top: .3125rem; 
    padding-bottom: .3125rem; 
    margin-right: 1rem; 
    font-size: 1.25rem; 
    line-height: inherit; 
    white-space: nowrap;
} 

.navbar-brand:hover { 
    text-decoration: none;
} 

[type="button"],button { 
    -webkit-appearance: button;
} 

.navbar-toggler { 
    padding: .25rem .75rem; 
    font-size: 1.25rem; 
    line-height: 1; 
    background-color: transparent; 
    border: 1px solid transparent; 
    border-radius: .25rem;
} 

[type="button"]:not(:disabled),button:not(:disabled) { 
    cursor: pointer;
} 

@media (min-width: 992px){ 
  .navbar-expand-lg .navbar-toggler  { 
    display: none;
  } 
}     

.navbar-toggler:hover { 
    text-decoration: none;
} 

.navbar-collapse { 
    -ms-flex-preferred-size: 100%; 
    flex-basis: 100%; 
    -ms-flex-positive: 1; 
    flex-grow: 1; 
    -ms-flex-align: center; 
    align-items: center;
} 

.collapse:not(.show) { 
    display: none;
} 

@media (min-width: 992px){ 
  .navbar-expand-lg .navbar-collapse  { 
    display: -ms-flexbox!important; 
    display: flex!important; 
    -ms-flex-preferred-size: auto; 
    flex-basis: auto;
  } 
}     

img { 
    vertical-align: middle; 
    border-style: none;
} 

.navbar-brand img  { 
    width: 150px;
} 

.navbar-toggler-icon { 
    display: inline-block; 
    width: 1.5em; 
    height: 1.5em; 
    vertical-align: middle; 
    content: ""; 
    background: 50%/100% 100% no-repeat; 
    background-image: initial; 
    background-position-x: 50%; 
    background-position-y: center; 
    background-size: 100% 100%; 
    background-repeat-x: no-repeat; 
    background-repeat-y: no-repeat; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: initial;
} 


.navbar-nav { 
    display: -ms-flexbox; 
    display: flex; 
    -ms-flex-direction: column; 
    flex-direction: column; 
    padding-left: 0; 
    margin-bottom: 0; 
    list-style: none;
} 

.ml-auto { 
    margin-left: auto!important;
} 

@media (min-width: 992px){ 
  .navbar-expand-lg .navbar-nav  { 
    -ms-flex-direction: row; 
    flex-direction: row;
  } 
}     

.navbar-expand-lg .navbar-nav  { 
    align-items: center;
} 

.toggle-wrap { 
    padding: 10px; 
    position: relative; 
    cursor: pointer; 
    -webkit-touch-callout: none; 
    -webkit-user-select: none; 
    -khtml-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
} 


.navbar-expand-lg .navbar-nav .has_dropdown  { 
    display: flex; 
    align-items: center; 
    position: relative; 
    border-radius: 10px 10px 0 0; 
    transition: .4s all;
} 

.navbar-expand-lg .navbar-nav .has_dropdown:hover { 
    background-color: var(--bg-white); 
    box-shadow: 0px 4px 10px #c5c5c580;
} 

.toggle-bar { 
    -webkit-transition: all .2s ease-in-out; 
    -moz-transition: all .2s ease-in-out; 
    -o-transition: all .2s ease-in-out; 
    transition: all .2s ease-in-out;
} 

.toggle-bar { 
    width: 25px; 
    margin: 10px 0; 
    position: relative; 
    border-top: 4px solid var(--body-text-purple); 
    display: block;
} 

.toggle-bar,.toggle-bar:before,.toggle-bar:after,.toggle-bar , .toggle-wrap.active .toggle-bar::before, .toggle-wrap.active .toggle-bar::after { 
    -webkit-transition: all .2s ease-in-out; 
    -moz-transition: all .2s ease-in-out; 
    -o-transition: all .2s ease-in-out; 
    transition: all .2s ease-in-out;
} 

.toggle-bar:before,.toggle-bar:after { 
    content: ""; 
    display: block; 
    background: var(--body-text-purple); 
    height: 4px; 
    width: 30px; 
    position: absolute; 
    top: -12px; 
    right: 0px; 
    -ms-transform: rotate(0deg); 
    -webkit-transform: rotate(0deg); 
    transform: rotate(0deg); 
    -ms-transform-origin: 13%; 
    -webkit-transform-origin: 13%; 
    transform-origin: 13%;
} 

.toggle-bar, .toggle-bar::before, .toggle-bar::after, .toggle-wrap.active .toggle-bar, .toggle-wrap.active .toggle-bar::before, .toggle-wrap.active .toggle-bar::after { 
    -webkit-transition: all .2s ease-in-out; 
    -moz-transition: all .2s ease-in-out; 
    -o-transition: all .2s ease-in-out; 
    transition: all .2s ease-in-out;
} 

.toggle-bar:after { 
    top: 4px;
} 

.nav-link { 
    display: block; 
    padding: .5rem 1rem;
} 

.navbar-nav .nav-link  { 
    padding-right: 0; 
    padding-left: 0;
} 

@media (min-width: 992px){ 
  .navbar-expand-lg .navbar-nav .nav-link  { 
    padding-right: .5rem; 
    padding-left: .5rem;
  } 
}     

.navbar-expand-lg .navbar-nav .nav-link  { 
    padding: 5px 20px; 
    font-weight: 500;
} 

.nav-link:hover { 
    text-decoration: none;
} 

.navbar-expand-lg .navbar-nav .nav-link:hover { 
    color: #000;
} 

.navbar-expand-lg .navbar-nav .has_dropdown:hover > a { 
    color: #000;
} 

.navbar-expand-lg .navbar-nav .has_dropdown .drp_btn  { 
    position: relative; 
    right: 15px;
} 

.navbar-expand-lg .navbar-nav .has_dropdown:hover > a, .navbar-expand-lg .navbar-nav .has_dropdown:hover > .drp_btn { 
    color: #000;
} 

.navbar-expand-lg .navbar-nav .has_dropdown .sub_menu  { 
    position: absolute; 
    top: 100%; 
    background-color: #000; 
    border-radius: 0 10px 10px 10px; 
    min-width: 210px; 
    max-width: 230px; 
    margin-top: -10px; 
    transition: .4s all; 
    opacity: 0; 
    pointer-events: none; 
    box-shadow: 0px 4px 10px #c5c5c580;
} 

.navbar-expand-lg .navbar-nav .has_dropdown:hover .sub_menu { 
    opacity: 1; 
    pointer-events: all; 
    margin-top: -1px;
} 

.navbar-expand-lg .navbar-nav .nav-link.dark_btn  { 
    color: #000; 
    background-color: var(--purple); 
    font-size: 16px; 
    padding: 9px 40px; 
    border-radius: 25px; 
    margin-left: 20px; 
    position: relative;
} 

.navbar-expand-lg .navbar-nav .nav-link.dark_btn::before, .navbar-expand-lg .navbar-nav .nav-link.dark_btn::after { 
    content: ''; 
    position: absolute; 
    top: 0; 
    right: 0; 
    bottom: 0; 
    left: 0; 
    width: 100%; 
    height: 100%; 
    border-radius: 42px; 
    z-index: -1;
} 

.navbar-expand-lg .navbar-nav .nav-link.dark_btn::before { 
    animation: pulse-blue-medium-sm 3.5s infinite;
} 

.navbar-expand-lg .navbar-nav .nav-link.dark_btn::after { 
    animation: pulse-blue-small-sm 3.5s infinite;
} 

[class^="icofont-"] { 
    font-family: IcoFont!important; 
    speak: none; 
    font-style: normal; 
    font-weight: 400; 
    font-variant: normal; 
    text-transform: none; 
    white-space: nowrap; 
    word-wrap: normal; 
    direction: ltr; 
    line-height: 1; 
    -webkit-font-feature-settings: "liga"; 
    -webkit-font-smoothing: antialiased;
} 

.icofont-rounded-down:before { 
    content: "\ea99";
} 


.navbar-expand-lg .navbar-nav .has_dropdown .sub_menu ul  { 
    margin-left: 0; 
    padding: 10px 20px;
} 

.navbar-expand-lg .navbar-nav .has_dropdown .sub_menu ul li a  { 
    font-size: 15px; 
    position: relative; 
    transition: .4s all; 
    line-height: 35px; 
    font-weight: 500;
} 

.navbar-expand-lg .navbar-nav .has_dropdown .sub_menu ul li a::before { 
    content: ""; 
    width: 10px; 
    height: 10px; 
    display: inline-block; 
    border: 2px solid var(--purple); 
    border-radius: 10px; 
    margin-right: 5px; 
    position: absolute; 
    left: -10px; 
    top: 50%; 
    transform: translateY(-50%); 
    opacity: 0; 
    transition: .4s all;
} 

.navbar-expand-lg .navbar-nav .has_dropdown .sub_menu ul li a:hover { 
    padding-left: 15px; 
    color: #000;
} 

.navbar-expand-lg .navbar-nav .has_dropdown .sub_menu ul li a:hover::before { 
    opacity: 1; 
    left: 0;
}</style>
     <section>
      <header class="fix_style fixed snipcss-6KJKd">
  <div class="container">

    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="/">
       <svg xmlns="http://www.w3.org/2000/svg" width="40.000000pt" height="66.000000pt" viewBox="0 0 497.000000 442.000000" preserveAspectRatio="xMidYMid meet"><metadata>Created by potrace 1.16, written by Peter Selinger 2001-2019</metadata><g transform="translate(0.000000,442.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1510 4374 c-95 -9 -223 -46 -317 -92 -88 -42 -149 -87 -234 -171 -205 -203 -314 -491 -307 -816 l2 -130 -39 -60 c-22 -33 -43 -62 -46 -65 -22 -18 -113 -173 -143 -247 -79 -186 -88 -306 -57 -683 12 -140 28 -313 36 -385 8 -71 26 -260 40 -420 14 -159 30 -337 35 -395 6 -58 15 -154 20 -215 5 -60 19 -202 30 -315 12 -113 24 -244 27 -292 l6 -88 88 0 c49 0 89 3 89 8 0 4 -11 115 -25 247 -36 351 -61 622 -90 960 -26 311 -36 418 -81 865 -40 404 -29 511 71 710 45 90 226 366 253 388 10 8 51 12 115 12 159 0 437 38 592 81 230 63 529 217 777 401 l67 49 193 -21 c106 -11 225 -29 263 -40 95 -26 188 -63 192 -77 2 -6 -20 -29 -49 -51 -48 -36 -105 -93 -165 -165 -13 -15 -28 -27 -34 -27 -26 0 -253 -97 -658 -283 l263 -120 -71 23 c-99 31 -249 38 -350 16 -219 -49 -406 -217 -483 -436 l-23 -65 -50 -6 c-127 -16 -201 -106 -201 -244 0 -100 56 -236 114 -280 38 -28 135 -27 194 2 l43 21 17 -27 c70 -109 216 -221 338 -260 80 -25 221 -51 280 -51 22 0 76 9 120 20 251 63 419 238 486 505 18 67 20 101 16 221 l-5 142 66 23 c36 12 154 59 261 104 l195 83 69 -70 c111 -112 244 -198 392 -254 112 -42 326 -51 420 -18 51 18 112 49 141 70 17 13 36 24 41 24 25 0 199 -227 287 -376 64 -107 140 -271 150 -325 13 -68 -85 -233 -198 -335 -155 -139 -387 -254 -604 -299 -94 -20 -262 -19 -338 0 -149 39 -246 105 -411 279 -122 130 -148 144 -197 106 -52 -41 -33 -102 68 -217 261 -297 539 -407 881 -348 264 46 568 197 762 380 44 41 83 75 86 75 8 0 1 -80 -13 -155 -11 -60 -58 -195 -71 -205 -3 -3 -21 -27 -40 -55 -42 -62 -131 -151 -162 -160 -13 -4 -25 -11 -28 -15 -16 -22 -130 -55 -190 -55 -89 1 -210 16 -210 26 0 12 78 11 82 -1 2 -6 19 -7 43 -3 l40 7 -50 7 c-27 4 -104 5 -170 3 -89 -3 -111 -1 -85 6 19 5 46 7 60 5 19 -4 21 -3 10 4 -9 6 -50 8 -102 4 -48 -3 -183 -1 -300 6 -447 24 -671 33 -893 37 -126 2 -237 5 -245 6 -8 1 -37 -1 -65 -5 l-50 -6 40 14 40 14 -62 -5 c-35 -2 -91 -6 -125 -9 -46 -3 -57 -2 -43 5 17 9 16 10 -8 6 -15 -2 -30 1 -34 7 -4 6 19 7 68 3 41 -4 71 -4 67 0 -4 4 -56 8 -115 9 -60 2 -125 6 -145 10 -48 9 -48 3 -7 -147 26 -94 133 -530 179 -725 l12 -53 375 0 375 0 -6 28 c-15 63 -66 442 -66 493 l0 56 49 7 c27 4 172 2 323 -4 150 -6 437 -11 638 -13 403 -2 455 3 586 63 206 93 377 296 435 518 11 42 25 95 31 117 17 65 14 250 -6 340 -52 238 -157 503 -262 665 -40 62 -134 191 -157 215 -11 11 -37 44 -60 73 l-40 53 38 87 c53 121 65 173 65 277 -1 292 -141 525 -390 647 -133 65 -309 83 -465 48 -37 -8 -46 -6 -115 34 -170 99 -308 140 -542 161 -72 7 -84 16 -143 110 -71 115 -310 279 -500 344 -133 45 -331 68 -475 55z m360 -139 c169 -54 328 -156 428 -273 28 -34 52 -67 52 -72 0 -10 -162 -92 -168 -85 -2 2 15 14 37 27 l41 25 -52 49 c-29 28 -69 61 -88 74 -19 13 -37 27 -40 31 -11 14 -233 118 -242 113 -5 -3 -14 -2 -21 4 -45 35 -294 49 -402 23 -79 -19 -165 -53 -159 -62 3 -5 -1 -6 -9 -3 -8 3 -18 1 -22 -5 -3 -6 -15 -11 -27 -11 -13 0 -18 -5 -15 -14 4 -11 1 -13 -10 -9 -12 5 -14 3 -8 -7 5 -8 4 -11 -2 -7 -6 4 -28 -10 -48 -31 l-37 -37 23 43 c49 86 192 187 324 227 111 33 116 34 245 31 93 -3 132 -9 200 -31z m1715 -741 c125 -32 250 -127 303 -228 14 -28 26 -53 25 -56 0 -3 -4 -20 -8 -39 -5 -26 -4 -32 5 -26 7 5 11 4 8 -1 -3 -5 3 -56 13 -114 12 -74 14 -108 7 -117 -7 -9 -7 -13 0 -13 17 0 -14 -92 -53 -159 -57 -97 -140 -155 -267 -187 -162 -42 -338 40 -431 199 -79 134 -74 338 11 475 l31 51 -32 -6 c-18 -3 -40 -10 -50 -15 -9 -5 -22 -6 -27 -3 -6 3 -10 0 -10 -7 0 -10 -2 -10 -9 1 -6 9 -11 10 -15 3 -4 -6 -14 -8 -23 -5 -12 5 -15 2 -10 -9 3 -10 0 -19 -9 -22 -51 -19 47 135 120 190 125 94 278 126 421 88z m-1806 -713 c83 -26 191 -92 236 -143 84 -96 133 -256 120 -387 -24 -223 -167 -383 -377 -422 -215 -40 -430 129 -459 361 -15 125 7 234 69 334 17 27 21 41 13 49 -8 8 -11 7 -11 -3 0 -13 -2 -13 -10 0 -6 10 -25 15 -52 15 -39 0 -43 2 -44 25 -2 30 66 99 129 132 117 60 269 76 386 39z m330 -2148 c151 -24 175 -30 182 -48 9 -21 77 -463 81 -530 l3 -40 -175 0 -174 0 -42 155 c-23 85 -59 227 -79 315 -21 88 -40 166 -43 174 -4 11 3 13 34 8 21 -4 117 -19 213 -34z"/></svg>      
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <div class="toggle-wrap">
            <span class="toggle-bar">
            </span>
          </div>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item has_dropdown">
            <a class="nav-link" href="#">
              Home
            </a>
            <span class="drp_btn">
              <i class="icofont-rounded-down">
              </i>
            </span>
            <div class="sub_menu">
              <ul>
                <li>
                  <a href="index.html">
                    Home Defoult
                  </a>
                </li>
                <li>
                  <a href="../02-app-landing-page-dark-hero/index.html">
                    Home Dark Hero
                  </a>
                </li>
                <li>
                  <a href="../03-app-landing-page-wave-animation/index.html">
                    Home Wave 
                  </a>
                </li>
                <li>
                  <a href="../04-app-landing-page-gredient-color/index.html">
                    Home Gredient
                  </a>
                </li>
                <li>
                  <a href="../05-app-landing-page-video-hero/index.html">
                    Home Video
                  </a>
                </li>
                <li>
                  <a href="../06-app-landing-page-video-hero-full-background/index.html">
                    Home Video 2
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">
              Features
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#how_it_work">
              How it works
            </a>
          </li>
          <li class="nav-item has_dropdown">
            <a class="nav-link" href="#">
              Pages
            </a>
            <span class="drp_btn">
              <i class="icofont-rounded-down">
              </i>
            </span>
            <div class="sub_menu">
              <ul>
                <li>
                  <a href="about.html">
                    About Us
                  </a>
                </li>
                <li>
                  <a href="reviews.html">
                    Reviews
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Contact Us
                  </a>
                </li>
                <li>
                  <a href="faq.html">
                    Faq
                  </a>
                </li>
                <li>
                  <a href="sign-in.html">
                    Sign In
                  </a>
                </li>
                <li>
                  <a href="sign-up.html">
                    Sign Up
                  </a>
                </li>
                <li>
                  <a href="blog-list.html">
                    Blog List
                  </a>
                </li>
                <li>
                  <a href="blog-single.html">
                    Blog Single
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pricing.html">
              Pricing
            </a>
          </li>
          <li class="nav-item has_dropdown">
            <a class="nav-link" href="#">
              Blog
            </a>
            <span class="drp_btn">
              <i class="icofont-rounded-down">
              </i>
            </span>
            <div class="sub_menu">
              <ul>
                <li>
                  <a href="blog-list.html">
                    Blog List
                  </a>
                </li>
                <li>
                  <a href="blog-single.html">
                    Blog Single
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">
              Contact
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link dark_btn" href="contact.html">
              GET STARTED
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
</section>
               
     
</div>