<div class="page-new page-edit-menu-page overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">ویرایش زیر منو</h6>
    <div class="line"></div>
    <p class="f-13 color-b-700" dir="rtl">
        <span>  منو اصلی :</span>
        @{{ (menu_sub_menu != null ) ? menu_sub_menu.name : '' }}
    </p>
    <div class="row">
        <div class="mb-3">
            <label for="formFile"  class="form-label f-13 color-b-500 d-block text-end">نام منو</label>
            <input name="image" class="form-control text-end f-15 color-b-700" type="text" v-model="name_menu_admin" id="formFile">
        </div>
    </div>
    <button @click="edit_name_menu_admin(2)" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
        ویرایش
    </button>
    <button @click="view_page_delete_menu_admin" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
        حذف دسته
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
    <button @click="edit_menu_admin(2)" type="button" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
        بله
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        خیر
    </button>
</div>
