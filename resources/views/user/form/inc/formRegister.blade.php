<div class="row obj-center h-100">
    <div class="col-11 col-lg-9 p-2 p-md-5 bg-white rounded-3 shadow row">
        <div class="col-12 col-lg-6">
            <h5 class="text-end font-S color-b-600">ثبت نام</h5>
            <div class="line" style="background-color: #fdf3d2"></div>
            <form action="{{route('register')}}" method="post" class="row">
                @csrf
                <div class="mb-3 col-12 col-md-6">
                    <label for="input_mobile" class="form-label d-block text-end f-11 color-b-500">شماره موبایل</label>
                    <input name="mobile" type="text" class="form-login f-14 color-b-600" dir="rtl" align="right" id="input_mobile" placeholder="شماره موبایل...">
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label for="input_name" class="form-label d-block text-end f-11 color-b-500">نام</label>
                    <input name="name" type="text" class="form-login f-14 color-b-600" dir="rtl" align="right" id="input_name" placeholder="نام...">
                </div>
                <div class="mb-3 col-12">
                    <label for="input_email" class="form-label d-block text-end f-11 color-b-500">ایمیل ( اختیاری )</label>
                    <input name="email" type="email" class="form-login color-b-600 f-14" dir="rtl" align="right" id="input_email" placeholder="ایمیل...">
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label for="input_password" class="form-label d-block text-end f-11 color-b-500">رمز عبور</label>
                    <input name="password" type="password" class="form-login color-b-600 f-14" dir="rtl" align="right" id="input_password" placeholder="پسورد...">
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label for="password_confirmation" class="form-label d-block text-end f-11 color-b-500">تکرار رمز عبور</label>
                    <input name="password_confirmation" type="password" class="form-login color-b-600 f-14" dir="rtl" align="right" id="password_confirmation" placeholder="تکرار رمز عبور...">
                </div>
                <br>
                <div class="col-12">
                    <button class="btn bg-gh color-b-600 px-5" type="submit">ثبت نام</button>
                </div>
            </form>
            <p class="text-end color-b-600 f-12">برای ورود به سایت <a href="{{route('login')}}">کلیک کنید</a></p>
            <div class="line"></div>
            <div class="color-b-700 position-relative or-text text-center">
                <span class="bg-white  px-3 color-b-700 f-14">یا</span>
            </div>
            <div class="col-12 obj-center">
                <a href="#" class="btn btn-danger" type="button">  <i class="bi bi-google"></i>  Google  </a>
            </div>
        </div>
        <div class="col-12 col-lg-6 d-none d-lg-block">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="/image/banner/login.jpg" alt="" style="width: 400px">
                    </div>
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="/image/banner/register.jpg" alt="" style="width: 400px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('errors.formAuth')
