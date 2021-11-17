@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-6 offset-md-3 bg-white p-4 rounded-3 shadow">
            <p class="f-16 font-S color-b-700 text-end">اسلایدر اصلی</p>
            <form action="{{route('admin.new.slider')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">متن بنر</label>
                    <input name="name" dir="rtl" class="form-control text-end"
                           type="text" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">ادرس</label>
                    <input name="href" class="form-control" type="text"
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
        <div class="col-md-6 offset-md-3 mt-3 bg-white p-4 rounded-3 shadow text-center">
            @foreach($sliders as $slider)
                <div class="col-12 col-md-6 s-5 d-inline-block">
                    <div class="grope-item-banner-center overflow-hidden mt-3">
                        <a href="{{$slider->href}}">
                            <img src="/image/slider/{{$slider->src}}" class="rounded-3 image-slider" alt="{{$slider->name}}" title="{{$slider->name}}" loading="lazy">
                        </a>
                    </div>
                    <button @click="view_page_delete_image_center('{{$slider->id}}')" class="btn btn-danger">حذف</button>
                </div>
            @endforeach
        </div>
    </div>
    <div class="page-new page-new-delete-banner-center-as overflow-hidden">
        <h6 class="text-center font-S my-2 color-b-600">اخطار !</h6>
        <div class="line"></div>
        <div class="row">
            <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ایا از انجام این عمل مطمعن هستید ؟ </div>
        </div>
        <button @click="delete_image_center('slider')" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
            بله
        </button>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            خیر
        </button>
    </div>
@endsection
@section('script')

@endsection
