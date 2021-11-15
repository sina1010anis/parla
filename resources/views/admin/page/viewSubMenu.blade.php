@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-6 offset-md-3 bg-white p-4 rounded-3 shadow">
            <p class="f-16 font-S color-b-700 text-end">زیر منو</p>
            <form action="{{route('admin.new.sub.menu')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile"  class="form-label f-13 color-b-500 d-block text-end">نام منو</label>
                    <input name="name" dir="rtl" class="form-control text-end" type="text" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="formFile"  class="form-label f-13 color-b-500 d-block text-end">اپلود عکس</label>
                    <input name="image" class="form-control" type="file" id="formFile">
                </div>
                <label for="select_item"  class="form-label f-13 color-b-500 d-block text-end">دسته اصلی</label>
                <select class="form-select" name="menu_id" id="select_item" aria-label="Default select example">
                    @foreach($menus as $menu)
                        <option value="{{$menu->id}}">{{$menu->name}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                    ارسال
                </button>
            </form>
        </div>
        <div class="col-md-6 offset-md-3 mt-3 bg-white p-4 rounded-3 shadow text-center">
            @foreach($sub_menus as $menu)
                <div style="height: 80px" class="d-flex justify-content-between align-items-center bg-light my-2 px-2 rounded-3">
                    <img src="{{url('/image/menu/'.$menu->image)}}" alt="{{$menu->name}}" style="height: 100%">
                    <span class="f-12 color-b-700 font-S">{{$menu->name}}</span>
                    <button class="btn btn-warning btn-sm" @click="edit_file_sub_menu_admin('{{$menu->id}}')"><i class="bi bi-pencil-square"></i></button>
                </div>
            @endforeach
        </div>
    </div>
    @include('admin.include.subMenu.subMenu')
@endsection
@section('script')

@endsection
