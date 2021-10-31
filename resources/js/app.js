require('./bootstrap');
import '../css/boot/boot.sass'
import 'bootstrap/dist/js/bootstrap'
import axios from "axios";
import HeaderVue from "./components/front/HeaderVue";
import NavBar from "./components/front/NavBar";
import SlideIndex from "./components/front/SlideIndex";
import ItemVue from "./components/front/ItemVue";
import BannerCenter from "./components/front/BannerCenter";
import BestBuy from "./components/front/BestBuy";
import BannerEnd from "./components/front/BannerEnd";
import FooterVue from "./components/front/FooterVue";
import View from "./components/product/View";
import BlurVue from "./components/product/BlurVue";
import FormComment from "./components/product/FormComment";
import RelatedProduct from "./components/product/RelatedProduct";
import { createApp } from 'vue'
import 'bootstrap-icons/font/bootstrap-icons.css'
import '../css/app.css'
import $ from 'jquery'

const app = createApp({
    data: () => ({
        test: 'test',
        id_size_product:null,
        data_size:null,
        status_card:{
            'step_1':0,
            'step_2':0,
        },
        color:{
            'id':null,
            'name':null
        },
        price_dic:null
    }),
    components: {
        HeaderVue,NavBar, SlideIndex,ItemVue, BannerCenter,BestBuy,BannerEnd,FooterVue,'view-product':View,BlurVue,FormComment,RelatedProduct,
    },
    methods:{
        show_form_comment(){
          $('.group-form-new-comment').fadeToggle()
          $('.blur').fadeToggle()
        },
        show_menu_mobile(name) {
            $('.menu-sub-for-mobile').stop().slideUp()
            $('.' + name).stop().slideToggle()
        },
        select_size(){
            axios.post('/product/send/size' , {id:this.id_size_product}).then((res)=>{
                if (res.data.status == 'off'){
                    this.data_size = res.data.data
                    this.status_card.step_1 = 1;
                }if(res.data.status == 'on') {
                    this.price_dic = res.data.price
                    this.data_size = res.data.data
                    this.status_card.step_1 = 1;
                }
            })
        },
        set_color(id , name){
            this.status_card.step_2 = 1;
            this.color.id = id;
            this.color.name = name;
        },
        testTH(){
            alert('ok')
        },
        cls_new_comment_page() {
            $('.blur').fadeOut()
            $('.group-form-new-comment').fadeOut()
        },
        save_product(idProduct , idUser){
            axios.post('/product/save' , {product:idProduct , user:idUser}).then((res)=>{
                if (res.data == 'create') {
                    $('.icon-save').html('<i class="bi bi-star-fill f-18 text-white"></i>')
                    $('.msg-sm').html('محصول به پنل اضافه شد').fadeIn()
                    setTimeout(() => {
                        $('.msg-sm').html(res.data).fadeOut()
                    }, 3000)
                }if(res.data == 'delete'){
                    $('.icon-save').html('<i class="bi bi-star f-18 text-white"></i>')
                    $('.msg-sm').html('محصول از پنل حذف شد').fadeIn()
                    setTimeout(() => {
                        $('.msg-sm').html(res.data).fadeOut()
                    }, 3000)
                }
            })
        },
        delete_product(idProduct , idUser){
            axios.post('/product/save/delete' , {product:idProduct , user:idUser}).then((res)=>{
                $('.icon-save').html('<i class="bi bi-star f-18 text-white"></i>')
                $('.msg-sm').html(res.data).fadeIn()
                setTimeout(()=>{
                    $('.msg-sm').html(res.data).fadeOut()
                } , 3000)
            })
        }
    },
    mounted() {
        setTimeout(()=>{$('.view-err').fadeOut()} , 10000)
    }
})

app.mount('#app')
