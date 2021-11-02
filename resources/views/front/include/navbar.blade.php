<nav-bar :menus="{{$menus}}" :sub_menus="{{$sub_menus}}">
    <template #menu_mobile>
        <ul class="menu-for-mobile col-md-8 nav justify-content-end p-1 navbar-light bg-white order-0 order-sm-0 order-md-1 d-flex flex-column text-center">
            @foreach($menus as $menu)
                <li class="nav-item dropdown pointer">
                    <a @click="show_menu_mobile('menu_'+'{{$menu->id}}')"
                       class="font-Y color-b-700 f-12 nav-link dropdown-toggle">
                        {{$menu->name}}
                    </a>
                    <ul class="menu_{{$menu->id}} menu-sub-for-mobile menu-for-mobile col-md-8 p-1 bg-white order-0 order-sm-0 order-md-1 text-center"
                        id="menu_1 menu_bar_mobile">
                        @foreach($menu->sub_menu as $sub_menu)
                            <li style="list-style: none" class="p-2 f-11">
                                <a class="color-b-500 font-Y" style="text-decoration: none"
                                   href="">{{$sub_menu->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </template>
    <template #item_panel_and_location>
        @if(auth()->check())
            <a style="text-decoration: none!important;"
               class="d-inline pointer group-item-location-hearer p-1 ms-2 rounded-3 position-relative">
                <i class="bi bi-geo-alt g-3 position-relative ps-2 pe-2 text-color-item-hearer"
                   style="top: 3px"></i>
                <span
                    class="font-Y f-10 text-color-item-hearer position-relative">برای ثبت ادرس لطفا وارد شوید</span>
            </a>
        @else
            <a v-else style="text-decoration: none!important;" href="/login"
               class="d-inline pointer group-item-location-hearer p-1 ms-2 rounded-3 position-relative">
                <i class="bi bi bi-person g-3 position-relative ps-2 pe-2 text-color-item-hearer"
                   style="top: 3px"></i>
                <span id="test" class="font-Y f-10 text-color-item-hearer position-relative">ورود / عضویت</span>
            </a>
        @endif
    </template>
    <template #item_panel_and_location_mobile>
        @if(auth()->check())
            <a style="text-decoration: none!important;"
               class="d-inline pointer group-item-location-hearer p-1 ms-2 rounded-3 position-relative">
                <i class="bi bi-geo-alt g-3 position-relative ps-2 pe-2 text-color-item-hearer"
                   style="top: 3px"></i>
                <span
                    class="font-Y f-10 text-color-item-hearer position-relative">برای ثبت ادرس لطفا وارد پنل شوید</span>
            </a>
        @else
            <a style="text-decoration: none!important;" href="/login"
               class="d-inline pointer group-item-location-hearer p-1 ms-2 rounded-3 position-relative">
                <i class="bi bi bi-person g-3 position-relative ps-2 pe-2 text-color-item-hearer"></i>
                <span class="font-Y f-10 text-color-item-hearer position-relative">ورود / عضویت</span>
            </a>
        @endif
    </template>
    <template #view_card>
        @if(auth()->check())
            <div class="col-4 bg-white position-absolute overflow-hidden left-0 rounded-3 shadow box-item-card"
                 style="height: 300px;z-index: 15">
                <div class="p-2 w-100 position-absolute top-0 overflow-scroll" style="height: 250px;">
                    @php
                        $total_price = 0;
                    @endphp
                    @if($card_user->count() != 0)
                        @foreach($card_user as $card)
                            @php
                                $total_price +=$card->total_price;
                            @endphp
                            <div
                                id="card_user_{{$card->id}}"
                                class="w-100 my-2 p-2 shadow-sm rounded-3 d-flex justify-content-between align-items-center item-card-view"
                                style="height: 100px">
                                <img src="/image/product/{{$card->product->product->image}}" alt="" class="h-100">
                                <span class="font-Y color-b-700 f-11">قیمت کل : {{$card->total_price}}</span>
                                <span class="font-Y color-b-700 f-11">تعداد : {{$card->number}}</span>
                                <span class="font-Y color-b-700 f-11">نام : {{$card->product->product->name}}</span>
                                <span class="font-Y f-11 pointer" style="color: red"><i
                                        @click="delete_product_to_card({{$card->id}})"
                                        class="bi bi-trash"></i></span>
                            </div>
                        @endforeach
                    @else
                        <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="height: 100%">
                            <img style="width: 100px" src="/image/icon/card.png" alt="سبد خرید خالی است">
                            <p class="mt-2 color-b-400 font-S">سبد خرید خالی است</p>
                        </div>
                    @endif
                </div>
                @if($card_user->count() != 0)
                    <div class="p-2 w-100 position-absolute bottom-0 d-flex justify-content-between align-items-center"
                         style="background-color:#f5f5f5 ">
                        <button type="submit"
                                class="group-item-location-hearer font-Y f-12 border-0 rounded-3 py-2 px-5">
                            پرداخت
                        </button>
                        <span class="font-Y color-b-500 f-15">قیمت نهایی : {{$total_price}}</span>
                    </div>
                @endif
            </div>
        @endif
    </template>
</nav-bar>
