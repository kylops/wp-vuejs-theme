<template lang="html">

  <article class="uk-article uk-margin-bottom" itemscope itemtype="http://schema.org/Article">
    <header id="site-header" class="">
      <div class="uk-inline">
          <div class="uk-inline-clip uk-transition-toggle">
              <img src="https://unsplash.it/1920/1080/?random" alt="" class="">
              <img class="uk-transition-scale-up uk-position-cover" src="https://unsplash.it/1920/1080/?random" alt="">
          </div>
          <div class="uk-position-center">
              <h1 class="uk-heading-primary post-heading" v-text="singlePost.title.rendered"></h1>
          </div>
      </div>

    </header>

    <div  class="main-content uk-container uk-margin-large">

            <p class="uk-article-meta">Written by <a href="#">Super User</a> on {{formatDate(singlePost.date)}}</p>

            <p v-html="singlePost.content.rendered" class=""></p>

            <div class="uk-grid-small uk-child-width-auto" uk-grid>
                <div>
                    <a class="uk-button uk-button-text" href="#">5 Comments</a>
                </div>
            </div>

    </div>

</article>

</template>

<script>
import moment from 'moment'

export default {
  name: 'single-post',
  data: function(){
    return {
        // id: this.$route.params.id,
    //   post: '',
    //   slug: '',
    }
  },
  // prop: {
  //     id: this.singlePost.id
  // },
  created: function(){
    // this.post = this.singlePost;
  },
  mounted: function(){
    // this.getPost(this, this.$route.params.slug);
  },

  watch: {
    // call again the method if the route changes
    // '$route': function () {
    //   this.getPost(this, this.$route.params.slug);
    // },
  },
  methods: {
      formatDate(date) {
          if (date) {
             return moment(String(date)).format('MM/DD/YYYY hh:mm')
           }
      }
    // getPost( self, slug){
    //   this.slug = slug;
    //   if(this.singlePost){
    //     this.post = this.singlePost;
    //   }else{
    //     axios.get('/wp-json/wp/v2/posts?slug='+slug)
    //       .then(function (response) {
    //         self.slug = slug;
    //         self.post =  response.data[0] ;
    //         return self;
    //       })
    //       .catch(function (error) {
    //         console.log(error);
    //       });
    //   }
    // },
  },
  computed: {
    allPosts:  function(){
      return this.$store.getters.getAllPosts;
    },
    singlePost: function(){
      let post = false;
      if(this.allPosts){
        let slug = this.$route.params.slug;
        let post = this.allPosts.filter(function(post){
          return post.slug === slug;
        });
        return post[0];
      }
      return post;
    }
  }

}
</script>



<style lang="css" scoped>
  .fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
  }
  .fade-enter, .fade-leave-to { /* .fade-leave-active in <2.1.8 */
    opacity: 0;
  }
  .post-header{
  }
  .post-heading{
    color: white;
    text-shadow: 2px 2px 4px #000000;
  }
</style>
