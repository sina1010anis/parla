<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parla ({{auth()->user()->name}})</title>
    <link rel="shortcut icon" href="{{url('image/logo/'.$logo_footer->src)}}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
<div id="app" class="container-fluid box-am overflow-hidden">
    @include('front.include.hedare')
    @include('front.include.navbar')
    <div class="row">
        <div class="col-12 col-lg-9 my-3 order-2 order-lg-1">
            @yield('index')
        </div>
        <div class="col-12 col-lg-3  my-3 order-1 order-lg-2">
            @include('user.include.menu')
        </div>
    </div>
    @include('front.include.footer')
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{mix('js/app.js')}}"></script>
</html>




