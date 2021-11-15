<div class="page-new page-new-admin-factor overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">@{{ (factor_admin != null) ? factor_admin.transaction_code : '' }}</h6>
    <div class="line"></div>
    <div class="row d-inline-block w-50">
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">تاریخ ایجاد فاکتور : <b class="color-b-800">@{{ (factor_admin_time != null) ? factor_admin_time : '' }}</b></div>
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">قیمت کل  : <b class="color-b-800">@{{ (factor_admin != null) ? factor_admin.title_price : '' }}</b></div>
        <div v-if="factor_admin != null && factor_admin.status_buy == 200" dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">پرداخت انجام شده   </div>
    </div>
    <div class="w-50 d-inline-block f-12 color-b-600 my-2">
        <div class="progress">
            <div v-if="factor_admin != null && factor_admin.status_order == 100" class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            <div v-else-if="factor_admin != null && factor_admin.status_order == 200" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            <div v-else-if="factor_admin != null && factor_admin.status_order == 300" class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            <div v-else-if="factor_admin != null && factor_admin.status_order == 400" class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p v-if="factor_admin != null && factor_admin.status_order == 100" class=" f-12 color-b-600">در حال پردازش</p>
        <p v-else-if="factor_admin != null && factor_admin.status_order == 200" class=" f-12 color-b-600">در حال اماده سازی</p>
        <p v-else-if="factor_admin != null && factor_admin.status_order == 300" class=" f-12 color-b-600">تحویل پست</p>
        <p v-else-if="factor_admin != null && factor_admin.status_order == 400" class=" f-12 color-b-600">مرسومه تحویل داده شده است</p>
    </div>
    <div class="line"></div>
    <div class="w-100">
        <h6 class="color-b-600 font-S text-end" dir="rtl">ادرس : </h6>
        <div>
            <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2"> <b class="color-b-800">@{{ (factor_admin_address != null) ? factor_admin_address : '' }}</b></div>
        </div>
    </div>
    <div class="w-100">
        <h6 class="color-b-600 font-S text-end" dir="rtl">شماره موبایل : </h6>
        <div>
            <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2"> <b class="color-b-800">@{{ (factor_admin_mobile != null) ? factor_admin_mobile : '' }}</b></div>
        </div>
    </div>
    <div class="line"></div>
    <div class="w-100">
        <h6 class="color-b-600 font-S text-end" dir="rtl">سفارشات : </h6>
        <div class="overflow-scroll" style="max-height: 100px;">
            <table class="table" dir="rtl">
                <thead>
                <tr>
                    <th scope="col">ایدی</th>
                    <th scope="col">نام</th>
                    <th scope="col">نوع</th>
                    <th scope="col">رنگ</th>
                    <th scope="col">تعداد</th>
                    <th scope="col">قیمت</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($product_orders as $factor)
                    <tr class="tr-factor-admin" v-if="factor_admin != null && factor_admin.id == '{{$factor->factor_id}}'">
                        <th class="color-b-700 f-13 font-S">{{$factor->id}}</th>
                        <td class="color-b-700 f-13 font-S">{{$factor->product->name}}</td>
                        <td class="color-b-700 f-13 font-S">{{$factor->size->name}}</td>
                        <td><img style="width: 30px;" src="{{url('image/color/'.$factor->color->code)}}" alt=""></td>
                        <td class="color-b-700 f-13 font-S">{{$factor->number}}</td>
                        <td class="color-b-700 f-13 font-S">{{($factor->product->discount != 0) ? dic($factor->product->price , $factor->product->discount) : $factor->product->price}}</td>
                        <td class="color-b-700  font-S"><a class="btn btn-primary btn-sm f-11" href="{{route('product.show' , $factor->product->slug)}}">برسی </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <button @click="edit_status_send" type="button" class="btn btn-lg btn-warning f-13 ms-3 mt-3">
        تغییر وضعیت
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>

<div class="page-new page-new-admin-factor-as overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">تغییر وضعیت</h6>
    <div class="line"></div>
    <div class="row">
        <div class="d-grid gap-2 col-6 mx-auto">
            <button v-if="factor_admin != null" :class="(factor_admin.status_order == 100) ? 'btn btn-primary' : 'btn btn-secondary'" @click="edit_status_order_factor_admin(100)" type="button">درحال پردازش</button>
            <button v-if="factor_admin != null" :class="(factor_admin.status_order == 200) ? 'btn btn-primary' : 'btn btn-secondary'" @click="edit_status_order_factor_admin(200)" type="button">در حال اماده سازی</button>
            <button v-if="factor_admin != null" :class="(factor_admin.status_order == 300) ? 'btn btn-primary' : 'btn btn-secondary'" @click="edit_status_order_factor_admin(300)" type="button">تحویل پست</button>
            <button v-if="factor_admin != null" :class="(factor_admin.status_order == 400) ? 'btn btn-primary' : 'btn btn-secondary'" @click="edit_status_order_factor_admin(400)" type="button">تحول شده است</button>
        </div>
    </div>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>
