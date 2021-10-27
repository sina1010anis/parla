<template>
    <div class="row nav-item-index-page rounded-3">
        <div class="col-md-4 bg-white order-1 order-sm-1 order-md-0 d-none d-md-block">
            <i class="bi bi-cart g-3 position-relative ps-3 pe-2 text-color-item-hearer pointer"></i>
            <!--            Location-->
            <!--            <div class="d-inline pointer group-item-location-hearer p-1 ms-2 rounded-3 position-relative">-->
            <!--                <i class="bi bi-geo-alt g-3 position-relative ps-2 pe-2 text-color-item-hearer"></i>-->
            <!--                <span class="font-Y f-10 text-color-item-hearer position-relative">برای ثبت ادرس لطفا وارد شوید</span>-->
            <!--            </div>-->
            <a style="text-decoration: none!important;" href="/login"
               class="d-inline pointer group-item-location-hearer p-1 ms-2 rounded-3 position-relative">
                <i class="bi bi bi-person g-3 position-relative ps-2 pe-2 text-color-item-hearer"></i>
                <span id="test" class="font-Y f-10 text-color-item-hearer position-relative">ورود / عضویت</span>
            </a>
        </div>
        <!--        Lap top-->
        <ul class="col-md-8 nav justify-content-end p-1 navbar-light bg-white order-0 order-sm-0 order-md-1 d-none d-md-flex">
            <li v-for="menu in menus" class="nav-item d-inline item-menu-header pointer me-3" @click="show_menu(menu.id , menu.image)">
                <a class="nav-link text-secondary active font-Y f-13" aria-current="page">{{ menu.name }}</a>
            </li>
        </ul>
        <!--        Mobile-->
        <div class="col-12 d-md-none bg-white p-2">
            <div class="row">
                <div class="d-flex d-flex justify-content-between">
                    <a style="text-decoration: none!important;" href="/login"
                       class="d-inline pointer group-item-location-hearer p-1 ms-2 rounded-3 position-relative">
                        <i class="bi bi bi-person g-3 position-relative ps-2 pe-2 text-color-item-hearer"></i>
                        <span class="font-Y f-10 text-color-item-hearer position-relative">ورود / عضویت</span>
                    </a>
                    <a @click="view_menu"
                       class="d-inline pointer group-item-location-hearer p-1 ms-2 rounded-3 position-relative">
                        <i class="bi bi-arrow-bar-down g-3 position-relative ps-2 pe-2 text-color-item-hearer"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 group-ul-menu-mobile bg-white">
            <ul class="menu-for-mobile col-md-8 nav justify-content-end p-1 navbar-light bg-white order-0 order-sm-0 order-md-1 d-flex flex-column text-center">
                <li v-for="menu in menus" class="nav-item dropdown pointer">
                    <a @click="show_menu_mobile('menu_'+menu.id)" class="font-Y color-b-700 f-12 nav-link dropdown-toggle">
                        {{menu.name}}
                    </a>
                    <ul :class="'menu_'+menu.id+' menu-sub-for-mobile menu-for-mobile col-md-8 p-1 bg-white order-0 order-sm-0 order-md-1 text-center'"
                        id="menu_1 menu_bar_mobile"
                        v-for="sub_menu in sub_menus" :key="sub_menu.id">
                        <li v-if="menu.id == sub_menu.menu_id" style="list-style: none" class="p-2 f-11">
                            <a class="color-b-500 font-Y" style="text-decoration: none" href="">{{sub_menu.name}}</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--    Menu-->
    <div class="row menu-header">
        <div class="col-12 group-menu mt-2 p-2 overflow-hidden">
            <div class="row position-relative">
                <i class="d-inline bi bi-x icon-cls-menu-header" @click="cls_menu"></i>
                <div class="col-6 d-inline">
                    <div class="h-100 obj-center">
                        <img class="image-to-menu" :src="'image/menu/'+src_image_menu" alt="name image">
                    </div>
                </div>
                <div class="col-6 group-ul-menu">
                    <ul class=" list-group list-group-flush text-end">
                        <li v-for="sub_menu in data_sub_menu" class="list-group-item list-group-item-action pointer" @mouseover="hove_item_menu(sub_menu.image)">
                            <a href="#" style="text-decoration: none" class="text-secondary text-opacity-25 font-Y f-13" >{{sub_menu.name}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 bg-white position-absolute overflow-hidden left-0 rounded-3 shadow d-none d-md-block" style="height: 300px;z-index: 15">
        <div class="p-2 w-100 position-absolute top-0 overflow-scroll" style="height: 250px;">
            <div class="w-100 my-2 p-2 shadow-sm rounded-3 d-flex justify-content-between align-items-center item-card-view" style="height: 100px">
                <img src="image/product/product_6.jpg" alt="" class="h-100">
                <span class="font-Y color-b-700 f-11">قیمت تک : 25000</span>
                <span class="font-Y color-b-700 f-11">تعداد : 5</span>
                <span class="font-Y color-b-700 f-11">نام : متن تستی</span>
                <span class="font-Y f-11 pointer" style="color: red"><i class="bi bi-trash"></i></span>
            </div>
            <div class="w-100 my-2 p-2 shadow-sm rounded-3 d-flex justify-content-between align-items-center item-card-view" style="height: 100px">
                <img src="image/product/product_6.jpg" alt="" class="h-100">
                <span class="font-Y color-b-700 f-11">قیمت تک : 25000</span>
                <span class="font-Y color-b-700 f-11">تعداد : 5</span>
                <span class="font-Y color-b-700 f-11">نام : متن تستی</span>
                <span class="font-Y f-11 pointer" style="color: red"><i class="bi bi-trash"></i></span>
            </div>
            <div class="w-100 my-2 p-2 shadow-sm rounded-3 d-flex justify-content-between align-items-center item-card-view" style="height: 100px">
                <img src="image/product/product_6.jpg" alt="" class="h-100">
                <span class="font-Y color-b-700 f-11">قیمت تک : 25000</span>
                <span class="font-Y color-b-700 f-11">تعداد : 5</span>
                <span class="font-Y color-b-700 f-11">نام : متن تستی</span>
                <span class="font-Y f-11 pointer" style="color: red"><i class="bi bi-trash"></i></span>
            </div>
            <div class="w-100 my-2 p-2 shadow-sm rounded-3 d-flex justify-content-between align-items-center item-card-view" style="height: 100px">
                <img src="image/product/product_6.jpg" alt="" class="h-100">
                <span class="font-Y color-b-700 f-11">قیمت تک : 25000</span>
                <span class="font-Y color-b-700 f-11">تعداد : 5</span>
                <span class="font-Y color-b-700 f-11">نام : متن تستی</span>
                <span class="font-Y f-11 pointer" style="color: red"><i class="bi bi-trash"></i></span>
            </div>
            <div class="w-100 my-2 p-2 shadow-sm rounded-3 d-flex justify-content-between align-items-center item-card-view" style="height: 100px">
                <img src="image/product/product_6.jpg" alt="" class="h-100">
                <span class="font-Y color-b-700 f-11">قیمت تک : 25000</span>
                <span class="font-Y color-b-700 f-11">تعداد : 5</span>
                <span class="font-Y color-b-700 f-11">نام : متن تستی</span>
                <span class="font-Y f-11 pointer" style="color: red"><i class="bi bi-trash"></i></span>
            </div>
        </div>
        <div class="p-2 w-100 position-absolute bottom-0 d-flex justify-content-between align-items-center" style="background-color:#f5f5f5 ">
            <button type="submit" class="group-item-location-hearer font-Y f-12 border-0 rounded-3 py-2 px-5">پرداخت</button>
            <span class="font-Y color-b-500 f-15">2520000</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "NavBar",
    data: () => ({
        src_image_menu:'',
        data_sub_menu:null,
    }),
    methods: {
        view_menu() {
            $('.group-ul-menu-mobile').stop().slideToggle();
        },
        show_menu(id , image) {
            this.set_image(image)
            $('.menu-header').stop().slideUp()
            axios.post('/search/menu/header' , {id:id}).then((res)=>{
                this.data_sub_menu = res.data
                $('.menu-header').stop().slideDown()
            })
        },
        show_menu_mobile(name) {
            $('.menu-sub-for-mobile').stop().slideUp()
            $('.' + name).stop().slideToggle()
        },
        test(){
          alert('test')
        },
        hove_item_menu(image){
            this.set_image(image)
        },
        set_image(image){
            this.src_image_menu = image
        },
        cls_menu(){
            $('.menu-header').stop().slideUp()
        }
    },
    props: {
        menus: {
            type: Object
        },
        sub_menus: {
            type: Object
        }
    }
}
</script>

<style scoped>

</style>
