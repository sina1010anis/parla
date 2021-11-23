<div class="row obj-center h-100">
    <div class="col-11 col-lg-9 p-2 p-md-5 bg-white rounded-3 shadow row">
        <div class="col-12 col-lg-6 d-none d-lg-block">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($slider_login as $slider)
                            <div class="{{($loop->index == 0) ? 'active' : '' }} carousel-item" data-bs-interval="2000">
                                <img src="/image/slider/sliderLoginRegister/{{$slider->src}}" alt="{{$slider->name}}"
                                     title="{{$slider->name}}" style="width: 400px">
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h5 class="text-end font-S color-b-600">ورود</h5>
            <div class="line" style="background-color: #fdf3d2"></div>
            <br>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="input_mobile" class="form-label d-block text-end f-11 color-b-500">شماره موبایل</label>
                    <input name="mobile" type="text"
                           class="form-control form-login @error('mobile') is-invalid @enderror"
                           value="{{old('mobile')}}" dir="rtl" align="right"
                           id="input_mobile" placeholder="شماره موبایل...">
                </div>
                <div class="mb-3">
                    <label for="input_password" class="form-label d-block text-end f-11 color-b-500">رمز عبور</label>
                    <input name="password" type="password"
                           class="form-control form-login color-b-600 f-14 @error('password') is-invalid @enderror"
                           dir="rtl" align="right"
                           id="input_password" placeholder="پسورد...">
                </div>
                <br>
                {{--                <div class="mb-3">--}}
                {{--                    {!! htmlFormSnippet() !!}--}}
                {{--                </div>--}}
                <div class="mb-3">
                    <div class="g-recaptcha"
                         data-sitekey="{!! env('RECAPTCHA_SITE_KEY' , '6Lf2euYbAAAAAGIymqU4o_v83Ob8X3kFuMVNtEyN') !!}"></div>
                </div>
                <div class="col-12">
                    <button class="btn bg-gh color-b-600 px-5" type="submit">ورود</button>
                </div>
            </form>
            <p class="text-end color-b-600 f-12">برای ثبت نام <a href="{{route('register')}}">کلیک کنید</a></p>
            {{--            <div class="line"></div>--}}
            {{--            <div class="color-b-700 position-relative or-text text-center">--}}
            {{--                <span class="bg-white  px-3 color-b-700 f-14">یا</span>--}}
            {{--            </div>--}}
            {{--            <div class="col-12 obj-center">--}}
            {{--                <a href="{{route('auth.google')}}" class="btn btn-danger" type="button">  <i class="bi bi-google"></i>  Google  </a>--}}
            {{--            </div>--}}
        </div>
    </div>
</div>
@include('errors.formAuth')
