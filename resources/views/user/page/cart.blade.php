@extends('user.index')

@section('index')
    <div class="col-12 position-relative">
        <div><h5 class="text-end font-S my-2 color-b-600"> سبد خرید</h5></div>
        <div class="line"></div>
    </div>
    <div class="col-12 overflow-scroll rounded-3 position-relative row" style="height: 400px">
        @php
            $total_price = 0;
        @endphp
        @if($card_user->count() != 0)
            @foreach($card_user as $card)
                @php
                    $total_price += $card->total_price;
                @endphp
                <div
                    id="card_user_{{$card->id}}"
                    class="col-md-3 mx-md-2 my-2 p-2 position-relative shadow-sm rounded-3  item-card-view">
                    <img src="/image/product/{{$card->product->product->image}}" class="w-100" alt="">

                    <span class="position-absolute model-color rounded-circle"
                          style="background-image: url('/image/color/{{$card->color->code}}')"></span>
                    <span class="font-Y f-11 pointer" style="color: red"><i
                            @click="delete_product_to_card({{$card->id}})"
                            class="bi bi-trash"></i></span>
                    <p class="text-center color-b-600 f-12">{{$card->product->product->name}}</p>
                    <p class="text-center color-b-600 f-12">تعداد : {{$card->number}}</p>
                    <p class="text-center color-b-600 f-12">مدل : {{$card->product->name}}</p>
                    <div class="line"></div>
                    <p class="text-center f-13">قیمت کل : {{$card->total_price}}</p>
                    @if($card->product->product->discount != 0)
                        <p class="text-center f-13 " style="color: red"><b>تخفیف اعمال شده است</b></p>
                    @endif
                </div>
            @endforeach
        @else
            <count-vue image="card.png" text="سبد خرید خالی است !"></count-vue>
        @endif
    </div>
    @if($card_user->count() != 0)
        <div class="col-12 p-2 d-flex justify-content-between" style="height: 50px">
            <button @click="new_factor" class="btn btn-red align-items-center py-0 px-4">خرید</button>
            <span
                class="f-14 color-b-800 text-total-price-send-factor p-2 bg-light rounded-3">جمع کل : {{$total_price}}</span>
        </div>

        <div class="page-new">
            <h6 class="text-center font-S my-2 color-b-600">ارسال به درگاه</h6>
            <div class="line"></div>
            <div class="row">
                <p class="text-center f-13" style="color: red">برای پرداخت اطمینان دارید ؟</p>
            </div>
            <a href="{{route('user.send')}}" type="button" class="btn btn-lg btn-red f-13 mt-3">بله</a>
            <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
                خیر
            </button>
        </div>
    @endif
@endsection
