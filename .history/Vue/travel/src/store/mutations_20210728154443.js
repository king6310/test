import Storage from './store'

export default {
  changeCity (state, city) {
    state.city = city
    Storage.save(state)
  }
}
