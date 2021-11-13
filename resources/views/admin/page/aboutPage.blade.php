@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-12 bg-white p-4 rounded-3 shadow">
            <p class="f-16 font-S color-b-700 text-end">صفحه درباره شرکت</p>
            <form action="{{route('admin.edit.about')}}" method="post">
                @csrf
                <input name="title" type="text" placeholder="موضوع" class="form-control my-2 form-control-lg form-login f-12 color-b-600 text-end">
                <textarea name="text" class="form-control form-login f-12 color-b-600"></textarea>
                <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                    ارسال
                </button>
                <button @click="view_page_help_admin" type="button" class="btn btn-lg btn-warning f-13 ms-3 mt-3">
                    راهنما
                </button>

            </form>
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
