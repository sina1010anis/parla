<span @click="view_menu_admin" class="icon-menu-admin p-2 shadow pointer bg-white f-17 position-absolute">
    <i class="bi bi-list"></i>
</span>
<div class="menu-admin">
    <div class="w-100">
        <i @click="hide_menu_admin" class=" pointer bi f-18 bi-arrow-bar-left d-block w-100 text-end"></i>
    </div>
    <div class="w-100 text-center my-2">
        <img src="{{url('/image/icon/admin.png')}}"  alt="">
        <div class="mt-3 f-14 font-S color-b-600">{{auth()->user()->name}}</div>
        <div class="f-13 mt-1 font-S color-b-500">{{auth()->user()->email}}</div>
    </div>
    <div class="line"></div>
    <p class="text-center color-b-700 f-15 font-S">ذخیره و ویرایش</p>
    <div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(1)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                 مشخصات هدر   <i class="bi bi-align-top f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-1">
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.about')}}">درباره شرکت</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.logo')}}">لوگو</a></div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(2)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                مشخصات منو   <i class="bi bi-menu-app f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-2">
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.menu')}}">منو اصلی</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer">زیر منو</div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(3)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                مشخصات بنر   <i class="bi bi-image f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-3">
                <div class="text-center f-12 color-b-500 py-2 pointer">بنر بالا</div>
                <div class="text-center f-12 color-b-500 py-2 pointer">بنر اسلایدر</div>
                <div class="text-center f-12 color-b-500 py-2 pointer">بنر وسط</div>
                <div class="text-center f-12 color-b-500 py-2 pointer">بنر انتها</div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(4)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                مشخصات اسلایدر   <i class="bi bi-image f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-4">
                <div class="text-center f-12 color-b-500 py-2 pointer">اسلایدر اصلی</div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(5)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                مشخصات محصولات   <i class="bi bi-diagram-2 f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-5">
                <div class="text-center f-12 color-b-500 py-2 pointer">محصول اصلی</div>
                <div class="text-center f-12 color-b-500 py-2 pointer">کلاس بندی محصولات</div>
                <div class="text-center f-12 color-b-500 py-2 pointer">کلاس بندی رنگ</div>
                <div class="text-center f-12 color-b-500 py-2 pointer">محصولات خاص</div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(6)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                مشخصات فوتر   <i class="bi bi-align-bottom f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-6">
                <div class="text-center f-12 color-b-500 py-2 pointer">ایتم</div>
                <div class="text-center f-12 color-b-500 py-2 pointer">بکس های فوتر</div>
                <div class="text-center f-12 color-b-500 py-2 pointer">نماد ها</div>
                <div class="text-center f-12 color-b-500 py-2 pointer">لینک ها</div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <p class="text-center color-b-700 f-15 font-S">کاربری</p>
    <div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(7)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                کاربر   <i class="bi bi-person f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-7">
                <div class="text-center f-12 color-b-500 py-2 pointer">تمام کاربران</div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <p class="text-center color-b-700 f-15 font-S">پیام ها</p>
    <div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(8)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                کاربر   <i class="bi bi-people f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-8">
                <div class="text-center f-12 color-b-500 py-2 pointer">پیام محصولات</div>
                <div class="text-center f-12 color-b-500 py-2 pointer">پشتیبانی</div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <p class="text-center color-b-700 f-15 font-S">هزینه ها</p>
    <div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(9)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                ادرس   <i class="bi bi-geo-alt f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-9">
                <div class="text-center f-12 color-b-500 py-2 pointer">ثبت استان</div>
                <div class="text-center f-12 color-b-500 py-2 pointer">ثبت شهر</div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(10)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                هزینه رایگان   <i class="bi bi-cash f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-10">
                <div class="text-center f-12 color-b-500 py-2 pointer">حداکثر قیمت</div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <p class="text-center color-b-700 f-15 font-S">سفارشات</p>
    <div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(11)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                فاکتور   <i class="bi bi-card-checklist f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-11">
                <div class="text-center f-12 color-b-500 py-2 pointer">نمایش فاکتور</div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <p class="text-center color-b-700 f-15 font-S">متفرقه</p>
    <div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(12)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                سبد خرید   <i class="bi bi-bag f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-12">
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="#" style="text-decoration: none;" class="color-b-500">حذف محصولات از سبد</a></div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(16)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                گالری   <i class="bi bi-images f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-16">
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="#" style="text-decoration: none;" class="color-b-500">گالری</a></div>
            </div>
        </div>
    </div>
</div>
