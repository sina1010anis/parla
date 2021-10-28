<template>
    <div class="row">
        <header class="bg-white d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
            <a href="/" class="ms-md-3 d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img width="40" src="/image/design/parla.png" alt="">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 font-Y">
                <li><a href="#" class="nav-link px-2 link-secondary f-13 text-opacity-50 position-relative  item-menu-top me-2">صفحه اصلی</a></li>
                <li><a href="#" class="nav-link px-2 link-dark f-13 text-opacity-50 position-relative  item-menu-top me-2">درباره ما</a></li>
                <li><a href="#" class="nav-link px-2 link-dark f-13 text-opacity-50 position-relative  item-menu-top me-2">تماس با ما</a></li>
            </ul>

            <div class="col-md-3 text-end me-md-3 font-Y position-relative">
                <label class="position-absolute label-input-search-product" for="input_search_product_header">
                    <i class="bi bi-search"></i>
                </label>
                <input dir="rtl" align="right" class="input-search-product font-Y f-12" type="text" id="input_search_product_header" placeholder="جستوجو..." aria-label="Search">
            </div>
        </header>
    </div>
</template>

<script>
    export default {
        name:'Header',
        data:()=>({

        }),
    }
</script>
