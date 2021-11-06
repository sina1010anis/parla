<template>
    <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="height: 100%">
        <img style="width: 100px" :src="'/image/icon/'+this.image" :alt="this.text">
        <p  dir="rtl" class="mt-2 color-b-400 font-S">{{this.text}}</p>
    </div>
</template>

<script>
export default {
    name: "CountVue",
    props:{
        image:{
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
