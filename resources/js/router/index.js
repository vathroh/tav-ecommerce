import Vue from 'vue';

import VueRouter from 'vue-router';
// import NotFound from '../pages/NotFound.vue';
Vue.use(VueRouter);


const Home = require('../pages/Home.vue').default;
const JualMobil = require('../pages/Jual-Mobil.vue').default;
const BeliMobil = require('../pages/Beli-Mobil.vue').default;
const Frenchise = require('../pages/Frenchise.vue').default;
const Tentang = require('../pages/Tentang.vue').default;
const Faq = require('../pages/Faq.vue').default;
const Hubungi = require('../pages/Hubungi.vue').default;
const CarDetail = require('../components/CarDetailComponent.vue').default;
const KmRendah = require('../components/KmComponent.vue').default;
const Daftar = require('../components/DaftarComponent.vue').default;
const Sertif = require('../components/SertifComponent.vue').default;
const Murah = require('../components/MurahComponent.vue').default;
const Merk = require('../components/MerkComponent.vue').default;
//const About = require('../pages/About.vue').default;
//import User from '../pages/User.vue';


const routes = [ 
    { name: 'Home', path: '/', component: Home},
    { name: 'Jual', path: '/Jual', component : JualMobil},
    { name: 'Frenchise', path: '/Frenchise', component: Frenchise},
    { name: 'Tentang', path:'/Tentang', component: Tentang},
    { name: 'Faq', path:'/Faq', component: Faq},
    { name: 'Hubungi', path: '/Hubungi', component: Hubungi},
    { name: 'Beli', path: '/Beli', component: BeliMobil},
    { name: 'Km-terendah', path: '/Km-terendah', component: KmRendah},
    { name: 'Sertif', path: '/Tav-certified', component: Sertif},
    { name: 'Murah', path: '/Termurah', component: Murah},
    { name: 'Detail', path: '/Beli/:id', component: CarDetail, props: true},
    { name: 'Merk', path: '/Beli/Merk/:id', component: Merk, props: true},
    { name: 'Artikel', path: '/Artikel', beforeEnter() {location.href = 'http://artikel.tavmobil.id'}},
    { name: 'DaftarDealer', path: '/Daftar-Dealer', beforeEnter() {location.href = 'https://forms.gle/ETWwWWNn5oBhm2Lb8'}},
    { name: 'LoginDealer', path: '/Login-Dealer', beforeEnter() {location.href = 'http://lelang.tavmobil.id'}},
    { name: 'LoginFranchise', path: '/Login-Franchise', beforeEnter() {location.href = 'http://franchise.tavmobil.id'}},
    { name: 'DaftarFranchise', path: '/Daftar-Franchise', beforeEnter() {location.href = 'https://forms.gle/DgjqRZtqBvgDybGD8'}},
    { name: 'Daftar', path: '/Daftar', component: Daftar}
  ]

const router = new VueRouter({
    mode: 'history',
    routes,
    linkExactActiveClass: "active",
    scrollBehavior(to, from, savedPosition) {
      return {x:0, y:0}
    },
})

export default router;