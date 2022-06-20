<template>
    <div>
        <div class="latest-offers categories content-area bg-grea mt-50">
            <div class="container">
                <div class="form-group mb-20">
                    <input type="text" v-model="search" class="form-control" placeholder="Cari Mobil Berdasarkan Merk, Model atau Kata Kunci">
                </div>
                <div class="faq-info">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item dropdown" style="margin-right: 10px;">
                            <button class="nav-link"  id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Brands
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li v-for="brands in brand">
                                    <div class="dropdown-item" @click="selectedBrand(brands.name)">
                                        <p>{{brands.name}}</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" style="margin-right: 10px;">
                            <button class="nav-link" id="navbarDropdownMenuLink8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Model
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li v-for="models in model">
                                    <div class="dropdown-item" @click="selectedModel(models.nama_kategori)">
                                        <p>{{models.nama_kategori}}</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" style="margin-right: 10px;">Tahun</button>
                        </li>
                        <li class="nav-item dropdown" style="margin-right: 10px;">
                            <button class="nav-link" id="navbarDropdownMenuLink8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Transmisi
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <div class="dropdown-item" @click="selectedTransmisi('Manual')">
                                        <p>Manual</p>
                                    </div>
                                    <div class="dropdown-item" @click="selectedTransmisi('Matic')">
                                        <p>Automatic</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" style="margin-right: 10px;">Warna</button>
                        </li>
                        <li class="nav-item dropdown">
                            <button class="nav-link" style="margin-right: 10px;">
                                Range Harga
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <div class="dropdown-item wrapper">
                                          <header>
                                              <p>Silahkan pilih range harga:</p>
                                          </header>
                                          <div class="price-input">
                                                <div class="field">
                                                  <span>Min</span>
                                                  <input type="number" class="input-min" value="0">
                                                </div>
                                                <div class="separator">-</div>
                                                <div class="field">
                                                  <span>Max</span>
                                                  <input type="number" class="input-max" value="15000000">
                                                </div>
                                          </div>
                                          <div class="slider">
                                              <div class="progress"></div>
                                          </div>

                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" @click="tampil()" style="margin-right: 10px;">Tampilkan Semua</button>
                        </li>
                    </ul>
                </div>
                
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
                                            <h1>{{item.merks + ' ' + item.tipe + ' ' + item.warna_eksterior}}</h1>
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
                                    <h4>Cicilan Rp. 3 jt/bln</h4><br>
                                    <p>{{item.kategori}}</p>
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


export default {
    data(){
        return{
            gambar1: image,
            gambar2: image2,
            gambar3: image3,
            checked: checked,
            search: '',
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
            dataMobil: [],
            brand: [],
            model: [],
            selectedModelName: '',
            selectedBrandName: '',
            selectedTransmisiName: ''
            
        }
    },

    mounted(){
        fetch('/api/datamobil')
        .then(response => response.json())
        .then(data => {
            this.dataMobil = data
            console.log(this.dataMobil)
        }),

        fetch('/api/brand')
        .then(response => response.json())
        .then(data => {
            this.brand = data
            // console.log(this.merk)
        }),

        fetch('/api/model')
        .then(response => response.json())
        .then(data => {
            this.model = data
            // console.log(this.model)
        })
    },


    methods:{
        change(btnId){
             var btnVar = document.getElementById(btnId);
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
        },

        selectedBrand(name){
            this.selectedBrandName = name;
            console.log(this.selectedBrandName)
        },

        selectedModel(name){
            this.selectedModelName = name;
            console.log(this.selectedModelName)
        },

        tampil(){
            this.selectedBrandName = '';
            this.selectedModelName = '';
            this.selectedTransmisiName = '';
        },

        selectedTransmisi(name){
            this.selectedTransmisiName = name
            console.log(this.selectedTransmisiName)
        }
       
    },

    computed:{
        filteredMobil: function(){
            return this.dataMobil.filter((item)=>{
                if(this.selectedBrandName === '' && this.selectedModelName === '' && this.selectedTransmisiName === ''){
                    return item.merks.match(this.search.toUpperCase()) || item.brands.match(this.search.toUpperCase())
                }

                if(this.selectedBrandName != ''){
                    return item.brands.match(this.selectedBrandName)
                }
                
                if(this.selectedModelName != ''){
                    return item.kategori.match(this.selectedModelName)
                }

                if(this.selectedTransmisiName != ''){
                    return item.transmisi.match(this.selectedTransmisiName)
                }
                
            })
        }
    }

}
</script>