@extends('admin.index')

@section('admin')
    <div class="row p-2 ">
        <div class="col-md-3  mt-2">
            <div style="width: 100%" class="p-2 rounded-3 bg-danger d-flex me-0">
                <div class="col-4">
                    <img src="{{url('image/icon/list.png')}}" style="width: 80px;" alt="">
                </div>
                <div class="col-8">
                    <p align="right" class="f-14 font-S color-b-100">فاکتور ها موفق</p>
                    <p align="right" class=" color-b-100">{{$factor_admin->count()}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3  mt-2">
            <div style="width: 100%" class="p-2 rounded-3 bg-warning d-flex me-0">
                <div class="col-4">
                    <img src="{{url('image/icon/user_admin.png')}}" style="width: 80px;" alt="">
                </div>
                <div class="col-8">
                    <p align="right" class="f-14 font-S color-b-100">کاربران فعال</p>
                    <p align="right" class=" color-b-100">{{$user_admin->count()}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3  mt-2">
            <div style="width: 100%" class="p-2 rounded-3 bg-secondary d-flex me-0">
                <div class="col-4">
                    <img src="{{url('image/icon/view.png')}}" style="width: 80px;" alt="">
                </div>
                <div class="col-8">
                    <p align="right" class="f-14 font-S color-b-100">بازدیدها کل</p>
                    <p align="right" class=" color-b-100">{{$sum_product}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3  mt-2">
            <div style="width: 100%" class="p-2 rounded-3 bg-success d-flex me-0">
                <div class="col-4">
                    <img src="{{url('image/icon/price_2.png')}}" style="width: 80px;" alt="">
                </div>
                <div class="col-8">
                    <p align="right" class="f-14 font-S color-b-100">درامد کل</p>
                    <p align="right" class=" color-b-100">{{$sum_total_price}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 p-3 bg-white rounded-3 shadow mt-1" style="height: 425px;box-sizing: border-box">
            <h6 class="color-b-600 text-end ">کاربران حاضر</h6>
            <div class="line"></div>
            <div class=" w-100 overflow-scroll bg-light rounded-3" style="height: 350px;">
                @if($user_admin->count() != 0)
                    @foreach($user_admin as $user)
                        <div @click="view_user_admin('{{$user->id}}')" class="p-2 pointer border-bottom align-items-center d-flex justify-content-between">
                            <img src="{{url('image/icon/user_admin.png')}}" style="width: 50px" alt="">
                            <span class="color-b-600 f-15 font-S">{{$user->mobile}}</span>
                        </div>
                    @endforeach
                @else
                    <count-vue image="user_admin.png" test="کاربری ثبت نشده است :("></count-vue>
                @endif
            </div>
        </div>
        <div class="col-md-6 p-3 bg-white rounded-3 shadow mt-1" style="height: 425px;box-sizing: border-box">
            <h6 class="color-b-600 text-end ">فاکتور ها</h6>
            <div class="line"></div>
            <div class=" w-100 overflow-scroll bg-light rounded-3" style="height: 350px;">
                @if($factor_admin->count() != 0)
                    @foreach($factor_admin as $factor)
                        <div @click="view_factor_admin('{{$factor->id}}')" class="p-2 pointer border-bottom align-items-center d-flex justify-content-between">
                            <img src="{{url('image/icon/factor_admin.png')}}" style="width: 50px" alt="">
                            <span class="color-b-600 f-15 font-S">{{$factor->transaction_code}}</span>
                        </div>
                    @endforeach
                @else
                    <count-vue image="factor_admin.png" test="فاکتوری ثبت نشده است :("></count-vue>
                @endif
            </div>
        </div>
    </div>
    @include('admin.include.user.user')
    @include('admin.include.factor.factor')
@endsection
@section('script')

@endsection
