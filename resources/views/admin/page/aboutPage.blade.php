@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-12 bg-white p-4 rounded-3 shadow">
            <p class="f-16 font-S color-b-700 text-end">صفحه درباره شرکت(صقحه ویرایش)</p>
            <form action="{{route('admin.edit.about')}}" method="post">
                @csrf
                <textarea style="height: 300px!important;" id="task-text" name="text" class="form-control form-login f-12 color-b-600">{!! $about->text !!}</textarea>
                <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                    ارسال
                </button>
            </form>
        </div>
        <div class="col-12 bg-white p-4 rounded-3 shadow mt-2">
            <p class="f-16 font-S color-b-700 text-end">صفحه درباره شرکت(صقحه کد)</p>
            <form action="{{route('admin.edit.about')}}" method="post">
                @csrf
                <textarea id="task-text" name="text" class="form-control form-login f-12 color-b-600">{{$about->text}}</textarea>
                <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                    ارسال
                </button>
                <button @click="view_page_help_admin" type="button" class="btn btn-lg btn-warning f-13 ms-3 mt-3">
                    راهنما
                </button>
                <button @click="view_page_upload_photo" type="button" class="btn btn-lg btn-info text-white f-13 ms-3 mt-3">
                    گالری
                </button>
            </form>
            <p class="font-S f-14 text-danger">ادرس پایه عکس ( src="/image/about/نام عکس" )</p>
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
@endsection
