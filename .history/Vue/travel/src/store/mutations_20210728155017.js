import store from './store'

export default {
  changeCity (state, city) {
    state.city = city
    store.save(state)
  }
}
