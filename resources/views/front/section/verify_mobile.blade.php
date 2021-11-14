@extends('front.index')

@section('index')
    @include('errors.formAuth')
    <div class="bax-error-page obj-center flex-column">
        <div class="p-4 bg-white shadow rounded-3">
            <p class="text-center f-13 color-b-600">تایید شماره موبایل</p>
            <div class="line"></div>
            <form action="{{route('verify.mobile.check')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="formFile"  class="form-label f-13 color-b-500 d-block text-end">کد تایید</label>
                    <input style="width: 300px" name="code" type="text" class="form-control form-login color-b-500 text-center" dit="rtl" placeholder="تایپ کنید">
                </div>
                <button type="submit" class="btn bg-gh">تایید</button>
            </form>
        </div>
    </div>
@endsection
