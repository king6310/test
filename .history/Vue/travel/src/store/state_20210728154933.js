import Storage from './store'

export default {
  city: Storage.fetch().city || '北京'
}
