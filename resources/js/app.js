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
import CountVue from "./components/front/CountVue";
import PaymentVue from "./components/product/PaymentVue";
import ErrorPage from "./components/error/ErrorPage";
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
        text_comment:null,
        text_send:'متن پیام',
        text_edit:'',
        name_input:'',
        name_page:'',
        tipText:null,
        address:{
            'state':'',
            'city':'',
            'address':'',

        },
        data_factor:'',
        time_factor:'',
        product_factor:null,
        frame:{
            'code': null,
            'price': null,
        },
        data_frame:{
            'w':0,
            'h':0
        }
    }),
    components: {
        HeaderVue,NavBar, SlideIndex,ItemVue, BannerCenter,BestBuy,BannerEnd,FooterVue,'view-product':View,BlurVue,FormComment,RelatedProduct,BlackPage,MenuVue,CountVue,PaymentVue,ErrorPage,
    },
    methods:{
        set_data_frame(code , price){
            this.frame.code = code
            this.frame.price = price
        },
        view_factor(id){
            axios.post('/user/view/factor' , {id:id}).then((res)=>{
                this.data_factor = res.data.data
                this.time_factor = res.data.time
                this.product_factor = res.data.product
                $(".page-new").fadeToggle()
                $(".blur").fadeToggle()
            }).catch(()=>{
                this.pm('مشکلی پیش امده است' , 3000)
            })

        },
        set_address(id){
            axios.post('/user/edit/address' , {id:id}).then(()=>{
                this.pm('ادرس تغییر کرد  ' , 3000)
                this.reload_time(2000)
            }).catch(()=>{
                this.pm('مشکلی پیش امده است ' , 3000)
            })
        },
        new_address(){
            const address = this.address;
            if (address.state != '' || address.city != '' || address.address != ''){
                axios.post('/user/new/address' , {data:this.address}).then((res)=>{
                    if (res.data == 'warning'){
                        this.pm('لطفا با دقت بیشتری فیلد ها را پر کنید ' , 3000)
                    }if(res.data =='success') {
                        $(".page-new").fadeToggle()
                        $(".blur").fadeToggle()
                        this.pm('ادرس با موفقیت اضافه شد برای تغییر ادرس روی ادرس مورد نظر کلیک کنید ' , 7000)
                        this.reload_time(7000)
                    }
                }).catch(()=>{
                    this.pm('مشکلی پیش امده است ' , 3000)
                })
            }else {
                this.pm('لطفا با دقت بیشتری فیلد ها را پر کنید ' , 3000)
            }
        },
        reload_time(time){
            setTimeout(()=>{
                location.reload(true);
            }, time)
        },
        reload(){
            location.reload(true);
        },
        edit_profile(){
            axios.post('/user/edit/profile' , {name:this.name_input , text:this.text_edit}).then((res)=>{
                if (res.data == 'ok'){
                    this.pm('با موفقیت انجام شد',3000)
                    $(".page-new-profile").fadeToggle()
                    $(".blur").fadeToggle()
                    this.name_input = ''
                    this.text_edit = ''
                    this.reload_time(3000)
                }else {
                    this.pm('مشکلی پیش امده است' , 3000)
                    $(".page-new-profile").fadeToggle()
                    $(".blur").fadeToggle()
                    this.name_input = ''
                    this.text_edit = ''
                    this.reload_time(3000)
                }
            }).catch(()=>{
                this.pm('مشکلی پیش امده است')
            })
        },
        view_page_edit_profile(name){
            if (name == 'email'){
                this.name_page = 'ویرایش ایمیل'
                this.name_input = 'email'
            }if (name == 'name'){
                this.name_page = 'ویرایش نام کاربری'
                this.name_input = 'name'
            }if (name == 'password'){
                this.name_page = 'ویرایش پسورد'
                this.name_input = 'password'
                this.tipText = 'بعد از ویرایش این مقدار شما به صفحه ورود هدایت می شوید'
            }if (name == 'mobile'){
                this.name_page = 'ویرایش موبایل'
                this.name_input = 'mobile'
                this.tipText = 'بعد از ویرایش این مقدار شما به صفحه ورود هدایت می شوید'
            }
            $(".page-new-profile").fadeIn()
            $(".blur").fadeIn()
        },
        delete_product_to_card(id){
            axios.post('/product/delete/card' , {id:id}).then((res)=>{
                if (res.data == 'delete'){
                    this.pm('محصول از سبد خرید حذف شد' , 3000);
                    this.reload_time(3000)
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
            $('.form-comment-reply').fadeOut()
            $('.page-new').fadeOut()
            $('.blur').fadeOut()
            this.tipText = '';
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
                        this.reload_time(2000)
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
        },
        open_page(){
            $('.blur').fadeToggle()
            $('.page-new').fadeToggle()
        },
        open_page_2(){
            $('.blur').fadeToggle()
            $('.page-new-2').fadeToggle()
        },
        new_comment_support(){
            axios.post('/user/new/comment/support' , {text:this.text_send}).then((res)=>{
                $('.blur').fadeOut()
                $('.page-new').fadeOut()
                this.text_send = 'متن پیام';
                if (res.data == 'create'){
                    this.pm('ارسال شد' , 2000);
                }
            })
        },
        new_factor(){
            axios.post('/user/new/factor').then((res)=>{
                if (res.data == 'ok'){
                    this.open_page()
                }
            }).catch(()=>{
                $('.blur').fadeOut()
                $('.page-new').fadeOut()
                this.pm('مشکلی پیش امده است' , 3000)
            })
        },
    },
    mounted() {
        setTimeout(()=>{$('.view-err').fadeOut()} , 10000)
        $('.page-tip').fadeIn();
    },
    created() {

    }
})

app.mount('#app')
