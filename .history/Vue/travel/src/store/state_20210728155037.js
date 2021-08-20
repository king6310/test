import store from './store'

export default {
  city: store.fetch().city || '北京'
}
