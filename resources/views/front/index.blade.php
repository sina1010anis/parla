<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parla</title>
    <link rel="shortcut icon" href="{{url('image/design/parla.png')}}">
</head>
<body>
<div id="app" class="container-fluid box-am">
    <header-vue></header-vue>
    <nav-bar :menus="{{$menus}}" :sub_menus="{{$sub_menus}}"></nav-bar>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{url('js/app.js')}}"></script>
</html>
