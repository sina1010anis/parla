@extends('front.index')

@section('index')
    <header-vue></header-vue>
    <nav-bar :user_status="{{auth()->check()}}" :menus="{{$menus}}" :sub_menus="{{$sub_menus}}">
        <template #menu_mobile>
            <ul class="menu-for-mobile col-md-8 nav justify-content-end p-1 navbar-light bg-white order-0 order-sm-0 order-md-1 d-flex flex-column text-center">
                @foreach($menus as $menu)
                    <li class="nav-item dropdown pointer">
                        <a @click="show_menu_mobile('menu_'+'{{$menu->id}}')"
                           class="font-Y color-b-700 f-12 nav-link dropdown-toggle">
                            {{$menu->name}}
                        </a>
                        <ul class="menu_{{$menu->id}} menu-sub-for-mobile menu-for-mobile col-md-8 p-1 bg-white order-0 order-sm-0 order-md-1 text-center"
                            id="menu_1 menu_bar_mobile">
                            @foreach($menu->sub_menu as $sub_menu)
                                <li style="list-style: none" class="p-2 f-11">
                                    <a class="color-b-500 font-Y" style="text-decoration: none"
                                       href="">{{$sub_menu->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </template>
    </nav-bar>
    {{--    Prosuct View--}}
    <view-product :data="{{$data}}" :image="{{$data->image_product}}">
        <template #option_user>
            <button @click="show_form_comment()" type="button" class="btn py-2 shadow px-4"><i
                    class="bi bi-chat-left-dots f-18 text-white"></i></button>
            <button type="button" class="btn py-2 shadow px-4"><i class="bi bi-star f-18 text-white"></i></button>
        </template>
        <template #view_color_select>
            <p class="f-13 color-b-500 mb-0">@{{ (color.name != null) ?color.name : '------' }}</p>
        </template>
        <template #btn_send_card>
            <a :class="(status_card.step_1 == 0 || status_card.step_2 == 0) ? 'btn btn btn-red font-Y f-14 float-end btn-send-card disabled' : 'btn btn btn-red font-Y f-14 float-end btn-send-card '"
               type="button">خرید</a>
        </template>
        <template #view_size_select>
            <p class="f-13 color-b-500 mb-0">@{{ (data_size != null) ?data_size.name : '------' }}</p>
        </template>
        <template #comment_product>
            @foreach($data->comments as $comment)
                <div
                    class=" w-100 bg-white shadow-sm rounded-3 mt-3 overflow-scroll mt-0 color-b-600 f-13 line-h-30 text-end p-2"
                    dir="rtl">
                    <div class="col-12 p-2">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                   class=" bi bi-person-circle" viewBox="0 0 16 16"><path
                                    d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path><path fill-rule="evenodd"
                                                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path></svg><span
                                class="position-relative name-user-comment">{{$comment->user->name}}</span></span><span
                            class="float-start f-10 color-b-400">{{jdate($comment->created_at)->format('%B %d، %Y')}}</span>
                    </div>
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
                                                 aria-valuemin="0" aria-valuemax="100">{{$comment->possibilities}}%
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
                            <img src="/image/product/{{$comment->src_image_user}}" style="max-width: 100%;width: 200px"
                                 alt="">
                        </div>
                    @endif
                </div>
            @endforeach
        </template>
        <template #view_property>
            @foreach($data->property as $property)
                <li class="color-b-800 f-14 py-3" dir="rtl"><b>{{$property->title}}</b> : {{$property->name}}</li>
            @endforeach
        </template>
        <template #color_product>
            @foreach($data->color as $color)
                <li @click="set_color({{$color->id}} , '{{$color->color->name}}')" title="test"
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
                <form action="">
                    @csrf
                    <div class="form-floating">
                        <textarea dir="rtl" class="form-control" align="right" placeholder="متن کامنت"
                                  id="floatingTextarea"></textarea>
                        <label class="color-b-500 text-end" dir="rtl" for="floatingTextarea">متن پیام</label>
                    </div>
                    <div class="row my-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select f-12 text-center" id="floatingSelectGrid"
                                        aria-label="Floating label select example">
                                    <option>خیلی بد</option>
                                    <option value="1">بد</option>
                                    <option value="2">خوب</option>
                                    <option value="3">خیلی خوب</option>
                                    <option value="3">عالی</option>
                                </select>
                                <label for="floatingSelectGrid" class="f-12">طراحی </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select f-12 text-center" id="floatingSelectGrid"
                                        aria-label="Floating label select example">
                                    <option>خیلی کم</option>
                                    <option value="1">کم</option>
                                    <option value="2">خوب</option>
                                    <option value="3">خیلی خوب</option>
                                    <option value="3">عالی</option>
                                </select>
                                <label for="floatingSelectGrid" class="f-12">امکانات</label>
                            </div>
                        </div>
                        <div class="col-6 my-2">
                            <div class="form-floating">
                                <select class="form-select f-12 text-center" id="floatingSelectGrid"
                                        aria-label="Floating label select example">
                                    <option>خیلی کم</option>
                                    <option value="1">کم</option>
                                    <option value="2">خوب</option>
                                    <option value="3">خیلی خوب</option>
                                    <option value="3">عالی</option>
                                </select>
                                <label for="floatingSelectGrid" class="f-12">ارزش خرید</label>
                            </div>
                        </div>
                        <div class="col-6 my-2">
                            <div class="form-floating">
                                <select class="form-select form-select-sm f-12 text-center" id="floatingSelectGrid"
                                        aria-label="Floating label select example">
                                    <option>خیلی کم</option>
                                    <option value="1">کم</option>
                                    <option value="2">خوب</option>
                                    <option value="3">خیلی خوب</option>
                                    <option value="3">عالی</option>
                                </select>
                                <label for="floatingSelectGrid" class="f-12">کیفیت</label>
                            </div>
                        </div>
                        <div class="my-3">
                            <label for="formFile" class="form-label color-b-500 f-11" dir="rtl">اگر محصول را خریداری
                                کرده اید لطفا عکس محصول را هم اپلود کنید .</label>
                            <input class="form-control form-control-sm" type="file" id="formFile">
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
    </view-product>

    <related-product
        :products="{{$products->orderBy('id' , 'ASC')->whereMenu_id($data->menu_id)->where('id','!=',$data->id)->get()}}"
        title="مرتبط ها"></related-product>
    {{--   End Prosuct View--}}
    <item-vue :items="{{$items}}"></item-vue>
    <footer-vue :link="{{$link_footer}}">
        <template #footer>
            @foreach($title_footers as $title)
                <div class="col mt-3 mb-3">
                    <h5 class="font-Y">{{$title->name}}</h5>
                    <ul class="nav flex-column">
                        @foreach($title->item_footer as $item)
                            <li class="nav-item mb-2">
                                <a @if($item->like != null) href="{{$item->link}}"
                                   @endif class="nav-link p-0 text-muted font-Y f-13">{{$item->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </template>
        <template #link>
            @foreach($link_footer as $link)
                <li class="ms-3">
                    <a href="{{$link->link}}" title="{{$link->name}}" class="link-dark f-18 pointer">
                        <i class="{{$link->icon}}"></i>
                    </a>
                </li>
            @endforeach
        </template>
    </footer-vue>
    <blur-vue></blur-vue>
@endsection
