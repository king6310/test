import Storage from './storage'

export default {
  city: Storage.fetch().city || '北京'
}
