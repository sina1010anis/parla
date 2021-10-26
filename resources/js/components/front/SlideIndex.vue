<template>
    <div class="row mb-3 mt-3">
        <div class="col-12 col-md-8 p-2">
            <div class=" rounded-3 shadow">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active overflow-hidden">
                            <img src="/image/slider/test.png" class="d-block w-100  image-slider" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item overflow-hidden">
                            <img src="/image/slider/test.png" class="d-block w-100 image-slider" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item overflow-hidden">
                            <img src="/image/slider/test.png" class="d-block w-100 image-slider" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
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
<!--                <img src="/image/banner/test_5.jpg" class="w-100" alt="">-->
                <div class="box-image-banner w-100 h-100" style="background-image:url('/image/banner/test_4.jpg')"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SlideIndex"
}
</script>

<style scoped>

</style>
