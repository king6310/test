import Vue from 'vue'
import Vuex from 'vuex'
import Store from 'store'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    city: '上海'
  },
  mutations: {
    changeCity (state, city) {
      state.city = city
      console.log(state)
      Store.save(state)
    }
  }
})
