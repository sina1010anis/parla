@extends('user.index')

@section('index')
    <div class="col-12 position-relative">
        <div><h5 class="text-end font-S my-2 color-b-600"> سفارش محصول خاص</h5></div>
        <div class="line"></div>
        <i @click="open_page_2" class="bi bi-plus-circle-fill pointer" title="محصول جدید"></i>
    </div>
    <div class="col-12 overflow-scroll rounded-3 position-relative row" style="height: 500px">
        @if($customs->count() != 0)
            @foreach($customs as $custom)
                <a class="card d-inline-block m-2 " style="width: 18rem;text-decoration: none!important;">
                    <img src="{{url('image/custom/'.$custom->image)}}" class="card-img-top" alt="custom">
                    <div class="card-body color-b-600 f-14">
                        <p align="center" class="card-text">{{$custom->text}}</p>
                    </div>
                    <div class="card-footer">
                        <p v-if="{{$custom->status}} == 0" class="text-muted text-center text-primary f-13">درحال
                            برسی</p>
                        <p v-if="{{$custom->status}} == 1" style="color: #00d200" class="text-muted text-center f-13">
                            تایید شده در اویل وقت پشتیبان پیام می دهد</p>
                        <p v-if="{{$custom->status}} == 2" style="color: red" class="text-muted text-center f-13">طرح رد
                            شده است به دلیل نامفهوم بودن عکس</p>
                        <p v-if="{{$custom->status}} == 3" style="color: red" class="text-muted text-center f-13">طرح رد
                            شده است به دلیل کامل نبود توضیحات</p>
                    </div>
                </a>
            @endforeach
        @else
            <count-vue image="tools.png" text="محصولی یافت نشد !"></count-vue>
        @endif
    </div>
    <div class="page-new page-new-2 overflow-hidden">
        <h6 class="text-center font-S my-2 color-b-600"> سفارش محصول</h6>
        <div class="line"></div>
        <form action="{{route('user.new.custom')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formFileSm" class="form-label d-block w-100 text-end f-13 color-b-600">اپلود عکس
                    محصول</label>
                <input class="form-control form-control-sm" name="image" id="formFileSm" type="file">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label d-block w-100 text-end f-13 color-b-600">توضیحات
                    کامل</label>
                <textarea name="text" class="form-control bg-light text-end f-13 color-b-600" dir="rtl"
                          placeholder="توضیحات ..." id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-red f-13 mt-3">ارسال</button>
            <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
                بستن
            </button>
        </form>

    </div>
    @if(!\Illuminate\Support\Facades\Cookie::has('custom_'.auth()->user()->id))
        <div class="page-new overflow-hidden page-tip">
            <h6 class="text-center font-S my-2 color-b-600"> سفارش محصول</h6>
            <div class="line"></div>
            <p class="f-12 text-center" style="color: red">
                برای سفارش محصولات خاص لطفا علامت + در بالا را کلیک کنید و عکس محصول مورد نظر و همچنین توضیحات مبنی بر
                اندازه رنگ و... را کامل توضیح دهید در اولین فرصت تیم پشتیبانی در بخش پشتیبانی با شما ارتباط میگیرند
            </p>
            <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
                بستن
            </button>
        </div>
    @endif
@endsection
