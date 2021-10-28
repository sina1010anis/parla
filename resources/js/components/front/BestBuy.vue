<template>
    <div class="row mt-4 mb-0 p-4 d-flex justify-content-evenly">
        <div class="col-6 col-md-2 bg-gh rounded-pill shadow text-center p-2 font-Y f-14">{{title}}</div>
    </div>
    <div class="row mt-0  mb-4  group-item-card-product shadow">
        <div class="col-12 col-lg-8">
            <div class="row d-flex flex-nowrap overflow-scroll">
                <span v-for="product in products" class="card m-4 position-relative" style="width: 18rem;">
                    <img loading="lazy" :src="'/image/product/'+product.image" class="card-img-top image-card" :alt="product.name">
                    <div v-if="product.discount == '0'" class="card-body">
                        <p class="font-Y text-center color-b-900 f-14"><b>{{product.name}}</b></p>
                        <p class="font-Y text-center color-b-700 f-12">{{product.price}}</p>
                        <!--                Off-->
                        <!--                <span class="offer-item font-Y f-12 text-white obj-center">50%</span>-->
                        <!--                <p class="font-Y text-center color-b-800"><del class="f-13 me-2 color-b-400">25000</del>15000</p>-->
                        <!--                End Off-->
                        <div class="d-flex justify-content-between">
                            <a :href="'/product/'+product.slug" class="btn btn-ot-red font-Y f-12 float-end" dir="rtl">بیشتر...</a>
                        </div>
                    </div>
                    <div v-else class="card-body">
                        <p class="font-Y text-center color-b-900 f-14"><b>{{product.name}}</b></p>
                        <span class="offer-item font-Y f-12 text-white obj-center">{{product.discount}}%</span>
                        <p class="font-Y text-center color-b-800"><del class="f-13 me-2 color-b-400">{{ product.price }}</del>15000</p>
                        <div class="d-flex justify-content-between">
                            <a :href="'/product/'+product.slug" class="btn btn-ot-red font-Y f-12 float-end" dir="rtl">بیشتر...</a>
                        </div>
                    </div>
                </span>
            </div>
        </div>
        <div class="col-4 d-none d-lg-block">
            <div class=" h-100 overflow-hidden d-flex align-items-center p-5">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div v-for="product in products" class="carousel-item active">
                            <img :src="'/image/product/'+product.image" class="d-block w-100" :alt="product.name" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "BestBuy",
    props:{
        title:{
            type:String
        },
        products:{
            type:Object
        }
    }
}
</script>

<style scoped>

</style>
