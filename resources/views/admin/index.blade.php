<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل مدریت parla</title>
    <link rel="shortcut icon" href="{{url('image/logo/'.$logo_footer->src)}}">
</head>
<body>
<div id="app">
    @include('admin.include.menu')
    <div class="container-fluid overflow-scroll" style="height: 100vh">
        @include('admin.include.header')
        @include('errors.formAuth')
        @yield('admin')
    </div>
    <blur-vue></blur-vue>
</div>
</body>
<script src="{{url('js/app.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
@yield('script')
</html>
