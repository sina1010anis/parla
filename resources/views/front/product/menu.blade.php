@extends('front.index')

@section('index')
    @include('front.include.hedare')

    @include('front.include.navbar')

    @include('errors.formAuth')

    <h4 class="p-3 my-3 mx-5 color-b-500 text-center font-S text-menu">{{$slug->name}}</h4>

    <div class="line position-relative line-menu"></div>

    <slide-index :sliders="{{$slug->menu->slider_menu}}" :banner="{{$banner_top}}"></slide-index>

    <menu-vue :products="{{$data}}">
        <template #name_menu>
            <div class="col-12 col-md-4 p-2 ">
                <div class="px-2 mx-2">
                    @foreach($menus as $menu)
                        <div @click="show_menu_item_div({{$menu->id}})" class="w-100 mb-3 bg-white p-2 rounded-3 item-menu-div-group item-menu-div-group-{{$menu->id}}">
                            <p align="right" class="font-S color-b-600 f-14 pointer title-menu p-3">{{$menu->name}} <span
                                    class="float-start position-relative"><i class="bi bi-arrow-bar-down"></i></span></p>
                            <ul class="ul-menu me-5" id="ul_menu_{{$menu->id}}">
                                @foreach($menu->sub_menu as $sub_menu)
                                    <li><a href="{{route('category.show' , $sub_menu->slug)}}" class="color-b-500 d-block w-100 text-end f-13 pt-3">{{$sub_menu->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </template>
    </menu-vue>
    <br>
    @include('front.include.footer')
@endsection
