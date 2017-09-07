<template lang="html">
    <div id="post-list" class="uk-section uk-container">
        <div uk-grid>
            <div v-for="post in posts" class="uk-width-1-2@s uk-width-1-3@m">
                <post-card :post="post"></post-card>
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
