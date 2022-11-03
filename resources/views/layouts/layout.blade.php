<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SVET-SKG</title>
        <meta name="description" content="Компания «SVET-SKG» разрабатывает, производит и внедряет новые системы освещения на базе светодиодных технологий.">
        <meta name="keywords" content="SVET-SKG, свет, светильник, светодиод.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" href=../title.png">

        <link rel="icon" href="{{ Vite::asset('resources/images/title.png') }}">

    </head>
    <body style="min-height: 100vh; display: flex; flex-direction: column;" id="home">
        @yield("content")
        @include("partials.footer")
        <a class="js-link" href="header">
            <div class="up-scroll">
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
            </div>
        </a>

        <script src="https://www.google.com/recaptcha/api.js" async defer>
        </script>
  </body>
    @vite(['resources/css/bootstrap.scss', 'resources/js/app.js'])
</html>
