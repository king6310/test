<template>
  <div>
    <CityHeader />
    <CitySearch
      :cities="cities"
    />
    <CityList
      :cities="cities"
      :hot="hotCities"
      :letter="letter"
    />
    <CityAlphabet
      :cities="cities"
      @change="handleLetterChange"
    />
  </div>
</template>

<script>
import axios from 'axios'
import CityHeader from './components/Header'
import CitySearch from './components/Search'
import CityList from './components/List'
import CityAlphabet from './components/Alphabet'
export default {
  name: 'City'
}
</script>

<style lang="stylus" scoped>

</style>
