@extends('front.index')

@section('index')
    <header-vue></header-vue>
    <nav-bar :menus="{{$menus}}" :sub_menus="{{$sub_menus}}"></nav-bar>
    <slide-index :sliders="{{$sliders}}" :banner="{{$banner_top}}"></slide-index>
    <item-vue :items="{{$items}}"></item-vue>
    <banner-center :banners="{{$banner_center}}"></banner-center>
    <best-buy :products="{{$products->where('discount' , '!=' , '0')->get()}}" title="بهترین فروش"></best-buy>
    <banner-end :banner="{{$banner_end}}"></banner-end>
    <best-buy :products="{{$products->orderBy('id' , 'DESC')->get()}}" title="جدیدترین ها"></best-buy>
    <best-buy :products="{{$products->orderBy('price' , 'ASC')->get()}}" title="ارزانترین ها"></best-buy>
    <footer-vue></footer-vue>
@endsection
