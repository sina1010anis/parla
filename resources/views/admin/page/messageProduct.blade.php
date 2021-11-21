@extends('admin.index')

@section('admin')
    <div class=" p-2 ">
        <div class="col-12  bg-white p-4 rounded-3 shadow">
            <h5 class="color-b-700 text-end">پیام های محصولات</h5>
            <div class="line"></div>
            <div class="row">
                @foreach($product_all_admin as $product)
                    @if($product->comments->count() != 0)
                        <div class="col-12 col-md-6">
                            <div class="rounded-3  p-2  bg-light">
                                <h5 class="color-b-600 text-end">{{$product->name}} : {{$product->comments->count()}}</h5>
                                <div class="line"></div>
                                @foreach($product->comments as $comment)
                                    <div class="p-2 bg-light rounded-3">
                                        <h6 class="color-b-600 text-end" dir="rtl">{{$comment->title}}</h6>
                                        <p class="color-b-500 text-end" dir="rtl">{{$comment->text}}</p>
                                        @if($comment->src_image_user != NULL)
                                            <div class="obj-center">
                                                <img src="{{url('image/comment/'.$comment->src_image_user)}}"
                                                     style="width: 150px;" alt="{{$comment->src_image_user}}">
                                            </div>
                                        @endif
                                    </div>
                                    <button @click="editStatusMessage('{{$comment->id}}' , 'comment')" class="{{($comment->status == 0) ? 'btn btn-danger btn-sm ' : ' btn-sm btn btn-success'}}">
                                        {{($comment->status == 0) ? 'غیر فعال' : 'فعال'}}
                                    </button>
                                    <button @click="new_comment_reply('{{$comment->id}}')" class="btn btn-primary btn-sm ">
                                        پاسخ
                                    </button>
                                    @foreach($comment->reply_commet as $reply)
                                        <div class="p-2 my-2" style="background-color: #e6ffe6">
                                            <p class="color-b-500 text-end" dir="rtl">{{$reply->text}}</p>
                                            <button @click="editStatusMessage('{{$reply->id}}' , 'reply')" class="{{($reply->status == 0) ? 'btn btn-danger btn-sm ' : ' btn-sm btn btn-success'}}">
                                                {{($reply->status == 0) ? 'غیر فعال' : 'فعال'}}
                                            </button>
                                        </div>
                                    @endforeach
                                    <div class="line"></div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
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
    <div class="blur"></div>
@endsection
@section('script')

@endsection
