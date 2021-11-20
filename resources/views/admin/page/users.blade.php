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
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

        </div>
    </div>
@endsection
@section('script')

@endsection
