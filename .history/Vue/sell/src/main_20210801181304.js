import Vue from 'vue';
import App from './App';

let router = new Vue({
	el: 'body',
	components: { App }
});

router.map({
});

router.start(app, '#app');
// router.go('/goods');
