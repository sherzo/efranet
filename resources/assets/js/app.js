
require('./bootstrap')

import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuex from 'vuex'
import routes from './routes'
import StoreData from './store'
import App from './components/App.vue'
import VueProgressBar from 'vue-progressbar'


Vue.use(VueRouter)
Vue.use(Vuex)
Vue.use(VueProgressBar, {
  color: 'rgb(30, 50, 80)',
  failedColor: 'red',
  height: '3px'
})

const store = new Vuex.Store(StoreData)

const router = new VueRouter({
	routes,
	mode: 'history'
})

const app = new Vue({
  el: '#app',
  router,
  store,
  components: { 
  	App
  }
});
