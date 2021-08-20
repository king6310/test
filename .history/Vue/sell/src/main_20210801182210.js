import Vue from 'vue';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import App from './App';

Vue.use(VueRouter);
Vue.use(VueResource);

let app = Vue.extend(App);

VueRouter.start(app, '#app');
// router.go('/goods');
