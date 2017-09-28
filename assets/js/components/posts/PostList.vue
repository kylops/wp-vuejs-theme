<template lang="html">
    <!-- <div id="post-list" class="uk-section uk-container">
        <div uk-grid>
            <div v-for="post in posts" class="uk-width-1-2@s uk-width-1-3@m">
                <post-card :post="post"></post-card>
            </div>
        </div>
    </div> -->
    <v-layout
      column
      wrap
      class="my-5"
      align-center
    >
      <v-flex xs12 sm4 class="my-3">
        <div class="text-xs-center">
          <h2 class="headline">The best way to start developing</h2>
          <span class="subheading">
            Cras facilisis mi vitae nunc
          </span>
        </div>
      </v-flex>
      <v-flex xs12>
        <v-container grid-list-xl>

          <v-layout row wrap align-center>
            <v-flex xs12 md5 offset-md2>
               <div v-for="post in posts" :key="post.title.rendered">
                 <post-card :post="post"></post-card>
               </div>
            </v-flex>

          </v-layout>
        </v-container>
      </v-flex>
    </v-layout>

</template>

<script>
    // import isotope from 'vueisotope';
    export default {
        name: 'post-list',
        // components: {
        //     isotope,
        // },
        data() {
          return {
            base_path: wp.base_path
          }
        },

        props: {
            // posts:
        },
        methods: {
            // sort: function(key) {
            //     this.$refs.cpt.sort(key);
            // },
        // getSortData: {
        //     name: "name",
        //     symbol: "symbol",
        //     number: "number",
        //     weight: "weight",
        //     category: "category"
        // }
        },
        computed : {
          posts :  function(){
            return this.$store.getters.getAllPosts;
          }
        }
    }

    // init Isotope
    // var $grid = $('.grid').isotope({
    //   itemSelector: '.element-item',
    //   layoutMode: 'masonry',
    // });
</script>

<style lang="css">
</style>
