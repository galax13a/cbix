    @extends('layouts.tema.app')
    @section('title', __('EditorCam Create Profiles Chatur'))
    @push('scripts-head')<meta name="description" content="Create and edit profiles and bios on Chatur. Customize your profiles with unique bios. Optimize your presence on Chatur!">
    <meta name="keywords" content="Profile Creation, Bio Editing, Chatur, Profile Customization, Unique Bios, Online Presence, Chatur Optimization">    
    <meta property="og:image" content="{{asset('temas/home/logo-botchatur-editor.png')}}">
    <meta property='og:title' content='¡Crea Biografías Únicas en Chatur!' />
    <meta property='og:description' content='Optimize your Chatur presence with custom profiles and unique bios. Edit your bio now!' />
    <meta property='og:url' content='{{asset('temas/home/logo-botchatur-editor.png')}}' />
    <meta property='og:type' content='website' />
    <meta itemprop="thumbnailUrl" content='{{asset('temas/home/logo-botchatur-editor.png')}}' />
    <meta property='og:site_name' content='BotChatur Bio & profiles CB' />
    @endpush
    @push('scripts-body')
     <script>
         document.addEventListener('DOMContentLoaded', function () {
            var scroll;
            if (typeof SmoothScroll !== 'undefined') {
                scroll = new SmoothScroll('a[href*="#"]', {
                    speed: 333,
                    offset: 90
                });
            } else {
                console.error('SmoothScroll no found ready dom.');
            }
            });</script>@endpush

    @section('content')
        <x-themacoms.navbar-flex />           
        <<x-themacoms.btnup/>
        <div class="container-fluid">                           

            <div class="row mt-5">
                <div class="container">
                    <div class="row">
                      <div class="col">                   
                      </div>
                      <div class="col">             
                      </div>
                      <div class="col mt-2">
                        <div class="animate-gh mt-5 col-sm-4">
                            <img width="26" height="26" src="{{asset('temas/home/ghost.png')}}" title="play game" alt="Ghost" class="ghost-image punter">
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-md-6 col-xl-6 px-5">

                    <div class="mt-1 text-end" id="home">                       
                        <h1 class="mb-4">
                           Get BotCamStudio, tools for chatur and other webcams                         
                        </h1>
                        <h2>
                            🤩COOL<strong class="marketery2" style="--highlight-color: #86ff3fcc;">
                            BotCamEditor
                        </strong>
                             Tools 
                        </h2>
                        <p>
                            With CamEditor, unlock your creativity and develop more than 100 profiles or bios on Chatur easily and quickly. 
                            Our platform allows you to effortlessly edit and copy and paste code from thousands of themes, giving you the freedom to customize your
                             profiles like never before. 
                            Take advantage of the versatility and ease of use of  app to 
                            <mark>stand out in the world of Chatur bate and other platforms , Mate, Mfc, Stript</mark>
                        </p>
                       
                        <div class="hero__btn btns mt-2">   
                            <h2 class="text-end">
                                *<strong class="marketery2" 
                                style="--highlight-color: #9c2abeb6;">
                                Model </strong> Moderator 😎
                            </h2>
                            <p class="wow fadeInUp"  id="style-1ceoc">
                                With our automated tips feature, it's never been easier to show your support for your favorite models.
                                 Forget about complicated processes and enjoy supporting your model by 
                                 automatically sending your support, without using your hands.
                                possible.  <mark> <b>Free access </b></mark>                              
                            </p>
                        <div class="text-end m-2">                            
                            <a class="btn-hover3" href="{{url('/download')}}">Download App</a>
                        </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">                    
                    <img width="1000" height="1000" srcset="{{ asset('temas/home/img_01-250.png') }} 250w, {{ asset('temas/home/img_01.png') }} 500w"
                    sizes="(max-width: 720px) 250px,(max-width: 1024px) 500px"
                    src="{{ asset('temas/home/img_01-250.png') }}" alt="botchatur editorcam">

                
                </div>
                <div class="col-md-6 col-xl-2 mt-0">
                    <div class=""  id="style-Z56Nr"> 
                        <img width="90" height="90" src="{{ asset('temas/home/img-w.png') }}" alt="easy profile cb">
                    </div>
                    <div class="hero__top-selling-app wow fadeInRight style-2Ylfc" id="style-2Ylfc">
                        <h3>
                            55K 
                            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 8.5H13.5C16 8.5 16 12 13.5 12H10.5" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10.5 12H13.5C16 12 16 15.5 13.5 15.5H8" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10 17V7" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M13 8.5V7" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M13 17V15.5" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 12C3 4.5885 4.5885 3 12 3C19.4115 3 21 4.5885 21 12C21 19.4115 19.4115 21 12 21C4.5885 21 3 19.4115 3 12Z" stroke="#323232" stroke-width="2"></path> <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M12 3C4.5885 3 3 4.5885 3 12C3 19.4115 4.5885 21 12 21C19.4115 21 21 19.4115 21 12C21 4.5885 19.4115 3 12 3ZM8 8.25C7.86193 8.25 7.75 8.36193 7.75 8.5C7.75 8.63807 7.86193 8.75 8 8.75H9.75V15.25H8C7.86193 15.25 7.75 15.3619 7.75 15.5C7.75 15.6381 7.86193 15.75 8 15.75H9.75V17C9.75 17.1381 9.86193 17.25 10 17.25C10.1381 17.25 10.25 17.1381 10.25 17V15.75H12.75V17C12.75 17.1381 12.8619 17.25 13 17.25C13.1381 17.25 13.25 17.1381 13.25 17V15.75H13.5C14.187 15.75 14.7234 15.5076 15.0873 15.1255C15.4481 14.7467 15.625 14.2456 15.625 13.75C15.625 13.2544 15.4481 12.7533 15.0873 12.3745C14.9467 12.2268 14.7803 12.1 14.5894 12C14.7803 11.9 14.9467 11.7732 15.0873 11.6255C15.4481 11.2467 15.625 10.7456 15.625 10.25C15.625 9.75436 15.4481 9.25328 15.0873 8.87446C14.7234 8.49236 14.187 8.25 13.5 8.25H13.25V7C13.25 6.86193 13.1381 6.75 13 6.75C12.8619 6.75 12.75 6.86193 12.75 7V8.25H10.25V7C10.25 6.86193 10.1381 6.75 10 6.75C9.86193 6.75 9.75 6.86193 9.75 7V8.25H8Z" fill="#323232"></path> </g></svg>                            
                        </h3>
                        <strong>
                            *Easy your Bio 🎈
                        </strong>
                    </div>
                    <p>
                        Are you frustrated with editing your  <b> Bio on Chatur? </b> Do you want an easy way to customize it? With <b> 🧁 BotCamEditor </b>,
                        <mark> you can quickly create profiles, </mark>
                         for yourself or for your <b> favorite models </b> if you are a <b> moderator </b> or content creator.
                           <span class="badge text-bg-dark p-1">  Active Install Apps </span>
                    </p>
                       
                        <div class="container mt-1 ml-3">
                            <svg width="36px" height="36px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="a"></g> <g id="b"> <path d="M30.02,5c-8.18,0-14.81,6.63-14.81,14.81,0,5.56,3.12,10.66,8.07,13.19l8.05,6.25,10.43-10.41c1.99-2.59,3.07-5.76,3.07-9.03,0-8.18-6.63-14.81-14.81-14.81Z" fill="#f2d865" fill-rule="evenodd"></path> <path d="M30.02,5c-.56,0-1.12,.03-1.66,.1,7.4,.83,13.15,7.1,13.15,14.71,0,3.27-1.08,6.44-3.07,9.03l-8.97,8.95,1.87,1.45,10.43-10.41c1.99-2.59,3.07-5.76,3.07-9.03,0-8.18-6.63-14.81-14.81-14.81h0Z" fill="#f2d865" fill-rule="evenodd"></path> <path d="M14.44,33c-2.4,0-4.33,1.93-4.33,4.33s1.93,4.33,4.33,4.33v8.67c-2.4,0-4.33,1.94-4.33,4.34s1.93,4.33,4.33,4.33h20.3c1,0,1.93-.34,2.66-.91l-1.92-18.93-6.9-6.17H14.44Z" fill="#f2d865" fill-rule="evenodd"></path> <path d="M26.04,50.33H14.45c-2.4,0-4.34-1.93-4.34-4.33s1.93-4.33,4.34-4.33h9.94l1.65,8.67Z" fill="#e9c03d" fill-rule="evenodd"></path> <circle cx="39.08" cy="43.39" fill="#f5e680" r="14.81" transform="translate(-15.15 21.73) rotate(-26.22)"></circle> <circle cx="39.08" cy="43.39" fill="#ebb680" r="8.12"></circle> <circle cx="30.02" cy="19.81" fill="#ebb680" r="8.12" transform="translate(8.18 48.38) rotate(-86.02)"></circle> <path d="M39.08,28.58c-.67,0-1.33,.05-1.99,.14,7.32,1.01,12.78,7.27,12.78,14.67,0,7.4-5.47,13.66-12.8,14.66,.67,.09,1.34,.14,2.01,.14,8.18,0,14.81-6.63,14.81-14.81s-6.63-14.81-14.81-14.81Z" fill="#f2d865" fill-rule="evenodd"></path> <path d="M39.08,35.27c-.46,0-.9,.04-1.34,.11,3.85,.64,6.79,3.98,6.79,8.01s-2.94,7.37-6.79,8.01c.43,.07,.88,.11,1.34,.11,4.49,0,8.12-3.64,8.12-8.12s-3.63-8.12-8.12-8.12Z" fill="#e6a361" fill-rule="evenodd"></path> <path d="M30.02,11.69c-.44,0-.87,.04-1.29,.1,3.87,.62,6.83,3.97,6.83,8.02s-2.96,7.4-6.83,8.02c.42,.07,.85,.1,1.29,.1,4.49,0,8.12-3.63,8.12-8.12s-3.64-8.12-8.12-8.12Z" fill="#e6a361" fill-rule="evenodd"></path> <path d="M43.33,28.23c1.59-2.52,2.5-5.44,2.5-8.42,0-8.72-7.09-15.81-15.81-15.81s-15.81,7.09-15.81,15.81c0,4.81,2.17,9.22,5.79,12.19h-5.56c-2.94,0-5.33,2.39-5.33,5.33,0,1.79,.89,3.37,2.25,4.33-1.36,.97-2.25,2.55-2.25,4.33s.89,3.37,2.25,4.33c-1.35,.97-2.25,2.54-2.25,4.33,0,2.94,2.39,5.33,5.33,5.33h20.3c1.07,0,2.08-.35,2.95-.94,.46,.04,.91,.14,1.38,.14,8.72,0,15.81-7.09,15.81-15.81,0-7.24-4.91-13.29-11.56-15.15Zm-27.12-8.42c0-7.61,6.19-13.81,13.81-13.81s13.81,6.19,13.81,13.81c0,2.86-.93,5.66-2.59,7.99-.71-.1-1.42-.22-2.16-.22-4.23,0-8.07,1.7-10.91,4.42h-4.62c-4.53-2.4-7.34-7.04-7.34-12.19Zm-5.1,17.52c0-1.84,1.5-3.33,3.33-3.33h12c-1.44,1.94-2.46,4.19-2.89,6.67H14.44c-1.84,0-3.33-1.5-3.33-3.33Zm3.33,12c-1.84,0-3.33-1.5-3.33-3.33s1.5-3.33,3.33-3.33h8.91c-.01,.25-.07,.48-.07,.72,0,2.1,.43,4.11,1.18,5.94H14.44Zm0,8.67c-1.84,0-3.33-1.5-3.33-3.33s1.5-3.33,3.33-3.33h11.05c1.74,2.97,4.38,5.35,7.6,6.67H14.44Zm24.64-.8c-7.61,0-13.81-6.19-13.81-13.81s6.15-13.81,13.81-13.81,13.81,6.19,13.81,13.81-6.19,13.81-13.81,13.81Z"></path> <path d="M39.08,34.27c-5.03,0-9.12,4.09-9.12,9.12s4.09,9.12,9.12,9.12,9.12-4.09,9.12-9.12-4.09-9.12-9.12-9.12Zm0,16.24c-3.93,0-7.12-3.2-7.12-7.12s3.2-7.12,7.12-7.12,7.12,3.19,7.12,7.12-3.19,7.12-7.12,7.12Z"></path> <path d="M30.02,28.93c5.03,0,9.12-4.09,9.12-9.12s-4.09-9.12-9.12-9.12-9.12,4.09-9.12,9.12,4.09,9.12,9.12,9.12Zm0-16.24c3.93,0,7.12,3.2,7.12,7.12s-3.2,7.12-7.12,7.12-7.12-3.19-7.12-7.12,3.19-7.12,7.12-7.12Z"></path> <path d="M30.02,20.81c.4,0,.72,.32,.72,.72s-.32,.72-.72,.72c-.19,0-.37-.08-.51-.21-.39-.39-1.02-.39-1.41,0s-.39,1.02,0,1.41c.27,.27,.58,.46,.92,.6v.28c0,.55,.45,1,1,1s1-.45,1-1v-.29c1.01-.4,1.72-1.37,1.72-2.52,0-1.5-1.22-2.72-2.72-2.72-.4,0-.72-.32-.72-.72s.32-.72,.72-.72c.19,0,.38,.08,.51,.21,.39,.39,1.02,.39,1.41,0s.39-1.02,0-1.41c-.27-.27-.58-.46-.92-.6v-.28c0-.55-.45-1-1-1s-1,.45-1,1v.29c-1,.4-1.72,1.37-1.72,2.52,0,1.5,1.22,2.72,2.72,2.72Z"></path> <path d="M39.08,42.39c-.4,0-.72-.32-.72-.72s.32-.72,.72-.72c.19,0,.37,.07,.51,.21,.39,.39,1.02,.39,1.41,0s.39-1.02,0-1.41c-.27-.27-.58-.47-.92-.6v-.28c0-.55-.45-1-1-1s-1,.45-1,1v.29c-1,.4-1.72,1.37-1.72,2.52,0,1.5,1.22,2.72,2.72,2.72,.4,0,.72,.32,.72,.72s-.32,.72-.72,.72c-.19,0-.37-.08-.51-.21-.39-.39-1.02-.39-1.41,0s-.39,1.02,0,1.41c.27,.27,.58,.46,.92,.6v.28c0,.55,.45,1,1,1s1-.45,1-1v-.29c1-.4,1.72-1.37,1.72-2.52,0-1.5-1.22-2.72-2.72-2.72Z"></path> <circle cx="39.08" cy="31.92" r="1"></circle> <circle cx="39.08" cy="54.85" r="1"></circle> <circle cx="50.55" cy="43.39" r="1"></circle> <circle cx="27.62" cy="43.39" r="1"></circle> <path d="M47.9,35.99c.39-.39,.39-1.03,0-1.41-.39-.39-1.03-.39-1.41,0-.39,.39-.39,1.03,0,1.41s1.03,.39,1.41,0Z"></path> <path d="M30.27,50.79c-.39,.39-.39,1.03,0,1.41,.39,.39,1.03,.39,1.41,0,.39-.39,.39-1.03,0-1.41-.39-.39-1.03-.39-1.41,0Z"></path> <path d="M47.19,50.49c-.27,0-.52,.11-.71,.29-.39,.39-.39,1.03,0,1.41,.19,.19,.44,.29,.71,.29s.52-.11,.71-.29c.39-.39,.39-1.03,0-1.41-.19-.19-.44-.29-.71-.29Z"></path> <path d="M30.98,36.28c.26,0,.52-.11,.71-.29,.39-.39,.39-1.03,0-1.41-.19-.19-.44-.29-.71-.29s-.52,.11-.71,.29c-.39,.39-.39,1.03,0,1.41,.19,.19,.44,.29,.71,.29Z"></path> <circle cx="30.02" cy="8.34" r="1"></circle> <circle cx="41.48" cy="19.81" r="1"></circle> <circle cx="18.55" cy="19.81" r="1"></circle> <path d="M38.83,12.41c.39-.39,.39-1.03,0-1.41-.39-.39-1.03-.39-1.41,0-.39,.39-.39,1.03,0,1.41s1.03,.39,1.41,0Z"></path> <path d="M21.2,27.21c-.39,.39-.39,1.03,0,1.41,.39,.39,1.03,.39,1.41,0,.39-.39,.39-1.03,0-1.41-.39-.39-1.03-.39-1.41,0Z"></path> <path d="M21.91,12.7c.27,0,.52-.11,.71-.29,.39-.39,.39-1.03,0-1.41-.19-.19-.44-.29-.71-.29s-.52,.11-.71,.29c-.39,.39-.39,1.03,0,1.41,.19,.19,.44,.29,.71,.29Z"></path> </g> <g id="c"></g> <g id="d"></g> <g id="e"></g> <g id="f"></g> <g id="g"></g> <g id="h"></g> <g id="i"></g> <g id="j"></g> <g id="k"></g> <g id="l"></g> <g id="m"></g> <g id="n"></g> <g id="o"></g> <g id="p"></g> <g id="q"></g> <g id="r"></g> <g id="s"></g> <g id="t"></g> <g id="u"></g> <g id="v"></g> <g id="w"></g> <g id="x"></g> <g id="y"></g> <g id="a`"></g> <g id="aa"></g> <g id="ab"></g> <g id="ac"></g> <g id="ad"></g> <g id="ae"></g> <g id="af"></g> <g id="ag"></g> <g id="ah"></g> <g id="ai"></g> <g id="aj"></g> <g id="ak"></g> <g id="al"></g> <g id="am"></g> <g id="an"></g> <g id="ao"></g> <g id="ap"></g> <g id="aq"></g> <g id="ar"></g> <g id="as"></g> <g id="at"></g> <g id="au"></g> <g id="av"></g> <g id="aw"></g> <g id="ax"></g> </g></svg>
                            <button class="btn btn-new"><strong> Get Tokens</strong></button>
                       </div>
                </div>
            </div>
            <div class="animate-gh mt-1 ">
                <img title="Get Credits Free" width="26" height="26"  src="{{asset('temas/home/ghost.png')}}" alt="Ghost free tokens" class="ghost-image punter">
            </div>
    <!-- section content home -->        
        <section>
            <div class="container">
                <h2>Tool for room moderators, Send tokens automatically</h2>
            <p>Sending automatic tips to your favorite models has never been easier. With our integrated system, you will be able to support your main cameras effortlessly and without missing a single detail. Enhance your experience on our platform by giving back to those who make it memorable. Try it today and make your favorite models feel appreciated like never before.</p>

            <h2>Live guest 💛</h2>
            <p>Support while you enjoy live. At Botchatur we are committed to improving your live experience. With our support feature, you can show your appreciation directly while enjoying the show. It's the perfect way to make your favorite artists feel appreciated, while enjoying the content you love. Join us to create a more interactive and engaging live experience today.</p>

            <h2>Create your biography ❤️</h2>
            <p>Create lovely and fast bios, Chatur profiles pro. Profiles Pro Chatur makes it easy to create adorable bios. Easily customize your Chaturbate profile with our easy-to-use tool, allowing you to express your unique personality in just minutes. Elevate your presence on the platform with charming bios that leave a lasting impression. Try it now and let your creativity shine! Create your account and start creating.</p>
            </div>
        </section>

