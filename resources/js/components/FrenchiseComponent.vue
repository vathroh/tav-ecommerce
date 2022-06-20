<template>
    <div>
        <div class="banner-2" id="banner">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner banner-slider-inner">
                    <div class="carousel-item banner-max-height active item-bg">
                        <img class="d-block w-100 h-100" :src="gambar1" alt="banner">
                        <div class="carousel-content banner-info-2 bi-2">
                            <h1>Franchise</h1>
                            <p>Bersama PT. TAV Mobil Indonesia</p>
                        </div>
                    </div>                
                </div>
                
            </div>
        </div>
        <!-- wave bawah
            <div class="w-100 herowave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 190">
                    <path fill="#F0F0F0" fill-opacity="1" d="M0,160L21.8,165.3C43.6,171,87,181,131,186.7C174.5,192,218,192,262,176C305.5,160,349,128,393,122.7C436.4,117,480,139,524,128C567.3,117,611,75,655,80C698.2,85,742,139,785,154.7C829.1,171,873,149,916,128C960,107,1004,85,1047,85.3C1090.9,85,1135,107,1178,106.7C1221.8,107,1265,85,1309,85.3C1352.7,85,1396,107,1418,117.3L1440,128L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
                </svg>
            </div> -->

            <div class="about-car content-area mt-30">
                <div class="container">                    
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            
                                <img class="d-block w-100" :src="logo" alt="about">
                            
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-xs-12 align-self-center">
                            <div class="about-text">
                                <!-- Main title -->
                                <div class="main-title">
                                    <h1   class="mb-10">Profil Perusahaan</h1>
                                    
                                </div>
                                <p >AV Mobil Berdiri sejak tahun 2013 dengan total penjualan 3000 unit dan sampai saat ini sudah berdiri 3 cabang AV Mobil.</p>
                                <p class="mb-0"><span>Dari pengalaman, jam terbang, serta tata kelola manajemen perusahaan, maka berdirilah PT. TAV mobil yang membuka peluang bisnis kepada para pengusaha untuk berbisnis showroom mobil bekas yang akan didukung oleh sistem manajemen bisis berbasis teknologi.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-car content-area">
                <div class="container">                                      
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" >
                                <div class="main-title-3">
                                    <h1 class="mb-10">Kenapa Harus Waralaba?</h1> 
                                </div>                            
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="risk" alt="" style="width: 50px; float: left;">
                                            <p>Meminimalisir Resiko</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="brand" alt="" style="width: 50px; float: left;">
                                            <p>Tidak Perlu Membangun Brand atau Merek dari 0</p>
                                        </div>                                    
                                    </div> 
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="team_support" alt="" style="width: 50px; float: left;">
                                            <p>Dukungan Memadai dari Induk Franchise</p>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="help" alt="" style="width: 50px; float: left;">
                                            <p>Bantuan dari Sesama Rekan Franchise</p>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="lokasi" alt="" style="width: 50px; float: left;">
                                            <p>Tidak Kesulitan Menemukan Lokasi yang Tepat</p>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="open" alt="" style="width: 50px; float: left;">
                                            <p>Lebih Cepat Memulai Bisnis</p>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="pelatihan" alt="" style="width: 50px; float: left;">
                                            <p>Mendapatkan Pelatihan dan Dukungan </p>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="management_business" alt="" style="width: 50px; float: left;">
                                            <p>Manajemen Bisnisnya Telah Terbangun dan Nyata</p>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="success" alt="" style="width: 50px; float: left;">
                                            <p>Memiliki Peluang Keberhasilan yang Sangat Tinggi</p>
                                        </div>                                    
                                    </div>
                                </div>                           
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="main-title">
                                    <img :src="franchise" alt="" class="img-fluid" style="width: 400vh;">  
                                </div>
                            </div>                    
                        </div>        
                </div>
            </div>
            <!-- wave atas -->
            <div class="w-100 herowave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180">
                    <path fill="#F0F0F0" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,101.3C384,96,480,128,576,122.7C672,117,768,75,864,74.7C960,75,1056,117,1152,122.7C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>

            
            <div class="advantages-2 content-area bg-grea">
                        <div class="container" >
                            <!-- Main title -->
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="main-title">
                                        <h1 class="mb-10 animate__animated animate__fadeInUp">Simulasi Bisnis Showroom Mobil Tanpa Franchise</h1>
                                    </div>
                                    <div class="tables-box mb-50">
                                        <table class="table  table-striped table-bordered table-borderless mb-10 animate__animated animate__fadeInUp">
                                            <thead class="bg-active">
                                                <tr class="ass">
                                                    <th>Pengeluaran</th>
                                                    <th>Biaya</th>
                                                    <th>Waktu</th>
                                                    <th>Biaya Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Sewa Tempat</th>
                                                    <td>RP. 100.000.000,-</td>
                                                    <td>1 Tahun</td>
                                                    <td>RP. 100.000.000,-</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="4">Beban Gaji</th> 
                                                </tr>
                                                <tr>
                                                    <th>1 Orang Manager</th>
                                                    <td>RP. 5.000.000,-</td>
                                                    <td>12 Bulan</td>
                                                    <td>RP. 60.000.000,-</td>
                                                </tr>
                                                <tr>   
                                                    <th>2 Orang Marketing</th>                                                                            
                                                    <td>RP. 8.000.000,-</td>
                                                    <td>12 Bulan</td>
                                                    <td>RP. 96.000.000,-</td>
                                                </tr>
                                                <tr>
                                                    <th>2 Orang Operasional</th>
                                                    <td>RP. 8.000.000,-</td>
                                                    <td>12 Bulan</td>
                                                    <td>RP. 96.000.000,-</td>
                                                </tr>
                                                <tr>
                                                    <th>Biaya Listrik</th>
                                                    <td>RP. 3.000.000,-</td>
                                                    <td>12 Bulan</td>
                                                    <td>RP. 36.000.000,-</td>
                                                </tr>
                                                <tr>
                                                    <th>Sewa Promosi</th>
                                                    <td>RP. 10.000.000,-</td>
                                                    <td>12 Bulan</td>
                                                    <td>RP. 120.000.000,-</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3">TOTAL</th>
                                                    <th>Rp. 544.000.000,-</th>
                                                </tr>
                                                <tr>
                                                    <th>PROFIT KOTOR</th>
                                                    <td>Rp. 20.000.000,-</td>
                                                    <td>12 Bulan</td>
                                                    <th>Rp. 240.000.000,-</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> 
                                    <div class="advantages-box-3">                              
                                        <h5>TOTAL 1 TAHUN HARUS RUGI KURANG LEBIH RP. 304.000.000,- !
                                                BILA DALAM MENJALANKAN BISNIS MANDIRI 1 TAHUN SAJA SUDAH RUGI,
                                                BAGAIMANA DENGAN TAHUN BERIKUTNYA ???
                                        </h5>                                
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="main-title">
                                        <h1 class="mb-10 animate__animated animate__fadeInUp">Simulasi Bisnis Showroom Mobil Dengan Franchise TAV</h1>
                                    </div>
                                    <div class="tables-box mb-50">
                                        <table class="table table-bordered table-striped table-borderless mb-10 animate__animated animate__fadeInUp">
                                            <thead class="bg-active">
                                                <tr class="ass">
                                                    <th>Pengeluaran</th>
                                                    <th>Biaya</th>
                                                    <th>Waktu</th>
                                                    <th>Biaya Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Sewa Tempat</th>
                                                    <td>RP. 100.000.000,-</td>
                                                    <td>1 Tahun</td>
                                                    <td>RP. 100.000.000,-</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="4">Beban Gaji</th> 
                                                </tr>
                                                <tr>
                                                    <th>1 Orang Manager</th>
                                                    <td>RP. 5.000.000,-</td>
                                                    <td>12 Bulan</td>
                                                    <td>RP. 60.000.000,-</td>
                                                </tr>
                                                <tr>   
                                                    <th>2 Orang Marketing</th>                                                                            
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>1 Orang Operasional</th>
                                                    <td>RP. 4.000.000,-</td>
                                                    <td>12 Bulan</td>
                                                    <td>RP. 48.000.000,-</td>
                                                </tr>
                                                <tr>
                                                    <th>Biaya Listrik</th>
                                                    <td>RP. 3.000.000,-</td>
                                                    <td>12 Bulan</td>
                                                    <td>RP. 36.000.000,-</td>
                                                </tr>
                                                <tr>
                                                    <th>Sewa Promosi</th>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3">TOTAL</th>
                                                    <th>Rp. 268.000.000,-</th>
                                                </tr>
                                                <tr>
                                                    <th>PROFIT KOTOR</th>
                                                    <td>Rp. 150.000.000,-</td>
                                                    <td>12 Bulan</td>
                                                    <th>Rp. 1.800.000.000,-</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> 
                                    <div class="advantages-box-3">
                                        
                                            <h5>1 TAHUN SUDAH BISA MENIKMATI UNTUNG KURANG LEBIH 1.5 M  !</h5>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            
                    </div>
            
            </div>
            <!-- wave bawah -->
            <div class="w-100 herowave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 190">
                    <path fill="#F0F0F0" fill-opacity="1" d="M0,160L21.8,165.3C43.6,171,87,181,131,186.7C174.5,192,218,192,262,176C305.5,160,349,128,393,122.7C436.4,117,480,139,524,128C567.3,117,611,75,655,80C698.2,85,742,139,785,154.7C829.1,171,873,149,916,128C960,107,1004,85,1047,85.3C1090.9,85,1135,107,1178,106.7C1221.8,107,1265,85,1309,85.3C1352.7,85,1396,107,1418,117.3L1440,128L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
                </svg>
            </div>

             <!-- <div class="advantages-2 content-area">
                        <div class="container">
                            <!-- Main title -->
                            <!-- <div class="main-title">
                                <h1 class="mb-10 animate__animated animate__fadeInUp">SIMULASI BISNIS SHOWROOM MOBIL DENGAN FRANCHISE TAV</h1>
                            </div>
                            <div class="tables-box mb-50">
                                <table class="table table-bordered table-striped table-borderless mb-10 animate__animated animate__fadeInUp">
                                    <thead class="bg-active">
                                        <tr class="ass">
                                            <th>Pengeluaran</th>
                                            <th>Biaya</th>
                                            <th>Waktu</th>
                                            <th>Biaya Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Sewa Tempat</th>
                                            <td>RP. 100.000.000,-</td>
                                            <td>1 Tahun</td>
                                            <td>RP. 100.000.000,-</td>
                                        </tr>
                                        <tr>
                                            <th colspan="4">Beban Gaji</th> 
                                        </tr>
                                        <tr>
                                            <th style="text-align: center">1 Orang Manager</th>
                                            <td>RP. 5.000.000,-</td>
                                            <td>12 Bulan</td>
                                            <td>RP. 60.000.000,-</td>
                                        </tr>
                                        <tr>   
                                            <th style="text-align: center">2 Orang Marketing</th>                                                                            
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: center">1 Orang Operasional</th>
                                            <td>RP. 4.000.000,-</td>
                                            <td>12 Bulan</td>
                                            <td>RP. 48.000.000,-</td>
                                        </tr>
                                        <tr>
                                            <th>Biaya Listrik</th>
                                            <td>RP. 3.000.000,-</td>
                                            <td>12 Bulan</td>
                                            <td>RP. 36.000.000,-</td>
                                        </tr>
                                        <tr>
                                            <th>Sewa Promosi ( Facebook, Instagram, Google )</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th colspan="3">TOTAL</th>
                                            <th>Rp. 268.000.000,-</th>
                                        </tr>
                                        <tr>
                                            <th>PROFIT KOTOR</th>
                                            <td>Rp. 150.000.000,-</td>
                                            <td>12 Bulan</td>
                                            <th>Rp. 1.800.000.000,-</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                            <div class="advantages-box-3">
                                
                                    <h4>1 TAHUN SUDAH BISA MENIKMATI UNTUNG KURANG LEBIH 1.5 M  !</h4>
                                
                                
                            </div>
                    </div> -->
           <!-- </div> -->

            <div class="about-car content-area">
                <div class="container"> 
                    <div class="main-title">
                        <h1 class="mb-10">Mari Bergabung Bersama TAV!</h1>    
                    </div>   
                                                       
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="main-title">
                                    <img :src="join" alt="" class="img-fluid" style="width: 400vh;">  
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="main-title-3">
                                    <h2 class="mb-10 animate__animated animate__fadeInUp">Apa Saja Yang Akan Didapatkan?</h2> 
                                </div>                             
                                <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="main-title-3">
                                                <img :src="risk" alt="" style="width: 50px; float: right; margin-right: 15px;">
                                                <p>Meminimalisir Resiko</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="main-title-3">
                                                <img :src="brand" alt="" style="width: 50px; float: right; margin-right: 15px;">
                                                <p>Tidak Perlu Membangun Brand atau Merek dari 0</p>
                                            </div>                                    
                                        </div> 
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="main-title-3">
                                                <img :src="team_support" alt="" style="width: 50px; float: right; margin-right: 15px;">
                                                <p>Dukungan Memadai dari Induk Franchise</p>
                                            </div>                                    
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="main-title-3">
                                                <img :src="help" alt="" style="width: 50px; float: right; margin-right: 15px;">
                                                <p>Bantuan dari Sesama Rekan Franchise</p>
                                            </div>                                    
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="main-title-3">
                                                <img :src="lokasi" alt="" style="width: 50px; float: right; margin-right: 15px;">
                                                <p>Tidak Kesulitan Menemukan Lokasi yang Tepat</p>
                                            </div>                                    
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="main-title-3">
                                                <img :src="open" alt="" style="width: 50px; float: right; margin-right: 15px;">
                                                <p>Lebih Cepat Memulai Bisnis</p>
                                            </div>                                    
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="main-title-3">
                                                <img :src="pelatihan" alt="" style="width: 50px; float: right; margin-right: 15px;">
                                                <p>Mendapatkan Pelatihan dan Dukungan </p>
                                            </div>                                    
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="main-title-3">
                                                <img :src="management_business" alt="" style="width: 50px; float: right; margin-right: 15px;">
                                                <p>Manajemen Bisnisnya Telah Terbangun dan Nyata</p>
                                            </div>                                    
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="main-title-3">
                                                <img :src="success" alt="" style="width: 50px; float: right; margin-right: 15px;">
                                                <p>Memiliki Peluang Keberhasilan yang Sangat Tinggi</p>
                                            </div>                                    
                                        </div>
                                </div>                             
                            </div>
                        
                    
                    </div>                
                    
                </div>
            </div>

            

            <!-- wave atas -->
            <div class="w-100 herowave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180">
                    <path fill="#F0F0F0" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,101.3C384,96,480,128,576,122.7C672,117,768,75,864,74.7C960,75,1056,117,1152,122.7C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>
            <div class="latest-offers categories content-area bg-grea">
                <div class="container">
                    <div class="main-title cover text-center">
                        <h1 class="mb-20" >Konsep Showroom</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="latest-offers-box">
                                <div class="photo-overflow">
                                    <div class="car-thumbnail-photo" >
                                        <img   class="img-fluid w-100" :src="konsep4" alt="photo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="latest-offers-box">
                                <div class="photo-overflow">
                                    <div class="car-thumbnail-photo" >
                                        <img  class="img-fluid w-100" :src="konsep5" alt="photo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="latest-offers-box">
                                <div class="photo-overflow">
                                    <div class="car-thumbnail-photo" >
                                        <img  class="img-fluid w-100" :src="konsep6" alt="photo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="latest-offers-box">
                                <div class="photo-overflow">
                                    <div class="car-thumbnail-photo" >
                                        <img  class="img-fluid w-100" :src="konsep1" alt="photo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- wave bawah -->
            <div class="w-100 herowave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 190">
                    <path fill="#F0F0F0" fill-opacity="1" d="M0,160L21.8,165.3C43.6,171,87,181,131,186.7C174.5,192,218,192,262,176C305.5,160,349,128,393,122.7C436.4,117,480,139,524,128C567.3,117,611,75,655,80C698.2,85,742,139,785,154.7C829.1,171,873,149,916,128C960,107,1004,85,1047,85.3C1090.9,85,1135,107,1178,106.7C1221.8,107,1265,85,1309,85.3C1352.7,85,1396,107,1418,117.3L1440,128L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
                </svg>
            </div>

            
            <div class="pricing-tables content-area">
                <div class="container">
                    <div class="main-title text-center">
                        <h1 class="mb-20">Promo Penawaran Paket</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="pricing-1 plan">
                                <div class="plan-header-silver">
                                    Silver
                                </div>
                                <div class="plan-header">
                                    <div class="d-flex align-items-center justify-content-center mb-0">
                                         <s class="currency-selector-price-symbol text-content-grey mr-5 ml-5 pt-discounted-price white-space-no-wrap" data-original-price="99999">Rp 250Jt</s>
                                         <div class="body l200 text-white fw-700 p-1 border-radius-round pr-10 pl-10 text-center primary meteorite  small discount-labels-pricing-table">
                                            DISKON 50% 
                                        </div>
                                    </div>                                 
                                    <div class="plan-price"><sup>Rp.</sup>125Jt</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>Support Tools Pusat</li>
                                        <li>Suplay Mandiri</li>
                                        <li>Kelola Mandiri</li>
                                    </ul>
                                    <div class="plan-button text-center">
                                        <a href="#" class="btn pricing-btn">Pilih Paket</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="pricing-1 plan">
                                <div class="plan-header-gold">
                                    Gold
                                </div>
                                <div class="plan-header">
                                    <div class="d-flex align-items-center justify-content-center mb-10">
                                         <s class="currency-selector-price-symbol text-content-grey mr-5 ml-5 pt-discounted-price white-space-no-wrap" data-original-price="99999">Rp 500Jt</s>
                                         <div class="body l000 text-white fw-700 p-1 border-radius-round pr-10 pl-10 text-center primary-2 meteorite-2  small discount-labels-pricing-table">
                                            DISKON 20% 
                                        </div>
                                    </div> 
                                    <div class="plan-price"><sup>Rp.</sup>400Jt</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>Support Tools Pusat</li>
                                        <li>Suplay Pusat</li>
                                        <li>Kelola Mandiri</li>
                                    </ul>
                                    <div class="plan-button text-center">
                                        <a href="#" class="btn pricing-btn">Pilih Paket</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="pricing-1 plan">
                                <div class="plan-header-premium">
                                    Premium
                                </div>
                                <div class="plan-header">
                                    <div class="d-flex align-items-center justify-content-center mb-10">
                                         <s class="currency-selector-price-symbol text-content-grey mr-5 ml-5 pt-discounted-price white-space-no-wrap" data-original-price="99999">Rp 500Jt</s>
                                         <div class="body l000 text-white fw-700 p-1 border-radius-round pr-10 pl-10 text-center primary-2 meteorite-2  small discount-labels-pricing-table">
                                            DISKON 20% 
                                        </div>
                                    </div> 
                                    <div class="plan-price"><sup>Rp.</sup>400Jt</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>Full Support</li>
                                        <li>Suplay Pusat</li>
                                        <li>Kelola Pusat</li>
                                    </ul>
                                    <div class="plan-button text-center">
                                        <a href="#" class="btn pricing-btn">Pilih Paket</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- wave atas -->
            <div class="w-100 herowave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180">
                    <path fill="#F0F0F0" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,101.3C384,96,480,128,576,122.7C672,117,768,75,864,74.7C960,75,1056,117,1152,122.7C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>
            <div class="advantages-2 content-area bg-grea">
                <div class="container">
                    <div class="main-title">
                        <h1 class="mb-30">Benefit Usaha Waralaba</h1>
                    </div>

                    <div class="row mt-50">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            
                                 <div class="icon" align="center">
                                    <img :src="efisien" alt="" style="width: 80px" class=" mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        <a href="services.html">Efisiensi</a>
                                    </h5>
                                    <p>Lebih menghemat waktu, biaya dan tenaga yang dikeluarkan</p>
                                </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            
                                 <div class="icon mb-10" align="center">
                                    <img :src="risk" alt="" style="width: 80px" class=" mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        <a href="services.html">Minim Resiko</a>
                                    </h5>
                                    <p>Meminimalkan resiko gagal usaha dan juga gagal dari trial dan error</p>
                                </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            
                                 <div class="icon mb-10" align="center">
                                    <img :src="support" alt="" style="width: 80px" class=" mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        <a href="services.html">Dukungan Penuh</a>
                                    </h5>
                                    <p>Mendapatkan dukungan serta panduan dari pewaralaba</p>
                                </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            
                                 <div class="icon mb-10" align="center">
                                    <img :src="promosi" alt="" style="width: 80px" class=" mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        <a href="services.html">Dukungan Promosi</a>
                                    </h5>
                                    <p>Mendapatkan dukungan promosi bersama skala nasional</p>
                                </div>
                        
                        </div>
                    </div>
                </div>
            </div>
             <!-- wave bawah -->
            <div class="w-100 herowave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 190">
                    <path fill="#F0F0F0" fill-opacity="1" d="M0,160L21.8,165.3C43.6,171,87,181,131,186.7C174.5,192,218,192,262,176C305.5,160,349,128,393,122.7C436.4,117,480,139,524,128C567.3,117,611,75,655,80C698.2,85,742,139,785,154.7C829.1,171,873,149,916,128C960,107,1004,85,1047,85.3C1090.9,85,1135,107,1178,106.7C1221.8,107,1265,85,1309,85.3C1352.7,85,1396,107,1418,117.3L1440,128L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
                </svg>
            </div>

            <div class="advantages-2 content-area">
                <div class="container">
                    <div class="main-title">
                        <h1 class="mb-30">Keunggulan Kami</h1>
                    </div>

                    <div class="row mt-50">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">                            
                                <div class="icon" align="center">
                                    <img :src="box" alt="" style="width: 80px;" class="mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        <a href="#">Produk</a>
                                    </h5>
                                    <p>Inspeksi yang akurat sehingga terklasifikasi berdasarkan kondisi</p>
                                </div>                            
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            
                                <div class="icon mb-10" align="center">
                                    <img :src="inovasi" alt="" style="width: 80px" class="mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        <a href="#">Teknologi & Inovasi</a>
                                    </h5>
                                    <p>Meminimalkan resiko gagal usaha dan juga gagal dari trial dan error</p>
                                </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            
                                <div class="icon mb-10" align="center">
                                    <img :src="efisienwaktu" alt="" style="width: 80px" class="mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        <a href="#">Efisien & Efektif</a>
                                    </h5>
                                    <p>Automisasi sistem mengurangi Cost operational perusahaan</p>
                                </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            
                                <div class="icon mb-10" align="center">
                                    <img :src="digitalmarketing" alt="" style="width: 80px" class="mb-20">
                                </div>
                                <div class="detail">
                                    <h5>
                                        <a href="services.html">Digital Marketing Expert</a>
                                    </h5>
                                    <p>Pola pemasaran dengan digital marketing tersistem</p>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>

             <!-- wave atas -->
            <div class="w-100 herowave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180">
                    <path fill="#F0F0F0" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,101.3C384,96,480,128,576,122.7C672,117,768,75,864,74.7C960,75,1056,117,1152,122.7C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>
            <div class="about-car content-area bg-grea">
                <div class="container">                                      
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                <div class="main-title-3">
                                    <h1 class="mb-10">Benefit Plus Mitra</h1> 
                                </div>                            
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3 ">
                                            <img :src="pelatihan" alt="" style="width: 50px; float: left; margin-right: 10px">
                                            <h5>Pelatihan Produk</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="promosi" alt="" style="width: 50px; float: left; margin-right: 10px">
                                            <h5>Digital Marketing</h5>
                                        </div>                                    
                                    </div> 
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="sales" alt="" style="width: 50px; float: left; margin-right: 10px">
                                            <h5>Pelatihan Management Penjualan</h5>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="finance" alt="" style="width: 50px; float: left; margin-right: 10px">
                                            <h5>Pelatihan Management Keuangan</h5>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3">
                                            <img :src="sdm" alt="" style="width: 50px; float: left; margin-right: 10px">
                                            <h5>Pelatihan Management SDM</h5>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-2">
                                        <div class="main-title-3 mt-30">
                                            <p>Management AV Mobil Nusantara akan memberikan pelatihan mulai dari pelatihan produk, digital marketing, management penjualan, management keuangan hingga management sumber daya manusia, sehingga membuat mitra siap menjadi enterpreneur</p>
                                        </div>                                    
                                    </div>
                                    
                                </div>                           
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="main-title">
                                    <img :src="benefit_mitra" alt="" class="img-fluid" style="width: 300vh;">  
                                </div>
                            </div>                    
                        </div>        
                </div>
            </div>
            <!-- wave bawah -->
            <div class="w-100 herowave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 190">
                    <path fill="#F0F0F0" fill-opacity="1" d="M0,160L21.8,165.3C43.6,171,87,181,131,186.7C174.5,192,218,192,262,176C305.5,160,349,128,393,122.7C436.4,117,480,139,524,128C567.3,117,611,75,655,80C698.2,85,742,139,785,154.7C829.1,171,873,149,916,128C960,107,1004,85,1047,85.3C1090.9,85,1135,107,1178,106.7C1221.8,107,1265,85,1309,85.3C1352.7,85,1396,107,1418,117.3L1440,128L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
                </svg>
            </div>

            <div class="about-car content-area mb-50">
                <div class="container">                                      
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="main-title">
                                    <img :src="team" alt="" class="img-fluid" style="width: 400vh;">  
                                </div>
                            </div>    
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                <div class="main-title-3">
                                    <h1 class="mb-50">Join with us</h1> 
                                </div>                            
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="main-title-3">
                                            <img :src="lokasi" alt="" style="width: 50px; float: right; margin-left: 15px; margin-top: 10px;">
                                            <!-- <h4>Enquiry and Location Search by Franchise</h4> -->
                                            <p>Semua Pertanyaan dan Pencarian Lokasi berdasarkan Waralaba</p>
                                        </div>
                                        
                                    </div>
                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="main-title-3">
                                            <img :src="contract" alt="" style="width: 50px; float: right; margin-left: 15px; margin-top: 10px;">
                                            <!-- <h4>Contract and Invoicing</h4> -->
                                            <p>Perjanjian Kontrak dan Faktur Terbuka</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="main-title-3">
                                            <img :src="payment" alt="" style="width: 50px; float: right; margin-left: 15px; margin-top: 10px;">
                                            <!-- <h4>Payment</h4> -->
                                            <p>Melakukan Pembayaran</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="main-title-3">
                                            <img :src="preparation" alt="" style="width: 50px; float: right; margin-left: 15px; margin-top: 10px;">
                                            <!-- <h4>Two Weeks Preparation One Week Delivery</h4> -->
                                            <p>Persiapan 2 minggu dan 1 minggu pengiriman</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="main-title-3">
                                            <img :src="delivery" alt="" style="width: 50px; float: right; margin-left: 15px; margin-top: 10px;">
                                            <!-- <h4>One Week Delivery</h4> -->
                                            <p>Waktu pengiriman 1 minggu</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="main-title-3">
                                            <img :src="pelatihan" alt="" style="width: 50px; float: right; margin-left: 15px; margin-top: 10px;">
                                            <!-- <h4>Trainning</h4> -->
                                            <p>Kegiatan Pelatihan</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="main-title-3">
                                            <img :src="open" alt="" style="width: 50px; float: right; margin-left: 15px; margin-top: 10px;">
                                            <!-- <h4>Opening</h4> -->
                                            <p>Pembukaan bisnis waralaba mobil</p>
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
import image1 from '../../../public/style/img/banner/banner-franchise.jpg'
import image2 from '../../../public/style/img/banner/car2.jpg'
import image3 from '../../../public/style/img/banner/car3.jpg'
import logo from "../../../public/style/img/tav_logo.png";
import efisien from "../../../public/style/img/icon/efisien.png";
import risk from "../../../public/style/img/icon/risk.png";
import support from "../../../public/style/img/icon/support.png";
import promosi from "../../../public/style/img/icon/promosi.png";
import produk from "../../../public/style/img/icon/car.png";
import inovasi from "../../../public/style/img/icon/inovasi.png";
import efisienwaktu from "../../../public/style/img/icon/efisien-waktu.png";
import pelatihan from "../../../public/style/img/icon/pelatihan.png";
import marketing from "../../../public/style/img/icon/marketing.png";
import finance from "../../../public/style/img/icon/finance.png";
import sdm from "../../../public/style/img/icon/sdm.png";
import tempat from "../../../public/style/img/icon/tempat.png";
import listrik from "../../../public/style/img/icon/listrik.png";
import bayar from "../../../public/style/img/icon/bayar.png";
import lain from "../../../public/style/img/icon/lain-lain.png";
import bankrupt from "../../../public/style/img/icon/bankrupt.png";
import payment from "../../../public/style/img/icon/payment.png";
import contract from "../../../public/style/img/icon/contract.png";
import open from "../../../public/style/img/icon/open.png";
import delivery from "../../../public/style/img/icon/delivery.png";
import preparation from "../../../public/style/img/icon/preparation.png";
import lokasi from "../../../public/style/img/icon/lokasi.png";
import digitalmarketing from "../../../public/style/img/icon/digital-marketing.png";
import ayani from "../../../public/style/img/shop/ayani.png";
import palebon from "../../../public/style/img/shop/palebon.png";
import majapahit from "../../../public/style/img/shop/majapahit.png";
import showroom1 from "../../../public/style/img/shop/konsep4.jpeg";
import showroom2 from "../../../public/style/img/shop/konsep5.jpeg";
import showroom3 from "../../../public/style/img/shop/konsep6.jpeg";
import showroom4 from "../../../public/style/img/shop/konsep1.jpeg";
import perhitungan from "../../../public/style/img/shop/perhitungan.png";
import franchise from "../../../public/style/img/icon/franchise.svg";
import join from "../../../public/style/img/icon/join.svg";
import box from "../../../public/style/img/icon/box.png";
import benefit_mitra from "../../../public/style/img/icon/benefit_mitra.svg";
import team from "../../../public/style/img/icon/teamwork.svg";
import management_business from "../../../public/style/img/icon/management-business.png";
import team_support from "../../../public/style/img/icon/team_support.png";
import success from "../../../public/style/img/icon/goal.png";
import help from "../../../public/style/img/icon/help.png";
import brand from "../../../public/style/img/icon/brand.png";
import sales from "../../../public/style/img/icon/sales.png";



    export default {
        
        data() {
            return {
                sales: sales,
                brand: brand,
                help: help,
                management_business: management_business,
                team_support: team_support,
                success: success,
                team:team,
                benefit_mitra:benefit_mitra,
                box: box,
                logo: logo,
                efisien: efisien,
                risk: risk,
                support: support,
                promosi: promosi,
                produk: produk,
                inovasi: inovasi,
                efisienwaktu: efisienwaktu,
                digitalmarketing: digitalmarketing,
                pelatihan: pelatihan,
                marketing: marketing,
                finance: finance,
                sdm: sdm,
                ayani: ayani,
                majapahit: majapahit,
                palebon: palebon,
                tempat: tempat,
                listrik: listrik,
                bayar: bayar,
                lain: lain,
                bankrupt: bankrupt,
                konsep4: showroom1,
                konsep5: showroom2,
                konsep6: showroom3,
                konsep1: showroom4,
                perhitungan: perhitungan,
                lokasi: lokasi,
                contract: contract,
                preparation: preparation,
                delivery: delivery,
                open: open,
                payment:payment,
                gambar1:image1,
                gambar2:image2,
                gambar3:image3,
                franchise: franchise,
                join: join
            }
        }
    }
    
</script>