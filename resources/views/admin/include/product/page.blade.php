<div class="page-new page-new-delete-banner-center-as overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">اخطار !</h6>
    <div class="line"></div>
    <div class="row">
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ایا از انجام این عمل مطمعن هستید ؟
        </div>
    </div>
    <button @click="delete_image_center('size')" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
        بله
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        خیر
    </button>
</div>
<div class="page-new page-new-delete-image overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">اخطار !</h6>
    <div class="line"></div>
    <div class="row">
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ایا از انجام این عمل مطمعن هستید ؟
        </div>
    </div>
    <button @click="delete_image_center('image')" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
        بله
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        خیر
    </button>
</div>
<div class="page-new page-new-delete-attr overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">اخطار !</h6>
    <div class="line"></div>
    <div class="row">
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ایا از انجام این عمل مطمعن هستید ؟
        </div>
    </div>
    <button @click="delete_image_center('attr')" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
        بله
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        خیر
    </button>
</div>
<div class="page-new page-image-product overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">تصاویر این محصول</h6>
    <div class="line"></div>
    <div class="row overflow-scroll" style="max-height: 300px">
            <span class="obj-center" v-for="image in image_product_admin">
                <img :src="'/image/product/'+image.src" style="width: 150px;" :alt="image.name">
                <i @click="view_size_product_admin_size(image.id)" style="color: red"
                   class="bi bi-trash f-19 pointer"></i>
            </span>
    </div>
    <button @click="view_page_new_image" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
        جدید
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>
<div class="page-new page-size-product overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">سایز های این محصول</h6>
    <div class="line"></div>
    <div class="row">
        <ul>
            <li v-for="i in data" key="i.id" class="f-12 p-1 text-center color-b-700 border-bottom" dir="rtl">
                @{{ i.name }} : @{{ i.price }} <i @click="view_size_product_admin(i.id)" style="color: red"
                                                  class="bi bi-trash"></i>
            </li>
        </ul>
    </div>
    <button @click="view_page_new_size" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
        جدید
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>

<div class="page-new page-attr-product overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">خصوصیت های این محصول</h6>
    <div class="line"></div>
    <div class="row">
        <ul>
            <li v-for="i in data" key="i.id" class="f-12 p-1 text-center color-b-700 border-bottom" dir="rtl">
                @{{ i.title }} : @{{ i.name }} <i @click="view_attr_product_admin(i.id)" style="color: red"
                                                  class="bi bi-trash"></i>
            </li>
        </ul>
    </div>
    <button @click="view_page_new_attr" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
        جدید
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>

<div class="page-new page-size-new overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">سایز جدید</h6>
    <div class="line"></div>
    <div class="row">
        <div class="mb-3 col-6 d-inline-block p-1">
            <label class="form-label f-13 color-b-500 d-block text-end">نام مدل</label>
            <input name="name" v-model="data_size_admin.name" class="form-control" type="text"
                   id="formFile">
        </div>
        <div class="mb-3 col-6 d-inline-block p-1">
            <label class="form-label f-13 color-b-500 d-block text-end">قیمت</label>
            <input name="price" v-model="data_size_admin.price" class="form-control" type="number"
                   id="formFile">
        </div>
    </div>
    <button @click="new_size_product_admin" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
        ارسال
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>

<div class="page-new page-attr-new overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">خصوصیت جدید</h6>
    <div class="line"></div>
    <div class="row">
        <div class="mb-3 col-6 d-inline-block p-1">
            <label class="form-label f-13 color-b-500 d-block text-end">مقدار</label>
            <input align="right" dir="rtl" name="name" v-model="data_size_admin.price" class="form-control" type="text"
                   id="formFile">
        </div>
        <div class="mb-3 col-6 d-inline-block p-1">
            <label class="form-label f-13 color-b-500 d-block text-end">موضوع مدل</label>
            <input align="right" dir="rtl" name="title" v-model="data_size_admin.name" class="form-control" type="text"
                   id="formFile">
        </div>
    </div>
    <button @click="new_attr_product_admin" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
        ارسال
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>

<div class="page-new page-help-admin-tag overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">راهنمای تگ ها</h6>
    <div class="line"></div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">تگ</th>
                <th scope="col">چیست</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>{{ '<p>...</p>' }}</th>
                <td>متن</td>
            </tr>
            <tr>
                <th>{{ '<img src="ادرس" alt="نام عکس">' }}</th>
                <td>عکس</td>
            </tr>
            <tr>
                <th>{{ '<a href="ادرس صفحه">....</a>' }}</th>
                <td>لینک</td>
            </tr>
            </tbody>
        </table>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">کلاس</th>
                <th scope="col">چیست</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>{{ 'f-9 تا f-22' }}</th>
                <td>اندازه متن</td>
            </tr>
            <tr>
                <th>{{ 'color-b-100 تا color-b-900' }}</th>
                <td>رنگ متن</td>
            </tr>
            <tr>
                <th>{{ 'w-100' }}</th>
                <td>اندازه کل عکس در صفحه</td>
            </tr>
            <tr>
                <th>{{ 'w-50' }}</th>
                <td>اندازه نصف عکس در صفحه</td>
            </tr>
            <tr>
                <th>{{ 'w-25' }}</th>
                <td>اندازه یک چهارم عکس در صفحه</td>
            </tr>
            <tr>
                <th>{{ 'd-inline-block' }}</th>
                <td>برای انداختن عکس کنار هم</td>
            </tr>
            </tbody>
        </table>
    </div>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>
