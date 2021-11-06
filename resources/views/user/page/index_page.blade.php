@extends('user.index')

@section('index')
    <div class="col-12 col-md-3 h-p-595 d-flex flex-column">
        <div class="w-100 p-2 h-148">
            <div class="bg-gh-d-g shadow-sm rounded-3 obj-center flex-column h-100">
                <p class="f-13 color-b-100">در حال ارسال</p>
                <p class="f-20 color-b-100">
                    <del>0</del>
                </p>
            </div>
        </div>
        <div class="w-100 p-2 h-148">
            <div class="bg-gh-d-g shadow-sm rounded-3 obj-center flex-column h-100">
                <p class="f-13 color-b-100">در حال پردازش</p>
                <p class="f-20 color-b-100">
                    <del>0</del>
                </p>
            </div>
        </div>
        <div class="w-100 p-2 h-148">
            <div class="bg-gh-d-g shadow-sm rounded-3 obj-center flex-column h-100">
                <p class="f-13 color-b-100">تحویل شده</p>
                <p class="f-20 color-b-100">
                    <del>0</del>
                </p>
            </div>
        </div>
        <div class="w-100 p-2 h-148">
            <div class="bg-gh-d-g shadow-sm rounded-3 obj-center flex-column h-100">
                <p class="f-13 color-b-100">در حال اماده سازی</p>
                <p class="f-20 color-b-100">
                    <del>0</del>
                </p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-9 row ms-0" style="height: 595px">
        <div class="col-12 p-2 p-md-4 h-50">
            <div class="bg-light h-100 rounded-3 p-2 overflow-hidden">
                <p class="f-13 color-b-700 font-S text-end">سبد خرید</p>
                <div class="line"></div>
                <div class="box-item-panel h-75 overflow-scroll">
                    @if($card_user->count() != 0)
                        @foreach($card_user as $card)
                            <div
                                id="card_user_{{$card->id}}"
                                class="w-100 my-2 p-2 position-relative shadow-sm rounded-3 d-flex justify-content-between align-items-center item-card-view"
                                style="height: 100px">
                                <img src="/image/product/{{$card->product->product->image}}" alt="" class="h-100">
                                <span class="font-Y color-b-700 f-11">قیمت کل : {{$card->total_price}}</span>
                                <span class="font-Y color-b-700 f-11">تعداد : {{$card->number}}</span>
                                <span class="font-Y color-b-700 f-11">نام : {{$card->product->product->name}}</span>
                                <span class="position-absolute model-color rounded-circle"
                                      style="background-image: url('/image/color/{{$card->color->code}}')"></span>
                                <span class="font-Y f-11 pointer" style="color: red"><i
                                        @click="delete_product_to_card({{$card->id}})"
                                        class="bi bi-trash"></i></span>
                            </div>
                        @endforeach
                    @else
                        <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="height: 100%">
                            <img style="width: 100px" src="/image/icon/card.png" alt="سبد خرید خالی است">
                            <p dir="rtl"  class="mt-2 color-b-400 font-S">سبد خرید خالی است !</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12 p-2 p-md-4 h-50">
            <div class="bg-light h-100 rounded-3 p-2 overflow-hidden">
                <p class="f-13 color-b-700 font-S text-end">فاکتورهای موفق</p>
                <div class="line"></div>
                <div class="box-item-panel h-75 overflow-scroll">
                    @if($card_user->count() != 0)
                        @foreach($card_user as $card)
                            <div
                                id="card_user_{{$card->id}}"
                                class="w-100 my-2 p-2 position-relative shadow-sm rounded-3 d-flex justify-content-between align-items-center item-card-view"
                                style="height: 100px">
                                <img src="/image/product/{{$card->product->product->image}}" alt="" class="h-100">
                                <span class="font-Y color-b-700 f-11">قیمت کل : {{$card->total_price}}</span>
                                <span class="font-Y color-b-700 f-11">تعداد : {{$card->number}}</span>
                                <span class="font-Y color-b-700 f-11">نام : {{$card->product->product->name}}</span>
                                <span class="position-absolute model-color rounded-circle"
                                      style="background-image: url('/image/color/{{$card->color->code}}')"></span>
                                <span class="font-Y f-11 pointer" style="color: red"><i
                                        @click="delete_product_to_card({{$card->id}})"
                                        class="bi bi-trash"></i></span>
                            </div>
                        @endforeach
                    @else
                        <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="height: 100%">
                            <img style="width: 100px" src="/image/icon/buy.png" alt="سبد خرید خالی است">
                            <p  dir="rtl" class="mt-2 color-b-400 font-S">فاکتور پیدا نشد !</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
