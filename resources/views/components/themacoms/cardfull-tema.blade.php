<div>             
     <?php  ?>   
     <style>align-items: center;
} 

*,:after,:before { 
    box-sizing: border-box;
} 

*,:before,:after { 
    box-sizing: inherit;
} 

.row > *  { 
    flex-shrink: 0; 
    width: 100%; 
    max-width: 100%; 
    padding-right: calc(var(--bs-gutter-x) * .5); 
    padding-left: calc(var(--bs-gutter-x) * .5); 
    margin-top: var(--bs-gutter-y);
} 

@media (min-width: 992px){ 
  .col-lg-6 { 
    flex: 0 0 auto; 
    width: 50%;
  } 
}     

.pdr100 { 
    padding-right: 100px;
} 

img { 
    vertical-align: middle;
} 

img { 
    height: auto; 
    max-width: 100%;
} 

.animate__zoomIn { 
    -webkit-animation-name: zoomIn; 
    animation-name: zoomIn;
} 

.heading { 
    max-width: 800px; 
    margin: 0 auto 60px;
} 

.heading.mb32 { 
    margin-bottom: 32px;
} 

p { 
    margin-top: 0; 
    margin-bottom: 1rem;
} 

p { 
    margin: 0; 
    padding: 0;
} 

.h3 { 
    margin-top: 0; 
    margin-bottom: .5rem; 
    font-weight: 500; 
    line-height: 1.2;
} 

.h3 { 
    font-size: calc(1.3rem + .6vw);
} 

@media (min-width: 1200px){ 
  .h3 { 
    font-size: 1.75rem;
  } 
}     

.h3 { 
    font-size: 24px; 
    line-height: 1.3; 
    font-weight: 600;
} 

.mt32 { 
    margin-top: 32px;
} 

.color-dark { 
    color: var(--sala-neutral-dark, #111111);
} 

.w500 { 
    font-weight: 500;
} 

.heading .heading-sub  { 
    font-weight: 500; 
    color: var(--sala-neutral-dark, #111111); 
    text-transform: uppercase; 
    letter-spacing: 2px;
} 

.heading .heading-sub.layout-02  { 
    background-color: var(--sala-tone-yellow, #ffdd0f); 
    color: var(--sala-alway-dark, #111111); 
    display: inline-block; 
    padding: 9px 20px; 
    -webkit-border-radius: 20px; 
    -moz-border-radius: 20px; 
    border-radius: 20px; 
    font-size: 14px; 
    line-height: 1.4; 
    font-weight: 600;
} 

h2 { 
    margin-top: 0; 
    margin-bottom: .5rem; 
    font-weight: 500; 
    line-height: 1.2;
} 

h2 { 
    font-size: calc(1.325rem + .9vw);
} 

@media (min-width: 1200px){ 
  h2 { 
    font-size: 2rem;
  } 
}     

h2 { 
    margin: 0; 
    padding: 0;
} 

h2 { 
    font-size: 100%; 
    font-weight: normal; 
    color: var(--sala-primary-dark, #111111); 
    font-family: "Poppins", sans-serif; 
    line-height: 1.3;
} 

h2 { 
    font-size: 32px; 
    line-height: 1.3; 
    font-weight: 600;
} 

.heading .heading-title  { 
    font-size: 32px; 
    line-height: 1.25; 
    font-weight: 600; 
    position: relative; 
    z-index: 0;
} 

.heading .heading-sub + .heading-title  { 
    margin-top: 12px;
} 

.heading .heading-title.size-xl  { 
    font-size: 56px;
} 

.heading .heading-desc  { 
    font-size: 18px; 
    line-height: 1.44; 
    font-weight: 400; 
    margin-top: 12px;
} 

a { 
    color: var(--bs-link-color); 
    text-decoration: underline;
} 

a { 
    text-decoration: none; 
    color: var(--sala-primary-dark, #111111);
} 

.button { 
    height: 46px; 
    border: 1px solid transparent; 
    display: inline-flex; 
    padding: 10px 28px; 
    font-size: 16px; 
    line-height: 1.5; 
    -webkit-border-radius: 4px; 
    -moz-border-radius: 4px; 
    border-radius: 4px; 
    -webkit-transition: all 0.3s; 
    transition: all 0.3s; 
    align-items: center;
} 

.button-wrap .button  { 
    margin-right: 24px;
} 

.button.fullfield { 
    background-color: var(--sala-primary-navy, #0057fc); 
    border-color: var(--sala-primary-navy, #0057fc); 
    color: var(--sala-alway-white, #ffffff);
} 

.button-wrap .button:last-child  { 
    margin-right: 0;
} 

a:hover { 
    color: var(--bs-link-hover-color);
} 

a:hover { 
    color: var(--sala-primary-navy, #0057fc);
} 

.button.fullfield:hover { 
    background-color: var(--sala-tone-blue, #2355d6); 
    border-color: var(--sala-primary-navy, #0057fc);
} 

.heading .heading-title span  { 
    display: inline-block; 
    position: relative; 
    z-index: 1;
} 

.heading .heading-title span.background-04  { 
    position: relative;
} 

.heading .heading-title span.background-04::before { 
    content: ""; 
    position: absolute; 
    top: -35px; 
    left: -40px; 
    right: -40px; 
    bottom: -15px; 
    background-image: url("https://salahtml.uxper.co/sala/assets/images/hst-02.svg"); 
    background-repeat: no-repeat; 
    background-position: center center; 
    background-size: contain; 
    z-index: -1; 
    background-repeat-x: no-repeat; 
    background-repeat-y: no-repeat;
} 

.heading .heading-title span::after, .heading .heading-title a::after { 
    content: ""; 
    position: absolute; 
    bottom: 0; 
    left: 0; 
    width: 100%; 
    height: 4px; 
    background-color: var(--sala-primary-navy, #0057fc); 
    z-index: -1;
} 

.heading .heading-title span.no-underline::after, .heading .heading-title a.no-underline::after { 
    content: ""; 
    display: none;
} 


@keyframes zoomIn { 
  0% {  
      opacity: 0; 
      -webkit-transform: scale3d(0.3, 0.3, 0.3); 
      transform: scale3d(0.3, 0.3, 0.3); 
      opacity: 0; 
      transform: scale3d(0.3, 0.3, 0.3); 
  }  
  50% {  
      opacity: 1; 
      opacity: 1; 
  }  

} 
/* These were inline style tags. Uses id+class to override almost everything */
#style-oFdVG.style-oFdVG {  
   visibility: visible;  
    animation-name: zoomIn;  
}</style>
     <section><div class="row flex-align-c snipcss-P4mYF">
  <div class="col-lg-6">
    <div class="pdr100">
      <div class="heading mb32">
        <div class="heading-sub layout-02">
          Startup
        </div>
        <h2 class="heading-title size-xl">
          The 
          <span class="no-underline background-04">
            template
          </span>
          your startup needed
        </h2>
        <div class="heading-desc">
          Awesome product pages. Mobile friendly. Easy.
        </div>
      </div>
      <div class="button-wrap">
        <a href="contact-01.html" class="button fullfield" title="Les't talk - Send a message">
          Les't talk - Send a message
        </a>
      </div>
      <p class="h3 color-dark w500 mt32">
        Phone. (84) 810-3402
      </p>
    </div>
  </div>
  <div class="col-lg-6">
    <img class="wow animate__zoomIn style-oFdVG" src="https://salahtml.uxper.co/assets/images/hst-01.png" alt="Image" id="style-oFdVG">
  </div>
</div></section>
     <script></script>                       
     
</div>