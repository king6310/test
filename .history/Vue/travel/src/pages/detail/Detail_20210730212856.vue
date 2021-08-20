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
export default {
  name: 'City'
}
</script>

<style lang="stylus" scoped>

</style>
