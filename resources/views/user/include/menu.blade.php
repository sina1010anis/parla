<div class="w-100 bg-white rounded-3 shadow p-3">
    <div class="text-center">
        <i class="bi bi-person-workspace color-b-700" style="font-size:50px;"></i>
        <p class="f-15 mt-4 mb-0"><b>{{auth()->user()->name}}</b></p>
        <p class="f-12 color-b-500">{{jdate(auth()->user()->created_at)->format('%B %d، %Y')}}</p>
        <br>
        <div class="d-flex justify-content-center box-item-panel-user">
            @if(auth()->user()->status == 2)
                <span  title="پنل مدیر"><a class="p-0 m-0 obj-center" href="{{route('admin.index')}}"><i class="bi bi-person-rolodex mx-2 px-2 py-2"></i></a></span>
            @else
                <span title="پشتیبانی"><a class="p-0 m-0 obj-center" href="{{route('user.support')}}"><i class="bi bi-life-preserver mx-2 px-2 py-2 @if($count_support != 0)  shadow-red @endif"></i></a></span>
            @endif
            <span  title="پروفایل"><a class="p-0 m-0 obj-center" href="{{route('user.profile')}}"><i class="bi bi-person mx-2 px-2 py-2"></i></a></span>
            <span  title="محصولات ذخیره شده"><a class="p-0 m-0 obj-center" href="{{route('user.save')}}"><i class="bi bi-star mx-2 px-2 py-2"></i></a></span>
            <span  title="ادرس"><a class="p-0 m-0 obj-center" href="{{route('user.address')}}"><i class="bi bi-geo-alt mx-2 px-2 py-2"></i></a></span>
        </div>
        <div class="line"></div>
    </div>
    <div>
        <ul class="m-0 p-0">
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="{{route('home')}}" class="w-100 h-100">
                     <div class="d-inline-block me-3 f-13 position-relative color-b-700" style="bottom: 2px">خانه</div>
                    <div class="d-inline-block text-end f-20"><i style="color:#c1ab70" class="bi bi-house"></i></div>
                </a>
            </li>
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="{{route('user.tracking')}}" class="w-100 h-100">
                    <div class="d-inline-block me-3 f-13 position-relative color-b-700" style="bottom: 2px">پیگیری سفارشات</div>
                    <div class="d-inline-block text-end f-20"><i style="color:#c1ab70" class="bi bi-arrow-down-up"></i></div>
                </a>
            </li>
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="{{route('user.cart')}}" class="w-100 h-100">
                    <div class="d-inline-block me-3 f-13 position-relative color-b-700" style="bottom: 2px">سبد خرید (خرید نهایی)</div>
                    <div class="d-inline-block text-end f-20"><i style="color:#c1ab70" class="bi bi-bag"></i></div>
                </a>
            </li>
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="{{route('user.custom')}}" class="w-100 h-100">
                    <div class="d-inline-block me-3 f-13 position-relative color-b-700" style="bottom: 2px">سفارش محصول خاص</div>
                    <div class="d-inline-block text-end f-20"><i style="color:#c1ab70" class="bi bi-brush"></i></div>
                </a>
            </li>
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="{{route('user.calculator')}}" class="w-100 h-100">
                    <div class="d-inline-block me-3 f-13 position-relative color-b-700" style="bottom: 2px">محسابه قیمت فریم</div>
                    <div class="d-inline-block text-end f-20"><i style="color:#c1ab70" class="bi bi-calculator"></i></div>
                </a>
            </li>
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="{{route('logout')}}" class="w-100 h-100">
                    <div class="d-inline-block me-3 f-13 position-relative color-b-700" style="bottom: 2px">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="unset" type="submit">خروج</button>
                        </form>
                    </div>
                    <div class="d-inline-block text-end f-20"><i style="color:#ff6060" class="bi bi-x-square"></i></div>
                </a>
            </li>
        </ul>
    </div>
</div>
