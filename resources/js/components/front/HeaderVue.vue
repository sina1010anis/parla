<template>
    <div class="row">
        <header
            class="bg-white d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
            <a href="/" class="ms-md-3 d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img width="40" :src="'/image/logo/'+logo.src" alt="">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 font-Y">
                <li><a href="/"
                       class="nav-link px-2 link-secondary f-13 text-opacity-50 position-relative  item-menu-top me-2">صفحه
                    اصلی</a></li>
                <li><a href="/about"
                       class="nav-link px-2 link-dark f-13 text-opacity-50 position-relative  item-menu-top me-2">درباره
                    شرکت</a></li>
            </ul>

            <div class="col-md-3 text-end me-md-3 font-Y position-relative">
                <label class="position-absolute label-input-search-product" for="input_search_product_header">
                    <i class="bi bi-search"></i>
                </label>
                <input v-model="text_search" @keyup="search_product" dir="rtl" align="right"
                       class="input-search-product font-Y f-12" type="text" id="input_search_product_header"
                       placeholder="جستوجو..." aria-label="Search">
            </div>
        </header>
    </div>
    <div class="shadow rounded-3 box-search position-absolute p-3 bg-white">
        <a v-for="item in filed_search" style="text-decoration: none!important;" :href="'/product/'+item.slug">
            <div class="w-100 border-bottom d-flex bd-highlight">
                <div class="me-auto p-2 bd-highlight"><img :src="'/image/product/'+item.image" :alt="item.name" :title="item.name"></div>
                <div class="obj-center color-b-500 f-14 p-2 bd-highlight">{{item.name}}</div>
                <div class="obj-center color-b-400 f-14 p-2 bd-highlight"><i class="bi bi-search"></i></div>
            </div>
        </a>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: 'Header',
    data: () => ({
        text_search: '',
        filed_search: ''
    }),
    props:{
        logo:{
            type:Object
        }
    },
    methods: {
        search_product() {
            if (this.text_search != '') {
                axios.post('/product/search', {text: this.text_search}).then((res) => {
                    this.filed_search = ''
                    $('.box-search').slideDown()
                    this.filed_search = res.data
                })
            }else {
                $('.box-search').slideUp()
            }
            if (this.text_search == ''){
                $('.box-search').slideUp()
            }
        }
    }
}
</script>
