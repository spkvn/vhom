import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import router from "./front/router.js";

new Vue({
   el: '#app',
   template : '<router-view></router-view>',
   router
});