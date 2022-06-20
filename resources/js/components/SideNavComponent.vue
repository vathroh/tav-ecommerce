<template>
    <!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner" id="sidebar-inner">
        <div class="sidebar-logo">
            <img :src="image" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <ul class="menu-list">
                <li>
                    <router-link id="menu1"  :to="{name: 'Home'}" >Home</router-link>
                </li>
                <li>
                    <router-link id="menu2" :to="{name: 'Jual'}" >Jual Mobil</router-link>
                </li>
                <li>
                    <router-link id="menu3" :to="{name: 'Beli'}" >Beli Mobil</router-link>
                </li>
                <li>
                    <a href="#">Dealer<em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <router-link id="menu4" :to="{name: 'LoginDealer'}">Login sebagai dealer</router-link>
                        </li>
                        <li>
                            <router-link id="menu5" :to="{name: 'DaftarDealer'}">Daftar sebagari dealer</router-link>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Franchise<em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <router-link id="menu6" :to="{name: 'LoginFranchise'}">Lihat franchise</router-link>
                        </li>
                        <li>
                            <router-link id="menu7" :to="{name: 'DaftarFranchise'}">Daftar sebagari franchise</router-link>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Tentang<em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <router-link id="menu8" :to="{name: 'Tentang'}">Tentang kami</router-link>
                        </li>
                        <li>
                            <router-link id="menu9" :to="{name: 'Faq'}">FAQ</router-link>
                        </li>
                        <li>
                            <router-link id="menu10" :to="{name: 'Artikel'}">Artikel</router-link>
                        </li>
                        <li>
                            <router-link id="menu11" :to="{name: 'Hubungi'}">Hubungi kami</router-link>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-bs-toggle="modal" data-bs-target="#LoginModal" id="menu12" class="nav-link" aria-haspopup="true" aria-expanded="false"><i class="flaticon-logout"></i> Daftar/Masuk</a> 
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Hubungi Kami</h3>
            <div class="get-in-touch-box d-flex">
                <i class="fa fa-whatsapp"></i>
                <div class="detail">
                    <a href="https://wa.me/6289668303824">089668303824</a>
                </div>
            </div>
            <div class="get-in-touch-box d-flex">
                <i class="flaticon-phone"></i>
                <div class="detail">
                    <a href="tel:024-1211-121">024-1211121</a>
                </div>
            </div>
            <div class="get-in-touch-box d-flex mb-0">
                <i class="flaticon-earth"></i>
                <div class="detail">
                    <a href="#">support@tavmobiill.id</a>
                </div>
            </div>
        </div>
        <!-- <div class="get-social">
            <h3 class="heading">Get Social</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div> -->
    </div>
</nav>
<!-- Sidenav end -->
</template>
<script>
import image from "../../../public/style/img/tav_logo.png"
    
    export default {
        data() {
            return {
                image: image
            }
        },
    }
    
</script>