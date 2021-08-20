import Vue from 'vue';
import VueRouter from 'node_modules/vue-router';
import App from './App';
import goods from './components/goods/goods';

Vue.use(VueRouter);

let app = Vue.extend(App);

let router = new VueRouter();

router.map({
	'/goods': {
		component: goods
	}
});

router.start(app, '#app');