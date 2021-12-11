@extends('front.index')

@section('index')
    @include('front.include.hedare')
    @include('front.include.navbar')
    @include('errors.formAuth')
    <slide-index :sliders="{{$sliders}}" :banner="{{$banner_top}}"></slide-index>

    <banner-center :banners="{{$banner_center}}"></banner-center>

    <best-buy mode="0" :products="{{$products->where('discount' , '!=' , 0)->get()}}"
              title="پیشنهاد ویژه">

    </best-buy>

    <banner-end :banner="{{$banner_end}}"></banner-end>

    <best-buy mode="1" :products="{{$products_2->take(10)->orderBy('id' , 'DESC')->get()}}" title="جدیدترین محصولات">
        <template #other_product>
            @if($products_2->count() >= 10)
                <span class="card m-4 position-relative overflow-hidden" style="width: 18rem;">
                    <a href="{{route('product.all' , ['mode' => 'new'])}}" class=" w-100 h-100 d-flex justify-content-center align-items-center" style="text-decoration: none!important;">
                        <i class="bi bi-plus-circle color-b-600 f-22"></i>
                    </a>
                </span>
            @endif
        </template>
    </best-buy>

    <best-buy mode="1" :products="{{$products_3->take(10)->orderBy('view' , 'DESC')->get()}}" title="بیشترین بازدید">
        <template #other_product>
            @if($products_2->count() >= 10)
                <span class="card m-4 position-relative overflow-hidden" style="width: 18rem;">
                    <a href="{{route('product.all' , ['mode' => 'view'])}}" class=" w-100 h-100 d-flex justify-content-center align-items-center" style="text-decoration: none!important;">
                        <i class="bi bi-plus-circle color-b-600 f-22"></i>
                    </a>
                </span>
            @endif
        </template>
    </best-buy>

    @include('front.include.footer')
@endsection
