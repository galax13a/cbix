<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('cs/cards1.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

        body {
            font-family: 'Open Sans', sans-serif;


        }

        .section {
            background-color: #D9AFD9;
            background-image: linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%);

        }

        *:hover {
            -webkit-transition: all 1s ease;
            transition: all 1s ease;
        }

        section {
            float: left;
            width: 100%;
            background: #fff;
            /* fallback for old browsers */
            padding: 30px 0;
        }

        h1 {
            float: left;
            width: 100%;
            color: #232323;
            margin-bottom: 30px;
            font-size: 14px;
        }

        h1 span {
            font-family: 'Libre Baskerville', serif;
            display: block;
            font-size: 45px;
            text-transform: none;
            margin-bottom: 20px;
            margin-top: 30px;
            font-weight: 700
        }

        h1 a {
            color: #131313;
            font-weight: bold;
        }

        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: -40px;
            border: 5px solid rgb(85, 85, 71);

        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            max-width: 360px;
            margin: auto;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            transform: scale(1.03);
        }

        h2 {
            margin-top: -16px;
        }

        .card-text {
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .card-body {
            background: linear-gradient(270deg, #ff7f7f, #ffc757, #ffed77, #ffc757, #ff7f7f);
            background-size: 1400% 1400%;
            animation: gradient 15s ease infinite;
        }


        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .mini-content {
            padding: 10px;
            background-color: #8eebee;
            margin-bottom: 10px;

        }
    </style>
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="card profile-card-1">
                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb"
                            alt="profile-sample1" class="background" />
                        <img src="https://randomuser.me/api/portraits/women/20.jpg" alt="profile-image"
                            class="profile" />
                        <div class="card-content">
                            <h2>Savannah Fields<small>Engineer</small></h3>
                                <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a
                                        href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i
                                            class="fa fa-google-plus"></i></a></div>
                        </div>
                    </div>
                    <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p>
                </div>

                <div class="col-md-4">
                    <div class="card profile-card-2">
                        <div class="card-img-block">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                                alt="Card image cap">
                        </div>
                        <div class="card-body pt-5">
                            <img src="https://randomuser.me/api/portraits/men/64.jpg" alt="profile-image"
                                class="profile" />
                            <h5 class="card-title">Landon Hunt</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a
                                    href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i
                                        class="fa fa-google-plus"></i></a></div>
                        </div>
                    </div>
                    <p class="mt-3 w-100 float-left text-center"><strong>Social Profile Card</strong></p>
                </div>

                <!--Profile Card 3-->
                <div class="col-md-4">
                    <div class="card profile-card-3">
                        <div class="background-block">
                            <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                                alt="profile-sample1" class="background" />
                        </div>
                        <div class="profile-thumb-block">
                            <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image"
                                class="profile" />
                        </div>
                        <div class="card-content">
                            <h2>Justin Mccoy<small>Designer</small></h3>
                                <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a
                                        href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i
                                            class="fa fa-google-plus"></i></a></div>
                        </div>
                    </div>
                    <p class="mt-3 w-100 float-left text-center"><strong>Modren Profile Card</strong></p>
                </div>

                <!--Profile Card 4-->
                <div class="col-md-4 mt-4">
                    <div class="card profile-card-4">
                        <div class="card-img-block">
                            <div class="info-box">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                                alt="Card image cap">
                        </div>
                        <div class="card-body pt-5">
                            <img src="https://randomuser.me/api/portraits/women/14.jpg" alt="profile-image"
                                class="profile" />
                            <h5 class="card-title text-center">Gail Schmidt</h5>
                            <p class="card-text text-center">Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                            <div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a
                                    href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i
                                        class="fa fa-google-plus"></i></a></div>
                        </div>
                    </div>
                    <p class="mt-3 w-100 float-left text-center"><strong>Info block with hover</strong></p>
                </div>

                <!--Profile Card 5-->
                <div class="col-md-4 mt-4">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c"
                                alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                            <h5 class="card-title">Florence Garza</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                        </div>
                    </div>
                    <p class="mt-3 w-100 float-left text-center"><strong>Card with Floting Picture</strong></p>
                </div>

            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 shadow-lg">
                <div class="mini-content">
                    <h3>Share 1</h3>
                    <p>Contenido reducido 1</p>

                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="mini-content">
                    <h3>Share 2</h3>
                    <p>Contenido reducido 2</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="mini-content">
                    <h3>share 3</h3>
                    <p>Contenido reducido 3</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="mini-content">
                    <h3>Share 4</h3>
                    <p>Contenido reducido 4</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 ">
        <div class="col">

            <div class="card text-center ">
                <div class="card-header rounded-4">
                    <img src="https://roomimg.stream.highwebmedia.com/riw/{{ $profile['username'] }}.jpg"
                        class="profile-image mx-auto"> 
                    <h2><span class="badge bg-dark  shadow-lg rounded-4">{{ $profile['username'] }}</span></h2>
                </div>
                <div class="card-body">
                    <p class="card-text">Token Balance: {{ $profile['token_balance'] }}</p>
                    <p class="card-text">Tips in last hour: @isset($profile['tips_in_last_hour'])
                            {{ $profile['tips_in_last_hour'] }}
                        @else
                            N/A
                        @endisset
                    </p>
                    <p class="card-text">👆 Votes Up: {{ $profile['votes_up'] }}</p>
                    <p class="card-text">👇Votes Down: {{ $profile['votes_down'] }}</p>
                    <p class="card-text">Satisfaction Score: {{ $profile['satisfaction_score'] }}</p>
                    <p class="card-text">Last Broadcast: {{ $profile['last_broadcast'] }}</p>
                    <p class="card-text">Number of Followers: {{ number_format($profile['num_followers']) }}</p>

                    <p class="card-text">Time Online: {{ $profile['time_online'] }}</p>
                    <p class="card-text">Number of Viewers: {{ $profile['num_viewers'] }}</p>
                    <p class="card-text">Number of Registered Viewers: {{ $profile['num_registered_viewers'] }}</p>
                    <p class="card-text">Number of Tokened Viewers: {{ $profile['num_tokened_viewers'] }}</p>
                </div>
            </div>


            <div class="card profile-card-1">
                <img src="https://roomimg.stream.highwebmedia.com/riw/{{ $profile['username'] }}.jpg"
                    alt="profile-sample1" class="background" />
                <img src="https://roomimg.stream.highwebmedia.com/riw/{{ $profile['username'] }}.jpg"
                    alt="profile-image" class="profile" />
                <div class="card-content">

                    <h2>{{ $profile['username'] }}<small> {{ number_format($profile['token_balance']) }}
                            Tokens</small></h2>

                    👆 {{ $profile['votes_up'] }} | 👇 {{ $profile['votes_down'] }}
                    <br>
                    {{ gmdate('i', $profile['time_online']) }} min.
                    {{ gmdate('s', $profile['time_online']) }} seg
                    <p class="card-text">Follows: {{ number_format($profile['num_followers']) }}</p>
                    <p class="card-text">
                        Time Online:
                        {{ gmdate('i', $profile['time_online']) }} Min
                        {{ gmdate('s', $profile['time_online']) }} Seg.
                    </p>

                    <div class="icon-block d-none"><a href="#"><i class="fa fa-facebook"></i></a><a
                            href="#">
                            <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
