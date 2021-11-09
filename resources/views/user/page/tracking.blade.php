@extends('user.index')

@section('index')
    <div class="col-12 position-relative">
        <div><h5 class="text-end font-S my-2 color-b-600"> پیگیری محصول</h5></div>
        <div class="line"></div>
    </div>
    <div class="col-12 overflow-scroll rounded-3 position-relative row" style="height: 500px">
        @if($factors->count() != 0)
            <ul class="m-0 p-0">
                @foreach($factors as $factor)
                    <li @click="view_factor('{{$factor->id}}')" class="pointer w-100 p-2 d-flex justify-content-between bg-light align-items-center"
                        style="list-style: none">
                        <p class="f-11 color-b-600 d-none d-md-block">
                            {{$factor->transaction_code}}</p>
                        <img src="{{url('image/icon/payment.png')}}" alt="Payment">
                    </li>
                @endforeach
            </ul>
        @else
            <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="height: 100%">
                <img style="width: 100px" src="/image/icon/buy.png" alt="سبد خرید خالی است">
                <p dir="rtl" class="mt-2 color-b-400 font-S">فاکتور پیدا نشد !</p>
            </div>
        @endif
    </div>
    <div class="page-new overflow-hidden">
        <h6 class="text-center font-S my-2 color-b-600">نمایش فاکتور</h6>
        <div class="line"></div>
        <div class="row">
            <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ساعت خرید : <b class="color-b-800">@{{ time_factor }}</b></div>
            <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">وضعیت پرداخت :
                <b v-if="data_factor.status_buy == 200" class="color-b-800">پرداخت با موفقیت انجام شده</b>
            </div>
            <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">کد تراکنش : <b class="color-b-800">@{{ data_factor.transaction_code }}</b></div>
            <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">جمع کل فاکتور : <b class="color-b-800">@{{ data_factor.title_price }}</b></div>
            <div class="line"></div>
            <div dir="rtl" align="center" class="col-12 f-13 color-b-700 my-2">
                محصولات سفارش داده شده :
                <div class="w-100 overflow-scroll f-12 color-b-600" style="height: 100px">
                    <p v-for="product in product_factor" :key="product">@{{ product }}</p>
                </div>
            </div>
            <div class="line"></div>
            <div class="col-12 f-12 color-b-600 my-2">
                <div class="progress">
                    <div v-if="data_factor.status_order == 100" class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    <div v-else-if="data_factor.status_order == 200" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    <div v-else-if="data_factor.status_order == 300" class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    <div v-else-if="data_factor.status_order == 400" class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p v-if="data_factor.status_order == 100" class=" f-12 color-b-600">در حال پردازش</p>
                <p v-else-if="data_factor.status_order == 200" class=" f-12 color-b-600">در حال اماده سازی</p>
                <p v-else-if="data_factor.status_order == 300" class=" f-12 color-b-600">تحویل پست</p>
                <p v-else-if="data_factor.status_order == 400" class=" f-12 color-b-600">مرسومه تحویل داده شده است</p>
            </div>
        </div>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            بستن
        </button>
    </div>
@endsection
