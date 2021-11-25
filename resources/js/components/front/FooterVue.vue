<template>
    <footer class="py-5 row row-cols-1 row-cols-md-4 text-center bg-white">
        <slot name="footer"/>
        <div class="col mt-3 mb-3">
            <img width="80" :src="'/image/logo/'+logo.src" :alt="logo.name" :title="logo.name">
        </div>
    </footer>
    <div class="row d-flex justify-content-center bg-white p-3 box-item-logo">
        <slot name="nmade" />
    </div>
    <div class="row py-4 border-top text-center bg-light">
        <div class="col-12">
            <ul class="list-unstyled d-flex justify-content-center">
                <slot name="link"/>
            </ul>
        </div>
        <div class="col-12">
            <p class="font-Y f-13 color-b-600" dir="rtl">© کليه حقوق محصولات و محتوای اين سایت متعلق به <b>parla</b> می
                باشد و هر گونه کپی برداری از محتوا و محصولات سایت غیر مجاز می باشد.</p>
        </div>
        <div class="w-100 p-2 bg-light d-flex align-items-center justify-content-center">
            <p class="font-Y f-13 color-b-600" dir="rtl">طراحی و توسعه توسط <a
                href="https://github.com/sina1010anis">GITHUB</a></p>
        </div>
    </div>

</template>

<script>
export default {
    name: "FooterVue",
    props: {
        title: {
            type: Object
        },
        item: {
            type: Object
        },
        link: {
            type: Object
        },
        logo: {
            type: Object
        }
    },
}
</script>

<style scoped>

</style>
