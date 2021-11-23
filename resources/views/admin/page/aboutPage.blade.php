@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-12 bg-white p-4 rounded-3 shadow mt-2">
            <p class="f-16 font-S color-b-700 text-end">صفحه درباره شرکت(صفحه کد)</p>
            <form action="{{route('admin.edit.about')}}" method="post">
                @csrf
                <textarea id="editor" name="text" >{{$about->text}}</textarea>
                <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                    ارسال
                </button>
                <button @click="view_page_help_admin" type="button" class="btn btn-lg btn-warning f-13 ms-3 mt-3">
                    راهنما
                </button>
                <button @click="view_page_upload_photo" type="button" class="btn btn-lg btn-info text-white f-13 ms-3 mt-3">
                    گالری
                </button>
                <button @click="view_page_upload_video" type="button" class="btn btn-lg btn-primary text-white f-13 ms-3 mt-3">
                    ویدیو
                </button>
            </form>
            <p dir="rtl" class="font-S f-14 text-danger">ادرس پایه عکس ( /image/about/ )</p>
            <p dir="rtl" class="font-S f-14 text-danger">ادرس پایه فیلم ( /image/about/video/ )</p>
            <p dir="rtl" class="font-S f-14 text-danger">برای قرار دادن پوستر برای فیلم باید به جای فرمت mp4 از فرمت ogg استفاده کنید</p>
        </div>
        <div class="col-10 offset-1 mt-3 bg-white p-4 rounded-3 shadow text-center">
            {!! $about->title !!}
        </div>
        <div class="col-10 offset-1 mt-3 bg-white p-4 rounded-3 shadow">
            {!! $about->text !!}
        </div>
    </div>
    @include('admin.include.about.about')
@endsection

@section('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '#task-text' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <link rel="stylesheet" href="{{url('css/codemirror-5.64.0/lib/codemirror.css')}}">
    <link rel="stylesheet" href="{{url('css/codemirror-5.64.0/theme/dracula.css')}}">
    <script src="{{url('css/codemirror-5.64.0/lib/codemirror.js')}}"></script>
    <script src="{{url('css/codemirror-5.64.0/mode/xml/xml.js')}}"></script>
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
            lineNumbers: true,
            theme:'dracula'
        });
    </script>
@endsection
