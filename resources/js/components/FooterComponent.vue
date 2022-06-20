<template>
    <footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <img :src="image" style="width: 155px; height: 115px;" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    
                        <div class="deskripsi">
                            <p>TAV MOBIL merupakan platform jual beli mobil terbaik dan terlengkap di Indonesia. Tersedia berbagai merk mobil dengan garansi mesin dan transmisi serta bebas kecelakaan. Anda dapat menjual atau membeli mobil di TAV dengan Kualitas & Harga Terbaik.</p>
                        </div> 
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                <div class="footer-item" >
                        <h4>
                            Layanan
                        </h4>
                        <ul class="links">
                            <li>
                                <router-link class="links" :to="{name: 'Jual'}">Jual Mobil</router-link>
                            </li>
                            <li>
                                <router-link class="links" :to="{name: 'Beli'}">Beli Mobil</router-link>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="recent-posts footer-item">
                    <h4>
                            Gabung Mitra
                        </h4>
                        <ul class="links">
                            <li>
                                <router-link class="links" :to="{name: 'DaftarFranchise'}">Franchise</router-link>
                            </li>
                            <li>
                                <router-link class="links" :to="{name: 'DaftarDealer'}">Dealer</router-link>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                        <h4>
                            Bantuan
                        </h4>
                        <ul class="contact-info">                          
                            <li>
                                <i class="flaticon-phone"></i><a href="tel:024-1211-121">024-1211121</a>
                            </li>
                             <li>
                                <i class="fa fa-whatsapp"></i><a href="https://wa.me/6289668303824">089668303824</a>
                            </li>
                            <li>
                                <router-link class="links" :to="{name: 'Faq'}">FAQ</router-link>
                            </li>
                            <li>
                                <router-link class="links" :to="{name: 'Hubungi'}">Hubungi Kami</router-link>
                            </li>
                        </ul>
                        <div class="social-list-2">
                            <ul>
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    
            </div>
        </div>
    </div>
    <div class="copy sub-footer">
        <div class="container">
            <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="dropdown">
                            <button class="btn btn-outline-info" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Bahasa
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">English</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <p>Copyright © 2022 || <a href="#"> PT. TAV Mobil </a>|| All Rights Reserved</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <a href="#" style="font-size: 12px;">
                            Syarat Penggunaan & Kebijakan Privacy
                        </a>
                    </div>
                </div>
        </div>
    </div>
</footer>
    <!-- <footer class="footer">
        <div class="container footer-inner">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="footer-item">
                        <img :src="image" alt="">
                        <div class="deskripsi">
                            <p>TAV MOBIL merupakan platform jual beli mobil terbaik dan terlengkap di Indonesia.Tersedia berbagai merk mobil dengan garansi mesin dan transmisi serta bebas kecelakaan. Anda dapat menjual atau membeli mobil di Tav dengan Kualitas & Harga Terbaik.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    <div class="footer-item">
                        <h4>
                            Layanan
                        </h4>
                        <ul class="links">
                            <li>
                                <router-link class="links" :to="{name: 'Jual'}">Jual Mobil</router-link>
                            </li>
                            <li>
                                <router-link class="links" :to="{name: 'Jual'}">Beli Mobil</router-link>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    <div class="footer-item">
                        <h4>
                            Gabung Mitra
                        </h4>
                        <ul class="links">
                            <li>
                                <a class="links" href="/">Franchise</a>
                            </li>
                            <li>
                                <router-link class="links" :to="{name: 'Jual'}">Dealer</router-link>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    <div class="footer-item">
                        <h4>
                            Bantuan
                        </h4>
                        <ul class="contact-info">                          
                            <li>
                                <i class="flaticon-phone"></i><a href="tel:024-1211-121">024-1211121</a>
                            </li>
                             <li>
                                <i class="fa fa-whatsapp"></i><a href="https://wa.me/08966803824">089668303824</a>
                            </li>
                            <li>
                                <a class="links" href="/">FAQ</a>
                            </li>
                            <li>
                                <a class="links" href="/">Hubungi Kami</a>
                            </li>
                        </ul>
                        <div class="social-list-2">
                            <ul>
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="copy sub-footer">
            
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="dropdown">
                            <button class="btn btn-outline-info" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Bahasa
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">English</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <p align="center">Copyright © 2022 || <a href="#"> PT. TAV Mobil </a>|| All Rights Reserved</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <p>
                            Syarat Penggunaan & Kebijakan Privacy
                        </p>
                    </div>
                </div>
            
        </div>
    </footer> -->
</template>
<script>
import image from "../../../public/style/img/tav_logo_putih.png"
    
    export default {
        data() {
            return {
                image: image
            }
        }
    }
</script>