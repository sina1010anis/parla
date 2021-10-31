@extends('front.index')

@section('index')
    <header-vue></header-vue>

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
                        <div
                            class="w-100 my-2 p-2 shadow-sm rounded-3 d-flex justify-content-between align-items-center item-card-view"
                            style="height: 100px">
                            <img src="/image/product/product_6.jpg" alt="" class="h-100">
                            <span class="font-Y color-b-700 f-11">قیمت تک : 25000</span>
                            <span class="font-Y color-b-700 f-11">تعداد : 5</span>
                            <span class="font-Y color-b-700 f-11">نام : متن تستی</span>
                            <span class="font-Y f-11 pointer" style="color: red"><i class="bi bi-trash"></i></span>
                        </div>
                    </div>
                    <div class="p-2 w-100 position-absolute bottom-0 d-flex justify-content-between align-items-center"
                         style="background-color:#f5f5f5 ">
                        <button type="submit"
                                class="group-item-location-hearer font-Y f-12 border-0 rounded-3 py-2 px-5">
                            پرداخت
                        </button>
                        <span class="font-Y color-b-500 f-15">2520000</span>
                    </div>
                </div>
            @endif
        </template>
    </nav-bar>
    @include('errors.formAuth')
    <slide-index :sliders="{{$sliders}}" :banner="{{$banner_top}}"></slide-index>

    <banner-center :banners="{{$banner_center}}"></banner-center>

    <best-buy :products="{{$products->orderBy('price' , 'ASC')->get()}}" title="ارزانترین ها"></best-buy>

    <banner-end :banner="{{$banner_end}}"></banner-end>

    <best-buy :products="{{$products->orderBy('price' , 'ASC')->get()}}" title="ارزانترین ها"></best-buy>

    <best-buy :products="{{$products->orderBy('price' , 'ASC')->get()}}" title="ارزانترین ها"></best-buy>

    <item-vue :items="{{$items}}"></item-vue>

    <footer-vue :link="{{$link_footer}}">
        <template #footer>
            @foreach($title_footers as $title)
                <div class="col mt-3 mb-3">
                    <h5 class="font-Y">{{$title->name}}</h5>
                    <ul class="nav flex-column">
                        @foreach($title->item_footer as $item)
                            <li class="nav-item mb-2">
                                <a @if($item->like != null) href="{{$item->link}}"
                                   @endif class="nav-link p-0 text-muted font-Y f-13">{{$item->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </template>
        <template #link>
            @foreach($link_footer as $link)
                <li class="ms-3">
                    <a href="{{$link->link}}" title="{{$link->name}}" class="link-dark f-18 pointer">
                        <i class="{{$link->icon}}"></i>
                    </a>
                </li>
            @endforeach
        </template>
    </footer-vue>
@endsection
