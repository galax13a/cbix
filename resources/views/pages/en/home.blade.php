    @extends('layouts.tema.app')
    @section('title', __('Home Donwload AppStudio'))
    @push('scripts-head')
        {{-- <link href="{{ asset('cs/home.css') }}" rel="stylesheet"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @endpush
    @push('scripts-body')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    @endpush

    @section('content')
        <x-themacoms.navbar-flex />           
        <<x-themacoms.btnup/>
        <div class="container-fluid">                           

            <div class="row mt-5">
                <div class="container text-center">
                    <div class="row align-items-start">
                      <div class="col">                   
                      </div>
                      <div class="col">             
                      </div>
                      <div class="col mt-2">
                        <div class="animate-gh mt-5">
                            <img  src="{{asset('temas/home/ghost.png')}}" title="play game" alt="Ghost" class="ghost-image punter">
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-md-6 col-xl-6 px-5">

                    <div class="mt-1" id="home">                       
                        <h3>
                           Get BotCamStudio&nbsp;&nbsp;  By Using Botchatur&nbsp;Apps                           
                        </h3>
                        <h1>COOL <strong class="marketery2" style="--highlight-color: #86ff3fcc;">CamEditor</strong> Nice
                        </h1>
                        <p class="wow fadeInUp style-1ceoc" data-wow-delay=".4s" data-wow-duration="1500ms"
                            id="style-1ceoc">At Botchatur Studio, we believe that every professional has a unique
                            story to tell. Whether you are a recent graduate looking to stand out in the job market,
                            an expert in your field looking to update your image, or an artist looking to capture
                            the essence of your work, we are here to help you present yourself in the best way
                            possible.  <mark>lime minty black beanwraps</mark>
                        </p>
                       
                        <div class="hero__btn btns mt-5">                        

                            <span class="mb-4" id="style-OlaZr">
                                <span> # No</span>Trending Apps On Play Store - Usa | Europe | Canada</span>
                            <h3 class="text-end">
                               Get BotCamStudio&nbsp;&nbsp;  By Using Botchatur&nbsp;Apps                           
                            </h3>
                            <h1 class="text-end">COOL <strong class="marketery2" style="--highlight-color: #9c2abeb6;">AutoTyper</strong> Nice
                            </h1>
                            <p class="wow fadeInUp style-1ceoc" data-wow-delay=".4s" data-wow-duration="1500ms"
                                id="style-1ceoc">At Botchatur Studio, we believe that every professional has a unique
                                story to tell. Whether you are a recent graduate looking to stand out in the job market,
                                an expert in your field looking to update your image, or an artist looking to capture
                                the essence of your work, we are here to help you present yourself in the best way
                                possible.  <mark>lime minty black beanwraps</mark>
                              
                            </p>

                                    <div class="text-end">
                                        <x-themacoms.btn-hover-3/>
                                    </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <img decoding="async" src="{{ asset('temas/home/img_01.png') }}" alt="App Botchatur">
                    <div class="animate-gh text-end">
                        <img  src="{{asset('temas/home/ghost.png')}}" title="play game" alt="Ghost" class="ghost-image punter">
                    </div>
                </div>
                <div class="col-md-6 col-xl-2 mt-3">
                    <div class=""  id="style-Z56Nr"> <img decoding="async"
                           src="{{ asset('temas/home/img-w.png') }}" alt="">
                    </div>
                    <div class="hero__top-selling-app wow fadeInRight style-2Ylfc" data-wow-delay=".4s"
                        data-wow-duration="1500ms" id="style-2Ylfc">
                        <h3>
                            5.00
                        </h3>
                        <span>
                            Top selling Apps
                        </span>
                    </div>
                    <p>
                            Top selling Apps
                            privacies & Terms Support
                            Strong Encryption System
                            First Youtube videos Uploaded
                            8 3 8 5
                            K+
                           <span class="badge badge-dark p-1">  Active Install Apps </span>
                        </p>
                        <div class="animate-gh mt-5">
                            <img title="Get Credits Free"  src="{{asset('temas/home/ghost.png')}}" alt="Ghost free tokens" class="ghost-image punter">
                        </div>
                </div>
            </div>


            <section class="section gray-bg mb-3" id="download" >
                <div class="container--fluid mx-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="section-title" id="apps">
                                <h2>Apps Downloads</h2>
                                <div class="col-12 text-center"><h2 class="display-2">App BotStudio</h2></div>
                                <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">04 FEB</div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/350x280/FFB6C1/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">04 FEB</div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/350x280/87CEFA/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">04 FEB</div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/350x280/FF7F50/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

          <div class="container" id="bios">
                <div class="row justify-content-md-between justify-content-xxl-center text-md-start">
                    <div class="col-12 text-center"><h1 class="display-2">Create Bios Chatur</h1></div>
                  <div class="mb-4 mb-lg-0 col-md-8 col-lg-7 col-xxl-5">
             
                    <h2 class="display-5 aos-init aos-animate" data-aos="fade-down" data-aos-delay="0">
                      Let’s do it together. We could create anything.
                    </h2>
                    <a class="btn btn-cb shadow text-decoration-none" href="#" contenteditable="true">Go Link</a>
                  </div>
                  <img src="https://designmodo.com/startup/app/i/feature-6.png" id="js-get-smile" class="visually-hidden" style="opacity: 0.01;">
                  <div class="d-none d-xxl-block col-xxl-1">
                  </div>
                  <div class="mb-md-15 mb-8 col-md-8 col-lg-5 col-xxl-4">
                    <p class="fs-2 mb-0 aos-init aos-animate" data-aos="fade-down" data-aos-delay="250">
                      Start growing in half the time with an
                      <span class="text-nowrap">
                        all-in-one
                      </span>
                      website builder - no more long hours spent on the boring stuff!
                    </p>
                  </div>
                </div>
                <img src="https://designmodo.com/startup/app/i/feature-6.png" srcset="i/feature-6@2x.png 2x" alt="" class="img-fluid aos-init aos-animate" data-aos="fade-down" data-aos-delay="500">
              </div>

            <section class="section mb-2 " id="bios">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-around flex-row-reverse">
                        <div class="col-lg-6">
                            <div class="about-text">
                                <h3 class="dark-color">Do some awsome stuff with me.</h3>
                                <h4 class="theme-color">UI / UX Designer &amp; Web Developer</h4>
                                <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p>
                                <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores.</p>
                                <div class="text-end">
                                    <x-themacoms.btn-hover-2/>
                                  </div>
                            </div>
                        </div>
                        <div class="col-lg-5 text-center">
                            <div class="about-img">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="price_plan_area section mb-2" id="pricing">
                
                <div class="container-fluid">
                  <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-lg-6">
                      <!-- Section Heading-->
                      <div class="section-heading section-title" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    
                        <h3>Let's find a way together</h3>
                        <h6>Pricing Plans</h6>
                        <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                        <div class="line"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <!-- Single Price Plan Area-->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="title">
                          <h3>Start Up</h3>
                          <p>Start a trial</p>
                          <div class="line"></div>
                        </div>
                        <div class="price">
                          <h4>$0</h4>
                        </div>
                        <div class="description">
                          <p><i class="lni lni-checkmark-circle"></i>Duration: 7days</p>
                          <p><i class="lni lni-checkmark-circle"></i>10 Features</p>
                          <p><i class="lni lni-close"></i>No Hidden Fees</p>
                          <p><i class="lni lni-close"></i>100+ Video Tuts</p>
                          <p><i class="lni lni-close"></i>No Tools</p>
                        </div>
                        <div class="button"><a class="btn btn-success btn-2" href="#">Get Started</a></div>
                      </div>
                    </div>
                    <!-- Single Price Plan Area-->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="single_price_plan active wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <!-- Side Shape-->
                        <div class="side-shape"><img src="https://bootdey.com/img/popular-pricing.png" alt=""></div>
                        <div class="title"><span>Popular</span>
                          <h3>Small Business</h3>
                          <p>For Small Business Team</p>
                          <div class="line"></div>
                        </div>
                        <div class="price">
                          <h4>$9.99</h4>
                        </div>
                        <div class="description">
                          <p><i class="lni lni-checkmark-circle"></i>Duration: 3 Month</p>
                          <p><i class="lni lni-checkmark-circle"></i>50 Features</p>
                          <p><i class="lni lni-checkmark-circle"></i>No Hidden Fees</p>
                          <p><i class="lni lni-checkmark-circle"></i>150+ Video Tuts</p>
                          <p><i class="lni lni-close"></i>5 Tools</p>
                        </div>
                        <div class="button"><a class="btn btn-warning" href="#">Get Started</a></div>
                      </div>
                    </div>
                    <!-- Single Price Plan Area-->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="title">
                          <h3>Enterprise</h3>
                          <p>Unlimited Possibilities</p>
                          <div class="line"></div>
                        </div>
                        <div class="price">
                          <h4>$49.99</h4>
                        </div>
                        <div class="description">
                          <p><i class="lni lni-checkmark-circle"></i>Duration: 1 year</p>
                          <p><i class="lni lni-checkmark-circle"></i>Unlimited Features</p>
                          <p><i class="lni lni-checkmark-circle"></i>No Hidden Fees</p>
                          <p><i class="lni lni-checkmark-circle"></i>Unlimited Video Tuts</p>
                          <p><i class="lni lni-checkmark-circle"></i>Unlimited Tools</p>
                        </div>
                        <div class="button"><a class="btn btn-info" href="#">Get Started</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>


              <div class="container" id="api">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-3 mb-lg-5">
                          <!--Card-->
                          <div class="card overflow-hidden text-center">
                            <img src="https://www.bootdey.com/image/280x120/6495ED/000000" class="card-img-top img-fluid" alt="">
                    
                            <!--Card body-->
                            <div class="card-body p-0">
                              <!--avatar-->
                              <a href="#!.html" class="avatar xl rounded-circle bg-gray bg-opacity-10 p-1 position-relative mt-n5 d-block mx-auto">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="avatar-img img-fluid rounded-circle" alt="">
                              </a>
                              <h5 class="mb-0 pt-3">
                                <a href="#!.html" class="text-reset">Noah Pierre</a>
                              </h5>
                              <span class="text-muted small d-block mb-4">Full stack developer</span>
                              <div class="row mx-0 border-top border-bottom">
                                <div class="col-6 text-center border-end py-3">
                                  <h5 class="mb-0">2345</h5>
                                  <small class="text-muted">Followers</small>
                                </div>
                                <div class="col-6 text-center py-3">
                                  <h5 class="mb-0">54</h5>
                                  <small class="text-muted">Following</small>
                                </div>
                              </div>
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                  <span class="text-muted small">Join</span>
                                  <strong>April 2014</strong>
                                </li>
                                <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                  <span class="text-muted small">Location</span>
                                  <strong>Barcelona, Spain</strong>
                                </li>
                                <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                  <span class="text-muted small d-flex align-items-center">
                                    <span class="align-middle lh-1 me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
                                    Online
                                  </span>
                                  <div class="text-end">
                                    <a href="#!.html" class="btn btn-sm btn-primary">Follow</a>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        
                        
               

                    </div>

            </div>

    
    @endsection
