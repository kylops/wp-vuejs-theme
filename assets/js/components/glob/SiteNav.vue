<template>
  <v-toolbar fixed>
      <v-toolbar-title>{{title}}</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-side-icon class="hidden-md-and-up"></v-toolbar-side-icon>
      <v-toolbar-items class="hidden-sm-and-down">
        <!-- <v-btn flat ripple to="/">Home</v-btn> -->
        <v-btn flat ripple to="/blog">My Blog</v-btn>
        <v-btn flat ripple to="/about">About me</v-btn>
      </v-toolbar-items>
    </v-toolbar>
</template>

<script>
    export default {
      name: 'site-nav',
        created() {
            this.getPages();
        },
        data: () => ({
          title: 'VV3SCHOOLS',
          pages: [],
          errors: []
        }),
        methods: {
            getPages() {
                axios.get('http://www.vv3schools.dev/wp-json/wp/v2/posts').then((response) => {
                  this.pages = response.data
                })
                .catch(e => {
                    this.errors.push(e)
                });
            }
        }
    }
</script>
<style lang="css" scoped>
nav{
    position:fixed;
    .uk-navbar-item {
        color: white !important;
    }
}
.uk-container{
    background: #333;
    background: rgba(0,0,0,0.8);
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 9999;
    display: block;
    margin: 0;
    /*width: 100%;*/
    /*min-width: 1024px;*/
    height: 48px;
    max-height: 44px;
    font-size: 17px;
}
</style>
