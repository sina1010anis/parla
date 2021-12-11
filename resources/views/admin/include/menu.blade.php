<span @click="view_menu_admin" class="icon-menu-admin p-2 shadow pointer bg-white f-17 position-absolute">
    <i class="bi bi-list"></i>
</span>
<div class="menu-admin shadow">
    <div class="w-100">
        <i @click="hide_menu_admin" class=" pointer bi f-18 bi-arrow-bar-left d-block w-100 text-end"></i>
    </div>
    <div class="w-100 text-center my-2">
        <a href="{{route('admin.index')}}">
            <img src="{{url('/image/icon/admin.png')}}"  alt="">
        </a>
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
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.subMenu')}}">زیر منو</a></div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(3)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                مشخصات بنر   <i class="bi bi-image f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-3">
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.bannerUp')}}">بنر بالا</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.bannerSlider')}}">بنر اسلایدر</a> </div>
                <div class="text-center f-12 color-b-500 py-2 pointer"> <a href="{{route('admin.view.bannerCenter')}}">بنر وسط</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.bannerEnd')}}">بنر انتها</a></div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(4)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                مشخصات اسلایدر   <i class="bi bi-image f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-4">
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.slider')}}">اسلایدر اصلی</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.slider.menu')}}">اسلایدر منو</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.slider.login')}}">اسلایدر صفحه ثبت نام</a></div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(5)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                مشخصات محصولات   <i class="bi bi-diagram-2 f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-5">
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.product')}}">محصول اصلی</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.color')}}">رنگ</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.productT')}}">محصولات خاص</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.frame')}}">فریم ها</a></div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(6)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                مشخصات فوتر   <i class="bi bi-align-bottom f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-6">
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.item')}}">ایتم</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.box.footer')}}">باکس های فوتر</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.item.footer')}}">ایتم های فوتر</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.link.footer')}}">لینک ها</a></div>
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
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.users')}}">کاربران</a></div>
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
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.message.product')}}">پیام محصولات</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.message.support')}}">پشتیبانی</a></div>
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
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.state')}}">ثبت استان</a></div>
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.city')}}">ثبت شهر</a></div>
            </div>
        </div>
        <div class="item-menu-panel-admin">
            <div @click="view_item_menu_admin(10)" class="f-13 my-3 color-b-600 font-S text-end pointer title-item-menu-panel-admin rounded-3 p-2">
                <i class="bi bi-caret-down float-start position-relative" style="top: 4px"></i>
                هزینه رایگان   <i class="bi bi-cash f-15"></i>
            </div>
            <div class="box-item-menu-panel-admin mt-1 p-2" id="box-item-menu-panel-admin-10">
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.free.send')}}">حداکثر قیمت</a></div>
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
                <div class="text-center f-12 color-b-500 py-2 pointer"><a href="{{route('admin.view.factor.page')}}">نمایش فاکتور</a></div>
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
                <div class="text-center f-12 color-b-500 py-2 pointer"><a @click="view_page_delete_product_to_cart" style="text-decoration: none;" class="color-b-500">حذف محصولات از سبد</a></div>
            </div>
        </div>
    </div>
</div>
<div class="page-new page-delete-item-cart overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">اخطار !</h6>
    <div class="line"></div>
    <div class="row">
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ایا از انجام این عمل مطمعن هستید ؟
        </div>
    </div>
    <button @click="delete_image_center('cart')" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
        بله
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        خیر
    </button>
</div>
<div class="blur"></div>
