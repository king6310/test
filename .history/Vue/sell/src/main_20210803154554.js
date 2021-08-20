import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './App';
import goods from './components/goods/goods';

Vue.use(VueRouter);

let app = Vue.extend({ App });

let router = new VueRouter();

router.map({
	'/goods': {
		component: goods
	}
});

// eslint-disable-next-line eol-last
router.start(app, '#app');