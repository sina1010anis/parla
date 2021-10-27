<template>
    <div class="row mt-5 mb-5 overflow-hidden">
        <img :src="'image/banner/'+banner.src" alt="" class="rounded-3 image-slider pointer">
    </div>
</template>

<script>
export default {
    name: "BannerEnd",
    props:{
        banner:{
            type:Object
        }
    }
}
</script>

<style scoped>

</style>
