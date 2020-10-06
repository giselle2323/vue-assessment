require('./bootstrap');
window.Vue = require('vue');

import App from '../components/App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import { routes } from './routes';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
  mode: 'history',
  base: process.env.APP_URL,
  routes: routes
});

const app = new Vue({
  el: '#app',
  components: {
    App
  },
  router: router,
  render: h => h(App)
});