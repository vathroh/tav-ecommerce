<template>
<div>
    <div class="car-details-page content-area-3-1 mt-50">
        <div class="container">
            <div class="car-detail" v-for="item in detailMobil">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-xs-12 mb-50">
                        <!-- <div class="ecommerce-gallery" data-zoom-effect="true" data-auto-height="true">
                            <div class="row py-3 shadow-5">
                                <div class="col-12 mb-1">
                                    <div class="lightbox">
                                        <img
                                        :src="image"
                                        alt="Gallery image 1"
                                        class="ecommerce-gallery-main-img active w-100"
                                        id="imageBox"
                                        />
                                    </div>
                                </div>
                                <div class="col-3 mt-1">
                                    <img
                                        @click="change('smlImg1')"
                                        :src="image"
                                        alt="Gallery image 1"
                                        class="active w-100"
                                        id="smlImg1"
                                    />
                                </div>
                                <div class="col-3 mt-1">
                                <img
                                    :src="image2"
                                    @click="change('smlImg2')"
                                    alt="Gallery image 2"
                                    class="w-100"
                                    id="smlImg2"
                                />
                                </div>
                                <div class="col-3 mt-1">
                                <img
                                    :src="image"
                                    @click="change('smlImg3')"
                                    alt="Gallery image 3"
                                    class="w-100"
                                    id="smlImg3"
                                />
                                </div>
                                <div class="col-3 mt-1">
                                <img
                                    :src="image3"
                                    @click="change('smlImg4')"
                                    alt="Gallery image 4"
                                    class="w-100"
                                    id="smlImg4"
                                />
                                </div>
                            </div>
                        </div> -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img :src="'https://admin.tavmobil.id/storage/car/details/'+ item.image_feature1" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img :src="'https://admin.tavmobil.id/storage/car/details/'+ item.image_feature2" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img :src="'https://admin.tavmobil.id/storage/car/details/'+ item.image_feature1" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img :src="'https://admin.tavmobil.id/storage/car/details/'+ item.image_feature2" class="d-block w-100">
                                </div>
                            </div>
                            <!-- <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active">
                                    <img :src="image" class="d-block w-100">
                                </li>
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">
                                    <img :src="image2" class="d-block w-100">
                                </li>
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">
                                    <img :src="image3" class="d-block w-100">
                                </li>
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3">
                                    <img :src="image" class="d-block w-100">
                                </li>
                            </ol> -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active thumbnail" aria-current="true" aria-label="Slide 1">
                                    <img :src="'https://admin.tavmobil.id/storage/car/details/'+ item.image_feature1" class="d-block w-100">
                                </button>
                                <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                                    <img :src="'https://admin.tavmobil.id/storage/car/details/'+ item.image_feature2" class="d-block w-100">
                                </button>
                                <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                    <img :src="'https://admin.tavmobil.id/storage/car/details/'+ item.image_feature1" class="d-block w-100">
                                </button>
                                <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">
                                    <img :src="'https://admin.tavmobil.id/storage/car/details/'+ item.image_feature2" class="d-block w-100">
                                </button>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-xs-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="car-brand">
                                    <h1>
                                        {{item.brands}} {{item.merks}} {{item.tipe}}
                                    </h1>
                                </div>
                            </div>
                            <div class="col-12">
                                <p>{{formatKm(item.odometer)}} km || {{item.transmisi}}</p>
                            </div>
                            <div class="col-12">
                                <div v-show="item.status_mobil == 1">
                                    <div class="sertiff">
                                        TAV Certified
                                    </div>                                     
                                </div>
                                <div v-show="item.status_mobil == 0">
                                    <div class="sertiff2">
                                        Proses Inspeksi
                                    </div>                                     
                                </div>
                            </div>
                        </div>
                        
                        <div class="car-price">
                            <div class="row">
                                <div class="col-6">
                                    <h1>Rp. {{formatPrice(item.harga_kredit)}}</h1>
                                </div>
                                <div class="col-6">
                                    <h2>Rp. {{formatPrice(item.harga_cash)}} (cash)</h2>
                                </div>
                            </div>
                        </div>
                        <a href="#">SIMULASI KREDIT</a>
                        <p>Lokasi : TAV Semarang</p>
                        
                        <div class="form-group" style="margin-top: 120px;">
                            <button class="btn w-100 btn-theme btn-md">
                                <i class="fa fa-whatsapp"></i>
                                HUBUNGI/BOOKING
                            </button>
                        </div>
                        <div class="form-group" style="margin-top: 10px;">
                            <button class="btn w-100 button-theme btn-md">
                                Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elements-page content-area-3 mt-50">
                <div class="container">
                    <div class="faq-info-box" v-for="item in detailMobil">
                        <div class="faq-info">
                                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home2" type="button" role="tab" aria-controls="home2" aria-selected="true">Deskripsi Mobil</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Hasil Inspeksi</button>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home2" aria-selected="true">FRANCHISE</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-controls="profile" aria-selected="false">DEALER</button>
                                    </li> -->
                                </ul>
                                <div class="tab-content" id="myTabContent2">                            
                                    <div class="tab-pane fade show active animate__animated animate__fadeIn" id="home2" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="main-title">
                                            <h3>Deskripsi Mobil</h3>
                                        </div>
                                         <div class="Description mb-50">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur. placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.</p>
                                        </div>
                                        <div class="faq-info">    
                                            <h3 class="heading-2">Spesifikasi</h3>                
                                            <div class="row" style="border-top: solid 1px #808080;">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h5>Jenis Bahan Bakar</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6>{{item.bahan_bakar}}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h5>Transmisi</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6> {{item.transmisi}}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h5>Warna Eksterior</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6> {{item.warna_eksterior}}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h5>Warna Interior </h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6> {{item.warna_interior}}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h5>Bahan Interior </h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6> {{item.bahan_interior}}</h6>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h5>Kilometer</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6> {{formatKm(item.odometer)}} km</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h5>Pajak</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6>{{item.pajak_berlaku}}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h5>Kepemilikan</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6>{{item.kepemilikan}}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h5>Tangan Petama</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6>{{item.tangan_pertama}}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h5>KM Service Terakhir</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6>{{item.km_service_terakhir}} km</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="tab-pane fade show animate__animated animate__fadeIn" id="profile" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="main-title">
                                            <h3>Hasil Inspeksi Mobil</h3>
                                        </div>
                                        <!-- <div class="card" style="max-width: 100%;"> -->
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <img :src="inspeksi" class="img-fluid rounded-start w-100" alt="..." style="margin-bottom: 10px;">
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                        <div class="row ">
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="card-box">
                                                                    <div class="row">
                                                                        <div class="col-8">
                                                                            <h1>Mesin dan Transmisi</h1>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <i class="fa fa-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="card-box">
                                                                    <div class="row">
                                                                        <div class="col-8">
                                                                            <h1>Suspensi</h1>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <i class="fa fa-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="card-box">
                                                                    <div class="row">
                                                                        <div class="col-8">
                                                                            <h1>ACCU</h1>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <i class="fa fa-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="card-box">
                                                                    <div class="row">
                                                                        <div class="col-8">
                                                                            <h1>AC</h1>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <i class="fa fa-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="card-box">
                                                                    <div class="row">
                                                                        <div class="col-8">
                                                                            <h1>Bebas Kecelakaan</h1>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <i class="fa fa-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="card-box">
                                                                    <div class="row">
                                                                        <div class="col-8">
                                                                            <h1>Ban dan Rem</h1>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <i class="fa fa-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-12">
                                                                <div class="card-box-cet">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <h1>Lecet Pemakaian</h1>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <i class="fa fa-check"> Teridentifikasi</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                    </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div> 
            
        </div>
    </div>
    <!-- wave atas -->
            <div class="w-100 herowave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
                    <path fill="rgb(226 232 240)" fill-opacity="5" d="M0,192L48,170.7C96,149,192,107,288,101.3C384,96,480,128,576,122.7C672,117,768,75,864,74.7C960,75,1056,117,1152,122.7C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>
    <div class="advantages-2 content-area-3 bg-grea">
                <div class="container" style="margin-bottom: 3rem;">
                    <div class="main-title">
                        <h1 style="margin-bottom: 5rem;">Langkah-langkah Pembelian Mobil di TAV</h1>
                    </div>
                    <div class="row mt-50">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                 <div class="icon" align="center">
                                    <img :src="temukan" alt="" style="width: 80px" class=" mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        Pilih Mobil & Lakukan Pemesanan
                                    </h5>
                                    <p>Pilih mobil impian anda lalu konsultasikan kepada tim TAV</p>
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                 <div class="icon" align="center">
                                    <img :src="test" alt="" style="width: 80px" class=" mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        Test Drive
                                    </h5>
                                    <p>Lakukan test drive untuk menambah keyakinan anda dalam membeli mobil</p>
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            
                                 <div class="icon" align="center">
                                    <img :src="bayar" alt="" style="width: 80px" class=" mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        Deal & Bayar
                                    </h5>
                                    <p>Jika sudah menemukan kesepakatan, lakukan pembayaran dengan aman dan nyaman</p>
                                </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            
                                 <div class="icon mb-10" align="center">
                                    <img :src="carDeliver" alt="" style="width: 80px" class=" mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        Pengiriman Mobil
                                    </h5>
                                    <p>Mobil akan dikirim ke rumah Anda atau ambil di TAV terdekat</p>
                                </div>
                        
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
import wa from '../../../public/style/img/icon/whatsapp.png';
import inspeksi from '../../../public/style/img/langkah/inspeksi.jpg';
import temukan from '../../../public/style/img/icon/temukan.png';
import test from '../../../public/style/img/icon/testDrive.png';
import bayar from '../../../public/style/img/icon/bayar.png';
import carDeliver from '../../../public/style/img/icon/carDeliver.png';

export default{
    props: ['id'],
    data() {
        return{
            image: image,
            image2: image2,
            image3: image3,
            wa: wa,
            temukan: temukan,
            test: test,
            bayar: bayar,
            carDeliver: carDeliver,
            inspeksi:inspeksi,
            detailMobil: {},
        }
        
    },

    mounted (){
        this.getData();

    },

    methods:{
        change(img){
            var smlImg = document.getElementById(img)
            var fullImg = document.getElementById("imageBox");

            if(img == "smlImg1"){
                fullImg.src = smlImg.src
            }else if(img == "smlImg2"){
                fullImg.src = smlImg.src
            }else if(img == "smlImg3"){
                fullImg.src = smlImg.src
            }else if(img == "smlImg4"){
                fullImg.src = smlImg.src
            }
        },

        getData(){
            fetch('/api/datamobil/' + this.id)
            .then(response => response.json())
            .then(data => {
                this.detailMobil = data
                console.log(this.detailMobil)
                console.log(this.id)  
            })
        },

        formatPrice(value) {
            let val = (value/1).toFixed(2).replace('.', ',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        },
       
       formatKm(value) {
            let val = (value/1).toFixed(0).replace('.',',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        }
       
    }
    
}

 
</script>