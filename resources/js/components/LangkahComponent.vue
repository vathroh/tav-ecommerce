<template>
    <div class="elements-page content-area">
        <div class="container">
            <div class="main-title">
                <h1 class="mb-10 animate__animated animate__fadeIn">Prosedur</h1>
            </div>
                <div class="faq-info-box">
                    <div class="faq-info">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home2" type="button" role="tab" aria-controls="home2" aria-selected="true">Jual Mobil</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Beli Mobil</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">                            
                            <div class="tab-pane fade show active animate__animated animate__fadeIn" id="home2" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                        <div class="card w-80 h-100" >
                                            <div class="tag">1</div>
                                            <img :src="cari" class="card-img-top" alt="Photo by Thom Holmes on Unsplash">
                                            <div class="card-body">
                                                <h5 class="card-title">Buat Perjanjian</h5>
                                                <p class="card-text">Hanya butuh waktu kurang dari 3 menit untuk mengatur perjanjian inspeksi</p>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                        <div class="card w-80 h-100">
                                        <div class="tag">2</div>
                                            <img :src="cek" class="card-img-top" alt="Photo by Thom Holmes on Unsplash">
                                            <div class="card-body">
                                                <h5 class="card-title">Inspeksi Mobil Gratis</h5>
                                                <p class="card-text">Hanya 30 menit tenaga kerja profesional kami melakukan inspeksi mobil Anda</p>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                        <div class="card w-80 h-100" >
                                        <div class="tag">3</div>
                                            <img :src="selling" class="card-img-top" alt="Photo by Thom Holmes on Unsplash">
                                            <div class="card-body">
                                                <h5 class="card-title">Mobil Anda Terjual</h5>
                                                <p class="card-text">Dapatkan penawaran langsung di tempat atau gunakan opsi lelang melalui jaringan dealer TAV!</p>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                        <div class="card w-80 h-100" >
                                        <div class="tag">4</div>
                                            <img :src="payment" class="card-img-top" alt="Photo by Thom Holmes on Unsplash">
                                            <div class="card-body">
                                                <h5 class="card-title">Terima Pembayaran Kurang dari 1 Jam</h5>
                                                <p class="card-text">Demi kenyamanan Anda semua pengurusan dokumen akan dilakukan oleh tim kami. </p>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show animate__animated animate__fadeIn" id="profile" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row " >
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                        <div class="card w-80 h-100">
                                            <div class="tag">1</div>
                                            <img :src="temukan" class="card-img-top" alt="Photo by Thom Holmes on Unsplash" style="width: 6rem; align-self: center; margin-top: 3rem; margin-bottom: 1rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">Temukan Mobil Impian Anda</h5>
                                                <p class="card-text">Temukan mobil Impian di TAV karena terjamin kualitasnya melalui proses inspeksi profesional secara online.</p>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                        <div class="card w-80 h-100">
                                        <div class="tag">2</div>
                                            <img :src="test" class="card-img-top" alt="Photo by Thom Holmes on Unsplash" style="width: 6rem; align-self: center; margin-top: 3rem; margin-bottom: 1rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">Test Drive</h5>
                                                <p class="card-text">Semua mobil di TAV telah lolos seleksi sebelum dan setelah test drive sehingga membuat anda nyaman dan aman.</p>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                        <div class="card w-80 h-100" >
                                        <div class="tag">3</div>
                                            <img :src="car" class="card-img-top" alt="Photo by Thom Holmes on Unsplash" style="width: 6rem; align-self: center; margin-top: 3rem; margin-bottom: 1rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">Pengiriman Langsung Ke Rumah Anda</h5>
                                                <p class="card-text">Pilih untuk mengambil mobil di TAV Showroom terdekat atau tim kami akan kirimkan langsung ke rumah Anda.</p>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                        <div class="card w-80 h-100" >
                                        <div class="tag">4</div>
                                            <img :src="cashless" class="card-img-top" alt="Photo by Thom Holmes on Unsplash" style="width: 6rem; align-self: center; margin-top: 3rem; margin-bottom: 1rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">Pembelian Tanpa Ragu</h5>
                                                <p class="card-text">Nikmati jaminan 3 hari uang kembali ketika Anda membeli mobil di TAV</p>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        
    </div>
</template>
<script>

import cari from '../../../public/style/img/langkah/perjanjian.jpg';
import payment from '../../../public/style/img/langkah/payment.jpg';
import selling from '../../../public/style/img/langkah/selling.jpg';
import cek from '../../../public/style/img/langkah/cek.jpg';
import temukan from '../../../public/style/img/icon/temukan.png';
import test from '../../../public/style/img/icon/testDrive.png';
import car from '../../../public/style/img/icon/carDeliver.png';
import cashless from '../../../public/style/img/icon/cashless.png';

export default {
    
    
    data() {
        return {
            
            cari: cari,
            selling: selling,
            cek: cek,
            payment:payment,
            temukan: temukan,
            test: test,
            cashless: cashless,
            car:car
        }
    }
}
</script>