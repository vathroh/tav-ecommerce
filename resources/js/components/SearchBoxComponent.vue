<template>
    <section class="home-page_entrance">
        <div class="search-box-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <h1>
                            <a class="h1">Jual Mobil <i class="fa fa-angle-right"></i></a>
                        </h1>
                        <form method="GET" class="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">                        
                                    <div class="form-group">
                                        <select name="select-merek " class="form-select">
                                            <option selected>Merk</option>
                                            <option :value="brands.id" v-for="brands in brand">{{brands.name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <select class="form-select" name="select-model">
                                            <option selected>Model</option>
                                            <option :value="models.id" v-for="models in model">{{models.nama_kategori}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <select class="form-select" name="select-model">
                                            <option value="">Tahun</option>
                                            <option value="2010">2010</option>
                                            <option value="2019">2019</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">                     
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="No. Hp/WhatsApp">
                                        
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <button class="btn w-100 button-theme btn-md">
                                            Mulai Jual Disini
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <h1>
                            <a class="h1" >Beli Mobil <i class="fa fa-angle-right"></i></a>
                        </h1>
                        <form class="form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                     
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Cari mobil berdasarkan Merk, Model atau Kata Kunci" v-model="form.cari">
                                        <button class="btn btn-md button-theme" @click.prevent="cariMobil">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <div class="row" style="margin-top: 12px;">
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                                <router-link :to="{name: 'Beli'}">
                                                    <img :src="baru" alt="" width="40px">
                                                    <p style="margin-top: -31px; margin-left: 50px;">Mobil Terbaru</p>
                                                </router-link>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                                <router-link :to="{name: 'Km-terendah'}">
                                                    <img :src="mobil" alt="" width="40px">
                                                    <p style="margin-top: -31px; margin-left: 50px;">KM Rendah</p>
                                                </router-link>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                                <router-link :to="{name: 'Sertif'}">
                                                    <img :src="medal" alt="" width="40px">
                                                    <p style="margin-top: -31px; margin-left: 50px;">TAV Certified</p>
                                                </router-link>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                                <router-link :to="{name: 'Murah'}">
                                                    <img :src="murah" alt="" width="40px">
                                                    <p style="margin-top: -31px; margin-left: 50px;">Harga Rendah</p>
                                                </router-link>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="select-year">
                                            <option>Pilih Tahun</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="select-type">
                                            <option>Pilih Tipe Mobilr</option>
                                            <option>Mobil Baru</option>
                                            <option>Mobil Bekas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="select-type">
                                            <option>Pilih Tipe Mobilr</option>
                                            <option>Mobil Baru</option>
                                            <option>Mobil Bekas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="select-type">
                                            <option>Pilih Tipe Mobilr</option>
                                            <option>Mobil Baru</option>
                                            <option>Mobil Bekas</option>
                                        </select>
                                    </div>
                                </div>
                                 -->
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <form method="GET" class="form">
                    <div class="row">
                        <div class="col-md-8">                     
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Cari Mobil Berdasarkan Brand atau Tipe">
                            </div>
                        </div>
                        <div class="col-md-2">                        
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="select-make">
                                    <option>Pilih Model</option>
                                    <option>BMW</option>
                                    <option>Honda</option>
                                    <option>Lamborghini</option>
                                    <option>Sports Car</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="select-location">
                                    <option>Pilih Lokasi</option>
                                    <option>Semarang</option>
                                    <option>Jakarta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="select-year">
                                    <option>Pilih Tahun</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="select-type">
                                    <option>Pilih Tipe Mobilr</option>
                                    <option>Mobil Baru</option>
                                    <option>Mobil Bekas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="transmission">
                                    <option>Transmisi</option>
                                    <option>Automatic</option>
                                    <option>Manual</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="transmission">
                                    <option>Transmisi</option>
                                    <option>Automatic</option>
                                    <option>Manual</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button class="btn w-100 button-theme btn-md">
                                    <i class="fa fa-search"></i> Cari
                                </button>
                            </div>
                        </div>
                    </div>
                </form> -->
            </div>
        </div>
    </section>
</template>
<script>
import baru from '../../../public/style/img/icon/new.png';
import mobil from '../../../public/style/img/icon/car.png';
import medal from '../../../public/style/img/icon/medal.png';
import murah from '../../../public/style/img/icon/murah.png';
import axios, { Axios } from 'axios';

export default{
    data(){
        return{
            baru: baru,
            mobil: mobil,
            medal: medal,
            murah: murah,
            form:{ 
                cari: ''
            },
            brand:[],
            model:[]
        }
    },

    created(){
        fetch('/api/brand')
        .then(response => response.json())
        .then(data => {
            this.brand = data
            console.log(this.brand)
        }),

      fetch('/api/model')
      .then(response => response.json())
      .then(data => {
        this.model = data
        console.log(this.model)
      })
    },

    methods:{
        cariMobil(){
            axios.post('api/carimobil', this.form).then(()=>{
                console.log('data terkirim')
            })
        }
    }

}


</script>