<template>
<div>
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>FAQ</h1>
                <h1>Informasi pertanyaan dan jawaban yang sering diajukan</h1>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <div class="elements-page content-area">
        <div class="container">
            <div class="faq-info-box">
                <div class="faq-info">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home2" type="button" role="tab" aria-controls="home2" aria-selected="true">JUAL MOBIL</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">BELI MOBIL</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home2" aria-selected="true">FRANCHISE</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-controls="profile" aria-selected="false">DEALER</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">                            
                            <div class="tab-pane fade show active animate__animated animate__fadeIn" id="home2" role="tabpanel" aria-labelledby="home-tab">
                                <div class="main-title">
                                    <h1>Cara Menjual Mobil</h1>
                                </div>
                                <div class="faq-info">                    
                                    <!-- <VueFaqAccordion :items="faqs">

                                    </VueFaqAccordion>                   -->
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item" v-for="faq in faqs">
                                            <!-- <h2 class="accordion-header" id="flush-headingOne"> -->
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" @click="faq.open = !faq.open">
                                                    {{faq.title}}
                                                </button>
                                            <!-- </h2> -->
                                            <transition mode="out-in"
                                                enter-active-class="animate__animated animate__slideInDown"
                                                leave-active-class="animate__animated animate__fadeOutUp">
                                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" v-show="faq.open">
                                                    <div class="accordion-body">
                                                        <p>{{faq.value}}</p>
                                                    </div>
                                                </div>
                                            </transition>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane fade show animate__animated animate__fadeIn" id="profile" role="tabpanel" aria-labelledby="home-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="main-title">
                                            <h1>Cara Membeli Mobil</h1>
                                        </div>
                                    <div class="faq-info">                    
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item" v-for="faq in faqs">
                                            <!-- <h2 class="accordion-header" id="flush-headingOne"> -->
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" @click="faq.open = !faq.open">
                                                    {{faq.title}}
                                                </button>
                                            <!-- </h2> -->
                                            <transition mode="out-in"
                                                enter-active-class="animate__animated animate__slideInDown"
                                                leave-active-class="animate__animated animate__fadeOutUp">
                                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" v-show="faq.open">
                                                    <div class="accordion-body">
                                                        <p>{{faq.value}}</p>
                                                    </div>
                                                </div>
                                            </transition>
                                        </div>
                                    </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="tab-pane fade show animate__animated animate__fadeIn" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="main-title">
                                            <h1>Franchise</h1>
                                        </div>
                                    <div class="faq-info">                    
                                        <!-- <VueFaqAccordion :items="faqs">

                                        </VueFaqAccordion>                   -->
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item" v-for="faq in faqs">
                                                <!-- <h2 class="accordion-header" id="flush-headingOne"> -->
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" @click="faq.open = !faq.open">
                                                    {{faq.title}}
                                                </button>
                                                <!-- </h2> -->
                                                <transition mode="out-in"
                                                    enter-active-class="animate__animated animate__slideInDown"
                                                    leave-active-class="animate__animated animate__fadeOutUp">
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" v-show="faq.open">
                                                        <div class="accordion-body">
                                                            <p>{{faq.value}}</p>
                                                        </div>
                                                    </div>
                                                </transition>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="tab-pane fade show animate__animated animate__fadeIn" id="profile2" role="tabpanel" aria-labelledby="home-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="main-title">
                                            <h1>Dealer</h1>
                                        </div>
                                    <div class="faq-info">                    
                                        <!-- <VueFaqAccordion :items="faqs">

                                        </VueFaqAccordion>                   -->
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item" v-for="faq in faqs">
                                                <!-- <h2 class="accordion-header" id="flush-headingOne"> -->
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" @click="faq.open = !faq.open">
                                                    {{faq.title}}
                                                </button>
                                                <!-- </h2> -->
                                                <transition mode="out-in"
                                                    enter-active-class="animate__animated animate__slideInDown"
                                                    leave-active-class="animate__animated animate__fadeOutUp">
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" v-show="faq.open">
                                                        <div class="accordion-body">
                                                            <p>{{faq.value}}</p>
                                                        </div>
                                                    </div>
                                                </transition>
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
</div>
</template>
<script>
import VueFaqAccordion from 'vue-faq-accordion';

export default {
    components: {
        VueFaqAccordion,
    },

    data() {
        return {
            faqs: [
                {
                    open: false,
                    title: 'Metode pembayaran apa saja yang bisa digunakan untuk tanda jadi Mobil?',
                    value: 'Metode pembayaran yang disediakan oleh Tav Mobil adalah Bank Mandiri, Bank BCA',
                
                },
                {
                    open: false,
                    title: 'Apakah bisa dilakukan test drive?',
                    value: 'Tentu saja bisa dengan melakukan perjanjian pertemuan untuk melakukan test drive',
                    
                }
            ]
        }
    }
}
</script>