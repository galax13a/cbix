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

                    <div class="mt-1 text-center" id="home">                       
                        <h3>
                           Get BotCamStudio&nbsp;&nbsp;  By Using Botchatur&nbsp;Apps                           
                        </h3>
                        <h1>COOL <strong class="marketery2" style="--highlight-color: #86ff3fcc;">CamEditor</strong> Profile
                        </h1>
                        <p>
                            At Botchatur Studio, we believe that every professional has a unique
                            story to tell. Whether you are a recent graduate looking to stand out in the job market,
                            an expert in your field looking to update your image, or an artist looking to capture
                            the essence of your work, we are here to help you present yourself in the best way
                            possible.  <mark>lime minty black beanwraps</mark>
                        </p>
                       
                        <div class="hero__btn btns mt-5">   
                            <h1 class="text-center">COOL <strong class="marketery2" style="--highlight-color: #9c2abeb6;">AutoTyper</strong> Nice
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
                            55K 
                            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 8.5H13.5C16 8.5 16 12 13.5 12H10.5" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10.5 12H13.5C16 12 16 15.5 13.5 15.5H8" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10 17V7" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M13 8.5V7" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M13 17V15.5" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 12C3 4.5885 4.5885 3 12 3C19.4115 3 21 4.5885 21 12C21 19.4115 19.4115 21 12 21C4.5885 21 3 19.4115 3 12Z" stroke="#323232" stroke-width="2"></path> <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M12 3C4.5885 3 3 4.5885 3 12C3 19.4115 4.5885 21 12 21C19.4115 21 21 19.4115 21 12C21 4.5885 19.4115 3 12 3ZM8 8.25C7.86193 8.25 7.75 8.36193 7.75 8.5C7.75 8.63807 7.86193 8.75 8 8.75H9.75V15.25H8C7.86193 15.25 7.75 15.3619 7.75 15.5C7.75 15.6381 7.86193 15.75 8 15.75H9.75V17C9.75 17.1381 9.86193 17.25 10 17.25C10.1381 17.25 10.25 17.1381 10.25 17V15.75H12.75V17C12.75 17.1381 12.8619 17.25 13 17.25C13.1381 17.25 13.25 17.1381 13.25 17V15.75H13.5C14.187 15.75 14.7234 15.5076 15.0873 15.1255C15.4481 14.7467 15.625 14.2456 15.625 13.75C15.625 13.2544 15.4481 12.7533 15.0873 12.3745C14.9467 12.2268 14.7803 12.1 14.5894 12C14.7803 11.9 14.9467 11.7732 15.0873 11.6255C15.4481 11.2467 15.625 10.7456 15.625 10.25C15.625 9.75436 15.4481 9.25328 15.0873 8.87446C14.7234 8.49236 14.187 8.25 13.5 8.25H13.25V7C13.25 6.86193 13.1381 6.75 13 6.75C12.8619 6.75 12.75 6.86193 12.75 7V8.25H10.25V7C10.25 6.86193 10.1381 6.75 10 6.75C9.86193 6.75 9.75 6.86193 9.75 7V8.25H8Z" fill="#323232"></path> </g></svg>                            
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
                           <span class="badge text-bg-dark p-1">  Active Install Apps </span>
                    </p>
                        <div class="animate-gh mt-1 ">
                            <img title="Get Credits Free"  src="{{asset('temas/home/ghost.png')}}" alt="Ghost free tokens" class="ghost-image punter">
                        </div>
                        <div class="container mt-5 ml-3">
                            <svg width="64px" height="64px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="a"></g> <g id="b"> <path d="M30.02,5c-8.18,0-14.81,6.63-14.81,14.81,0,5.56,3.12,10.66,8.07,13.19l8.05,6.25,10.43-10.41c1.99-2.59,3.07-5.76,3.07-9.03,0-8.18-6.63-14.81-14.81-14.81Z" fill="#f2d865" fill-rule="evenodd"></path> <path d="M30.02,5c-.56,0-1.12,.03-1.66,.1,7.4,.83,13.15,7.1,13.15,14.71,0,3.27-1.08,6.44-3.07,9.03l-8.97,8.95,1.87,1.45,10.43-10.41c1.99-2.59,3.07-5.76,3.07-9.03,0-8.18-6.63-14.81-14.81-14.81h0Z" fill="#f2d865" fill-rule="evenodd"></path> <path d="M14.44,33c-2.4,0-4.33,1.93-4.33,4.33s1.93,4.33,4.33,4.33v8.67c-2.4,0-4.33,1.94-4.33,4.34s1.93,4.33,4.33,4.33h20.3c1,0,1.93-.34,2.66-.91l-1.92-18.93-6.9-6.17H14.44Z" fill="#f2d865" fill-rule="evenodd"></path> <path d="M26.04,50.33H14.45c-2.4,0-4.34-1.93-4.34-4.33s1.93-4.33,4.34-4.33h9.94l1.65,8.67Z" fill="#e9c03d" fill-rule="evenodd"></path> <circle cx="39.08" cy="43.39" fill="#f5e680" r="14.81" transform="translate(-15.15 21.73) rotate(-26.22)"></circle> <circle cx="39.08" cy="43.39" fill="#ebb680" r="8.12"></circle> <circle cx="30.02" cy="19.81" fill="#ebb680" r="8.12" transform="translate(8.18 48.38) rotate(-86.02)"></circle> <path d="M39.08,28.58c-.67,0-1.33,.05-1.99,.14,7.32,1.01,12.78,7.27,12.78,14.67,0,7.4-5.47,13.66-12.8,14.66,.67,.09,1.34,.14,2.01,.14,8.18,0,14.81-6.63,14.81-14.81s-6.63-14.81-14.81-14.81Z" fill="#f2d865" fill-rule="evenodd"></path> <path d="M39.08,35.27c-.46,0-.9,.04-1.34,.11,3.85,.64,6.79,3.98,6.79,8.01s-2.94,7.37-6.79,8.01c.43,.07,.88,.11,1.34,.11,4.49,0,8.12-3.64,8.12-8.12s-3.63-8.12-8.12-8.12Z" fill="#e6a361" fill-rule="evenodd"></path> <path d="M30.02,11.69c-.44,0-.87,.04-1.29,.1,3.87,.62,6.83,3.97,6.83,8.02s-2.96,7.4-6.83,8.02c.42,.07,.85,.1,1.29,.1,4.49,0,8.12-3.63,8.12-8.12s-3.64-8.12-8.12-8.12Z" fill="#e6a361" fill-rule="evenodd"></path> <path d="M43.33,28.23c1.59-2.52,2.5-5.44,2.5-8.42,0-8.72-7.09-15.81-15.81-15.81s-15.81,7.09-15.81,15.81c0,4.81,2.17,9.22,5.79,12.19h-5.56c-2.94,0-5.33,2.39-5.33,5.33,0,1.79,.89,3.37,2.25,4.33-1.36,.97-2.25,2.55-2.25,4.33s.89,3.37,2.25,4.33c-1.35,.97-2.25,2.54-2.25,4.33,0,2.94,2.39,5.33,5.33,5.33h20.3c1.07,0,2.08-.35,2.95-.94,.46,.04,.91,.14,1.38,.14,8.72,0,15.81-7.09,15.81-15.81,0-7.24-4.91-13.29-11.56-15.15Zm-27.12-8.42c0-7.61,6.19-13.81,13.81-13.81s13.81,6.19,13.81,13.81c0,2.86-.93,5.66-2.59,7.99-.71-.1-1.42-.22-2.16-.22-4.23,0-8.07,1.7-10.91,4.42h-4.62c-4.53-2.4-7.34-7.04-7.34-12.19Zm-5.1,17.52c0-1.84,1.5-3.33,3.33-3.33h12c-1.44,1.94-2.46,4.19-2.89,6.67H14.44c-1.84,0-3.33-1.5-3.33-3.33Zm3.33,12c-1.84,0-3.33-1.5-3.33-3.33s1.5-3.33,3.33-3.33h8.91c-.01,.25-.07,.48-.07,.72,0,2.1,.43,4.11,1.18,5.94H14.44Zm0,8.67c-1.84,0-3.33-1.5-3.33-3.33s1.5-3.33,3.33-3.33h11.05c1.74,2.97,4.38,5.35,7.6,6.67H14.44Zm24.64-.8c-7.61,0-13.81-6.19-13.81-13.81s6.15-13.81,13.81-13.81,13.81,6.19,13.81,13.81-6.19,13.81-13.81,13.81Z"></path> <path d="M39.08,34.27c-5.03,0-9.12,4.09-9.12,9.12s4.09,9.12,9.12,9.12,9.12-4.09,9.12-9.12-4.09-9.12-9.12-9.12Zm0,16.24c-3.93,0-7.12-3.2-7.12-7.12s3.2-7.12,7.12-7.12,7.12,3.19,7.12,7.12-3.19,7.12-7.12,7.12Z"></path> <path d="M30.02,28.93c5.03,0,9.12-4.09,9.12-9.12s-4.09-9.12-9.12-9.12-9.12,4.09-9.12,9.12,4.09,9.12,9.12,9.12Zm0-16.24c3.93,0,7.12,3.2,7.12,7.12s-3.2,7.12-7.12,7.12-7.12-3.19-7.12-7.12,3.19-7.12,7.12-7.12Z"></path> <path d="M30.02,20.81c.4,0,.72,.32,.72,.72s-.32,.72-.72,.72c-.19,0-.37-.08-.51-.21-.39-.39-1.02-.39-1.41,0s-.39,1.02,0,1.41c.27,.27,.58,.46,.92,.6v.28c0,.55,.45,1,1,1s1-.45,1-1v-.29c1.01-.4,1.72-1.37,1.72-2.52,0-1.5-1.22-2.72-2.72-2.72-.4,0-.72-.32-.72-.72s.32-.72,.72-.72c.19,0,.38,.08,.51,.21,.39,.39,1.02,.39,1.41,0s.39-1.02,0-1.41c-.27-.27-.58-.46-.92-.6v-.28c0-.55-.45-1-1-1s-1,.45-1,1v.29c-1,.4-1.72,1.37-1.72,2.52,0,1.5,1.22,2.72,2.72,2.72Z"></path> <path d="M39.08,42.39c-.4,0-.72-.32-.72-.72s.32-.72,.72-.72c.19,0,.37,.07,.51,.21,.39,.39,1.02,.39,1.41,0s.39-1.02,0-1.41c-.27-.27-.58-.47-.92-.6v-.28c0-.55-.45-1-1-1s-1,.45-1,1v.29c-1,.4-1.72,1.37-1.72,2.52,0,1.5,1.22,2.72,2.72,2.72,.4,0,.72,.32,.72,.72s-.32,.72-.72,.72c-.19,0-.37-.08-.51-.21-.39-.39-1.02-.39-1.41,0s-.39,1.02,0,1.41c.27,.27,.58,.46,.92,.6v.28c0,.55,.45,1,1,1s1-.45,1-1v-.29c1-.4,1.72-1.37,1.72-2.52,0-1.5-1.22-2.72-2.72-2.72Z"></path> <circle cx="39.08" cy="31.92" r="1"></circle> <circle cx="39.08" cy="54.85" r="1"></circle> <circle cx="50.55" cy="43.39" r="1"></circle> <circle cx="27.62" cy="43.39" r="1"></circle> <path d="M47.9,35.99c.39-.39,.39-1.03,0-1.41-.39-.39-1.03-.39-1.41,0-.39,.39-.39,1.03,0,1.41s1.03,.39,1.41,0Z"></path> <path d="M30.27,50.79c-.39,.39-.39,1.03,0,1.41,.39,.39,1.03,.39,1.41,0,.39-.39,.39-1.03,0-1.41-.39-.39-1.03-.39-1.41,0Z"></path> <path d="M47.19,50.49c-.27,0-.52,.11-.71,.29-.39,.39-.39,1.03,0,1.41,.19,.19,.44,.29,.71,.29s.52-.11,.71-.29c.39-.39,.39-1.03,0-1.41-.19-.19-.44-.29-.71-.29Z"></path> <path d="M30.98,36.28c.26,0,.52-.11,.71-.29,.39-.39,.39-1.03,0-1.41-.19-.19-.44-.29-.71-.29s-.52,.11-.71,.29c-.39,.39-.39,1.03,0,1.41,.19,.19,.44,.29,.71,.29Z"></path> <circle cx="30.02" cy="8.34" r="1"></circle> <circle cx="41.48" cy="19.81" r="1"></circle> <circle cx="18.55" cy="19.81" r="1"></circle> <path d="M38.83,12.41c.39-.39,.39-1.03,0-1.41-.39-.39-1.03-.39-1.41,0-.39,.39-.39,1.03,0,1.41s1.03,.39,1.41,0Z"></path> <path d="M21.2,27.21c-.39,.39-.39,1.03,0,1.41,.39,.39,1.03,.39,1.41,0,.39-.39,.39-1.03,0-1.41-.39-.39-1.03-.39-1.41,0Z"></path> <path d="M21.91,12.7c.27,0,.52-.11,.71-.29,.39-.39,.39-1.03,0-1.41-.19-.19-.44-.29-.71-.29s-.52,.11-.71,.29c-.39,.39-.39,1.03,0,1.41,.19,.19,.44,.29,.71,.29Z"></path> </g> <g id="c"></g> <g id="d"></g> <g id="e"></g> <g id="f"></g> <g id="g"></g> <g id="h"></g> <g id="i"></g> <g id="j"></g> <g id="k"></g> <g id="l"></g> <g id="m"></g> <g id="n"></g> <g id="o"></g> <g id="p"></g> <g id="q"></g> <g id="r"></g> <g id="s"></g> <g id="t"></g> <g id="u"></g> <g id="v"></g> <g id="w"></g> <g id="x"></g> <g id="y"></g> <g id="a`"></g> <g id="aa"></g> <g id="ab"></g> <g id="ac"></g> <g id="ad"></g> <g id="ae"></g> <g id="af"></g> <g id="ag"></g> <g id="ah"></g> <g id="ai"></g> <g id="aj"></g> <g id="ak"></g> <g id="al"></g> <g id="am"></g> <g id="an"></g> <g id="ao"></g> <g id="ap"></g> <g id="aq"></g> <g id="ar"></g> <g id="as"></g> <g id="at"></g> <g id="au"></g> <g id="av"></g> <g id="aw"></g> <g id="ax"></g> </g></svg>
                            <button class="btn btn-new"><strong> Get Credits </strong></button>
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
                                    <div class="date shadow border border-2 text-bg-dark">Auto Tiper 💚</div>
                                    <a href="#">
                                        <img src="{{asset('temas/home/auto.jpeg')}}" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Send auto tips to your favorites</a></h5>
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
                                    <div class="date shadow border border-2 text-bg-danger">Goshts Live 💜</div>
                                    <a href="#">
                                        <img src="{{asset('temas/home/visit.jpeg')}}" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Support with a view to your live</a></h5>
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
                                    <div class="date shadow border border-2 text-bg-warning">Create Bio ❤️</div>
                                    <a href="#">
                                        <img src="{{asset('temas/home/create.jpeg')}}" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Create cute and quick bios, Profiles pro chatur</a></h5>
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

            <section class="section mb-2 gray-bg">
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

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="mx-auto text-center">
                            <img src="https://www.bootdey.com/image/800x540/FF7F50/000000" class="rounded" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-6 ps-xl-10 w-lg-90">
                            <div class="mb-4">
                                <div class="main-title title-left">Getting a Loan<span class="line-left"></span></div>
                                <h2 class="w-90">The greater part of the people trust on us</h2>
                            </div>
                            <p class="mb-4">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>
            
            
            
                            <div id="accordion" class="accordion-style">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">How quick will my credit be subsidized?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion" style="">
                                        <div class="card-body position-relative">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations
                                            of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What is outsourced financial support?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="card-body position-relative">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                                            content here', making it look like readable English.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How long is an affirmed financing cost and credit offer substantial?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                        <div class="card-body position-relative">
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,
                                            sometimes on purpose (injected humour and the like).
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">What sorts of commercial enterprise financing do you offer?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                        <div class="card-body position-relative">
                                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How might I roll out an improvement to my application?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
                                        <div class="card-body position-relative">
                                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to
                                            generate Lorem Ipsum which looks reasonable.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            
            
            </div>
            


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


              <div class="container section" id="api">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-3 mb-lg-5">
                          <!--Card-->
                          <div class="card overflow-hidden text-center">
                            <div class="p-3">
                            <svg width="100%" height="100%">
                                <image href="https://static-assets.highwebmedia.com/images/logo.svg?hash=asdjfnjdsj-cr-sofi" width="100%" height="100%" data-paction="CBLogo"></image>
                                </svg>
                            </div>
                            <!--Card body-->
                            <div class="card-body p-0">
                              <!--avatar-->
                              <a href="/en/chatur/api" class="avatar xl rounded-circle bg-gray bg-opacity-10 p-1 position-relative mt-n5 d-block mx-auto">
                                <img src="{{asset('temas/home/madeline_jackson.jpg')}}" class="avatar-img img-fluid rounded-circle" alt="">
                           
                              </a>
                              <h5 class="mb-0 pt-3">
                                <a href="#!.html" class="text-reset">Madeline Jackson</a>
                              </h5>
                              <span class="text-muted small d-block mb-4">Full Modelo Chatur</span>
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

               <div class="container-fire">                
                    <div class="red flame"></div>
                    <div class="orange flame"></div>
                    <div class="yellow flame"></div>
                    <div class="white flame"></div>
                    <div class="blue circle"></div>
                    <div class="black circle"></div>
              </div>

    @endsection
