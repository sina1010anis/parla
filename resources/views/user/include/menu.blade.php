<div class="w-100 bg-white rounded-3 shadow p-3">
    <div class="text-center">
        <i class="bi bi-person-workspace color-b-700" style="font-size:50px;"></i>
        <p class="f-15 mt-4 mb-0"><b>{{auth()->user()->name}}</b></p>
        <p class="f-12 color-b-500">{{jdate(auth()->user()->created_at)->format('%B %d، %Y')}}</p>
        <br>
        <div class="d-flex justify-content-center box-item-panel-user">
            <span class="obj-center" title="پشتیبانی"><a class="p-0 m-0" href="#"><i class="bi bi-life-preserver mx-2 px-2 py-2"></i></a></span>
            <span class="obj-center" title="پروفایل"><a class="p-0 m-0" href="#"><i class="bi bi-person mx-2 px-2 py-2"></i></a></span>
            <span class="obj-center " title="محصولات ذخیره شده"><a class="p-0 m-0" href="#"><i class="bi bi-star mx-2 px-2 py-2"></i></a></span>
            <span class="obj-center" title="پیام های مدیر"><a class="p-0 m-0" href="#"><i class="bi bi-window mx-2 px-2 py-2"></i></a></span>
        </div>
        <div class="line"></div>
    </div>
    <div>
        <ul class="m-0 p-0">
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="#" class="w-100 h-100">
                     <div class="d-inline-block me-3 f-14 position-relative color-b-800" style="bottom: 2px">خانه</div>
                    <div class="d-inline-block text-end f-20"><i style="color:#c1ab70" class="bi bi-house"></i></div>
                </a>
            </li>
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="#" class="w-100 h-100">
                    <div class="d-inline-block me-3 f-14 position-relative color-b-800" style="bottom: 2px">پیگیری سفارشات</div>
                    <div class="d-inline-block text-end f-20"><i style="color:#c1ab70" class="bi bi-arrow-down-up"></i></div>
                </a>
            </li>
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="#" class="w-100 h-100">
                    <div class="d-inline-block me-3 f-14 position-relative color-b-800" style="bottom: 2px">سبد خرید</div>
                    <div class="d-inline-block text-end f-20"><i style="color:#c1ab70" class="bi bi-bag"></i></div>
                </a>
            </li>
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="#" class="w-100 h-100">
                    <div class="d-inline-block me-3 f-14 position-relative color-b-800" style="bottom: 2px">محسابه قیمت</div>
                    <div class="d-inline-block text-end f-20"><i style="color:#c1ab70" class="bi bi-calculator"></i></div>
                </a>
            </li>
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="#" class="w-100 h-100">
                    <div class="d-inline-block me-3 f-14 position-relative color-b-800" style="bottom: 2px">ثبت ادرس</div>
                    <div class="d-inline-block text-end f-20"><i style="color:#c1ab70" class="bi bi-geo-alt"></i></div>
                </a>
            </li>
            <li style="list-style: none" class="text-end p-3 pointer item-menu-panel-user rounded-3 position-relative">
                <a href="{{route('logout')}}" class="w-100 h-100">
                    <div class="d-inline-block me-3 f-14 position-relative color-b-800" style="bottom: 2px">خروج</div>
                    <div class="d-inline-block text-end f-20"><i style="color:#ff6060" class="bi bi-x-square"></i></div>
                </a>
            </li>
        </ul>
    </div>
</div>
