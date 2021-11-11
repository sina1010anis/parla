<div class="page-new page-new-admin overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">@{{ (user_admin != null) ? user_admin.name : '' }}</h6>
    <div class="line"></div>
    <div class="row">
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ساعت ورود : <b class="color-b-800">@{{ (user_admin != null) ? user_admin.created_at : '' }}</b></div>
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ایمیل : <b class="color-b-800">@{{ (user_admin != null) ? user_admin.email : '' }}</b></div>
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">شماره موبایل : <b class="color-b-800">@{{ (user_admin != null) ? user_admin.mobile : '' }}</b></div>
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">وضعیت : <b class="color-b-800">@{{ (user_admin != null) ? user_admin.status : '' }}</b></div>
    </div>
    <button @click="view_page_delete_user_admin" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
        حذف
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>

<div class="page-new page-new-admin-as overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">اخطار !</h6>
    <div class="line"></div>
    <div class="row">
        <div dir="rtl" align="center" class="col-12 f-12 color-b-600 my-2">ایا از انجام این عمل مطمعن هستید ؟ </div>
    </div>
    <button @click="delete_user_admin(user_admin.id)" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
        بله
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        خیر
    </button>
</div>
