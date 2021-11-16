@extends('user.index')

@section('index')
    <div class="col-12 position-relative">
        <div><h5 class="text-end font-S my-2 color-b-600">محاسبه قیمت فریم قاب</h5></div>
        <div class="line"></div>
    </div>
    <div class="col-12 rounded-3 position-relative row" style="height: auto">
        <div class="col-md-3 p-3 overflow-scroll" style="height: 500px">
            <div class=" ">
                @foreach($frames as $frame)
                    <div class="form-check">
                        <input @change="set_data_frame('{{$frame->code}}' , '{{$frame->price}}')" name="frame" class="form-check-input" type="radio" id="frame_{{$frame->id}}">
                        <label class="form-check-label" for="frame_{{$frame->id}}">
                            <img src="{{url('image/frame/'.$frame->image)}}" class="img-frame" alt="{{$frame->code}}">
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-9 p-3" style="height: 500px">
            <div><h5 class="text-end font-S my-2 color-b-800 text-end" dir="rtl"> کد فریم : @{{ (frame.code == null) ? '-----': frame.code }}</h5></div>
            <div class="line"></div>
            <div>
                <label for="inputEmail4" class="form-label d-block w-100 text-end color-b-600 f-12" dir="rtl">طول(m)</label>
                <input v-model="data_frame.w" type="number" class="form-control" id="inputEmail4">
            </div>
            <div>
                <label for="inputEmail4" class="form-label d-block w-100 text-end color-b-600 f-12" dir="rtl">عرض(m)</label>
                <input v-model="data_frame.h" type="number" class="form-control" id="inputEmail4">
            </div>
            <div class="w-100 my-5 ret position-relative" style="height: 100px">
                <p class="w-ret o-ret position-absolute f-12 color-b-500">@{{ data_frame.w }}m</p>
                <p class="h-ret o-ret position-absolute f-12 color-b-500">@{{ data_frame.h }}m</p>
            </div>
            <div>
                <b class="f-14 color-b-700" dir="rtl">@{{ (frame.price == null) ? '-----': frame.price }}</b>
                <span class="f-14 color-b-500" dir="rtl">قیمت هر متر :</span>
            </div>
            <div class="line"></div>
            <div>
                <span class="f-17 color-b-500">قیمت محاسبه شده :</span>
                <b class="f-17 color-b-700">@{{ ((data_frame.w + data_frame.h) * 2) * frame.price }}</b>
            </div>
        </div>
    </div>
    <div class="page-new overflow-hidden page-tip">
        <h6 class="text-center font-S my-2 color-b-600"> سفارش محصول</h6>
        <div class="line"></div>
        <p class="f-12 text-center" style="color: red">
            برای سفارش محصولات این بخش یعنی فریم قاب عکس باید قیمت را با استفاده از طول و عرض بدست اورید و برای سفارش
            این محصول به بخش پشتیبانی و درخواست خرید فریم قاب و همچین انداز دقیق و کد فریم را ارسال کنید
        </p>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            بستن
        </button>
    </div>

@endsection
