<template>
    <div class="row mb-3 mt-3">
        <div class="col-12 col-md-8 p-2">
            <div class=" rounded-3 shadow">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div v-for="(slid , index) in sliders" key="index" :class="(index == 0) ? 'active carousel-item overflow-hidden' :'carousel-item overflow-hidden'">
                            <img :src="'/image/slider/'+slid.src" class="d-block w-100  image-slider" :alt="slid.name" :title="slid.name">
                            <div class="carousel-caption d-none d-md-block">
                                <a :href="slid.href" class="btn btn-secondary font-Y f-12" dir="rtl">توضیحات ...</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class=" col-md-4 p-2">
            <div class="overflow-hidden rounded-3 h-100 shadow" >
                <a :href="banner.href">
                    <div class="box-image-banner w-100 h-100" :style="'background-image:url(/image/banner/'+banner.src+')'"></div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SlideIndex",
    props:{
        sliders:{
            type:Object
        },
        banner:{
            type:Object
        }
    }
}
</script>

<style scoped>

</style>
