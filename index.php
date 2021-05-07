

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/00acf4edec.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/00acf4edec.js" crossorigin="anonymous"></script>
    <title>portfolio</title>
    <style>
        *{
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            user-select: none;
            transition: all 1s ease-in-out;
        }

        #home {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('https://www.dropbox.com/s/givcvquwfp3o6to/port5.jpg?raw=1');
            background-repeat: no-repeat;
            background-size: cover;
            color: #b1aea9;
            font-size: 5vmax;
            overflow: hidden;
        }

        nav {
            width: 100%;
            height: 40px;
            background: transparent;
            position: fixed;
            top: 0;
            font-size: 2.3vmax;
            padding: 5px 10px;
            color: #b33939;
            z-index: 1;
        }

        nav ul {
            position: absolute;
            top: 0;
            margin: 0;
            padding: 0;
            right: 10px;
            list-style-type: none;
        }

        nav ul li {
            float: left;
            margin: 5px 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #b33939;
        }

        nav ul li a:hover {
            color: #f1c40f;
            font-size: 2.4vmax;
        }

        #cuntent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-weight: 900;
        }

        #status {
            display: flex;
            flex-wrap: nowrap;
            width: 100vw;
            animation: moving 10s infinite 3s forwards;
            font-size: 3vmax;
            color: #b33939;
            margin-top: 10px;
            letter-spacing: 0.25vw;
        }

        #status span {
            min-width: 100%;
            justify-content: center;
        }

        @keyframes moving {
            0% {
                opacity: 1;
                transform: translate(0);
            }

            10% {
                opacity: 0;
            }

            25% {
                opacity: 1;
                transform: translate(-100%);
            }

            35% {
                opacity: 0;
            }

            50% {
                opacity: 1;
                transform: translate(-200%);
            }

            60% {
                opacity: 0;
            }

            75% {
                opacity: 1;
                transform: translate(-300%);
            }

            85% {
                opacity: 0;
            }

            100% {
                opacity: 1;
                transform: translateX(-400%);
            }
        }




        .container {
            position: relative;
            margin: 30px;
        }

        .hover {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3vmax;
            text-align: center;
            opacity: 0;

        }


        .head {
            font-size: 3vmax;
        }

        @media screen and (max-width:800px) {
            nav {
                font-size: 3vmax;
                padding: 5px 10px;
            }

            nav ul {
                position: absolute;
                top: 0;
                margin: 0;
                padding: 10px 20px;
                left: 0;
                list-style-type: none;
                background: white;
                height: 100vh;
                width: 50%;
                transform: translateX(-110%);
                transition: all 1s ease;
            }

            nav ul li {
                padding: 15px 20px;
                /*border-bottom: 1px solid #000;*/
            }

            nav ul li a:hover {
                color: #f1c40f;
                font-size: 3.5vmax;
            }

            #m {
                position: absolute;
                top: 10px;
                right: 10px;
                width: 35px;
                height: 25px;
                background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNTAiIGhlaWdodD0iNTAiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDE3MnYtMTcyaDE3MnYxNzJ6IiBmaWxsPSJub25lIj48L3BhdGg+PGcgZmlsbD0iI2IzMzkzOSI+PHBhdGggZD0iTTAsMzAuOTZ2Ni44OGgxNzJ2LTYuODh6TTAsODIuNTZ2Ni44OGgxNzJ2LTYuODh6TTAsMTM0LjE2djYuODhoMTcydi02Ljg4eiI+PC9wYXRoPjwvZz48L2c+PC9zdmc+') 50% 50% no-repeat;
                background-size: 100% 100%;
            }

            #m:hover+ul {
                transform: translateX(0);
            }

            ul:hover {
                transform: translateX(0);
            }

            #home {
                font-size: 6vmax;
            }

            #status {
                font-size: 3vmax;
            }

            .head {
                font-size: 4.5vmax;
            }

            .my {
                margin: 0px;
                padding-right: 10px;
                padding-left: 10px;
            }

            .slideshow {
                margin: 0 auto;
                padding-top: 25px;
                height: 350px;
                background: hide;
                box-sizing: border-box;
                width: 50%;
                height: 50%;
            }

            .content {
                margin: auto;
                width: 95px;
                perspective: 1000px;
                position: relative;
                padding-top: 10px;
            }

            .content-carrousel {
                width: 100%;
                position: absolute;
                float: right;
                animation: rotar 15s infinite linear;
                transform-style: preserve-3d;
            }

            .content-carrousel:hover {
                animation-play-state: paused;
                cursor: pointer;
            }

            .content-carrousel figure {
                width: 100%;
                height: 60px;
                border: 1px solid #4d444d;
                overflow: hidden;
                position: absolute;
            }

            .content-carrousel figure:nth-child(1) {
                transform: rotateY(0deg) translateZ(150px);
            }

            .content-carrousel figure:nth-child(2) {
                transform: rotateY(40deg) translateZ(150px);
            }

            .content-carrousel figure:nth-child(3) {
                transform: rotateY(80deg) translateZ(150px);
            }

            .content-carrousel figure:nth-child(4) {
                transform: rotateY(120deg) translateZ(150px);
            }

            .content-carrousel figure:nth-child(5) {
                transform: rotateY(160deg) translateZ(150px);
            }

            .content-carrousel figure:nth-child(6) {
                transform: rotateY(200deg) translateZ(150px);
            }

            .content-carrousel figure:nth-child(7) {
                transform: rotateY(240deg) translateZ(150px);
            }

            .content-carrousel figure:nth-child(8) {
                transform: rotateY(280deg) translateZ(150px);
            }

            .content-carrousel figure:nth-child(9) {
                transform: rotateY(320deg) translateZ(150px);
            }

            .shadow {
                position: absolute;
                box-shadow: 0 0 20px 0 #000;
                border-radius: 2px;
            }

            .content-carrousel img {
                image-rendering: auto;
                transition: all 150ms;
                width: 100%;
                height: 100%;
            }

            .content-carrousel img:hover {
                transform: scale(1.2);
                transition: all 150ms;
            }

            @keyframes rotar {
                from {
                    transform: rotateY(0deg);
                }

                to {
                    transform: rotateY(360deg);
                }
            }

            *{
                padding: 0;
                margin: 0;
                font-family: georgia, serif;
            }



            .span{
                color: hotpink;
            }


            .main {
                height: 70vh;
                width: 100vw;
                background: #aaa;
                display: grid;
                place-items: center;
            }

            .contact_form {
                width: 80vw;
                background: white;
                text-align: center;
                padding: 30px 0;
                border-radius: 15px;
                box-shadow: 5px 5px 12px 0 #000;
            }

            .contact_form label {
                font-size: 1em;
                font-weight: 600;
                text-transform: uppercase;
                display: inline-block;
                margin: 10px 0 5px 0;
            }

            .contact_form label::after,
            .contact_form label::before {
                content: "👇";
            }

            .input {
                outline: none;
                border: 2px solid blue;
                border-radius: 20px;
                padding: 10px 30px;
                transition: 1s;
            }

            .input:focus {
                box-shadow: 0 0 4px 4px red;
                transform: scale(1.1);
            }

            input.msg {
                height: 30vw;
            }

            .contact_form .submit {
                border: none;
                outline: none;
                box-shadow: 0 0 1px 2px red;
                border-radius: 10px;
                padding: 5px 10px;
                background: #4caf50;
                color: white;
                font-size: 1.3em;
                transition: 300ms;
                margin-top: 10px;
            }

            .contact_form .submit:active {
                transform: scale(0.6);
                box-shadow: 0 0 14px 10px red;
            }

            #px {
                color: green;
                font-size: 30px;
                text-color: green;
                text-shadow: 3px 5px 10px red;
                text-align: center;
                vertical-align: middle;
                border: 1px dotted;
            }

            p.px {
                color: blue;
            }




            #about {
                min-height: 100vh;
                position: relative;
                width: 100%;
                background: #fff;
                display: flex;
                justify-content: center;
            }

            #about header {
                position: absolute;
                top: 60px;
                color: #c23616;
                font-weight: 900;
            }

            #details {
                position: absolute;
                top: 100px;
                margin-top: 50px;
                width: 85%;
                height: 70%;
                font-size: 2vmax;
            }

            #profile {
                width: 400px;
                height: 500px;
                float: right;
                margin-left: 15px;
                border-radius: 20px;
                box-shadow: 0 0 5px #000;
            }

            #skills {
                min-height: 100vh;
                position: relative;
                width: 100%;
                background: #54a0ff;
                overflow: hidden;
            }

            #flex {
                width: 100%;
                min-height: 100vh;
                display: flex;
                flex-wrap: wrap;
                padding-top: 130px;
            }

            .icons {
                width: 144px;
                height: 144px;
                margin-right: 5px;
            }

            progress {
                height: 8px;
                position: absolute;
                top: 70px;
                width: 300px;
            }

            progress[value] {
                appearance: none;
                border: none;
            }

            progress[value]::-webkit-progress-bar {
                background-color: #eee;
                border-radius: 2px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;
            }

            progress[value]::-webkit-progress-value {
                background: -webkit-linear-gradient(60deg, #56ab2f, #a8e063);
                border-radius: 2px;
            }

            .icon {
                margin: 0px 200px;
                position: relative;
            }

            #skills header {
                position: absolute;
                top: 60px;
                left: 50%;
                transform: translateX(-50%);
                color: #c23616;
                font-weight: 900;
            }

            #profile {
                width: 150px;
                height: 200px;
                float: right;
                margin-left: 15px;
                border-radius: 5px;
                box-shadow: 0 0 3px #000;
            }

            #home {
                font-size: 6vmax;
            }

            #status {
                font-size: 3vmax;
            }

            .head {
                font-size: 4.5vmax;
            }

            #details {
                top: 80px;
                width: 95%;
                font-size: 3vmax;
            }

            .icon {
                margin: 0px 200px 0 20px;
            }

            .icons {
                width: 100px;
                height: 100px;
            }

            progress {
                height: 6px;
                top: 50px;
                width: 200px;
            }






            projects{
                background-color: black;
            }

            a {
                text-decoration: black;
                color: white;
                display: inline-block;
            }

            .a {
                background-color: black;
                text-align: center;
                height: 40px;
                font-size: 30px;
                border-radius: 25px;
                box-shadow: 5px 5px 15px #ff0000;
                font-family: fantasy;
                font-weight: bold;
                font-style: normal;
            }


            header {
                color: black;
                font-size: 40px;
                text-align: center;
                text-shadow: 2px 2px red;
                border: 1px red;
            }

            p {
                font-family: fantasy;
            }

            .b {
                background-color: black;
                text-align: center;
                height: 40px;
                font-size: 30px;
                border-radius: 25px;
                box-shadow: 5px 5px 15px orange;
                font-family: fantasy;
                font-weight: bold;
                font-style: normal;
            }

            .c {
                background-color: black;
                text-align: center;
                height: 40px;
                font-size: 30px;
                border-radius: 25px;
                box-shadow: 5px 5px 15px #ffff00;
                font-family: fantasy;
                font-weight: bold;
                font-style: normal;
            }

            .d {
                background-color: black;
                text-align: center;
                height: 40px;
                font-size: 30px;
                border-radius: 25px;
                box-shadow: 5px 5px 15px #00ff00;
                font-family: fantasy;
                font-weight: bold;
                font-style: normal;
            }

            .e {
                background-color: black;
                text-align: center;
                height: 40px;
                font-size: 30px;
                border-radius: 25px;
                box-shadow: 5px 5px 15px #00ffff;
                font-family: fantasy;
                font-weight: bold;
                font-style: normal;
            }

            .f {
                background-color: black;
                text-align: center;
                height: 40px;
                font-size: 30px;
                border-radius: 25px;
                box-shadow: 5px 5px 15px #0000ff;
                font-family: fantasy;
                font-weight: bold;
                font-style: normal;
            }

            .g {
                background-color: black;
                text-align: center;
                height: 40px;
                font-size: 30px;
                border-radius: 25px;
                box-shadow: 5px 5px 15px #ff00ff;
                font-family: fantasy;
                font-weight: bold;
                font-style: normal;
            }

            a {
                display: block;

                text-decoration: none;
                color: black;

                background-color: #000000;
                color: white;
                border-radius: 25px;

                margin-bottom: 5px;
                padding-top: 5px;
                padding-left: 7px;
            }

            a:hover {
                background-color: #ffffff;
                color: #000000;
            }

            .MenuBar a:active {
                background: radial-gradient(#142843, #864362);
                margin-left: 5px;
                width: 130px;
                height: 25px;
            }

            h3 {
                color: orange;
                font-size: 30px;
                font-weight: bold;
                font-family: "Courier New", Courier, monospace;
                text-shadow:
                    0 1px 0 red,
                    0 2px 0 orange,
                    0 3px 0 #ff0,
                    0 4px 0 #0f0,
                    0 5px 0 #0ff,
                    0 6px 0 #00f,
                    0 7px 0 #f0f,
                    0 8px 0 #100,
                    0 9px 0 #000,
                    0 6px 1px rgba(0, 0, 0, .1),
                    0 0 5px rgba(0, 0, 0, .1),
                    0 1px 3px rgba(0, 0, 0, .3),
                    0 3px 5px rgba(0, 0, 0, .2),
                    0 5px 10px rgba(0, 0, 0, .25),
                    0 10px 10px rgba(0, 0, 0, .2),
                    0 20px 20px rgba(0, 0, 0, .15)
            }
    </style>
</head>

<body>


    <div id="home">
        <br>

        <div>
            <p id="px">printTime</p>

        </div>

        <div class="batary">
            <h6>
                <p>Your <span class="product" style="color:hotpink;"></span> has <span class="battery" style="color:hotpink;"></span>% of battery.</p>
            </h6>


            <div class="my">
                <section class="slideshow">
                    <div class="content">
                        <div class="content-carrousel">
                            <figure class="shadow"><img src="img1.jpeg"></figure>
                            <figure class="shadow"><img src="img2.jpeg"></figure>
                            <figure class="shadow"><img src="img3.jpeg"></figure>
                            <figure class="shadow"><img src="img4.jpeg"></figure>
                            <figure class="shadow"><img src="img5.jpeg"></figure>
                            <figure class="shadow"><img src="img6.jpeg"></figure>
                            <figure class="shadow"><img src="img7.jpeg"></figure>
                            <figure class="shadow"><img src="img8.jpeg"></figure>
                            <figure class="shadow"><img src="img9.jpeg"></figure>
                        </div>
                    </div>
                </section>
            </div>


            <br>

            <div id="cuntent">
                Hello, I am<br>
                Rashid Ahmed<br>
                <div id="status"><span>A Web Developer</span>
                    <span>A UI Designer</span>
                    <span>A Interactive Designer</span>
                    <span>A Creative Guy</span>
                    <span>A Web Developer</span>
                </div>
            </div>

            <br><br><br><br><br><br>
            <div style="margin-top: 5px;">
                <img src="https://img.icons8.com/color/48/000000/whatsapp.png" />
                <img src="https://img.icons8.com/color/48/000000/facebook-new.png" />
                <img src="https://img.icons8.com/color/48/000000/twitter.png" />
                <img src="https://img.icons8.com/color/48/000000/instagram.png" />
                <img src="https://img.icons8.com/color/48/000000/phone.png" />
                <img src="https://img.icons8.com/color/48/000000/github.png" />
            </div>


        </div>
        <nav id="a">Rashid
            <div id="m"></div>
            <ul id="u">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>


    </div>

   

    <div id="about">
        <header class="head">ABOUT ME</header>
        <p id="details">
            <img id="profile" src="https://www.dropbox.com/s/q1ak98bevndufsk/vamsi.jpg?raw=1" alt="">
            Hi, My name krishna vamsi dhulipalla, nice to meet you! learner at sololearn<br>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut justo est. Nullam condimentum, libero at accumsan venenatis, neque nibh aliquam nisi, non hendrerit elit libero nec massa. Donec finibus justo et tortor rutrum, quis condimentum lorem bibendum. Cras dictum luctus purus, ut rutrum ante. Quisque eget velit finibus felis varius vestibulum.
        </p>
    </div>
    <div id="skills">
        <header class="head">SKILLS</header>
        <div id="flex">
            <div class="icon" data-aos="fade-right">
                <img class="icons" src="https://img.icons8.com/color/144/000000/html-5.png" /><progress value="85" max="100"></progress>
            </div>
            <div class="icon" data-aos="fade-left">
                <img class="icons" src="https://img.icons8.com/color/144/000000/css3.png" /><progress value="80" max="100"></progress>
            </div>
            <div class="icon" data-aos="fade-right">
                <img class="icons" src="https://img.icons8.com/color/144/000000/javascript.png" /><progress value="75" max="100"></progress>
            </div>
            <div class="icon" data-aos="fade-left">
                <img class="icons" src="https://img.icons8.com/color/144/000000/python.png" /><progress value="75" max="100"></progress>
            </div>
            <div class="icon" data-aos="fade-right">
                <img class="icons" src="https://img.icons8.com/officel/144/000000/php-logo.png" /><progress value="40" max="100"></progress>
            </div>
            <div class="icon" data-aos="fade-left">
                <img class="icons" src="https://img.icons8.com/color/144/000000/django.png" /><progress value="20" max="100"></progress>
            </div>
        </div>
    </div>

    </div>

    <div id="projects">

        <header>
            <h3>My Projects</h3>
        </header>

        <br>

        <div class="a"><a href="https://code.sololearn.com/WsDnpAaV8idA/?ref=app">Clock</a></div><br />
        <div class="b"><a href="https://code.sololearn.com/WbcBT4518s8I/?ref=app">Время</a></div><br />
        <div class="c"><a href="https://code.sololearn.com/WeHb8Ao17I3t/?ref=app">Animation</a></div><br />
        <div class="d"><a href="https://code.sololearn.com/WrYA1UnHVciK/?ref=app">Animation 2.0</a></div><br />
        <div class="e"><a href="https://code.sololearn.com/WGUmOFKXB5wf/?ref=app">Animation 2.1</a></div><br />
        <div class="f"><a href="https://code.sololearn.com/W3I110BqCs9X/?ref=app">Animation 2.2</a></div><br />
        <div class="g"><a href="https://code.sololearn.com/WG9uTAb8E6LL/?ref=app">Error 404</a></div><br />
        <div class="a"><a href="https://code.sololearn.com/c48w8Gj7Nzw9/?ref=app">Cod dostypa</a></div><br />
        <div class="b"><a href="https://code.sololearn.com/cOBXwm5Q6Vzi/?ref=app">How old are you</a></div><br />
        <div class="c"><a href="https://code.sololearn.com/W7cL0yl9QR8O/?ref=app">My blog</a></div><br />

    </div>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 800
        });
    </script>



    <div id="contact" class="main">
        <div class="contact_form">
            <h2>Contact Form</h2>
            <label>Name</label><br /><input class="name input"><br />
            <label>Email</label><br /><input class="email input"><br />
            <label>Phone Number</label><br /><input class="phn input"><br />
            <label>Messege</label><br /><textarea class="msg input"></textarea>
            <br />
            <input type="button" class="submit" value="submit">
        </div>
    </div>

    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.6/platform.min.js" integrity="sha512-eYPrm8TgYWg3aa6tvSRZjN4v0Z9Qx69q3RhfSj+Mf89QqwOMqmwSlsVqfp4N8NVAcZe/YeUhh9x/nM2CAOp6cA==" crossorigin="anonymous"></script>



    <script>
        function getData(className, cmd, opt = "null") {
            var cls = document.getElementsByClassName(className);
            var clsLength = cls.length;
            for (i = 0; i < clsLength; i++) {
                cls[i].textContent = cmd;
                if (cmd == null) {
                    cls[i].textContent = "Not Defined";
                }
            }
        }




        getData("product", platform.product);


        navigator.getBattery().then((battery) => {
            document.getElementsByClassName("battery")[0].textContent = battery.level * 100
        });
    </script>
    <script>
        function printTime() {
            var d = new Date();
            var hours = d.getHours();
            var mins = d.getMinutes();
            var secs = d.getSeconds();
            var day = d.getDate();
            var month = d.getMonth();
            var year = d.getFullYear();
            if (hours > 12) {
                hours = hours - 12;
                noon = "PM";
            } else {
                hours = hours;
                noon = "AM";
            }
            document.getElementById("px").innerHTML = hours + ":" + mins + ":" + secs + noon + "\n" + day + ":" + month + ":" + year;
        }
        setInterval(printTime, 1);
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script>
        swal({

            title: "Welcome",
            text: "Welcome to My Profile Thanks for gift 🎁 me your golden time",
            icon: "success",
            button: "Continue Watching",
        });
    </script>



</body>

</html>