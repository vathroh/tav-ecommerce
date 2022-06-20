<template>
    <div>
        <div class="latest-offers categories content-area bg-grea mt-50">
            <div class="container">
                <div class="form-group mb-20">
                    <input v-model="search" type="text" class="form-control" placeholder="Cari Mobil Berdasarkan Merk, Model atau Kata Kunci">
                </div>
                <div class="faq-info">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" style="margin-right: 10px;">
                            <button class="nav-link" v-popover:merk>Merk</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" style="margin-right: 10px;">Model</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" style="margin-right: 10px;">Tahun</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" style="margin-right: 10px;">Transmisi</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" style="margin-right: 10px;">Warna</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" style="margin-right: 10px;">Range Harga</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" style="margin-right: 10px;">Filter Lainnya</button>
                        </li>
                    </ul>
                </div>
                <!-- Popover -->
                    <popover name="merk">
                        <div class="row">
                            <div class="col-lg-4">
                                <img :src="honda" width="25px" alt="">
                                
                            </div>
                            <div class="col-lg-8">
                                <h6 style="padding-top: 2px;">Honda</h6>
                            </div>
                            <div class="col-lg-4">
                                <img :src="honda" width="25px" alt="">
                                
                            </div>
                            <div class="col-lg-8">
                                <h6 style="padding-top: 2px;">Honda</h6>
                            </div>
                            <div class="col-lg-4">
                                <img :src="honda" width="25px" alt="">
                                
                            </div>
                            <div class="col-lg-8">
                                <h6 style="padding-top: 2px;">Honda</h6>
                            </div>
                        </div>
                    </popover>
                <!-- end of popover-->
                <div class="row">
                    <div class="col-lg-4" v-for="item in filteredMobil">
                            <div class="car-box">
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
                                                    <button class="carousel-control-next" type="button" :data-bs-target="'#carousel'+item.id" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                            </div>
                                        </div>  
                                    </div>
                                </router-link>
                                    <div class="detail">
                             <router-link :to="{name: 'Detail', params: {id: item.id}}">
                                <div class="top">
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
                                <div class="footer">
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
                    </div>
                    
                </div>
                <div class="pagination-box text-center">
                    <p>Menampilkan 21 dari 100</p>
                    <button class="btn button-theme">Lihat Lebih Banyak Mobil</button>
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
import honda from '../../../public/style/img/brand/honda.png';


export default {
    data(){
        return{
            gambar1: image,
            gambar2: image2,
            gambar3: image3,
            checked: checked,
            honda: honda,
            search:'',
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
                items: [
                {
                    id: 'carousel1',
                    target: '#carousel1',
                    btnId: 'btn1',
                    gambar: image,
                    brand: 'Honda',
                    nama: 'ACCORD TC EL 1.5',
                    harga: 'Rp. 250.000.000',
                    cash: 'Rp. 260.000.000'

                },
                {
                    id: 'carousel2',
                    target: '#carousel2',
                     btnId: 'btn2',
                    gambar: image2,
                    brand: 'Honda',
                    nama: 'JAZZ',
                    harga: 'Rp. 250.000.000',
                    cash: 'Rp. 260.000.000'
                    
                },
                {
                    id: 'carousel3',
                    target: '#carousel3',
                     btnId: 'btn3',
                    gambar: image3,
                    brand: 'Honda',
                    nama: 'ACCORD TC EL',
                    harga: 'Rp. 250.000.000',
                    cash: 'Rp. 260.000.000'
                    
                },
                {
                    id: 'carousel4',
                    target: '#carousel4',
                     btnId: 'btn4',
                    gambar: image3,
                    brand: 'Honda',
                    nama: 'ACCORD TC EL',
                    harga: 'Rp. 250.000.000',
                    cash: 'Rp. 260.000.000'
                    
                },
                {
                    id: 'carousel1',
                    target: '#carousel1',
                    btnId: 'btn1',
                    gambar: image,
                    brand: 'Honda',
                    nama: 'ACCORD TC EL 1.5',
                    harga: 'Rp. 250.000.000',
                    cash: 'Rp. 260.000.000'

                },
                {
                    id: 'carousel2',
                    target: '#carousel2',
                    btnId: 'btn2',
                    gambar: image2,
                    brand: 'Honda',
                    nama: 'JAZZ',
                    harga: 'Rp. 250.000.000',
                    cash: 'Rp. 260.000.000'
                    
                }
            ],
            dataMobil: []
            
        }
    },

    mounted (){
        fetch('/api/kmrendah')
        .then(response => response.json())
        .then(data => {
            this.dataMobil = data
            console.log(this.dataMobil)
        })

    },
    // name: 'MyComponent',
    // components: { VueSlickCarousel },

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

    computed:{
        filteredMobil: function(){
            return this.dataMobil.filter((item)=>{
                return item.merks.match(this.search.toUpperCase()) || item.brands.match(this.search.toUpperCase())
            })
        }
    }

}
</script>
<style>
[data-popover='merk'] {
  background: #ffff;
  color: #444;
 
  font-size: 14px;
  line-height: 1.5;
  margin: 5px;
  padding: 15px;
}
</style>