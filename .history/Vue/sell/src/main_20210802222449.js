import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './App';

use(VueRouter)

/* eslint-disable no-new */
new Vue({
	el: '#app',
	components: { App },
	template: '<App/>'
});
