<template>
    <div>
        <div class="about-car content-area">
                <div class="container"> 
                    <div class="main-title" style="margin-bottom: 3rem; margin-top: 5rem;">
                        <h1 style="margin-bottom: 5px;">TENTANG KAMI</h1> 
                        <div class="title-border">
                            <div class="title-border-inner"></div>
                        </div>
                    </div>                
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <img class="d-block" :src="logo" alt="about" style="height: 200px; width: 300px; margin-left: 5rem; margin-top: 4rem;">
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12 align-self-center">
                            <div class="about-text">
                                <!-- Main title -->
                                <div class="main-title-2">
                                    <h1>TAV</h1>
                                </div>
                                
                                <p>Adalah Platform Jual Beli serta Lelang Mobil Bekas yang sangat mudah untuk digunakan, sehingga para pengguna aplikasi baik penjual maupun pembeli mobil dengan mudah mendapatkan informasi secara singkat padat dan sangat jelas.
                                    TAV telah berdiri sejak tahun 2013 hingga kini telah berhasil melakukan transaksi ribuan mobil baik membeli dengan harga terbaik serta menjual mobil dengan harga kompetitif.</p>
                                <p><span>Dengan Kepercayaan dan Tanggungjawab yang tinggi serta dengan produk mobil bekas dengan kualitas pilihan terbaik sehingga kami selalu dipercaya serta mampu berkembang dan telah memiliki cabang sampai sekarang ini. TAV akan selalu memberikan yang terbaik dan terus berkembang mengikuti perkembangan zaman.</span></p>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

        <!-- wave atas -->
            <div class="w-100 herowave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180">
                    <path fill="rgb(226 232 240)" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,101.3C384,96,480,128,576,122.7C672,117,768,75,864,74.7C960,75,1056,117,1152,122.7C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>
            
        <div class="about-car content-area bg-grea">
                <div class="container">                 
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 align-self-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="about-text">
                                        <!-- Main title -->
                                        <div class="main-title">
                                            <h1 style="margin-bottom: 10px; text-align: center;">VISI</h1>
                                        </div>
                                        <p style="text-align:center;">Menjadi platform jual beli mobil bekas Terbaik dan Terpercaya di tingkat Nasional</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="about-text">
                                        <!-- Main title -->
                                        <div class="main-title">
                                            <h1 style="margin-bottom: 10px; text-align: center;">MISI</h1>
                                        </div>
                                        <ul class="a">
                                            <li>Menyediakan Platform Informatif</li>
                                            <li>Menyediakan berbagai informasi sepurat dunia otomotif</li>
                                            <li>Support penuh atas mitra dan custommer</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <img class="mx-auto d-block w-50" :src="visi" alt="about">
                        </div>
                    </div>
                </div>
        </div>
    </div>
</template>
<script>
import logo from "../../../public/style/img/tav_logo.png";
import visi from "../../../public/style/img/icon/visi.svg";
import misi from "../../../public/style/img/icon/misi.svg";
export default {
    data(){
        return {
            logo: logo,
            visi: visi,
            misi: misi
        }
    }
}
</script>