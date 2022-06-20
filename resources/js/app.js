/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue').default;
import Vue from 'vue';
import router from './router';
import Popover from 'vue-js-popover'
 
Vue.use(Popover)
import 'animate.css';
import GAuth from 'vue-google-oauth2'
const gauthOption = {
  clientId: '747620832456-eh0r5rm7rsm022q34pnmvrelt10rtemp.apps.googleusercontent.com',
  scope: 'profile email',
  prompt: 'consent',
  fetch_basic_profile: true
}
Vue.use(GAuth, gauthOption)


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('banner-component', require('./components/BannerComponent.vue').default);
Vue.component('searchbox-component', require('./components/SearchBoxComponent.vue').default);
Vue.component('fullpagesearch-component', require('./components/FullPageSearchComponent.vue').default);
Vue.component('carmodal-component', require('./components/CarModalComponent.vue').default);
Vue.component('galeri-component', require('./components/GaleriComponent.vue').default);
Vue.component('faq-component', require('./components/FaqComponent.vue').default);
Vue.component('loginmodal-component', require('./components/LoginModalComponent.vue').default);
Vue.component('sidenav-component', require('./components/SideNavComponent.vue').default);
Vue.component('frenchise-component', require('./components/FrenchiseComponent.vue').default);
Vue.component('langkah-component', require('./components/LangkahComponent.vue').default);
Vue.component('tentang-component', require('./components/TentangComponent.vue').default);
Vue.component('menufaq-component', require('./components/MenuFaqComponent.vue').default);
Vue.component('hubungi-component', require('./components/HubungiComponent.vue').default);
Vue.component('beli-component', require('./components/BeliComponent.vue').default);
Vue.component('detail-component', require('./components/CarDetailComponent.vue').default);
Vue.component('merkmodal-component', require('./components/MerkModalComponent.vue').default);


const app = new Vue({
    el: '#app',
    router,
});

