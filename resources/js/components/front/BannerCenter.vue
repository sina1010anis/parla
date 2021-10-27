<template>
    <div class="row row-cols-1 row-cols-md-3 overflow-hidden">
        <div v-for="banner in banners" class="col s-5">
            <div class="grope-item-banner-center overflow-hidden mt-4">
                <a :href="banner.href">
                    <img :src="'/image/banner/'+banner.src" class="rounded-3 image-slider" :alt="banner.name" :title="banner.name">
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "BannerCenter",
    props:{
        banners:{
            type:Object
        }
    }
}
</script>

<style scoped>

</style>
