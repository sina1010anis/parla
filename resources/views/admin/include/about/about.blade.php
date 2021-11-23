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
            <tr>
                <th>{{ '<video style="min-width:100%" controls> <source src="ادرس" type="video/mp4"> <source src="ادرس" type="video/ogg"> </video>' }}</th>
                <td>ویدیو</td>
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
<div class="page-new page-photos-about overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">گالری</h6>
    <div class="line"></div>
    <div class="row p-2">
        <div class="w-100 bg-light overflow-scroll p-2 rounded-3" style="max-height: 350px">
            @foreach($image_abouts as $image_about)
                <div class="card m-2 d-inline-block">
                    <img src="{{url('image/about/'.$image_about->src)}}" style="width: 130px" alt="{{$image_about->name}}">
                    <p class="text-center color-b-500 f-13">{{$image_about->name}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <button @click="view_page_new_photo_in_page_about" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
        جدید
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>
<div class="page-new page-photos-upload overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">اپلود عکس جدید</h6>
    <div class="line"></div>
    <div class="row p-2">
        <div class="w-100 bg-light overflow-scroll p-2 rounded-3" style="max-height: 350px">
            <form action="{{route('admin.new.image.about')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label d-block text-end f-14 color-b-500">عکس</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                </div>
                <button @click="view_page_new_photo_in_page_about" type="submit" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
                    اپلود
                </button>
                <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
                    بستن
                </button>
            </form>
        </div>
    </div>
</div>
<div class="page-new page-video-upload overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">اپلود فیلم جدید</h6>
    <div class="line"></div>
    <div class="row p-2">
        <div class="w-100 bg-light overflow-scroll p-2 rounded-3" style="max-height: 350px">
            <form action="{{route('admin.new.video.about')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label d-block text-end f-14 color-b-500">فیلم</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                </div>
                <button @click="view_page_new_photo_in_page_about" type="submit" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
                    اپلود
                </button>
                <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
                    بستن
                </button>
            </form>
        </div>
    </div>
</div>
<div class="page-new page-video-about overflow-hidden">
    <h6 class="text-center font-S my-2 color-b-600">ویدیو</h6>
    <div class="line"></div>
    <div class="row p-2">
        <div class="w-100 bg-light overflow-scroll p-2 rounded-3" style="max-height: 350px">
            @foreach($video_about as $video)
                <div class="card m-2 d-inline-block">
                    <video style="max-width: 200px">
                        <source src="{{url('image/about/video/'.$video->src)}}" type="video/mp4">
                        <source src="{{url('image/about/video/'.$video->src)}}" type="video/ogg">
                    </video>
                    <p class="text-center color-b-500 f-13">{{$video->name}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <button @click="view_page_new_video_in_page_about" type="button" class="btn btn-lg btn-primary f-13 ms-3 mt-3">
        جدید
    </button>
    <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
        بستن
    </button>
</div>