<div class="page-new page-image-new overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">عکس جدید</h6>
    <div class="line"></div>
    <div class="row">
        <form action="{{route('admin.new.image.product')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input name="product_id" type="hidden" v-model="id">
            <div class="mb-3 col-6 d-inline-block p-1">
                <label class="form-label f-13 color-b-500 d-block text-end">نام عکس</label>
                <input name="name" class="form-control" type="text"
                       id="formFile">
            </div>
            <div class="mb-3 col-6 d-inline-block p-1">
                <label class="form-label f-13 color-b-500 d-block text-end">اپلود</label>
                <input name="image" v-model="data_size_admin.price" class="form-control" type="file"
                       id="formFile">
            </div>
            <button type="submit" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
                ارسال
            </button>
            <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
                بستن
            </button>
        </form>
    </div>

</div>
<div class="page-new page-color-product overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">رنگ های این محصول</h6>
    <div class="line"></div>
    <div class="row overflow-scroll" style="max-height: 300px">
        <ul>
            <li style="list-style: none!important;" v-for="i in data_color" key="i.id" class="f-12 p-1 text-center color-b-700 border-bottom" dir="rtl">
                @{{ i.name }} : <img style="width: 50px;" :src="'/image/color/'+i.code" alt=""> <i @click="delete_color_product(i.id)" style="color: red"
                                                                                                   class="bi bi-trash pointer"></i>
            </li>
        </ul>
    </div>
    <button @click="view_page_new_color" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
        جدید
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>
<div class="page-new page-new-delete-color overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">اخطار !</h6>
    <div class="line"></div>
    <div class="row">
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ایا از انجام این عمل مطمعن هستید ؟
        </div>
    </div>
    <button @click="delete_image_center('color')" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
        بله
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        خیر
    </button>
</div>
<div class="page-new page-color-new overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">رنگ جدید</h6>
    <div class="line"></div>
    <div class="row">
        <form action="{{route('admin.new.product.color')}}" method="post">
            @csrf
            <input name="product_id" type="hidden" v-model="id">
            <div class="col-12 overflow-scroll rounded-3 position-relative bg-white" style="max-height: 300px">
                <ul class="m-0 p-0">
                    @foreach($color_all as $a)
                        <li class="w-100 p-3 pointer border rounded-3 mt-4">
                            <div class="form-check pointer">
                                <input class="form-check-input" type="radio" value="{{$a->id}}" name="color" id="flexRadioDefault{{$a->id}}">
                                <label dir="rtl" class="form-check-label f-14 color-b-600 pointer w-100 text-end" for="flexRadioDefault{{$a->id}}">
                                    <img src="{{url('image/color/'.$a->code)}}" alt="{{$a->name}}" style="width: 60px"> - {{$a->name}}
                                </label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <button type="submit" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
                ارسال
            </button>
            <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
                بستن
            </button>
        </form>
    </div>

</div>


<div class="page-new page-photos-about overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">گالری</h6>
    <div class="line"></div>
    <div class="row p-2">
        <div class="w-100 bg-light overflow-scroll p-2 rounded-3" style="max-height: 350px">
            @foreach($image_products as $image)
                <div class="card m-2 d-inline-block">
                    <img src="{{url('image/product/'.$image->src)}}" style="width: 130px" alt="{{$image->name}}">
                    <p class="text-center color-b-500 f-13">{{$image->src}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <button @click="view_page_new_photo_in_page_about" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
        جدید
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>


<div class="page-new page-photos-upload overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">اپلود عکس جدید</h6>
    <div class="line"></div>
    <div class="row p-2">
        <div class="w-100 bg-light overflow-scroll p-2 rounded-3" style="max-height: 350px">
            <form action="{{route('admin.new.image.productA' , (isset($edit) ? ['id' => $product->id] : false))}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label d-block text-end f-14 color-b-500">نام</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label d-block text-end f-14 color-b-500">عکس</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                </div>
                <button @click="view_page_new_photo_in_page_about" type="submit" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
                    اپلود
                </button>
                <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
                    بستن
                </button>
            </form>
        </div>
    </div>
</div>
