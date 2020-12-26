require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

 import CreateComponent from './components/CreateComponent.vue';
import IndexComponent from './components/IndexComponent.vue';

const routes = [

    {
        name: 'create',
        path: '/create',
        component: CreateComponent
    },
    {
        name: 'product',
        path: '/products',
        component: IndexComponent
    }

];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
