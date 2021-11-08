<template>
    <div class="w-100 h-100 obj-center">
        <div v-if="status" class="page-payment obj-center shadow rounded-3 flex-column">
            <img src="/image/icon/ok_buy_2.png" alt="">
            <p class="mt-4 f-19 font-S color-b-600"><b>پرداخت با موفقیت انجام شد</b></p>
            <div class="line"></div>
            <p class="mt-4 f-15 font-S color-b-600">کد تراکنیش : <b style="color: #2adb70">{{code}}</b></p>
            <br>
            <a href="/home" class="btn btn-ot-red">بازگشت به پنل</a>
        </div>
        <div v-else class="page-payment obj-center shadow rounded-3 flex-column">
            <img src="/image/icon/no_buy_2.png" alt="">
            <p class="mt-4 f-19 font-S color-b-600"><b>پرداخت با خطا مواجه شده است</b></p>
            <div class="line"></div>
            <p class="mt-4 f-15 font-S color-b-600" dir="rtl" align="center">دلیل خطا</p>
            <p style="color: red" class="mt-4 f-15 font-S color-b-600" dir="rtl" align="center">{{text}}</p>
            <br>
            <a href="/home" class="btn btn-ot-red">بازگشت به پنل</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "PaymentVue",
    props:{
        data:{
            type:String
        },
        code:{
            type:String
        },
        status:{
            type:String
        },
        text:{
            type:String
        }
    }
}
</script>

<style scoped>

</style>

