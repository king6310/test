import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './App';
import goods from 'components/goods/goods';
import ratings from 'components/ratings/ratings';

Vue.use(VueRouter);

let app = Vue.extend(App);

let router = new VueRouter();

router.map({
	'/goods': {
		component: goods
	},
	'ratings': {
		component: ratings
	}
});

router.start(app, '#app');
