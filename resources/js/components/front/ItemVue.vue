<template>
    <div class="row mt-5 mb-0 bg-white">
        <div v-for="item in items" class="col-12 col-md-6 col-lg-3 g-2 p-2 ">
            <div class="row">
                <div class="col-8  p-1">
                    <h6 class="font-Y color-b-900" align="right"><b>{{item.title}}</b></h6>
                    <p class="font-Y color-b-700 f-11 pe-2 p-md-1" align="right" dir="rtl">{{item.text}}</p>
                </div>
                <div class="col-4 p-1 obj-center  ">
                    <img :src="'/image/item/'+item.icon" class="image-item-index-page" :alt="item.title" :title="item.title">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ItemVue",
    props:{
        items:{
            type:Object
        }
    }
}
</script>

<style scoped>

</style>
