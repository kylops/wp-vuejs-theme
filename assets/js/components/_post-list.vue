<template lang="html">
    <div id="post-list" class="uk-section uk-container">
        <div uk-grid>
            <div v-for="post in posts" class="uk-width-1-2@s uk-width-1-3@m">
                <div class="element-item uk-card uk-card-default uk-card-hover">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <!-- <div class="uk-width-auto">
                                <img class="uk-border-circle" width="40" height="40" src="">
                                <pre><?php get_avatar_url(); ?></pre>
                            </div> -->
                            <div class="uk-width-expand">
                                <h4 class="uk-heading-bullet uk-card-title uk-margin-remove-bottom">{{ post.title.rendered }}</h4>
                                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">{{post.date}}</time></p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p v-html="post.excerpt.rendered"></p>
                    </div>
                    <div class="uk-card-footer">
                        <router-link :to="{ path: post.link }" class="uk-button uk-button-text uk-align-right">Read More</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    // import isotope from 'vueisotope';
    export default {
        name: 'post-list',
        // components: {
        //     isotope,
        // },
        data: () => ({
            base_path: wp.base_path,
            // currentLayout: 'masonry',
        }),
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
