@extends('front.index')

@section('index')
    @include('front.include.hedare')
    @include('front.include.navbar')
    @include('errors.formAuth')
    <slide-index :sliders="{{$sliders}}" :banner="{{$banner_top}}"></slide-index>

    <banner-center :banners="{{$banner_center}}"></banner-center>

    <best-buy :products="{{$products->where('discount' , '!=' , 0)->get()}}" title="پیشنهاد ویژه"></best-buy>

    <banner-end :banner="{{$banner_end}}"></banner-end>

    <best-buy :products="{{$products_2->orderBy('id' , 'DESC')->get()}}" title="جدیدترین محصولات"></best-buy>

    <best-buy :products="{{$products_3->orderBy('view' , 'DESC')->get()}}" title="بیشترین بازدید"></best-buy>

    @include('front.include.footer')
@endsection
