import Vue from 'vue';
import VueRouter from 'vue-router';
import BrandSignup from './views/auth/brandregister.vue';
import Login from './views/auth/login.vue';
import Home from './views/home.vue';
import LandingInfluencer from './views/landingInfluencer.vue';
import LandingBrand from './views/landingbrand.vue';
import LandingPricing from './views/landingpricing.vue';
import LandingFaqs from './views/landingfaqs.vue';
import LandingAboutUs from './views/landingaboutus.vue';
import BrandRegisterSuccess from './views/brandregistersuccess.vue';
Vue.use(VueRouter);
const routes = new VueRouter ({
    mode: 'history',
    routes:[
        {path: '/', component: Home },
        {path: '/login', component: Login },
        {path: '/brand-signup', component: BrandSignup },
        {path: '/brand', component: LandingBrand },
        {path: '/influencer', component: LandingInfluencer },
        {path: '/pricing', component: LandingPricing },
        {path: '/faqs', component: LandingFaqs },
        {path: '/about-us', component: LandingAboutUs },
        {path: '/brand-register-success', component: BrandRegisterSuccess },
    ]
});

export  default routes
