<template>
    <section class="home-page_header">
        <div class="banner" id="banner">
            <div id="carouselExampleSlide" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner banner-slider-inner">
                    <div class="carousel-item  active item-bg">
                        <img class="d-block w-100 h-100" :src="gambar1" alt="banner">
                    </div>
                    <div class="carousel-item banner-max-height item-bg">
                        <img class="d-block w-100 h-100" :src="gambar2" alt="banner">
                    </div>
                    <div class="carousel-item banner-max-height item-bg">
                        <img class="d-block w-100 h-100" :src="gambar3" alt="banner">
                    </div>
                    <div class="carousel-item banner-max-height item-bg">
                        <img class="d-block w-100 h-100" :src="gambar4" alt="banner">
                    </div>
                    <div class="carousel-item banner-max-height item-bg">
                        <img class="d-block w-100 h-100" :src="gambar5" alt="banner">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                
            </div>
        </div>  
    </section>
</template>
<script>
import image1 from '../../../public/style/img/banner/slider1.png'
import image2 from '../../../public/style/img/banner/slider2.png'
import image3 from '../../../public/style/img/banner/slider3.png'
import image4 from '../../../public/style/img/banner/slider4.png'
import image5 from '../../../public/style/img/banner/slider5.png'
export default {
    data(){
        return{
            gambar1: image1,
            gambar2: image2,
            gambar3: image3,
            gambar4: image4,
            gambar5: image5
        }
    }
    
}
</script>