@extends('front.index')

@section('index')
    @include('front.include.hedare')
    @include('front.include.navbar')
    @include('errors.formAuth')
    <slide-index :sliders="{{$sliders}}" :banner="{{$banner_top}}"></slide-index>

    <banner-center :banners="{{$banner_center}}"></banner-center>

    <best-buy :products="{{$products->orderBy('price' , 'ASC')->get()}}" title="ارزانترین ها"></best-buy>

    <banner-end :banner="{{$banner_end}}"></banner-end>

    <best-buy :products="{{$products->orderBy('price' , 'ASC')->get()}}" title="ارزانترین ها"></best-buy>

    <best-buy :products="{{$products->orderBy('price' , 'ASC')->get()}}" title="ارزانترین ها"></best-buy>

    @include('front.include.footer')
@endsection
