<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parla</title>
    <link rel="shortcut icon" href="{{url('image/design/parla.png')}}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
<div id="app" class="container box-am overflow-hidden">
    <h5 style="border-radius:10px " class="shadow col-10 offset-1 my-4 border bg-white py-5 px-1 text-center color-b-600 font-S">{{$about->title}}</h5>
    <div style="border-radius:10px " class="shadow col-10 offset-1 my-4 border bg-white px-2 px-md-5 py-3 px-1 color-b-600 font-S">
        {!! $about->text !!}
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{mix('js/app.js')}}"></script>
</html>
