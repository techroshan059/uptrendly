import Vue from 'vue'

import App from './App.vue'
import router from './routes'

const app = new Vue({
    el: '#app',
    template: `<app></app>`,
    components: { App },
    router
})