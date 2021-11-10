<template>
    <div class="w-100 bg-white p-1 obj-center flex-column  mt-3" style="height: 300px">
        <img :src="icon" alt="oh no" style="width: 100px;">
        <p class="font-S my-3 color-b-400">{{text}}</p>
    </div>
</template>

<script>
export default {
    name: "BlackPage",
    props:{
        icon:{
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
