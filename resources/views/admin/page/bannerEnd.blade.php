@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-6  bg-white p-4 rounded-3 shadow">
            <p class="f-16 font-S color-b-700 text-end">بنر پایین</p>
            <form action="{{route('admin.edit.bannerUp' , ['model' => 'all' , 'target' => 'end'])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">متن بنر</label>
                    <input name="name" value="{{$banner_end->name}}" dir="rtl" class="form-control text-end"
                           type="text" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">ادرس</label>
                    <input name="href" value="{{$banner_end->href}}" class="form-control" type="text"
                           id="formFile">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">اپلود عکس</label>
                    <input name="image" class="form-control" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                    ارسال
                </button>
            </form>
        </div>
        <div class="col-md-6  mt-3 bg-white p-4 rounded-3 shadow text-center">
            <div class="p-2">
                <div class="overflow-hidden rounded-3 h-100 shadow">
                    <a href="{{$banner_end->href}}">
                        <img src="/image/banner/{{$banner_end->src}}" alt="{{$banner_end->name}}" style="width: 100%">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
