@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-6 offset-md-3 bg-white p-4 rounded-3 shadow">
            <p class="f-16 font-S color-b-700 text-end">بنر بالا</p>
            @if($banners_up->count() == 1)
                @foreach($banners_up as $banner_up)
                    <form action="{{route('admin.edit.bannerUp' , ['model' => 'all' , 'target' => 'up'])}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label f-13 color-b-500 d-block text-end">متن بنر</label>
                            <input name="name" value="{{$banner_up->name}}" dir="rtl" class="form-control text-end" type="text" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="formFile"  class="form-label f-13 color-b-500 d-block text-end">ادرس</label>
                            <input name="href" value="{{$banner_up->href}}" class="form-control" type="text" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="formFile"  class="form-label f-13 color-b-500 d-block text-end">رنگ بنر</label>
                            <input name="src" value="{{$banner_up->src}}" class="form-control form-control-lg" type="color" id="formFile">
                        </div>
                        <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                            ارسال
                        </button>
                    </form>
                @endforeach
            @endif

        </div>
        <div class="col-md-6 offset-md-3 bg-white p-4 rounded-3 shadow my-2">
            <p class="f-16 font-S color-b-700 text-end">وضعیت</p>
            @if($banners_up->count() == 1)
                @foreach($banners_up as $banner_up)
                    <form action="{{route('admin.edit.bannerUp' , ['model' => 'all' , 'target' => 'up'])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-lg {{($banner_up->location == 4) ? 'btn-success' : 'btn-danger'}} f-13 ms-3 mt-3">
                            {{($banner_up->location == 4) ? 'فعال' : 'غیر فعال'}}
                        </button>
                    </form>
                @endforeach
            @endif

        </div>
{{--        <div class="col-md-6 offset-md-3 mt-3 bg-white p-4 rounded-3 shadow text-center">--}}
{{--            @foreach($menus as $menu)--}}
{{--                <div style="height: 80px" class="d-flex justify-content-between align-items-center bg-light my-2 px-2 rounded-3">--}}
{{--                    <img src="{{url('/image/menu/'.$menu->image)}}" alt="{{$menu->name}}" style="height: 100%">--}}
{{--                    <span class="f-14 color-b-700 font-S">{{$menu->name}}</span>--}}
{{--                    <button class="btn btn-warning btn-sm" @click="edit_file_menu_admin('{{$menu->id}}')">ویرایش</button>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
    </div>
@endsection
@section('script')

@endsection
