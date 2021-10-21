require('./bootstrap');
import HelloWorld from "./components/HelloWorld";
import { createApp } from 'vue'
import '../css/boot/boot.sass'
import 'bootstrap/dist/js/bootstrap'
import 'bootstrap-icons/font/bootstrap-icons.css'

const app = createApp({
    data: () => ({
        test: 'test'
    }),
    components: {
        HelloWorld
    }
})

app.mount('#app')
