<div>
    <style>
        /* Simple button styling -- No animation */
        .btn-hoverfantasy.simple {
            font-size: 20px;
            font-weight: 200;
            letter-spacing: 1px;
            padding: 13px 50px 13px;
            outline: 0;
            border: 1px solid black;
            cursor: pointer;
            position: relative;
            background-color: rgba(0, 0, 0, 0);
        }

        .btn-hoverfantasy.simple::after {
            content: "";
            background-color: #dcbaff;
            width: 100%;
            z-index: -1;
            position: absolute;
            height: 100%;
            top: 7px;
            left: 7px;
        }

        /* Fill button styling */
        .btn-hoverfantasy.fill {
            font-size: 20px;
            font-weight: 200;
            letter-spacing: 1px;
            padding: 13px 50px 13px;
            outline: 0;
            border: 1px solid black;
            cursor: pointer;
            position: relative;
            background-color: rgba(0, 0, 0, 0);
        }

        .btn-hoverfantasy.fill::after {
            content: "";
            background-color: #ffe54c;
            width: 100%;
            z-index: -1;
            position: absolute;
            height: 100%;
            top: 7px;
            left: 7px;
            transition: 0.2s;
        }

        .btn-hoverfantasy.fill:hover::after {
            top: 0px;
            left: 0px;
        }

        /* Slide button styling */
        .btn-hoverfantasy.slide {
            font-size: 20px;
            font-weight: 200;
            letter-spacing: 1px;
            padding: 13px 30px 13px;
            outline: 0;
            border: 1px solid black;
            cursor: pointer;
            position: relative;
            background-color: rgba(0, 0, 0, 0);
        }

        .btn-hoverfantasy.slide i {
            opacity: 0;
            font-size: 13px;
            transition: 0.2s;
            position: absolute;
            right: 10px;
            top: 21px;
            transition: transform 1;
        }

        .btn-hoverfantasy.slide div {
            transition: transform 0.8s;
        }

        .btn-hoverfantasy.slide:hover div {
            transform: translateX(-6px);
        }

        .btn-hoverfantasy.slide::after {
            content: "";
            background-color: #66f2d5;
            width: 100%;
            z-index: -1;
            position: absolute;
            height: 100%;
            top: 7px;
            left: 7px;
        }

        .btn-hoverfantasy.slide:hover i {
            opacity: 1;
            transform: translateX(-6px);
        }
    </style>
    <section>
        <button class="btn-hoverfantasy simple w-100 mb-3">Simple Button</button>
        <button class="btn-hoverfantasy fill">Fill Button</button>
        <button class="btn-hoverfantasy slide">Slide Button<i>&rarr;</i></button>
    </section>
    <script></script>
    <?php ?>

</div>
