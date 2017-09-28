<template>
<v-app light>
  <div id="page" class="site">
    <site-nav v-if="showNav"></site-nav>

      <router-view></router-view>

    <site-footer v-if="showNav"></site-footer>
  </div><!-- #page .site -->
</v-app><!-- #app -->
</template>

<script>
export default {
  name: 'app',
  props : {
    //siteTitle : '',
  },
  data () {
    return {

    }
  },
  created : function(){
      this.$store.dispatch('fetchSiteInfo');
      this.$store.dispatch('fetchAllPages');
      this.$store.dispatch('fetchAllPosts');
      this.$store.dispatch('fetchAllCategories');
      this.$store.dispatch('fetchAllTags');
      console.log(this.$route.name);
  },
  mounted : function(){
  },
  methods : {

  },
  computed : {
    siteInfo : function(){
      return this.$store.getters.getSiteInfo;
  },
    showNav: function(){
       if(this.$route.name == 'welcome'){
          return this.showNavValue = false;
       }else{
          return this.showNavValue = true;
       }

     }

  }
}
</script>

<style scoped>
#app {

}
</style>
