@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-6 offset-md-3 bg-white p-4 rounded-3 shadow">
            <p class="f-16 font-S color-b-700 text-end">صفحه لوگو</p>
            <form action="{{route('admin.edit.logo')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile"  class="form-label f-13 color-b-500">اپلود عکس</label>
                    <input name="image" class="form-control" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                    ارسال
                </button>
            </form>
        </div>
        <div class="col-md-6 offset-md-3 mt-3 bg-white p-4 rounded-3 shadow text-center">
            <img style="width: 100px;" src="{{url('/image/logo/'.$logo_footer->src)}}" alt="لوگو">
        </div>
    </div>
    @include('admin.include.about.about')
@endsection
