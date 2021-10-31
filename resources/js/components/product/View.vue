<template>
    <div class="row p-2 mt-5 ">
        <div class="col-12 col-md-7 bg-white p-2">
            <div class=" box-image-a obj-center">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div>
                        <div class="carousel-item active obj-center">
                            <img loading="lazy"
                                 :src="(image_src_index_page == '') ?'/image/product/'+data.image : image_src_index_page"
                                 class="d-block" style="max-width: 100%" :alt="data.name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row box-image-all d-flex flex-nowrap overflow-scroll bg-white">
                <div v-for="img in image" :key="img.id" @click="show_image_big('/image/product/'+img.src)"
                     class="item-image m-3 overflow-hidden p-0">
                    <img class="pointer w-100 h-100" :src="'/image/product/'+img.src" :alt="img.name" :title="img.name">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 rounded-3 p-4 bg-white">
            <figure class="text-end">
                <slot name="title_view"/>
            </figure>
            <div class="col-12 h-100 ">
                <slot name="price_product"/>
                <div class="row">
                    <div class="col-6">
                        <label for="select_size" dir="rtl" class="text-right color-b-500 f-12 my-2 float-end">انتخاب
                            سایز :</label>
                        <slot name="size_all"/>
                    </div>
                    <div class="col-6">
                        <div class="d-grid gap-2">
                            <br>
                            <slot name="btn_send_card"/>
                        </div>
                    </div>
                    <p class="color-b-700 bg-gh f-14 p-2 mb-0" dir="rtl" align="right">انتخاب رنگ :</p>
                    <div class="border-gh w-100 rounded-3 box-property overflow-scroll mt-0">
                        <ul class="text-center">
                            <slot name="color_product"/>
                        </ul>
                    </div>
                    <div class="col-12 my-4">
                        <div class="row">
                            <div class="col-6 p-2">
                                <div class="bg-gh p-2 text-center rounded-3">
                                    <p class="f-13 color-b-700">رنگ انتخاب شده</p>

                                    <slot name="view_color_select"/>
                                </div>
                            </div>
                            <div class="col-6 p-2">
                                <div class="bg-gh p-2 text-center rounded-3">
                                    <p class="f-13 color-b-700">سایز انتخاب شده</p>
                                    <slot name="view_size_select"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p dir="rtl" align="center" class="f-12 my-0 py-0" style="color: #ff5454"><i class="bi bi-truck"
                                                                                                 style="font-size: 1.5rem"></i>
                        {{ data.tips }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-2 mt-2 p-2 mt-0 ">
        <div class="col-12 p-4 ">
            <div class="row bg-white p-3 rounded-3 shadow">
                <div class="col-12">
                    <p class="color-b-700 bg-gh f-14 p-2 mb-0" dir="rtl" align="right"> توضیحات تکمیلی :</p>
                    <div class=" w-100 rounded-3 overflow-scroll mt-0 color-b-600 f-13 line-h-30 text-end p-2"
                         dir="rtl">
                        <slot name="dec_all"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-2 ">
        <div class="col-12 p-4 ">
            <div class="row p-3 rounded-3">
                <div class="col-12 col-md-4">
                    <div class="bg-white">
                        <p class="color-b-700 bg-gh f-14 p-2 mb-0" dir="rtl" align="right"> ویژگی ها :</p>
                        <div class="border-gh w-100 rounded-3 box-property-end overflow-scroll mt-0">
                            <ul class="text-center">
                                <slot name="view_property"/>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="bg-white">
                        <p class="color-b-700 bg-gh f-14 p-2 mb-0" dir="rtl" align="right"> توضیحات کلی :</p>
                        <div
                            class=" w-100 rounded-3 box-property-end overflow-scroll mt-0 color-b-600 f-13 line-h-30 text-end p-2"
                            dir="rtl">
                            {{ data.description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-2 mt-2 p-2 mt-0 ">
        <div class="col-12 p-4 ">
            <div class="col-12">
                <p class="color-b-700 bg-gh f-14 p-2 mb-0" dir="rtl" align="right"> نظرات :</p>
                <slot name="comment_product"/>
            </div>
        </div>
    </div>
    <div class="view-image-big">
        <i class="d-inline bi bi-x icon-cls-view-image" @click="cls_view_image_big"></i>
        <div class="view-img" :style="'background-image: url('+src_image_big+')'"></div>
    </div>
    <slot name="form_comment"/>
    <span class="view_discount rounded-circle obj-center shadow" v-if="data.discount > 0">
        {{ data.discount }}%
    </span>
    <div class="btn-group position-fixed option-user-view-product bg-gh-dark rounded-3 overflow-hidden" role="group"
         aria-label="Basic example">
        <slot name="option_user"/>
    </div>
</template>

<script>
import FormComment from './FormComment'

export default {
    name: "View",
    data: () => ({
        src_image_big: null,
        image_src_index_page: '',
    }),
    props: {
        data: {
            type: Object,
            required: true,
        },
        image: {
            type: Object,
            required: true,
        }
    },
    methods: {
        show_image_big(src) {
            this.image_src_index_page = src;

        },
        cls_view_image_big() {
            $('.view-image-big').fadeOut()
        },
    },
    components: {
        FormComment
    }
}
</script>

<style scoped>

</style>
