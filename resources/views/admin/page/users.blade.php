@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-6 offset-md-3 bg-white p-4 rounded-3 shadow row">
            <p class="f-16 font-S color-b-700 text-end">کابران فعال</p>
                    <div class="line"></div>
                    <div class="bd-example">
                        <table class="table table-striped" dir="rtl">
                            <thead>
                            <tr>
                                <th>ایدی</th>
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>موبایل</th>
                                <th>تایید موبایل</th>
                                <th>ادرس</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users_admin as $user)
                                <tr>
                                    <td class="f-12 color-b-600">{{$user->id}}</td>
                                    <td class="f-12 color-b-600">{{$user->name}}</td>
                                    <td class="f-12 color-b-600">{{$user->email}}</td>
                                    <td class="f-12 color-b-600">{{$user->mobile}}</td>
                                    <td class="f-12 color-b-600">{!! ($user->verify_mobile == 0) ? '<span style="color:red">تایید نشده</span>' : '<span style="color:green">تایید شده</span>'!!}</td>
                                    <td class="f-12 color-b-600">{{($user->address_id == 0) ? 'ادرسی وارد نشده' : $user->address->city->name . ' - ' . $user->address->state->name . ' - ' . $user->address->address}}</td>
                                    <td class="f-12 color-b-600"><button @click="view_page_edit_password_user('{{$user->id}}')" class="btn-sm btn btn-primary"><i class="bi bi-key"></i></button></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

        </div>
    </div>
    <div class="page-new page-password-product overflow-hidden">
        <h6 class="text-center font-S my-2 color-b-600">تغییر رمز عبور</h6>
        <div class="line"></div>
        <div class="row overflow-scroll" style="max-height: 300px">
            <input type="text" class="form-control f-13 my-2" v-model="data_support_panel_admin" placeholder="رمط عبور جدید...">
        </div>
        <button @click="edit_password" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
            تایید
        </button>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            بستن
        </button>
    </div>
@endsection
@section('script')

@endsection
