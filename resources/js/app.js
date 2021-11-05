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
import BlackPage from "./components/front/BlackPage";
import MenuVue from "./components/front/MenuVue";
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
        price_dic:null,
        id_comment:null,
        text_comment:null
    }),
    components: {
        HeaderVue,NavBar, SlideIndex,ItemVue, BannerCenter,BestBuy,BannerEnd,FooterVue,'view-product':View,BlurVue,FormComment,RelatedProduct,BlackPage,MenuVue,
    },
    methods:{
        delete_product_to_card(id){
            axios.post('/product/delete/card' , {id:id}).then((res)=>{
                if (res.data == 'delete'){
                    this.pm('محصول از سبد خرید حذف شد' , 3000);
                    $('#card_user_'+id).fadeToggle()
                }else {
                    this.pm('مشکلی پیش امده' , 3000);
                }
            })
        },
        new_comment(){
            axios.post('/product/new/comment' , {id:this.id_comment , text:this.text_comment}).then((res)=>{
                $('.form-comment-reply').fadeToggle()
                $('.blur').fadeToggle()
                this.id_comment = ''
                this.text_comment = ''
                if (res.data == 'ok'){
                    this.pm('با تشکر از نظر شما بعد از تایید منتشر میشود' , 5000)
                }
            })
        },
        new_comment_reply(id){
            this.id_comment = id
            $('.form-comment-reply').fadeToggle()
            $('.blur').fadeToggle()
        },
        cls_page_new_comment_reply(){
            $('.form-comment-reply').fadeToggle()
            $('.blur').fadeToggle()
        },
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
                    this.pm('محصول به پنل اضافه شد', 3000);
                }if(res.data == 'delete'){
                    $('.icon-save').html('<i class="bi bi-star f-18 text-white"></i>')
                    this.pm('محصول از پنل حذف شد', 3000);
                }
            })
        },
        delete_product(idProduct , idUser){
            axios.post('/product/save/delete' , {product:idProduct , user:idUser}).then((res)=>{
                $('.icon-save').html('<i class="bi bi-star f-18 text-white"></i>')
                this.pm(res.data , 3000);
            })
        },

        send_card(){
            axios.post('/product/save/card',
                {id:this.id_size_product , color:this.color.id})
                .then((res)=>{
                    if (res.data == 'ok'){
                        this.pm('محصول به سبد خرید شما اضافه شد' );
                    }else{
                        this.pm('لطفا وارد شوید' );
                    }
                })
        },
        pm(msg , time = 3000){
            $('.msg-sm').html(msg).fadeIn()
            setTimeout(()=>{
                $('.msg-sm').html(msg).fadeOut()
            } , time)
        },
        show_menu_item_div(id){
            $('.ul-menu').stop().slideUp()
            $('#ul_menu_'+id).stop().slideToggle()
        }
    },
    mounted() {
        setTimeout(()=>{$('.view-err').fadeOut()} , 10000)
    },
    created() {

    }
})

app.mount('#app')
