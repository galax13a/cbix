<div>             
<?php  ?>   

<style>
.about-img { 
    position: relative;
} 
.counter-gamix{
  font-size: 2em;
}
.about-img:after { 
    position: absolute; 
    content: ''; 
    width: 80px; 
    height: 225px; 
    background: #e50914; 
    left: 11px; 
    top: 50%; 
    -webkit-transform: translateY(-50%); 
    -ms-transform: translateY(-50%); 
    transform: translateY(-50%); 
    z-index: -1;
} 

.col-lg-7 { 
    position: relative; 
    width: 100%; 
    padding-right: 15px; 
    padding-left: 15px;
} 

@media (min-width: 992px){ 
  .col-lg-7 { 
    -ms-flex: 0 0 58.333333%; 
    flex: 0 0 58.333333%; 
    max-width: 58.333333%;
  } 
}     

.heading h3  { 
    font-size: 110px; 
    font-family: bb; 
    color: rgb(18, 94, 94); 
    -webkit-text-stroke-color: #e50914; 
    -webkit-text-fill-color: #FFF; 
    -webkit-text-stroke-width: 1px; 
    text-shadow: 2px 2px 0 #e2076ecb; 
    position: relative; 
    padding-bottom: 8px;
} 

.heading h3::before { 
    position: absolute; 
    content: ''; 
    left: 0; 
    bottom: 0; 
    width: 30px; 
    height: 2px; 
    background: none; 
    border: 3px solid #e50914;
} 

.about-txt-overlay { 
    background: #db2831d0;  
    height: 150px; 
    padding: 7px 0; 
    position: absolute; 
    bottom: 0; 
    right: 16px; 
    text-align: center; 
    z-index: 1;
    border-top-right-radius: 18px;
    max-width: 40%;
} 

.img-fluid { 
    max-width: 100%; 
    height: auto;
} 

.about-img img  { 
    -webkit-clip-path: polygon(0 0, 89% 0, 100% 10%, 100% 100%, 9% 100%, 0 92%); 
    clip-path: polygon(0 0, 89% 0, 100% 10%, 100% 100%, 9% 100%, 0 92%); 
    -webkit-filter: grayscale(100%); 
    filter: grayscale(100%); 
    -webkit-transition: all linear .3s; 
    -o-transition: all linear .3s; 
    transition: all linear .3s;
} 

.about-img:hover img { 
    -webkit-filter: grayscale(0); 
    filter: grayscale(0);
} 

.about-txt { 
    padding-left: 50px;
} 

.about-txt-overlay h3  { 
    font-size: 80px; 
    font-family: bb; 
    color: rgb(58, 55, 55);
} 

.about-txt-overlay span  { 
    font-family: br; 
    color: rgb(107, 90, 90);
} 

.about-txt span  { 
    font-size: 19px; 
    font-family: br; 
    color: #e5091470; 
    text-transform: uppercase; 
    letter-spacing: 6px;
} 

.about-txt h3  { 
    font-size: 38px; 
    font-family: bb; 
    color: rgb(82, 92, 85); 
    text-transform: uppercase; 
    padding: 5px 0 25px; 
    line-height: 52px;
} 
.main-btn { 
    padding: 15px 20px; 
    color: rgb(121, 5, 156); 
    font-size: 18px; 
    font-family: bb; 
    background: #ce1846e1; 
    position: relative; 
    overflow: hidden; 
    -webkit-transition: all linear .3s; 
    -o-transition: all linear .3s; 
    transition: all linear .3s; 
    border-radius: 50px;
} 

.about-txt h3 b  { 
    color: #e50914;
}
</style>
     <section>
  <section id="about" class="snipcss-H1jwW">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 heading text-start">
        <h3>
          About
        </h3>
      </div>
    </div>
    <div class="row about-pt">
      <div class="col-lg-5 col-sm-9 m-sm-auto about-img">
        <div class="about-txt-overlay">
          <h3 class="counter-gamix" >
            9026
          </h3>
          <span class="badge text-bg-dark">Downloads App</span>
        </div>
        <img src="https://epiktheme.com/demos/html/Gamix-Preview/demos/images/about.jpg" alt="about-img" class="img-fluid">
      </div>
      <div class="col-lg-7">
        <div class="about-txt">
          <span>
            GAMIX
          </span>
          <h3>
            A PLACE FOR PROFESSIONAL GAMERS FOR eSPORTS TOURNAMENT WORLDWIDE
            <b>
              .
            </b>
          </h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptatem deserunt ipsam culpa, obcaecati unde quo dignissimos cum ut rem? Fuga commodi, cumque voluptate. Cupiditate.
          </p>
          <p class="mb-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet fugit incidunt rem laboriosam, voluptas, eaque.
          </p>
          <a href="#" class="main-btn custom-link text-white">
            Explore More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>             
     
</div>