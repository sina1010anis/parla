@extends('front.index')

@section('index')
    <header-vue></header-vue>
    <nav-bar :menus="{{$menus}}" :sub_menus="{{$sub_menus}}"></nav-bar>
    <slide-index></slide-index>
    <item-vue></item-vue>
    <banner-center></banner-center>
    <best-buy title="بهترین فروش"></best-buy>
    <banner-end></banner-end>
    <best-buy title="پیشنهاد ویژه"></best-buy>
    <best-buy title="جدیدترین محصولات"></best-buy>
    <best-buy title="تعداد محدود"></best-buy>
    <footer-vue></footer-vue>
@endsection
