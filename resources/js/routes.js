import Vue from 'vue';
import VueRouter from 'vue-router';
import BrandSignup from './views/auth/brandregister.vue';

Vue.use(VueRouter);
const routes = new VueRouter ({
    routes:[
        {path: '/brandsignup', component: BrandSignup },
    ]
});

export  default routes
