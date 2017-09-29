<template>
  <div id="app-container" class="">
    <full-width-layout></full-width-layout>
    <floating-cta></floating-cta>
  </div>
</template>

<script>
import FullWidthLayout from './components/templates/FullWidthLayout.vue'
export default {
  name: 'app',
  components: {
    'full-width-layout': FullWidthLayout
  },
  props : {
    //siteTitle : '',
  },
  data () {
    return {

    }
  },
  created : function(){
  },
  mounted : function(){
  },
  methods : {

  },
  computed : {
  }
}
</script>

<style scoped>
</style>
