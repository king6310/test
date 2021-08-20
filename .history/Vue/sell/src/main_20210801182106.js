import Vue from 'vue';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import App from './App';

import 'common/stylus/index.styl';

Vue.use(VueRouter);
Vue.use(VueResource);

let app = Vue.extend(App);

let router = new Vue({
	linkActiveClass: 'active'
});

router.map({
});

router.start(app, '#app');
// router.go('/goods');
