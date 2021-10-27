@extends('front.index')

@section('index')
    <header-vue></header-vue>
    <nav-bar
        :menus="{{$menus}}"
        :sub_menus="{{$sub_menus}}">
    </nav-bar>
    <slide-index
        :sliders="{{$sliders}}"
        :banner="{{$banner_top}}">
    </slide-index>

    <banner-center
        :banners="{{$banner_center}}">
    </banner-center>
    <best-buy
        :products="{{$products->orderBy('price' , 'ASC')->get()}}"
        title="ارزانترین ها">
    </best-buy>
    <banner-end
        :banner="{{$banner_end}}">
    </banner-end>
    <best-buy
        :products="{{$products->orderBy('price' , 'ASC')->get()}}"
        title="ارزانترین ها">
    </best-buy>
    <best-buy
        :products="{{$products->orderBy('price' , 'ASC')->get()}}"
        title="ارزانترین ها">
    </best-buy>
    <item-vue
        :items="{{$items}}">
    </item-vue>
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
