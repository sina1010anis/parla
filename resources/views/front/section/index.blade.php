@extends('front.index')

@section('index')
    <header-vue></header-vue>
    <nav-bar :menus="{{$menus}}" :sub_menus="{{$sub_menus}}"></nav-bar>
    <slide-index></slide-index>
    <item-vue></item-vue>
@endsection
