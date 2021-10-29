@extends('front.index')

@section('index')
    <header-vue></header-vue>
    <nav-bar :menus="{{$menus}}" :sub_menus="{{$sub_menus}}">
        <template #menu_mobile>
            <ul class="menu-for-mobile col-md-8 nav justify-content-end p-1 navbar-light bg-white order-0 order-sm-0 order-md-1 d-flex flex-column text-center">
                @foreach($menus as $menu)
                    <li class="nav-item dropdown pointer">
                        <a @click="show_menu_mobile('menu_'+'{{$menu->id}}')" class="font-Y color-b-700 f-12 nav-link dropdown-toggle">
                            {{$menu->name}}
                        </a>
                        <ul class="menu_{{$menu->id}} menu-sub-for-mobile menu-for-mobile col-md-8 p-1 bg-white order-0 order-sm-0 order-md-1 text-center" id="menu_1 menu_bar_mobile">
                            @foreach($menu->sub_menu as $sub_menu)
                                <li style="list-style: none" class="p-2 f-11">
                                    <a class="color-b-500 font-Y" style="text-decoration: none" href="">{{$sub_menu->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </template>
    </nav-bar>

    {{--    Prosuct View--}}
        <view-product></view-product>
    <best-buy :products="{{$products->orderBy('price' , 'ASC')->get()}}" title="مرتبط ها"></best-buy>
    {{--   End Prosuct View--}}
    <item-vue :items="{{$items}}"></item-vue>
    <footer-vue :link="{{$link_footer}}">
        <template #footer>
            @foreach($title_footers as $title)
                <div class="col mt-3 mb-3">
                    <h5 class="font-Y">{{$title->name}}</h5>
                    <ul class="nav flex-column">
                        @foreach($title->item_footer as $item)
                            <li class="nav-item mb-2">
                                <a @if($item->like != null) href="{{$item->link}}" @endif class="nav-link p-0 text-muted font-Y f-13">{{$item->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </template>
        <template #link>
            @foreach($link_footer as $link)
                <li class="ms-3">
                    <a href="{{$link->link}}" title="{{$link->name}}" class="link-dark f-18 pointer" >
                        <i class="{{$link->icon}}"></i>
                    </a>
                </li>
            @endforeach
        </template>
    </footer-vue>
@endsection
