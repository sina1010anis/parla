@extends('admin.index')

@section('admin')
    <div class=" p-2 ">
        <div class="col-12  bg-white p-4 rounded-3 shadow">
            <h5 class="color-b-700 text-end">پیام های محصولات</h5>
            <div class="line"></div>
            <div class="row">
                @foreach($users_admin as $user)
                    @if($user->supoort->count() != 0)
                        <div class="col-12 my-2">
                            <div class="rounded-3 p-2 bg-light">
                                <h5 class="color-b-600 text-end">{{$user->name}} - {{$user->mobile}}
                                    <span class="float-start"><i @click="open_page_admin('{{$user->id}}')"
                                                                 class="bi bi-plus-circle-dotted pointer"
                                                                 style="color: #00d200"></i></span>
                                </h5>

                                <div class="line"></div>
                                <div class="overflow-scroll" style="max-height: 500px;">
                                    <ul class="m-0 p-0">
                                        @foreach($user->supoort as $support)
                                            @if($support->mode == 1)
                                                <li class="w-100 p-2 bg-white my-4 rounded-3"
                                                    style="list-style: none">
                                                    <p dir="rtl"
                                                       class="font-S f-13 color-b-700 text-end ">
                                                        {{($support->status == 0) ? 'کاربر' : 'مدیر'}}
                                                    </p>
                                                    <img src="{{url('image/support/'.$support->file)}}" class="w-50" alt="">
                                                    <br>
                                                    <br>
                                                    <p class="font-S f-13 color-b-700 text-end">
                                                        {{$support->text}}
                                                    </p>
                                                </li>
                                            @else
                                                <li class="w-100 p-2 bg-white my-4 rounded-3"
                                                    style="list-style: none">
                                                    <p dir="rtl"
                                                       class="font-S f-13 color-b-700 text-end ">
                                                        {{($support->status == 0) ? 'کاربر' : 'مدیر'}}
                                                    </p>
                                                    <p class="font-S f-13 color-b-700 text-end">
                                                        {{$support->text}}
                                                    </p>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
            </div>
        </div>

        <div class="form-comment-reply bg-white rounded-3 shadow position-fixed bg-info p-3">
            <h5 class="font-S color-b-700 text-center">پاسخ به کامنت</h5>
            <div class="line"></div>
            <div class="form-floating">
                    <textarea v-model="text_comment" class="form-control form-login text-end h-textarea" dir="rtl"
                              placeholder="پیام" id="floatingTextarea"></textarea>
                <label class="d-block text-end float-start" dir="rtl" for="floatingTextarea">پیام</label>
            </div>
            <button @click="new_comment" type="button" class="btn btn-lg btn-red f-13 mt-3">ارسال</button>
            <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
                بستن
            </button>
        </div>
        <div class="page-new page-new-comment">
            <h6 class="text-center font-S my-2 color-b-600">پیام جدید</h6>
            <div class="line"></div>
            <textarea v-model="text_send" class="h-textarea w-textarea p-2 color-b-700 f-14 text-end"
                      dir="rtl">متن پیام</textarea>
            <div @click="open_page_upload_file" class="p-2 d-flex justify-content-between bg-light mt-2 rounded-3 pointer" >
                <i class="bi bi-cloud-arrow-up f-18 color-b-600"></i>
                <span class="f-12 color-b-600">اپلود عکس</span>
            </div>
            <button @click="new_comment_support_admin" type="button" class="btn btn-lg btn-red f-13 mt-3">ارسال</button>
            <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
                بستن
            </button>
        </div>
        <div class="page-new page-new-new-file-support">
            <h6 class="text-center font-S my-2 color-b-600">پیام جدید</h6>
            <div class="line"></div>
            <form action="{{route('user.new.support.file')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFileSm" class="form-label d-block text-end f-11 color-b-500">اپلود عکس</label>
                    <input name="image" class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
                <textarea name="text" class="h-textarea w-textarea p-2 color-b-700 f-14 text-end" dir="rtl" placeholder="زیر نویس..."></textarea>
                <button type="submit" class="btn btn-lg btn-red f-13 mt-3">ارسال</button>
                <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
                    بستن
                </button>
            </form>

        </div>
        <div class="blur"></div>
@endsection
@section('script')

@endsection
