@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-6 offset-md-3 bg-white p-4 rounded-3 shadow">
            <p class="f-16 font-S color-b-700 text-end">بنر وسط</p>
            <form action="{{route('admin.new.banner' , ['model' => 'all' , 'target' => 'center'])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">متن بنر</label>
                    <input name="name" placeholder="نام بنر" dir="rtl" class="form-control text-end"
                           type="text" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">ادرس</label>
                    <input name="href" placeholder="ادرس بنر"  class="form-control" type="text"
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
            <div class="row overflow-hidden">
                @foreach($banner_center as $banner)
                    <div class="col-12 col-md-6 s-5">
                        <div class="grope-item-banner-center overflow-hidden mt-3">
                            <a href="{{$banner->href}}">
                                <img src="/image/banner/{{$banner->src}}" class="rounded-3 image-slider" alt="{{$banner->name}}" title="{{$banner->name}}" loading="lazy">
                            </a>
                        </div>
                        <button @click="view_page_delete_image_center('{{$banner->id}}')" class="btn btn-danger">حذف</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="page-new page-new-delete-banner-center-as overflow-hidden">
        <h6 class="text-center font-S my-2 color-b-600">اخطار !</h6>
        <div class="line"></div>
        <div class="row">
            <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ایا از انجام این عمل مطمعن هستید ؟ </div>
        </div>
        <button @click="delete_image_center" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
            بله
        </button>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            خیر
        </button>
    </div>
@endsection
@section('script')

@endsection
