<template>
    <div class="row">
        <div class="col-12 col-md-8 p-2">
            <div
                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 bg-white rounded-3 shadow p-3 group-item-menu">
                <div v-for="product in products" class="col p-0 mt-2 mt-md-0">
                    <a :href="'/product/'+product.slug">
                        <span class="card rounded-0 position-relative">
                            <img loading="lazy" :src="'/image/product/'+product.image"
                                 class="w-100 card-img-top image-card"
                                 :alt="product.name">
                            <div v-if="product.discount == '0'" class="card-body">
                                <p class="font-Y text-center color-b-900 f-14"><b>{{ product.name }}</b></p>
                                <p class="font-Y text-center color-b-700 f-12">{{ product.price }}</p>
                            </div>
                            <div v-else class="card-body">
                                <p class="font-Y text-center color-b-900 f-14"><b>{{ product.name }}</b></p>
                                <span class="offer-item font-Y f-12 text-white obj-center">{{
                                        product.discount
                                    }}%</span>
                                <p class="font-Y text-center color-b-800"><del class="f-13 me-2 color-b-400">{{
                                        product.price
                                    }}</del>15000</p>
                            </div>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <slot name="name_menu"/>

    </div>
</template>

<script>
export default {
    name: "MenuVue",
    props: {
        products: {
            type: Object
        }
    }
}
</script>

<style scoped>

</style>
