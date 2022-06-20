<template>
<div>
    <div class="w-100 herowave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180">
            <path fill="rgb(226 232 240)" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,101.3C384,96,480,128,576,122.7C672,117,768,75,864,74.7C960,75,1056,117,1152,122.7C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
    <div class="faq content-area bg-grea">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center">
                <h1 class="mb-10">FAQ</h1>
               
            </div>
            <!-- <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="faq-info">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        How can i choose multiple Car ?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra. Vestibulum vel mauris et odio lobortis laoreet eget eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris nec pharetra tortor, ac aliquam felis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        What are the safties related to Car ?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra. Vestibulum vel mauris et odio lobortis laoreet eget eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris nec pharetra tortor, ac aliquam felis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        What are the safties related to Car ?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra. Vestibulum vel mauris et odio lobortis laoreet eget eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris nec pharetra tortor, ac aliquam felis.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row mb-20">
                <div class="col-lg-10 offset-lg-1">
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
            <div class="main-title">
                <h4 class="mt-10">
                    <a href="/faq">FAQ Lainnya</a>
                </h4>
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