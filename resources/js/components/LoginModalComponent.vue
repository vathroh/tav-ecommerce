<template>
    <div class="login-1">
        <div v-if="isSignIn == false" class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content form-inner ">
                    <div class="modal-header align-self-center">
                        <h3>Daftar/Masuk</h3>
                    </div>
                    <div class="model-body">
                                <form action="#" method="GET">         
                                    <div class="form-group clearfix pad-2">
                                        <input name="noHp" type="number" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Telpon">
                                    </div>
                                    <div class="form-group pad-2">
                                        <button type="submit" class="btn button-theme btn-md w-100">Kirim Kode OTP</button>
                                    </div>
                                <div class="extra-login form-group clearfix pad-20">
                                    <span>Atau</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="social-list clearfix">
                                    <li>
                                        <a @click="login()" class="google-bg"><i class="fa fa-google"></i> Google</a>
                                        <!-- <button @click="masuk()" class="google-bg"><i class="fa fa-google"></i> Google</button> -->
                                    </li>
                                </ul>
                            </form>

                            <div class="clearfix"></div>
                            <p style="margin-top: 5px; font-size: 14px;">Dengan ini, saya setuju dengan <a href="#">Ketentuan</a> dan <a href="#">Kebijakan Privasi</a></p>
                            </div>
                    
                </div>
            </div>
         </div>  
         <div v-else-if="isSignIn == true" class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content form-inner ">
                    <div class="modal-header align-self-center">
                        <h3>Hai, {{user.tf}}</h3>
                      
                    </div>
                    <div class="model-body">
                        <form action="#" method="GET">         
                            <div class="form-group clearfix pad-2">
                                    <input name="noHp" type="number" class="form-control" placeholder="Nomor WhatsApp" aria-label="Nomor Telpon">
                            </div>
                            <div class="form-group pad-2">
                                <button type="submit" class="btn button-theme btn-md w-100">Kirim Kode OTP</button>
                            </div>
                            </form>

                            <div class="clearfix"></div>
                            <p style="margin-top: 5px; font-size: 14px;">Dengan ini, saya setuju dengan <a href="#">Ketentuan</a> dan <a href="#">Kebijakan Privasi</a></p>
                            </div>
                    
                </div>
            </div>
         </div>    
    </div>
</template>
<script>
import image from '../../../public/style/img/logo-tav.png';

export default {
    data(){
        return{
            gambar: image,
            user: {},
            isSignIn: false
        }
    },

    methods:{
        async login(){
            const googleUser = await this.$gAuth.signIn()
            // googleUser.getBasicProfile() : Get the user's basic profile information.
            // googleUser.getAuthResponse() : Get the response object from the user's auth session. access_token and so on
            this.user = googleUser.getBasicProfile() 
            this.isSignIn = this.$gAuth.isAuthorized
            
            if(this.isSignIn){
                this.$router.push({name: 'Home', params:{id: googleUser.getId()}})
            }else{
                console.log('Gagal Login')
            }

            // console.log(this.user)

        }
    }
    
}

</script>
</template>