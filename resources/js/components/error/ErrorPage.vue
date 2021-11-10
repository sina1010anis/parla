<template>
    <div class="bax-error-page obj-center flex-column">
        <img :src="'/image/icon/'+image" :alt="error" :title="error">
        <p class="my-5 color-b-500 f-18 font-S" dir="rtl">{{text}}</p>
    </div>
</template>

<script>
export default {
    name: "ErrorPage",
    props:{
        image:{
            type:String
        },
        text:{
            type:String
        },
        error:{
            type:String
        },
    }
}
</script>

<style scoped>

</style>
