@extends('user.index')

@section('index')
    <div class="col-12 position-relative">
        <div class="float-end">
            <span>
                <span class="f-20 color-b-700">{{auth()->user()->name}}</span>
            </span>
            <img src="{{url('image/icon/user.png')}}" style="transform: scale(0.7)" alt="user">
        </div>
        <div class="line overflow-auto"></div>
    </div>
    <div class="col-12 overflow-scroll bg-light rounded-3 position-relative bg-white row " style="height: 500px">
        <div class="col-md-6 h-auto">
            <label for="inputPassword4" class="form-label d-block text-end f-13 color-b-600">ایمیل</label>
            <input value="{{(auth()->user()->email == Null) ? 'ایمیل وارد نشده است' : auth()->user()->email}}" align="right" dir="rtl" type="text" class="form-control disabled color-b-600" disabled id="inputPassword4">
            <i @click="view_page_edit_profile('email')" class="bi bi-pencil-square position-absolute color-b-600 pointer icon-edit-proile"></i>
        </div>
        <div class="col-md-6 h-auto">
            <label for="inputEmail4" class="form-label d-block text-end f-13 color-b-600">نام کاربری</label>
            <input value="{{auth()->user()->name}}" align="right" dir="rtl" type="email" class="form-control disabled color-b-600" disabled id="inputEmail4">
            <i @click="view_page_edit_profile('name')" class="bi bi-pencil-square position-absolute color-b-600 pointer icon-edit-proile"></i>
        </div>
        <div class="col-md-6 h-auto">
            <label for="inputPassword4" class="form-label d-block text-end f-13 color-b-600">تایید ایمیل</label>
            <input  value="{{(auth()->user()->email_verified_at == Null) ? 'ایمیل تایید نشده است' : 'ایمیل تایید شده است'}}" align="right" dir="rtl" type="text" class="form-control disabled color-b-600" disabled id="inputPassword4">
        </div>
        <div class="col-md-6 h-auto">
            <label for="inputEmail4" class="form-label d-block text-end f-13 color-b-600">رمز عبور</label>
            <input value="{{'غیر قابل نمایش'}}" align="right" dir="rtl" type="email" class="form-control disabled color-b-600" disabled id="inputEmail4">
            <i @click="view_page_edit_profile('password')" class="bi bi-pencil-square position-absolute color-b-600 pointer icon-edit-proile"></i>
        </div>
        <div class="col-md-6 h-auto">
            <label for="inputPassword4" class="form-label d-block text-end f-13 color-b-600">شماره موبایل</label>
            <input value="{{auth()->user()->mobile}}" align="right" dir="rtl" type="text" class="form-control disabled color-b-600" disabled id="inputPassword4">
            <i @click="view_page_edit_profile('mobile')" class="bi bi-pencil-square position-absolute color-b-600 pointer icon-edit-proile"></i>
        </div>
        <div class="col-md-6 h-auto">
            <label for="inputEmail4" class="form-label d-block text-end f-13 color-b-600">وضعیت ادرس</label>
            <input value="{{(auth()->user()->address_id == 0) ? 'ادرس وارد نشده است' : 'ادرس وارد شده است'}}" align="right" dir="rtl" type="email" class="form-control disabled color-b-600" disabled id="inputEmail4">
        </div>
        <div class="col-md-6 h-auto">
            <label for="inputPassword4" class="form-label d-block text-end f-13 color-b-600">وضعیت</label>
            <input value="{{(auth()->user()->status == 1) ? 'فعال و کاربر عادی' : 'وضعیت نامعلوم'}}" align="right" dir="rtl" type="text" class="form-control disabled color-b-600" disabled id="inputPassword4">
        </div>
        <div class="col-md-6 h-auto">
            <label for="inputEmail4" class="form-label d-block text-end f-13 color-b-600">تاریخ ورود</label>
            <input value="{{j_date(auth()->user()->created_at)}}" align="right" dir="rtl" type="email" class="form-control disabled color-b-600" disabled id="inputEmail4">
        </div>
    </div>
    <div class="page-new page-new-profile">
        <h6 class="text-center font-S my-2 color-b-600 title-page-new">@{{ name_page }}</h6>
        <div class="line"></div>
        <div>
            <input v-model="text_edit" :name="name_input" class="form-login form-control" dir="rtl" placeholder="تایپ کنید...">
        </div>
        <p class="f-12 text-center " style="color: red">@{{ tipText }}</p>
        <button @click="edit_profile" type="button" class="btn btn-lg btn-red f-13 mt-3">ارسال</button>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            بستن
        </button>
    </div>
@endsection
