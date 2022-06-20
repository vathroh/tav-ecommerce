<template>
    <div class="featured-car content-area bg-grea-2 mt-50">
    <div class="container">
        <!-- Main title -->
        <div class="main-title-4">
            <h1>Galeri TAV Mobil</h1>
            
            <!-- <div class="list-inline-listing">
                <ul class="filters filteriz-navigation clearfix">
                    <li class="active btn filtr-button filtr" data-filter="all">All</li>
                    <li data-filter="1" class="btn btn-inline filtr-button filtr">Apartment</li>
                    <li data-filter="2" class="btn btn-inline filtr-button filtr">House</li>
                    <li data-filter="3" class="btn btn-inline filtr-button filtr">Office</li>
                </ul>
            </div> -->
        </div>     
    
         <VueSlickCarousel v-bind="settings">
            <div class="car-box h-100" v-for="item in dataMobil">
                <div class="tag">Diskon -5,5jt</div>
                    <router-link :to="{name: 'Detail', params: {id: item.id}}">
                    <div class="photo-thumbnail">
                        <div class="photo">                  
                            <div :id="'carousel'+item.id" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" :src="'https://admin.tavmobil.id/storage/car/details/'+ item.image_feature1" alt="car">  
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" :src="'https://admin.tavmobil.id/storage/car/details/'+ item.image_feature2" alt="car">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" :src="'https://admin.tavmobil.id/storage/car/details/'+ item.image_feature1" alt="car">
                                    </div>
                                </div>
                                    <button class="carousel-control-prev" type="button" :data-bs-target="'#carousel'+item.id" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" :data-bs-target="'#carousel' + item.id" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                            </div>
                        </div>  
                    
                    </div>
                    </router-link>
                    <div class="detail">
                        <router-link :to="{name: 'Detail', params: {id: item.id}}">
                        <div class="top1">
                            <div class="row">
                                <div class="col-7">
                                    <h1>{{item.brands}}</h1>
                                    <h1>{{item.merks + ' ' + item.tipe}}</h1>
                                </div>
                                <div class="col-5" v-show="item.status_mobil == 1">
                                    <div class="sertif">
                                        TAV Certified
                                    </div>                                     
                                </div>
                                <div class="col-5" v-show="item.status_mobil == 0">
                                    <div class="sertif2">
                                        Proses Inspeksi
                                    </div>                                     
                                </div>
                            </div>
                            <div class="row">                                    
                                <div class="col">
                                    <h2>Rp. {{formatPrice(item.harga_kredit)}}</h2>
                                </div>
                                <div class="col">
                                    <h3>Rp. {{formatPrice(item.harga_cash)}} (cash)</h3>
                                </div>
                            </div>
                                <h4>Cicilan Rp. 3 jt/bln</h4>
                            </div>
                            </router-link>
                            <div class="footer1">
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-way"></i> {{formatKm(item.odometer)}} km
                                    </li>
                                    <li>
                                        <i class="flaticon-manual-transmission"></i> {{item.transmisi}}
                                    </li>
                                    <li>
                                        <i class="flaticon-calendar-1"></i> {{item.tahun}}
                                    </li>
                                    <li>
                                        <i class="lnr lnr-map-marker"></i> Semarang
                                    </li>
                                    <li>
                                         <button @click="change(item.id)" :id="item.id" ref="btnLike" class="btn-like">
                                            <i class="fa fa-heart"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
            </div>                   
        </VueSlickCarousel>

        <div class="main-title-2">
                <div class="row">
                    <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Harga Terbaik</h5>
                    </div>
                    <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Inpeksi 180 Titik</h5>
                    </div>
                     <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Test Drive Mobil Gratis</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Bebas Manipulasi Jarak Tempuh</h5>
                    </div>
                    <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Jaminan 3 Hari Uang Kembali</h5>
                    </div>
                    <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Garansi Mesin & Transmisi 1 Tahun</h5>
                    </div>
                </div>
        </div>
    </div>
</div>

   
</template>

<script>
import image from '../../../public/style/img/car/hyundai1.jpg';
import image2 from '../../../public/style/img/car/toyota-prius.jpg';
import image3 from '../../../public/style/img/car/gr-yaris.jpg';
import checked from '../../../public/style/img/icon/checked.png';

import VueSlickCarousel from 'vue-slick-carousel';
import 'vue-slick-carousel/dist/vue-slick-carousel.css';
  // optional style for arrows & dots
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css';




export default {
    props: ['id'],
    components: { VueSlickCarousel },
    data(){
        return{
            gambar1: image,
            gambar2: image2,
            gambar3: image3,
            checked: checked,
            settings: {
                "dots": true,
                "infinite": false,
                "speed": 500,
                "slidesToShow": 3,
                "slidesToScroll": 3,
                "initialSlide": 0,
                "responsive": [
                    {
                    "breakpoint": 1024,
                    "settings": {
                        "slidesToShow": 3,
                        "slidesToScroll": 3,
                        "infinite": true,
                        "dots": true
                    }
                    },
                    {
                    "breakpoint": 600,
                    "settings": {
                        "slidesToShow": 2,
                        "slidesToScroll": 2,
                        "initialSlide": 2
                    }
                    },
                    {
                    "breakpoint": 480,
                    "settings": {
                        "slidesToShow": 1,
                        "slidesToScroll": 1.
                    }
                    }
                ]
            },
            dataMobil:[],
        }
    },
    
    created (){
        fetch('/api/datamobil')
        .then(response => response.json())
        .then(data => {
            this.dataMobil = data
            console.log(this.dataMobil)
        })
        

    },

    methods:{
        change(btnId){
             var btnVar = document.getElementById(btnId);
             console.log(btnVar);
            if(btnVar.style.color == "red"){
                btnVar.style.color = "grey";
            }else{
                btnVar.style.color = "red";
            }
        },

        formatPrice(value) {
            let val = (value/1).toFixed(2).replace('.', ',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        },
       
       formatKm(value) {
            let val = (value/1).toFixed(0).replace('.',',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        }
    },

    

}
</script>
<style>
    /* the slides */
    .slick-slide {
        padding: 6px;
    }
    /* the parent */
    .slick-list {
        margin: 0 auto;
    }
</style>