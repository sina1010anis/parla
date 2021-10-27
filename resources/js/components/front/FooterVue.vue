<template>
    <footer class="py-5 row row-cols-1 row-cols-md-4 text-center bg-white">
        <slot name="footer"/>
            <div class="col mt-3 mb-3">
                <img width="80" src="/image/design/parla.png" alt="">
                <p class="f-18 text-center color-b-600"><b>Paral.ir</b></p>
            </div>
    </footer>
    <div class="row d-flex justify-content-center bg-white p-3">
        <img src="image/logo/e_logo.png" class="mx-2" style="width: 120px;" alt="">
        <img src="image/logo/z_logo.png" class="mx-2" style="width: 120px;" alt="">
    </div>
    <div class="row py-4 border-top text-center bg-white">
        <div class="col-12">
            <ul class="list-unstyled d-flex justify-content-center">
                <slot name="link" />
            </ul>
        </div>
        <div class="col-12">
            <p class="font-Y f-13 color-b-600" dir="rtl">© کليه حقوق محصولات و محتوای اين سایت متعلق به <b>parla</b> می باشد و هر گونه کپی برداری از محتوا و محصولات سایت غیر مجاز می باشد.</p>
        </div>
    </div>
    <div class="col-12 p-2 bg-white d-flex align-items-center justify-content-center">
        <p class="font-Y f-13 color-b-600" dir="rtl">طراحی و توسعه توسط <a href="https://github.com/sina1010anis">GITHUB</a></p>
    </div>
</template>

<script>
export default {
    name: "FooterVue",
    props:{
        title:{
            type:Object
        },
        item:{
            type:Object
        },
        link:{
            type:Object
        },
    },
}
</script>

<style scoped>

</style>
