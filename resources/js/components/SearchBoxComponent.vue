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
                                            <option :value="brands.id" v-for="brands in brand">{{ brands.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <select class="form-select" name="select-model">
                                            <option selected>Model</option>
                                            <option :value="models.id" v-for="models in model">{{ models.nama_kategori
                                            }}
                                            </option>
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
                                        <p class="p-privacy">Dengan melanjutkan, saya setuju dengan <a
                                                href="#">Kebijakan Privasi</a> & <a href="#"> Ketentuan Penggunaan</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <h1>
                            <a class="h1">Beli Mobil <i class="fa fa-angle-right"></i></a>
                        </h1>
                        <form class="form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Cari mobil berdasarkan Merk, Model atau Kata Kunci"
                                            v-model="form.cari">
                                        <button class="btn btn-md button-theme" @click.prevent="cariMobil">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <div class="row" style="margin-top: 12px;">
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                                <router-link :to="{ name: 'Beli' }">
                                                    <img :src="baru" alt="" width="40px">
                                                    <p style="margin-top: -31px; margin-left: 50px;">Mobil Terbaru</p>
                                                </router-link>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                                <router-link :to="{ name: 'Km-terendah' }">
                                                    <img :src="mobil" alt="" width="40px">
                                                    <p style="margin-top: -31px; margin-left: 50px;">KM Rendah</p>
                                                </router-link>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                                <router-link :to="{ name: 'Sertif' }">
                                                    <img :src="medal" alt="" width="40px">
                                                    <p style="margin-top: -31px; margin-left: 50px;">TAV Certified</p>
                                                </router-link>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                                <router-link :to="{ name: 'Murah' }">
                                                    <img :src="murah" alt="" width="40px">
                                                    <p style="margin-top: -31px; margin-left: 50px;">Harga Rendah</p>
                                                </router-link>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="search-by-merk">
                                    <div class="merk-card">
                                        <div class="merk-icon-box">
                                            <img src="/images/icons/car-brand/honda.svg" width="60px" />
                                        </div>
                                        <div>
                                            Honda
                                        </div>
                                    </div>
                                    <div class="merk-card">
                                        <div class="merk-icon-box">
                                            <img src="/images/icons/car-brand/toyota.svg" width="40px" />
                                        </div>
                                        <div>
                                            Toyota
                                        </div>
                                    </div>
                                    <div class="merk-card">
                                        <div class="merk-icon-box">
                                            <img src="/images/icons/car-brand/daihatsu.svg" width="100%" />
                                        </div>
                                        <div>
                                            Daihatsu
                                        </div>
                                    </div>
                                    <div class="merk-card">
                                        <div class="merk-icon-box">
                                            <img src="/images/icons/car-brand/mitsubishi.svg" width="80px" />
                                        </div>
                                        <div>
                                            Mitsubishi
                                        </div>
                                    </div>
                                    <div class="merk-card">
                                        <div class="merk-icon-box">
                                            <img src="/images/icons/car-brand/suzuki.svg" width="25px" />
                                        </div>
                                        <div>
                                            Suzuki
                                        </div>
                                    </div>
                                    <div class="merk-card">
                                        <div class="merk-icon-box">
                                            <img src="/images/icons/car-brand/nissan.svg" width="30px" />
                                        </div>
                                        <div>
                                            Nissan
                                        </div>
                                    </div>
                                    <div class="merk-card">
                                        <div class="merk-icon-box">
                                            <img src="/images/icons/car-brand/chevrolet.svg" width="100%" />
                                        </div>
                                        <div>
                                            Chevrolet
                                        </div>
                                    </div>
                                    <div class="merk-card">
                                        <div class="merk-icon-box">
                                            <img src="/images/icons/car-brand/hyundai.svg" width="80px"
                                                style="margin-top: 35px;" />
                                        </div>
                                        <div>
                                            Hyundai
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

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

export default {
    data() {
        return {
            baru: baru,
            mobil: mobil,
            medal: medal,
            murah: murah,
            form: {
                cari: ''
            },
            brand: [],
            model: []
        }
    },

    created() {
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

    methods: {
        cariMobil() {
            axios.post('api/carimobil', this.form).then(() => {
                console.log('data terkirim')
            })
        }
    }

}


</script>

<style scoped>
.p-privacy {
    font-size: 12px;
    font-weight: 400;
    line-height: 14px;
    margin-top: 8px;
}

.search-by-merk {
    display: flex;
    justify-content: space-between;
}

.merk-card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.merk-icon-box {
    width: 50px;
    height: 50px;
    object-fit: contain;
    display: flex;
    justify-content: center;
    align-items: center;
}

a {
    text-decoration: underline;
    color: #252525;
}
</style>