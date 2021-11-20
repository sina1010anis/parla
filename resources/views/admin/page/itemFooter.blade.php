@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-6  bg-white p-4 rounded-3 shadow">
            <p class="f-16 font-S color-b-700 text-end">ایتم های فوتر</p>
            <form action="{{route('admin.new.item.footer')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFilte" class="form-label f-13 color-b-500 d-block text-end">نام </label>
                    <input dir="rtl" name="name" class="form-control text-end" type="text" id="formFilte">
                </div>
                <div class="mb-3">
                    <label for="formFilte" class="form-label f-13 color-b-500 d-block text-end">ادرس </label>
                    <input dir="rtl" name="link" class="form-control text-end" type="text" id="formFilte">
                </div>
                <div class="mb-3">
                    <label class="form-label f-13 color-b-500 d-block text-end">باکس فوتر</label>
                    <select name="title_footer_id" class="form-select form-select" aria-label="Default select example">
                        @foreach($title_footers as $title)
                            <option value="{{$title->id}}">{{$title->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                    ارسال
                </button>
            </form>
        </div>
        <div class="col-md-6  mt-3 bg-white p-4 rounded-3 shadow text-center">
            <div class=" overflow-scroll rounded-3 position-relative bg-white" style="max-height: 300px">
                <ul class="m-0 p-0">
                    @foreach($title_footers as $a)
                        <li class="w-100 p-3 pointer border rounded-3 mt-4">
                            <div class="form-check pointer">
                                <h5 class="color-b-700 text-end">{{$a->name}}</h5>
                                @foreach($a->item_footer as $item)
                                    <a href="{{$item->like}}" class="btn border my-3">{{$item->name}}
                                    </a>
                                    <i @click="view_page_delete('{{$item->id}}')" class="bi bi-trash f-17 position-absolute" style="color:red;"></i>

                                    <br>
                                @endforeach
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="page-new page-new-delete-banner-center-as overflow-hidden">
        <h6 class="text-center font-S my-2 color-b-600">اخطار !</h6>
        <div class="line"></div>
        <div class="row">
            <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ایا از انجام این عمل مطمعن هستید ؟
            </div>
        </div>
        <button @click="delete_image_center('item_footer')" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
            بله
        </button>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            خیر
        </button>
    </div>
@endsection
@section('script')

@endsection
