@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-12 bg-white p-4 rounded-3 shadow row">
            <p class="f-16 font-S color-b-700 text-end">محصولات خاص</p>
            <div class="col-12 mt-3 bg-white p-4 rounded-3 shadow text-center table-view-product">
                <h5 class="color-b-700 text-end">نمایش کل محصولات</h5>
                <div class="line"></div>
                @foreach($prodcutT_all as $product)
                    <div class="my-4 border p-3">
                        <div class="bd-example">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img style="width: 150px;" src="{{url('image/custom/'.$product->image)}}"
                                         alt="{{$product->image}}">
                                </div>
                                <div class="flex-grow-1 ms-3 text-end" dir="rtl">
                                    {{$product->text}}
                                </div>
                            </div>
                            <p class="f-14 color-b-600 font-S text-end">مشخصات وضعیت</p>
                            <div class="line"></div>
                            <div class="form-check form-check-inline px-3 py-1 border rounded-3">
                                <input @change="edit_status_productT('{{$product->id}}')" v-model="code_status"
                                       {{($product->status == 0) ? 'checked' : ''}} class="form-check-input"
                                       type="radio" name="step{{$product->id}}"
                                       id="inlineRadio{{$loop->index}}{{$product->id}}" value="0">
                                <label class="form-check-label f-12 color-b-600"
                                       >در حال برسی</label>
                            </div>
                            <div class="form-check form-check-inline px-3 py-1 border rounded-3">
                                <input @change="edit_status_productT('{{$product->id}}')" v-model="code_status"
                                       {{($product->status == 1) ? 'checked' : ''}} class="form-check-input"
                                       type="radio" name="step{{$product->id}}"
                                       id="inlineRadio{{$loop->index}}{{$product->id}}" value="1">
                                <label class="form-check-label f-12 color-b-600"
                                       >تایید شده</label>
                            </div>
                            <div class="form-check form-check-inline px-3 py-1 border rounded-3">
                                <input @change="edit_status_productT('{{$product->id}}')" v-model="code_status"
                                       {{($product->status == 2) ? 'checked' : ''}} class="form-check-input"
                                       type="radio" name="step{{$product->id}}"
                                       id="inlineRadio{{$loop->index}}{{$product->id}}" value="2">
                                <label class="form-check-label f-12 color-b-600">رد شده به دلیل نا مفهوم
                                    بودن</label>
                            </div>
                            <div class="form-check form-check-inline px-3 py-1 border rounded-3">
                                <input @change="edit_status_productT('{{$product->id}}')" v-model="code_status"
                                       {{($product->status == 3) ? 'checked' : ''}} class="form-check-input"
                                       type="radio" name="step{{$product->id}}"
                                       id="inlineRadio{{$loop->index}}{{$product->id}}" value="3">
                                <label class="form-check-label f-12 color-b-600"
                                       >رد شده به دلیل کامل نبودن
                                    توضیحات</label>
                            </div>
                        </div>
                        <div class="line"></div>
                        <p class="f-14 color-b-600 font-S text-end">مشخصات کاربر</p>
                        <div class="line"></div>
                        <ul class="list-group">
                            <li class="list-group-item f-13 color-b-600" dir="rtl">نام : {{$product->user->name}}</li>
                            <li class="list-group-item f-13 color-b-600" dir="rtl">ایمیل
                                : {{$product->user->email}}</li>
                            <li class="list-group-item f-13 color-b-600" dir="rtl">موبایل
                                : {{$product->user->mobile}}</li>
                            <li class="list-group-item f-13 color-b-600" dir="rtl">
                                <button @click="reply_support_admin('{{$product->user->id}}' , '')"
                                        class="btn btn-warning btn-sm ">ارسال پیام
                                </button>
                            </li>
                        </ul>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="page-new page-new-support-reply-admin overflow-hidden">
        <h6 class="text-center font-S my-2 color-b-600">پاسخ پیام</h6>
        <div class="line"></div>
        <div class="row overflow-scroll">
            <div class="col-12 " style="max-height: 400px;">
                <textarea v-model="text_support" name="text" class="form-control bg-light text-end f-13 color-b-600"
                          dir="rtl" placeholder="توضیحات ..." id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <button @click="new_support" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
            ارسال
        </button>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            بستن
        </button>
    </div>
@endsection
@section('script')

@endsection

