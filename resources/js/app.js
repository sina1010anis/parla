require('./bootstrap');
import $ from 'jquery'
import '../css/boot/boot.sass'
import 'bootstrap/dist/js/bootstrap'
import HeaderVue from "./components/front/HeaderVue";
import NavBar from "./components/front/NavBar";
import SlideIndex from "./components/front/SlideIndex";
import ItemVue from "./components/front/ItemVue";
import { createApp } from 'vue'
import 'bootstrap-icons/font/bootstrap-icons.css'
import '../css/app.css'

const app = createApp({
    data: () => ({
        test: 'test'
    }),
    components: {
        HeaderVue,
        NavBar,
        SlideIndex,
        ItemVue,
    }
})

app.mount('#app')
