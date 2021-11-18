@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-6 bg-white p-4 rounded-3 shadow">
            <p class="f-16 font-S color-b-700 text-end">اسلایدر صفحه ثبت نام</p>
            <form action="{{route('admin.new.slider.login')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">نام </label>
                    <input name="name" dir="rtl" class="form-control text-end"
                           type="text" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">اپلود عکس</label>
                    <input name="image" class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">موقعیت</label>
                    <select name="location" class="form-select form-select" aria-label="Default select example">
                        <option value="0">صفحه ثبت نام</option>
                        <option value="1">صفحه عضویت</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                    ارسال
                </button>
            </form>
        </div>
        <div class="col-md-6 mt-3 bg-white p-4 rounded-3 shadow text-center">
            <div class="mb-3 p-2">
                <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">منو</label>
                <select v-model="id_menu_image" class="form-select form-select" aria-label="Default select example">
                        <option value="0">ثبت نام</option>
                        <option value="1">عضویت</option>
                </select>
            </div>
            @foreach($slider_login as $slider)
                <div v-if="id_menu_image == {{$slider->location}}" class="col-12 col-md-6 s-5 d-inline-block">
                    <div class="grope-item-banner-center overflow-hidden mt-3">
                        <a href="">
                            <img src="/image/slider/sliderLoginRegister/{{$slider->src}}" class="rounded-3 image-slider"
                                 alt="{{$slider->name}}" title="{{$slider->name}}" loading="lazy">
                        </a>
                    </div>
                    <button @click="view_page_delete_image_center('{{$slider->id}}')" class="btn btn-danger">حذف
                    </button>
                </div>
            @endforeach
        </div>
    </div>
    <div class="page-new page-new-delete-banner-center-as overflow-hidden">
        <h6 class="text-center font-S my-2 color-b-600">اخطار !</h6>
        <div class="line"></div>
        <div class="row">
            <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ایا از انجام این عمل مطمعن هستید ؟</div>
        </div>
        <button @click="delete_image_center('slider_login')" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
            بله
        </button>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            خیر
        </button>
    </div>
@endsection
@section('script')

@endsection
