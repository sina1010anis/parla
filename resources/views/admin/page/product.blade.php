@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-6 offset-md-3 bg-white p-4 rounded-3 shadow row">
            <p class="f-16 font-S color-b-700 text-end">دسته اصلی محصول</p>
            @if(!isset($edit))
                <form action="{{route('admin.new.product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 col-6 d-inline-block p-1">
                        <label class="form-label f-13 color-b-500 d-block text-end">قیمت نمایشی</label>
                        <input name="price" class="form-control" type="number"
                               id="formFile">
                    </div>
                    <div class="mb-3 col-6 d-inline-block p-1">
                        <label class="form-label f-13 color-b-500 d-block text-end">نام محصول</label>
                        <input name="name" dir="rtl" class="form-control text-end"
                               type="text" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">تعداد موجودی</label>
                        <input name="number" class="form-control" type="number" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">توضیحات کلی</label>
                        <textarea name="description" class="form-control" type="text" id="formFile"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">توضیحات تکمیلی(قسمت شخصی
                            سازی)</label>
                        <textarea name="description_all" class="form-control" type="text" id="formFile"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">نکته (برای ارسال)</label>
                        <input name="tips" class="form-control" type="text" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">عکس (برای قسمت اول)</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">وضعیت</label>
                        <select name="status" class="form-select form-select" aria-label="Default select example">
                            <option value="1">فعال</option>
                            <option value="0">غیر فعال</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">منو</label>
                        <select name="menu_id" class="form-select form-select" aria-label="Default select example">
                            @foreach($menus as $menu)
                                <option value="{{$menu->id}}">{{$menu->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">تخفیف</label>
                        <input name="discount" class="form-control" type="number" id="formFile">
                    </div>
                    <button @click="view_page_help_admin" type="button" class="btn btn-lg btn-warning f-13 ms-3 mt-3">
                        راهنما تگ
                    </button>
                    <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                        ارسال
                    </button>
                </form>
                <p class="font-S f-14 text-danger">ادرس پایه عکس ( src="/image/product/نام عکس" )</p>

            @else
                <form action="{{route('admin.edit.product' , ['id' => $product->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 col-6 d-inline-block p-1">
                        <label class="form-label f-13 color-b-500 d-block text-end">قیمت نمایشی</label>
                        <input name="price" value="{{$product->price}}" class="form-control" type="number"
                               id="formFile">
                    </div>
                    <div class="mb-3 col-6 d-inline-block p-1">
                        <label class="form-label f-13 color-b-500 d-block text-end">نام محصول</label>
                        <input name="name" value="{{$product->name}}" dir="rtl" class="form-control text-end"
                               type="text" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">تعداد موجودی</label>
                        <input name="number" value="{{$product->number}}" class="form-control" type="number"
                               id="formFile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">توضیحات کلی</label>
                        <textarea name="description" value="{{$product->description}}" class="form-control" type="text"
                                  id="formFile"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">توضیحات تکمیلی(قسمت شخصی
                            سازی)</label>
                        <textarea name="description_all" value="{{$product->description_all}}" class="form-control"
                                  type="text" id="formFile"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">نکته (برای ارسال)</label>
                        <input dir="rtl" name="tips" value="{{$product->tips}}" class="form-control" type="text"
                               id="formFile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">وضعیت</label>
                        <select name="status" class="form-select form-select" aria-label="Default select example">
                            <option {{($product->status == 1) ? 'selected' : ''}} value="1">فعال</option>
                            <option {{($product->status == 0) ? 'selected' : ''}} value="0">غیر فعال</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">منو</label>
                        <select name="menu_id" class="form-select form-select" aria-label="Default select example">
                            @foreach($sub_menus as $menu)
                                <option
                                    {{($product->menu_id == $menu->id) ? 'selected' : '' }}  value="{{$menu->id}}">{{$menu->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label f-13 color-b-500 d-block text-end">تخفیف</label>
                        <input name="discount" value="{{$product->discount}}" class="form-control" type="number"
                               id="formFile">
                    </div>
                    <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                        ارسال
                    </button>
                    <button @click="view_page_help_admin" type="button" class="btn btn-lg btn-warning f-13 ms-3 mt-3">
                        راهنما تگ
                    </button>
                    <button @click="view_page_upload_photo" type="button" class="btn btn-lg btn-info text-white f-13 ms-3 mt-3">
                        گالری
                    </button>
                </form>
                <p class="font-S f-14 text-danger">ادرس پایه عکس ( src="/image/product/نام عکس" )</p>
            @endif
        </div>
        @if(!isset($edit))
            <div class="col-12 mt-3 bg-white p-4 rounded-3 shadow text-center table-view-product">
                <h5 class="color-b-700 text-end">نمایش کل محصولات</h5>
                <div class="line"></div>
                <div class="bd-example">
                    <table class="table table-striped" dir="rtl">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>قمیت</th>
                            <th>تعداد</th>
                            <th>توضیحات</th>
                            <th>نکته</th>
                            <th>عکس</th>
                            <th>وضعیت</th>
                            <th>منو</th>
                            <th>تخفیف</th>
                            <th>ویو</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product_all_admin as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->number}}</td>
                                <td><a href="{{route('product.show', ['slug' => $product->slug])}}"
                                       class="btn btn-primary btn-sm">برسی</a></td>
                                <td dir="rtl" align="right">{{$product->tips}}</td>
                                <td><img src="{{url('/image/product/'.$product->image)}}"
                                         style="width: 100px!important;" alt="{{$product->name}}"></td>
                                <td>
                                    {!!($product->status == 1) ?
                                    '<button class="btn btn-success btn-sm" @click="edit_status_product_admin('.$product->id.') "><i class="bi bi-play"></i></button>' :
                                    '<button class="f-11 btn-sm btn btn-danger" @click="edit_status_product_admin('.$product->id.') "><i class="bi bi-stop"></i></button>'!!}
                                </td>
                                <td>{{$product->sub_menu->name}}</td>
                                <td>{{$product->discount}}</td>
                                <td>{{$product->view}}</td>
                                <td>
                                    <button @click="view_page_delete_product('{{$product->id}}')"
                                            class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>
                                    </button>
                                </td>
                                <td><a href="{{route('admin.edit.product.all' , ['id' => $product->slug])}}"
                                       class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a></td>
                                <td>
                                    <button @click="view_size_product('{{$product->id}}')" class="btn btn-info btn-sm">
                                        <i class="bi bi-archive"></i></button>
                                </td>
                                <td>
                                    <button @click="view_attr_product('{{$product->id}}')" class="btn btn-primary btn-sm">
                                        <i class="bi bi-diagram-3"></i></button>
                                </td>
                                <td>
                                    <button @click="view_image_product('{{$product->id}}')"
                                            class="btn btn-secondary btn-sm"><i class="bi bi-image"></i></button>
                                </td>
                                <td>
                                    <button @click="view_color_page('{{$product->id}}')" class="btn btn-dark btn-sm"><i class="bi bi-palette"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        @endif
        @if(!isset($edit))
            <div class="col-12 mt-3 bg-white p-4 rounded-3 shadow text-center table-view-product">
                <h5 class="color-b-700 text-end">نمایش محصولات تخفیف دار</h5>
                <div class="line"></div>
                <div class="bd-example">
                    <table class="table table-striped" dir="rtl">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>قمیت</th>
                            <th>تعداد</th>
                            <th>توضیحات</th>
                            <th>نکته</th>
                            <th>عکس</th>
                            <th>وضعیت</th>
                            <th>منو</th>
                            <th>تخفیف</th>
                            <th>ویو</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product_discount as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->number}}</td>
                                <td><a href="{{route('product.show', ['slug' => $product->slug])}}"
                                       class="btn btn-primary btn-sm">برسی</a></td>
                                <td dir="rtl" align="right">{{$product->tips}}</td>
                                <td><img src="{{url('/image/product/'.$product->image)}}"
                                         style="width: 100px!important;" alt="{{$product->name}}"></td>
                                <td>
                                    {!!($product->status == 1) ?
                                    '<button class="btn btn-success btn-sm" @click="edit_status_product_admin('.$product->id.') "><i class="bi bi-play"></i></button>' :
                                    '<button class="f-11 btn-sm btn btn-danger" @click="edit_status_product_admin('.$product->id.') "><i class="bi bi-stop"></i></button>'!!}
                                </td>
                                <td>{{$product->sub_menu->name}}</td>
                                <td>{{$product->discount}}</td>
                                <td>{{$product->view}}</td>
                                <td>
                                    <button @click="view_page_delete_product('{{$product->id}}')"
                                            class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>
                                    </button>
                                </td>
                                <td><a href="{{route('admin.edit.product.all' , ['id' => $product->slug])}}"
                                       class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                                </td>
                                <td>
                                    <button @click="view_size_product('{{$product->id}}')" class="btn btn-info btn-sm">
                                        <i class="bi bi-archive"></i></button>
                                </td>
                                <td>
                                    <button @click="view_attr_product('{{$product->id}}')" class="btn btn-primary btn-sm">
                                        <i class="bi bi-diagram-3"></i></button>
                                </td>
                                <td>
                                    <button @click="view_image_product('{{$product->id}}')"
                                            class="btn btn-secondary btn-sm"><i class="bi bi-image"></i></button>
                                </td>
                                <td>
                                    <button @click="view_color_page('{{$product->id}}')" class="btn btn-dark btn-sm"><i class="bi bi-palette"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        @endif
    </div>
    @include('admin.include.product.page')
@endsection
@section('script')

@endsection