<!-- download-->
            <section class="section gray-bg mb-3" id="download" >
                <div class="container--fluid mx-4" id="apps">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="section-title" >                                
                                <div class="col-12 text-center mb-3">
                                    <h3>Download Sofware Windowns | Mac | Linux</h3> 
                                    <h2 class="display-2">App BotStudio</h2></div>
                                <p>
                                    I design and develop services for customers of all sizes, 
                                    specializing in creating stylish,  modern websites 
                                </p>
                                <a class="bg-dark p-2 rounded-3 shadow" href="{{url('/download')}}">Download BotCamStudio</a>
                            
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-grid">
                          
                                <div class="blog-img">
                                    <div class="date shadow border border-2 text-bg-dark"> <b>Auto Tiper 💚</b></div>
                                    <a href="{{url('/moderator')}}">
                                        
                                        <img width="1000" height="1000" loading="lazy" class="border rounded-3 shadow" srcset="{{ asset('temas/home/auto-230.jpeg') }} 230w, {{ asset('temas/home/auto.jpeg') }} 380w"  sizes="(max-width: 720px) 230px,(max-width: 1024px) 380px"
                                        src="{{ asset('temas/home/auto-230.jpeg') }}" alt="moderator cb">  
                                      
                                    </a>
                                </div>
                                <div class="blog-info bg-dark text-white">
                                    <strong class="fs-4"> Tool for room moderator, Sends automatic tokens </strong>
                                    <p>
                                        Sending automatic tips to your favorite models has never been easier. With our seamless system, 
                                        you can support your top cams effortlessly and without missing a beat. Elevate your experience on our platform by giving 
                                        back to those who make it memorable.
                                        Try it today and make your favorite models feel appreciated like never before.
                                    </p>
                                    <div class="btn-bar">
                                        <a href="{{url('/moderator')}}" class="px-btn-arrow">
                                        Send Tokens
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date shadow border border-2 text-bg-danger"> <b>Guest Live 💛</b></div>
                                    <a href="{{url('/traffic')}}">
                                        <img width="1000" height="1000" loading="lazy" class="border rounded-3 shadow" srcset="{{ asset('temas/home/visit-230.jpeg') }} 230w, {{ asset('temas/home/visit.jpeg') }} 380w"  sizes="(max-width: 720px) 230px,(max-width: 1024px) 380px"
                                        src="{{ asset('temas/home/visit-230.jpeg') }}" alt="create bio live cb">   
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <strong class="fs-4">Support with a view to your live</strong>
                                    <p>
                                        At Botchatur, we're committed to enhancing your live experience. With our support feature,
                                         you can show your appreciation directly while enjoying the show. It's the perfect way to make your favorite performers feel valued, 
                                         all while enjoying the content you love. Join us in creating a more interactive and engaging live experience today
                                    </p>
                                    <div class="btn-bar  bg-dark p-1 rounded-3">
                                        <a href="{{url('/traffic')}}" class="px-btn-arrow">
                                        Guest Traffic
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date shadow border border-2 text-bg-warning"> <b>Create Bio ❤️</b></div>
                                    <a href="{{url('/bios/create')}}">                      
                                        <img width="1000" height="1000" loading="lazy" class="border rounded-3 shadow" srcset="{{ asset('temas/home/create-230.jpeg') }} 230w, {{ asset('temas/home/create.jpeg') }} 380w"  sizes="(max-width: 720px) 230px,(max-width: 1024px) 380px"
                                        src="{{ asset('temas/home/create-230.jpeg') }}" alt="create bio live cb">   
                                    </a>
                                </div>
                                <div class="blog-info bg-dark text-white">
                                    <strong class="fs-4">Create cute and quick bios, Profiles pro chatur</strong>
                                    <p>
                                        Profiles Pro Chatur makes creating adorable bios a breeze. Easily customize your 
                                        Chaturbate profile with our easy-to-use tool, allowing you to express your unique personality in just minutes.
                                         Elevate your presence on the platform with charming bios that leave a lasting impression.
                                         Try it now and let your creativity shine! Create your account and start creating.
                                    </p>
                                    <div class="btn-bar">
                                        <a href="{{ url('/bios/create')}}" class="px-btn-arrow">
                                            Create Bios
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- bios -->
          <div class="container" id="bios">
               <div class="row justify-content-md-between justify-content-xxl-center text-md-start">
                    <div class="col-12 text-center">
                        <h2 class="display-2">Create Bios Chatur</h2>
                    </div>                   
                    
                 <div class="mb-4 mb-lg-0 col-md-8 col-lg-7 col-xxl-5">             
                    <h3 class="display-5 aos-init aos-animate" data-aos="fade-down" data-aos-delay="0">
                        you can create adorable bios for your <mark class="rounded-3"> social networks </mark>
                    </h3>
                    <a class="btn btn-primary shadow text-decoration-none" href="/bios">Go Starter</a>
                  </div>
                  
                  <div class="d-none d-xxl-block col-xxl-1">
                  </div>
                  <div class="mb-md-15 mb-8 col-md-8 col-lg-5 col-xxl-4">                    
                    <p class="fs-2 mb-0 aos-init aos-animate"> 
                        how to make profiles on chatur, now it can be very <mark class="rounded-3"> easy with our more than 300 bios for your page design </mark>
                    </p>
                  </div>
                </div>
                <div class="row align-items-center mt-2 mb-2">
                    
                    <img width="250" height="250"  srcset="{{ asset('temas/home/website.png-250.png') }} 250w, {{ asset('temas/home/website.png') }} 500w" sizes="(max-width: 720px) 250px,(max-width: 1024px) 500px"
                    src="{{ asset('temas/home/website.png-250.png')}}" alt="create buider profile chatur" loading="lazy" class="img-fluid">

            </div>
              </div>

            <section class="section mb-2 gray-bg">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-around flex-row-reverse">
                        <div class="col-lg-6">
                            <div class="about-text">
                                <h3 class="dark-color">Give a design to your favorite model</h3>
                                <h4 class="theme-color">Chatur Moderators</h4>
                                <p>
                                    Chaturbate moderators play a crucial role in the online community, providing support and managing chat rooms to make live shows an amazing 
                                    experience. But have you ever thought about how to improve your own profile as a moderator? The answer is in BotChatur Editor, 
                                    a powerful tool that allows you to design and customize your profile in a unique way. 
                                    In this article, we will explore how a moderator can make the most of this tool to create an exceptional profile.
                                </p>
                                <div class="text-end">
                                    <a href="{{url('/moderator')}}" class="btn-hover2 m-2 p-2 text-center" style="--highlight-color: #3b043bcc;">Moderator App</a>
                                  </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div class="about-img col-md-8">
                                <img width="230" height="230" loading="lazy" class="border rounded-3 shadow" srcset="{{ asset('temas/home/bot7-230.jpeg') }} 230w, {{ asset('temas/home/bot7.jpeg') }} 380w"  sizes="(max-width: 720px) 230px,(max-width: 1024px) 380px"
                                src="{{ asset('temas/home/bot7-230.jpeg') }}" alt="create profile webcam">                               
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- bots -->
            <div class="container-fluid  mb-2" id="bots">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="col-md-8 text-center">

                            <img width="230" height="230" loading="lazy" class="border rounded-3 shadow" srcset="{{ asset('temas/home/bot1-230.jpeg') }} 230w, 
                            {{ asset('temas/home/bot1.jpeg') }} 380w"
                            sizes="(max-width: 720px) 230px,(max-width: 1024px) 380px"
                            src="{{ asset('temas/home/bot1-230.jpeg') }}" alt="create bots webcam">
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-6 ps-xl-10 w-lg-100">
                            <div class="mb-0">
                                <div class="col-12 text-start">
                                    <h1 class="display-2">Create Bots</h1></div>
                            </div>
                            <p class="mb-1">
                                Configure the bot to perform specific actions, 
                                such as posting content, responding to queries, sending promotional messages, 
                                and processing sales. Make sure the bot follows platform policies to avoid compliance issues.
                            </p>                        
         
                            <div id="accordion" class="accordion-style">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                     
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                the importance of THE BOT?
                                            </button>
                                     
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion" style="">
                                        <div class="card-body position-relative">
                                            Define the objectives of your bot. Will you primarily be a customer service assistant, an automated content generator,
                                             or a digital product marketer? These goals will influence 
                                            the design of the bot and the functionalities you need.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                  
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                 Automation BOT ?
                                            </button>
                                
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="card-body position-relative">
                                            Use machine learning to improve bot responsiveness and personalization. It collects data on user interaction and uses
                                             analytics to adjust and optimize the bot's behavior over time.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Content Sales Integration ?
                                            </button>
                              
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                        <div class="card-body position-relative">
                                            Promote your bot on your social networks and other marketing channels to increase its visibility and reach. Advertise the benefits of interacting with the bot,
                                             such as convenience and exclusive access to premium content.  Creating a social media bot with a content sales system can be an automatic strategy to increase audience engagement and generate income. However, it is crucial to maintain ethics and 
                                             transparency in all interactions with users and comply with the privacy and security policies of social networks.
                                        </div>
                                    </div>
                                </div>
                                                               
                            </div>
                        </div>
                    </div>
                </div>           
            
            </div>            

        <!-- Princing -->

            <section class="price_plan_area section mb-2" id="pricing">                
                <div class="container-fluid">
                  <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-lg-6">
           
                      <div class="section-heading section-title">
                    
                        <h2>Get started now with your content <br> #Pricing Plans</h2>
                        <p>Get access</p>
                        <p>
                            Hello! Thank you for your interest in our services at Botestudiocam. We are happy to provide you with information about our plans.
                        </p>
                        <div class="line"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                   
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="single_price_plan wow fadeInUp">
                        <div class="title">
                          <h3>Start Up #Free </h3>
                          <p>Start a trial</p>
                          <div class="line"></div>
                        </div>
                        <div class="price">
                          <h4>$0.0</h4>
                        </div>
                        <div class="description">
                            <ul>
                            <li>1 Bio Editable</li>
                            <li>1 Create Profile</li>
                            <li>BotEditorCam Free</li>
                            <li>1 CB BIO</li>
                            <li>100 Credits for Guest</li>
                            <li>Auto Typer Free</li>
                            <li>Social Media Tools</li>
                            <li>Api Free</li>
                            <li>No Tools</li>
                            <li>No Hidden Mark Blank</li>
                        </ul>
                        </div>
                        
                        <div class="button"><a class="btn btn-success btn-2" href="/buy/free">Get Started</a></div>
                      </div>
                    </div>
            
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="single_price_plan active wow fadeInUp">
             
                        <div class="side-shape"><img width="230" height="100%" loading="lazy" src="{{asset('temas/home/popular-pricing.png')}}" alt="princing app"></div>
                        <div class="title"><span>Popular</span>
                          <h3>Small Business</h3>
                          <p>For Small Business Team</p>
                          <div class="line"></div>
                        </div>
                        <div class="price">
                          <h4>$9.99</h4>
                        </div>
                        <div class="description">                                                    
                        <ul>
                          <li>Duration: 1 Month</li>
                          <li>100 Bio Editable</li>
                          <li>5 Create Profile</li>
                          <li>BotEditorCam Pro</li>
                          <li>10 CB BIO</li>
                          <li>1.000 Credits for Guest</li>
                          <li>Auto Mod Pro</li>
                          <li>Social Media Tools</li>
                          <li>Api Card</li>
                          <li>Promos</li>
                          <li>6 Content AI</li>
                          <li>Hidden Mark Blank</li>
                        </ul>
                        </div>
                        <div class="button"><a class="btn btn-warning" href="{{url('/buy/month')}}">Get Started</a></div>
                      </div>
                    </div>
                    <!-- Single Price Plan Area-->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s" >
                        <div class="title">
                          <h3>Enterprise</h3>
                          <p>Unlimited Possibilities</p>
                          <div class="line"></div>
                        </div>
                        <div class="price">
                          <h4>$69.99</h4>
                        </div>
                        <div class="description">
                            <ul>
                            <li>Duration: 1 Year</li>
                            <li>160 more .Bio Editable</li>
                            <li>No Limit Create Profile</li>
                            <li>BotEditorCam Pro</li>
                            <li>No Limit CB BIO</li>
                            <li>6.000 Credits for Guest</li>
                            <li>Auto Mod Pro</li>
                            <li>Social Media Tools</li>
                            <li>Api CB</li>
                            <li>Promos</li>
                            <li>Create 26 Content IA</li>
                            <li>More Tools</li>                            
                            <li>Hidden Mark Blank</li>
                        </ul>
                        </div>
                        <div class="button"><a class="btn btn-info" href="/buy/year">Get Started</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
     <!-- api-->
        <section>
              <div class="container-fluid mt-3" id="profile">
                  <div class="row">
                    <h2 class="display-4 text-center m-2">Create Api and share or your Profile Chaturbe</h2>
                    <div class="col-md-4 col-xxl-4">                    
                          
                        <div class="card overflow-hidden text-center bg-opacity-25 bg-dark ">
                            <div class="p-3">
                            <svg width="100%" height="100%">
                                <image href="https://static-assets.highwebmedia.com/images/logo.svg?hash=asdjfnjdsj-cr-sofi" 
                                width="100%" height="100%" data-paction="CBLogo"></image>
                                </svg>
                            </div>
                        
                            <div class="card-body p-0">

                              <a href="{{url('/chatur/api')}}" class="avatar xl rounded-circle bg-gray bg-opacity-10 p-1 position-relative mt-n5 d-block mx-auto">
                                <img loading="lazy" src="{{asset('temas/home/madeline_jackson.jpg')}}" 
                                class="avatar-img img-fluid rounded-circle shadow-lg" alt="genere api" >
                              </a>
                             
                                <a href="{{url('/profile')}}" class="text-reset fs-3">Madeline Jackson</a>
                      
                              <span class="text-muted small d-block mb-4">
                                Hey, everyone, I’m Leah. I am from Brno, Czech Republic
                                I’m 19 years old and I enjoy every second of living my life. My motto is “Carpe Diem” 
                                from Dead Poets Society. I also love reading, especially poetry!
                              </span>
                              <div class="row mx-0 border-top border-bottom">
                                <div class="col-6 text-center border-end py-3">
                                  
                                  <strong>550561</strong>
                                  <small class="text-muted">Followers</small>
                                </div>
                                <div class="col-6 text-center py-3">
                                  <strong>56K</strong>
                                  <small class="text-muted">Following</small>
                                </div>
                              </div>
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                  <span class="text-muted small">Birth Date</span>
                                  <strong>April 4, 2003</strong>
                                </li>
                                <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                    <span class="text-muted small">Language's:</span>
                                    <strong>English, German</strong>
                                  </li>
                                
                                <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                  <span class="text-muted small">Location</span>
                                  <strong>Brno, Czech Republic</strong>
                                </li>
                                <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                  <span class="text-muted small d-flex align-items-center">
                                    <span class="align-middle lh-1 me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
                                    Online
                                  </span>
                                  <div class="text-end">
                                    <a href="{{url('/profile')}}" class="btn btn-sm btn-primary">Follow</a>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>

                        </div>                 

                        <div class="col-md-8">                            
                            <div class="container m-2 p-2 bg-light rounded-3 h-100 w-100 bg-opacity-50">                           
                                   
                                <div class="container text-center">   
                                    <h3> Create Profile</h3>
                                    <b>Write your username, you must be Live in to generate the profile</b>
                                    <form>
                                        <div class="form-group row">                                            
                                             <div class="col-12 shadow p-2 mr-2 rounded-3 ">
                                                <input type="text" class="form-control" id="namemodel" placeholder="Insert name CB"> 
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <button class="btn-hover2 m-2 p-2 text-center" >Create Card</button>                                                
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <button class="btn-hover2 m-2 p-2 text-center" style="--highlight-color: #3fd9ffcc;" >Create Profile</button>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <button class="btn-hover2 m-2 p-2 text-center" style="--highlight-color: #ef3fffcc;" >Create Api</button>
                                            </div>
                                        </div>         
                                    </form>
                                </div>

                                <div class="container text-center p-2 m-2">                                       
                                    
                                <b> Token Authorization </b> <br>
                                <p>
                                   The link allows you to track your stats on Chaturbate and share data. You can create custom business cards 
                                   from botchatur or hire a professional to do it. 
                                   Check the chatur API documentation, you can share it with your moderator for better support.                                    
                                    how do i create the api  
                                    You can find this link in your profile in Settings & Privacy at the end
                                    Statistics
                                    Authorize your 3rd party stats
                                    url statsapi/authtoken/    
                                </p>
                                <h3>How Create Api Chatur</h3>                                       
                                <img width="1000" height="1000" loading="lazy" class="border rounded-3 shadow" srcset="{{ asset('temas/home/cb-api-230.png') }} 230w, 
                                {{ asset('temas/home/cb-api.png') }} 380w"
                                sizes="(max-width: 720px) 230px,(max-width: 1024px) 380px"
                                src="{{ asset('temas/home/cb-api-230.png') }}" alt="api chaturbe">
                               
                                <h3>Chatur Web</h3>
                                <p>Create easy Bio & Profiles </p>
                            </div>

                            </div>
                        </div>

                    </div>
                 
              </div>
        </section>
            
               <div class="container-fire">                
                    <div class="red flame"></div>
                    <div class="orange flame"></div>
                    <div class="yellow flame"></div>
                    <div class="white flame"></div>
                    <div class="blue circle"></div>
                    <div class="black circle"></div>
              </div>

    @endsection
