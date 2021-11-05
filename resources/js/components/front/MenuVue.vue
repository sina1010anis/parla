<template>
    <div class="row">
        <div class="col-12 col-md-8 p-2">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 bg-white rounded-3 shadow p-3 group-item-menu">
                <slot name="view_product" />
            </div>
            <div class="w-100 my-3 obj-center">
                <slot name="paginate" />
            </div>
        </div>
        <slot name="name_menu"/>
    </div>
</template>

<script>
export default {
    name: "MenuVue",
}
</script>

<style scoped>

</style>
