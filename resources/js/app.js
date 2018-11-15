import Vue from 'vue'
import VueAxios from 'vue-axios'
import axios from 'vue-axios'
Vue.use(VueAxios, axios)
window.axios = require('axios');

import App from './App.vue'
import router from './routes'

const app = new Vue({
    el: '#app',
    template: `<app></app>`,
    components: { App },
    router,

})