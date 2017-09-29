<template>
  <v-app light id="full-width-layout">
    <site-nav v-show="!isWelcome"></site-nav>
    <main>
      <site-header v-if="!isSingle && !isWelcome && !isAbout"></site-header>
      <div id="main-content">
        <router-view></router-view>
      </div>
      <site-footer v-show="!isWelcome"></site-footer>

    </main>
  </v-app><!-- #app -->
</template>

<script>
export default {
  name: 'full-width-layout',
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
    isWelcome: function(){
       if(this.$route.name == 'welcome'){
          return true;
       }else{
          return false;
       }

     },
     isSingle: function() {
       if (this.$route.name === 'singlePost') {
         return true
       } else {
         return false
       }
     },
     isAbout: function() {
       if (this.$route.name === 'about') {
         return true
       } else {
         return false
       }
     }


  }
}
</script>

<style scoped>
main{
  padding-top: 0;
}
</style>
