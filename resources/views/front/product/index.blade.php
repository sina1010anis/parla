@extends('front.index')

@section('index')
    @include('front.include.hedare')
    @include('front.include.navbar')
    {{--    Prosuct View--}}
    @include('errors.formAuth')
    <view-product :data="{{$data}}" :image="{{$data->image_product}}">
        <template #option_user>
            @auth()
                <button @click="show_form_comment()" type="button" class="btn py-2 shadow px-4"><i
                        class="bi bi-chat-left-dots f-18 text-white"></i></button>
                <button @click="save_product({{$data->id , auth()->user()->id}})" type="button"
                        class="btn py-2 shadow px-4 icon-save"><i
                        class="bi @if($save_product->where('product_id', $data->id)->where('user_id' , auth()->user()->id)->count() == 0) bi-star @else bi-star-fill @endif  f-18 text-white icon-star"></i>
                </button>
                {{--            @foreach($save_product as $save)--}}
                {{--                    @if($save->product_id == $data->id)--}}
                {{--                        @if($save->user_id == auth()->user()->id )--}}
                {{--                            <button @click="delete_product({{$data->id , auth()->user()->id}})" type="button" class="btn py-2 shadow px-4"><i class="bi bi-star-fill f-18 text-white"></i></button>--}}
                {{--                        @endif--}}
                {{--                    @else--}}
                {{--                        @if($save->user_id == auth()->user()->id )--}}
                {{--                            <button @click="save_product({{$data->id , auth()->user()->id}})" type="button" class="btn py-2 shadow px-4 icon-save"><i class="bi bi-star f-18 text-white"></i></button>--}}
                {{--                        @endif--}}
                {{--                    @endif--}}
                {{--                @endforeach--}}
            @endauth
        </template>
        <template #view_color_select>
            <p class="f-13 color-b-500 mb-0">@{{ (color.name != null) ?color.name : '------' }}</p>
        </template>
        <template #btn_send_card>
            <a :class="(status_card.step_1 == 0 || status_card.step_2 == 0) ? 'btn btn btn-red font-Y f-14 float-end btn-send-card disabled' : 'btn btn btn-red font-Y f-14 float-end btn-send-card '"
               type="button" @click="send_card">خرید</a>
        </template>
        <template #view_size_select>
            <p class="f-13 color-b-500 mb-0">@{{ (data_size != null) ?data_size.name : '------' }}</p>
        </template>
        <template #comment_product>
            @if($data->comments->where('status',1)->count() == 0)
                <black-page text="نظری ثبت نشده است" icon="{{url('image/icon/comment_6.png')}}"></black-page>
            @else
                @foreach($data->comments as $comment)
                    @if($comment->status == 1)
                        <div
                            class=" w-100 bg-white shadow-sm rounded-3 mt-3 overflow-scroll mt-0 color-b-600 f-13 line-h-30 text-end p-2"
                            dir="rtl">
                            <div class="col-12 p-2">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                   class=" bi bi-person-circle" viewBox="0 0 16 16"><path
                                    d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path><path fill-rule="evenodd"
                                                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path></svg><span
                                class="position-relative name-user-comment">{{$comment->user->name}}</span></span><span
                                    class="float-start f-10 color-b-400">{{jdate($comment->created_at)->format('%B %d، %Y')}}
                                    @auth()
                                        <i class="bi bi-reply pointer reply-comment"
                                           @click="new_comment_reply({{$comment->id}})"></i>
                                    @endif
                                </span>
                            </div>
                            <div class="line"></div>
                            <div class="col-12 box-size-to px-3">
                                <div class="row">
                                    <div class="col-12 col-md-8 box-size-to p-3">
                                        <h5 class="color-b-700">{{$comment->title}}</h5>
                                        <p>
                                            {{$comment->text}}
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-4 box-size-to p-3">
                                        <div class="row mt-2">
                                            <div class="col-3">طراحی</div>
                                            <div class="col-9 ">
                                                <div class="progress position-relative" style="top: 8px">
                                                    <div class="progress-bar bg-gh text-dark  f-9" role="progressbar"
                                                         style="width: {{$comment->designing}}%" aria-valuenow="25"
                                                         aria-valuemin="0" aria-valuemax="100">{{$comment->designing}}%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">امکانات</div>
                                            <div class="col-9 ">
                                                <div class="progress position-relative" style="top: 8px">
                                                    <div class="progress-bar bg-gh text-dark f-9" role="progressbar"
                                                         style="width: {{$comment->possibilities}}%" aria-valuenow="25"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100">{{$comment->possibilities}}%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">ارزش</div>
                                            <div class="col-9 ">
                                                <div class="progress position-relative" style="top: 8px">
                                                    <div class="progress-bar bg-gh text-dark f-9" role="progressbar"
                                                         style="width: {{$comment->value}}%" aria-valuenow="25"
                                                         aria-valuemin="0" aria-valuemax="100">{{$comment->value}}%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">کیفیت</div>
                                            <div class="col-9 ">
                                                <div class="progress position-relative" style="top: 8px">
                                                    <div class="progress-bar bg-gh text-dark f-9" role="progressbar"
                                                         style="width: {{$comment->quality}}%" aria-valuenow="25"
                                                         aria-valuemin="0" aria-valuemax="100">{{$comment->quality}}%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($comment->src_image_user)
                                <div class="col-12 p-3 obj-center">
                                    <img src="/image/comment/{{$comment->src_image_user}}"
                                         style="max-width: 100%;width: 180px"
                                         alt="">
                                </div>
                            @endif
                        </div>
                        @foreach($comment->reply_commet as $reply_comment)
                            @if($reply_comment->status == 1)
                                <div
                                    class="col-10 bg-white shadow-sm rounded-3 mt-3 overflow-scroll mt-0 color-b-600 f-13 line-h-30 text-end p-2">
                                    <span>
                                                                                <span
                                                                                    class="position-relative name-user-comment">{{$reply_comment->user->name}}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             fill="currentColor"
                                             class=" bi bi-person-circle" viewBox="0 0 16 16"><path
                                                d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path><path fill-rule="evenodd"
                                                                                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path></svg>
                                        </span>
                                    <span
                                        class="float-start f-10 color-b-400">{{jdate($reply_comment->created_at)->format('%B %d، %Y')}}</span>
                                    <div class="line"></div>
                                    <div class="col-12 box-size-to p-3">
                                        <p>
                                            {{$reply_comment->text}}
                                        </p>
                                    </div>
                                </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @endif

        </template>
        <template #view_property>
            @foreach($data->property as $property)
                <li class="color-b-800 f-14 py-3" dir="rtl"><b>{{$property->title}}</b> : {{$property->name}}</li>
            @endforeach
        </template>
        <template #color_product>
            @foreach($data->color as $color)
                <li @click="set_color({{$color->color->id}} , '{{$color->color->name}}')" title="test"
                    class="obj-center text-center p-2 color-b-600 m-2 d-inline-block"
                    style="background-image: url('/image/color/{{$color->color->code}}')">
                    <span class="f-11 color-b-100 float-start"> {{$color->color->name}}</span>
                </li>
            @endforeach
        </template>
        <template #size_all>
            <select @change="select_size" v-model="id_size_product" class="form-select  mb-3" id="select_size"
                    aria-label=".form-select-lg example">
                @foreach($data->size as $size)
                    <option @if($loop->index == 0) selected @endif value="{{$size->id}}">{{$size->name}}</option>
                @endforeach
            </select>
        </template>
        <template #title_view>
            <blockquote class="blockquote">
                <h5 class="color-b-900" dir="rtl" align="right">{{$data->name}}</h5>
            </blockquote>
            <figcaption class="blockquote-footer">
                {{$data->sub_menu->name}}
            </figcaption>
        </template>
        <template #price_product>
            @if($data->discount <= 0)
                <p dir="rtl" align="right" class="f-14" style="color: #ff5454">قیمت: <b class="f-20 color-b-900">@{{
                        (data_size != null) ?data_size.price : 'لطفا یک سایز انتخاب کنید' }}</b></p>
            @else
                <p dir="rtl" align="right" class="f-14" style="color: #ff5454">قیمت:
                    <span v-if="data_size != null">
                        <span class="f-20 py-3 text-danger"><b>@{{ price_dic }}</b></span>
                        <del class="f-17 color-b-500">@{{ data_size.price }}</del>
                    </span>
                    <b class="f-20 color-b-900" v-else-if="data_size == null">لطفا یک سایز انتخاب کنید</b>
                </p>
            @endif
        </template>
        <template #form_comment>
            <div class="group-form-new-comment abstract-center">
                <i @click="cls_new_comment_page" class="d-inline bi bi-x icon-cls-new-comment"></i>
                <h5 class="text-center color-b-700">کامنت جدید</h5>
                <div class="line"></div>
                <form action="{{route('product.new.comment' , ['idProduct' => $data->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating my-2">
                        <input name="title" dir="rtl"
                               class="form-control form-control color-b-600 f-12 form-login  form-login @error('title') is-invalid @enderror"
                               {{old('title')}} align="right" placeholder="موضوع کامنت "
                               id="floatingTextarea"/>
                        <label class="color-b-500 d-block text-end f-12   " dir="rtl" for="floatingTextarea">موضوع
                            پیام</label>
                    </div>
                    <div class="form-floating">
                        <textarea name="text" dir="rtl"
                                  class="form-control form-control color-b-600 f-12 form-login form-login @error('text') is-invalid @enderror"
                                  align="right"
                                  placeholder="متن کامنت"
                                  id="floatingTextarea">{{old('text')}}</textarea>
                        <label class="color-b-500 d-block text-end f-12  " dir="rtl" for="floatingTextarea">متن
                            پیام</label>
                    </div>
                    <div class="row my-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <select name="designing" class="form-select f-12 form-login text-center"
                                        id="floatingSelectGrid"
                                        aria-label="Floating label select example">
                                    <option value="0">خیلی بد</option>
                                    <option value="25">بد</option>
                                    <option value="50">خوب</option>
                                    <option value="75">خیلی خوب</option>
                                    <option value="100">عالی</option>
                                </select>
                                <label for="floatingSelectGrid" class="f-12">طراحی </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select name="possibilities" class="form-select form-login f-12 text-center"
                                        id="floatingSelectGrid"
                                        aria-label="Floating label select example">
                                    <option value="0">خیلی کم</option>
                                    <option value="25">کم</option>
                                    <option value="50">خوب</option>
                                    <option value="75">خیلی خوب</option>
                                    <option value="100">عالی</option>
                                </select>
                                <label for="floatingSelectGrid" class="f-12">امکانات</label>
                            </div>
                        </div>
                        <div class="col-6 my-2">
                            <div class="form-floating">
                                <select name="value" class="form-select f-12 form-login text-center"
                                        id="floatingSelectGrid"
                                        aria-label="Floating label select example">
                                    <option value="0">خیلی کم</option>
                                    <option value="25">کم</option>
                                    <option value="50">خوب</option>
                                    <option value="75">خیلی خوب</option>
                                    <option value="100">عالی</option>
                                </select>
                                <label for="floatingSelectGrid" class="f-12">ارزش خرید</label>
                            </div>
                        </div>
                        <div class="col-6 my-2">
                            <div class="form-floating">
                                <select name="quality" class="form-select form-select-sm form-login f-12 text-center"
                                        id="floatingSelectGrid"
                                        aria-label="Floating label select example">
                                    <option value="0">خیلی کم</option>
                                    <option value="25">کم</option>
                                    <option value="50">خوب</option>
                                    <option value="75">خیلی خوب</option>
                                    <option value="100">عالی</option>
                                </select>
                                <label for="floatingSelectGrid" class="f-12">کیفیت</label>
                            </div>
                        </div>
                        <div class="my-3">
                            <label for="formFile" class="form-label color-b-500 f-11 d-block text-end" dir="rtl">اگر
                                محصول را خریداری
                                کرده اید لطفا عکس محصول را هم اپلود کنید .</label>
                            <input name="image"
                                   class="form-control form-control-sm  form-login @error('image') is-invalid @enderror"
                                   type="file" id="formFile">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-red my-3 f-13 py-2 w-100">ارسال نظر جهت برسی</button>
                        </div>
                    </div>
                </form>
            </div>
        </template>
        <template #dec_all>
            {!! $data->description_all !!}
        </template>
        <template #form_reply_comment>
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
        </template>
    </view-product>

    <related-product
        :products="{{$products->orderBy('id' , 'ASC')->whereMenu_id($data->menu_id)->where('id','!=',$data->id)->get()}}"
        title="مرتبط ها"></related-product>
    {{--   End Prosuct View--}}
    @include('front.include.footer')
    <blur-vue></blur-vue>
@endsection
