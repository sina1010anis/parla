<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parla</title>
    <link rel="shortcut icon" href="{{url('image/logo/'.$logo_footer->src)}}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div id="app" class="container-fluid box-am overflow-hidden">
    <div class="banner-up w-100 p-2 position-absolute" style="background-color: {{$banner_up->src}};left: 0;z-index: 20">
        <p class="text-center f-14 mb-0 color-b-100">{{$banner_up->name}}</p>
        <button type="button" class="btn-close position-absolute f-14 color-b-100" @click="hide_banner_up" style="top: 7px" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @yield('index')
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{mix('js/app.js')}}"></script>
</html>
