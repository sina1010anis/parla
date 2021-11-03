@extends('front.index')

@section('index')
    <header-vue></header-vue>

    @include('front.include.navbar')
    @include('errors.formAuth')
    <slide-index :sliders="{{$sliders}}" :banner="{{$banner_top}}"></slide-index>

    <banner-center :banners="{{$banner_center}}"></banner-center>

    <best-buy :products="{{$products->orderBy('price' , 'ASC')->get()}}" title="ارزانترین ها"></best-buy>

    <banner-end :banner="{{$banner_end}}"></banner-end>

    <best-buy :products="{{$products->orderBy('price' , 'ASC')->get()}}" title="ارزانترین ها"></best-buy>

    <best-buy :products="{{$products->orderBy('price' , 'ASC')->get()}}" title="ارزانترین ها"></best-buy>

    <item-vue :items="{{$items}}"></item-vue>

    @include('front.include.footer')
@endsection
