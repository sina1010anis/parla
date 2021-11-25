<div class="page-new page-new-support-admin overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">پیام های پشتیبانی</h6>
    <div class="line"></div>
    <div class="row overflow-scroll" >
        <div class="col-12 " style="max-height: 400px;">
            <span v-for="data in data_support_panel_admin" key="data.id" class="w-100  rounded-3 mt-2 p-3 float-end bg-light">
                <p  class="f-14 text-end font-S color-b-700">@{{ data.username }} - @{{ data.mobile }}</p>
                <span class="line"></span>
                <p v-if="data.file == 1" class="my-1 color-b-700 f-12 ">فایل دارد</p>
                <p dir="rtl" class="f-13 text-end font-S color-b-600">
                    @{{ data.text }}
                </p>
                <p dir="rtl" class="f-12 text-start font-S color-b-500">
                    @{{ data.date }}
                </p>
                <span class="line"></span>
                <button class="btn btn-primary btn-sm" @click="reply_support_admin(data.sender , data.id)">پاسخ</button>
            </span>
        </div>
    </div>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>
<div class="page-new page-new-support-reply-admin overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">پاسخ پیام</h6>
    <div class="line"></div>
    <div class="row overflow-scroll" >
        <div class="col-12 " style="max-height: 400px;">
            <textarea v-model="text_support" name="text" class="form-control bg-light text-end f-13 color-b-600" dir="rtl" placeholder="توضیحات ..." id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <button @click="new_support" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
        ارسال
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>
