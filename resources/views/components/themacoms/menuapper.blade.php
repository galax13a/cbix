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
} 

header.fix_style { 
    position: fixed; 
    top: 0; 
    backdrop-filter: blur(5px); 
    background-color: #ffffffb4; 
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
    color: var(--purple);
} 

.navbar-expand-lg .navbar-nav .has_dropdown:hover > a { 
    color: var(--purple);
} 

.navbar-expand-lg .navbar-nav .has_dropdown .drp_btn  { 
    position: relative; 
    right: 15px;
} 

.navbar-expand-lg .navbar-nav .has_dropdown:hover > a, .navbar-expand-lg .navbar-nav .has_dropdown:hover > .drp_btn { 
    color: var(--purple);
} 

.navbar-expand-lg .navbar-nav .has_dropdown .sub_menu  { 
    position: absolute; 
    top: 100%; 
    background-color: var(--bg-white); 
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
    color: var(--text-white); 
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
    color: var(--purple);
} 

.navbar-expand-lg .navbar-nav .has_dropdown .sub_menu ul li a:hover::before { 
    opacity: 1; 
    left: 0;
}</style>
     <section><header class="fix_style fixed snipcss-6KJKd">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">
        <img src="http://kalanidhithemes.com/live-preview/landing-page/apper/all-demo/01-app-landing-page-defoult/images/logo.png" alt="image">
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
</header></section>
     <script></script>                       
     
</div>