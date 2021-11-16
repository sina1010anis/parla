@extends('user.index')

@section('index')
    <div class="col-12 position-relative">
        <div><h5 class="text-end font-S my-2 color-b-600">ادرس ها</h5></div>
        <div class="line"></div>
        <i @click="open_page_3" class="bi bi-plus-circle-fill pointer" title="ادرس جدید"></i>
    </div>
    @if($address->count() != 0)
        <div class="col-12 overflow-scroll rounded-3 position-relative bg-white" style="height: 500px">
            <ul class="m-0 p-0">
                @foreach($address as $a)
                    <li class="w-100 p-3 pointer border rounded-3 mt-4">
                        <div class="form-check pointer">
                            <input @change="set_address({{$a->id}})" @if(auth()->user()->address_id == $a->id) checked @endif class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault{{$a->id}}">
                            <label dir="rtl" class="form-check-label f-14 color-b-600 pointer w-100 text-end" for="flexRadioDefault{{$a->id}}">
                                {{$a->city->name}} : {{$a->state->name}} - {{$a->address}}
                            </label>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <count-vue image="location.png" text="ادرسی ثبت نشده است !"></count-vue>
    @endif
    <div class="page-new page-new-address">
        <h6 class="text-center font-S my-2 color-b-600">ادرس جدید</h6>
        <div class="line"></div>
        <div class="row">
            <div class="col-md-6">
                <label for="state" class="form-label f-13 color-b-600">استان</label>
                <select v-model="address.state" name="state" class="form-login form-select form-select-sm" id="state">
                    @foreach($state as $s)
                        <option value="{{$s->id}}">{{$s->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="city" class="form-label f-13 color-b-600">شهر</label>
                <select v-model="address.city" name="city" class="form-login form-select form-select-sm" id="city">
                    @foreach($city as $s)
                        <option v-if="address.state == {{$s->city_id}}" value="{{$s->id}}">{{$s->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <textarea v-model="address.address" dir="rtl" placeholder="ادرس را وارد کنید ..." class="h-textarea w-textarea p-2 color-b-700 my-3 f-14 text-end" id="exampleFormControlTextarea1" rows="3" ></textarea>
            </div>
        </div>
        <button @click="new_address" type="button" class="btn btn-lg btn-red f-13 mt-3">ارسال</button>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            بستن
        </button>
    </div>
    <div class="page-new overflow-hidden page-tip">
        <h6 class="text-center font-S my-2 color-b-600"> سفارش محصول</h6>
        <div class="line"></div>
        <p class="f-12 text-center" style="color: red">
            اگر محصولی را سفارش داده اید و هنوز به دست شما نرسده است تا زمان تحویل گرفتن محصول ادرس را تغییر ندهید
        </p>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            بستن
        </button>
    </div>
@endsection
