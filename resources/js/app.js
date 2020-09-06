/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import axios from 'axios';

import $ from 'jquery';
window.$ = window.jQuery = $;

import store from './state/store';

import VueLocalStorage from 'vue-localstorage';
import config from "./constant/config";

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('cart', require('./components/Cart.vue').default);
Vue.component('cartedit', require('./components/Cartedit.vue').default);
Vue.component('price-count', require('./components/PriceCount.vue').default);
Vue.component('edit-ticket', require('./components/EditTicket.vue').default);
Vue.component('counter', require('./components/Counter.vue').default);
Vue.component('confirm-post', require('./components/ConfirmPost.vue').default);
Vue.component('live-contest', require('./components/LiveContest.vue').default);
Vue.component('wish-button', require('./components/WishButton.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

axios.defaults.baseURL = config.API_BASE_URL;

const app = new Vue({
    el: '#app',
    store,
});
