<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .users{
            background: url('/images/home.jpg') no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 635px;
            background-position: center;
            position: relative;
            width: 100%;
            padding: 0px;
            }
            .overlay{
            background-color: rgba(97, 94, 94, 0.5);
            height: 635px;
            width: 100%;
            z-index: 4;
            position:absolute;
            }
        </style>
    </head>
    <body>
        <div class="overlay"></div>
        <div class="flex-center position-ref full-height users">

            <div class="content">
               
                <div class="links" style="z-index:5;position:relative">
                    <a href="/contactus/contact" style="color: rgb(22, 85, 80)">Contact Us</a>
                    <a href="/admin" style="color:  rgb(22, 85, 80)">Admin</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
