/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

import Vuetify from 'vuetify';
Vue.use(Vuetify);

Vue.use(VueRouter);
import router from './routes.js';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//admin
// Vue.component('admin-main', require('./components/admin/layouts/main.vue'));
// Vue.component('admin-navbar', require('./components/admin/layouts/navbar.vue'));
// Vue.component('admin-footer', require('./components/admin/layouts/footer.vue'));
// //client
// Vue.component('client-main', require('./components/client/layouts-bak/main.vue'));
// Vue.component('client-navbar', require('./components/client/layouts-bak/navbar.vue'));
// Vue.component('client-footer', require('./components/client/layouts-bak/footer.vue'));
//
// Vue.component('client-blog', require('./components/client/pages-bak/blog.vue'));
// Vue.component('client-event', require('./components/client/pages-bak/event.vue'));
// Vue.component('client-news', require('./components/client/pages-bak/news.vue'));
// Vue.component('client-home', require('./components/client/pages-bak/home.vue'));
// Vue.component('client-professionals', require('./components/client/pages-bak/professionals.vue'));
// Vue.component('client-userprofile', require('./components/client/pages-bak/userprofile.vue'));

/*Vue.component('example', require('./components/Example.vue'));
Vue.component('example', require('./components/Example.vue'));
Vue.component('example', require('./components/Example.vue'));
Vue.component('example', require('./components/Example.vue'));*/

import CyApp from './components/App.vue';

const app = new Vue({
    el: '#app',
    components: {
        CyApp
    },
   router: router
});
