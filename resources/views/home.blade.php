<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/bg/smk1.png">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FF8C00;
                color: black;
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
                justify-content: left;
                padding-left: 15px;
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
                text-align: left;

            }
            .title {
                font-size: 55px;
            }
            .links > a {
                color: black;
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
            img {
              width: 300px;
              float: right;
              margin-top: auto;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
              <img src="/bg/smk1.png">
                <div class="title m-b-md">
                 Rekayasa Perangkat Lunak Smkn 1 Surabaya
                </div>

                <div class="links">
                  <a href="/datasiswa">Data Siswa</a>
                    <a href="/about">About</a>
                    <a href="https://github.com/laksonohafid">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>