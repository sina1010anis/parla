<div class="page-new page-help-admin-tag overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">راهنمای تگ ها</h6>
    <div class="line"></div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">تگ</th>
                <th scope="col">چیست</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>{{ '<p>...</p>' }}</th>
                <td>متن</td>
            </tr>
            <tr>
                <th>{{ '<img src="ادرس" alt="نام عکس">' }}</th>
                <td>عکس</td>
            </tr>
            <tr>
                <th>{{ '<a href="ادرس صفحه">....</a>' }}</th>
                <td>لینک</td>
            </tr>
            </tbody>
        </table>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">کلاس</th>
                <th scope="col">چیست</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>{{ 'f-9 تا f-22' }}</th>
                <td>اندازه متن</td>
            </tr>
            <tr>
                <th>{{ 'color-b-100 تا color-b-900' }}</th>
                <td>رنگ متن</td>
            </tr>
            <tr>
                <th>{{ 'w-100' }}</th>
                <td>اندازه کل عکس در  صفحه</td>
            </tr>
            <tr>
                <th>{{ 'w-50' }}</th>
                <td>اندازه نصف عکس در  صفحه</td>
            </tr>
            <tr>
                <th>{{ 'w-25' }}</th>
                <td>اندازه یک چهارم عکس در  صفحه</td>
            </tr>
            <tr>
                <th>{{ 'd-inline-block' }}</th>
                <td>برای انداختن عکس کنار هم</td>
            </tr>
            </tbody>
        </table>
    </div>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>
