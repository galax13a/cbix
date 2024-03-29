<div>
    <?php ?>
    <style>
        h2.selected {
            background-color: var(--highlight-color, yellow);
            color: #000;
            /* Color de texto negro (puedes cambiarlo) */
            padding: 2px 5px;
            /* Espaciado interno para el fondo resaltado */
        }

        .game-line:after {
            position: absolute;
            content: '';
            bottom: -70px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #191919;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .join-bg {
            background: #191919;
            padding: 70px 60px;
            border-radius: 8px;
            margin: 40px 0 0;
            position: relative;
        }

        .col-lg-6 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (min-width: 992px) {
            .col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        h3 {
            margin-top: 0;
            margin-bottom: .5rem;
        }

        h3 {
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        h3 {
            font-size: 1.75rem;
        }

        .join-txt h3 {
            font-size: 38px;
            font-family: bb;
            color: white;
            text-transform: uppercase;
            line-height: 52px;
            padding: 5px 0 18px;
        }


        .join-txt p {
            font-family: br;
            font-size: 19px;
            color: #787878;
            padding-bottom: 48px;
        }

        .main-btn {
            padding: 15px 20px;
            color: white;
            font-size: 18px;
            font-family: bb;
            background: #e50914;
            position: relative;
            overflow: hidden;
            -webkit-transition: all linear .3s;
            -o-transition: all linear .3s;
            transition: all linear .3s;
            border-radius: 50px;
        }

        .main-btn:hover {
            color: #fff;
            background: #bf000a;
            cursor: pointer;
        }

        .join-img img {
            position: absolute;
            bottom: -70px;
        }


        @keyframes lineshine {
            100% {
                left: 95%;
                left: 95%;
            }

        }
    </style>
    <section>
        <div class="join-bg snipcss-foonk">
            <div class="row">
                <div class="col-4 join-txt">
                    <h2 class="selected" style="--highlight-color: yellow;">
                        Let's Play Together
                    </h2>
                    <h3>
                        Join Gamix eSports to Become next pro gamer Today!
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam assumenda fugiat veritatis,
                        mollitia. Nisi, quas.
                    </p>
                    <a href="login.html" class="main-btn custom-link">
                        Join Community
                    </a>
                </div>
                <div class="col-4 join-img">
                    <img src="https://epiktheme.com/demos/html/Gamix-Preview/demos/images/join-bg.png" alt="join-img"
                        class="">
                </div>
            </div>
        </div>
    </section>
    <script></script>

</div>
