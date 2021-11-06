@extends('user.index')

@section('index')
    <div class="col-12 position-relative">
        <div><h5 class="text-end font-S my-2 color-b-600">پشتیبانی</h5></div>
        <div class="line"></div>
        <i @click="open_page" class="bi bi-plus-circle-fill pointer" title="پیام جدید"></i>
    </div>
    <div class="col-12 overflow-scroll bg-light rounded-3 position-relative" style="height: 500px">
        <ul class="m-0 p-0">
            @if($supports->count() != 0)
                @foreach($supports as $support)
                    <li class="w-100 p-2 {{($support->status == 0) ? 'pm-my' : 'pm-to'}}" style="list-style: none">
                        <div class="w-75 p-3 my-3">
                            <p dir="rtl" class="font-S f-13 color-b-700 text-end">
                                {{$support->text}}
                            </p>
                        </div>
                    </li>
                @endforeach
            @else
                <count-vue image="comment_null_2.png" text="پیامی یافت نشد !"></count-vue>
            @endif
        </ul>
    </div>
    <div class="page-new">
        <h6 class="text-center font-S my-2 color-b-600">پیام جدید</h6>
        <div class="line"></div>
        <textarea v-model="text_send" class="h-textarea w-textarea p-2 color-b-700 f-14 text-end" dir="rtl">متن پیام</textarea>
        <button @click="new_comment_support" type="button" class="btn btn-lg btn-red f-13 mt-3">ارسال</button>
        <button @click="cls_page_new_comment_reply" type="button" class="btn btn-lg btn-light f-13 ms-3 mt-3">
            بستن
        </button>
    </div>
@endsection
