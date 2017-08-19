<template id="single-post-template">

  <article v-if="post" class="uk-article uk-margin-bottom" itemscope itemtype="http://schema.org/Article">


    <header class="post-header entry-header uk-cover-container uk-height-medium uk-margin-bottom " uk-height-viewport="offset-bottom: 30" >
        <img :src="this.post.featured_image.sizes.full.url" alt="" uk-cover  itemprop="image">

        <div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">

          <div class="uk-text-center">
            <h1 v-if="post.title.rendered" v-text="post.title.rendered" itemprop="headline" class="uk-article-title "></h1>
            <hr class="uk-divider-icon" >
            <div class="post-categories">
              <post-category v-for="category in post.category_objects" :category="category"></post-category>
            </div>

            <div class="uk-article-meta">
              <small class="">Published: <time class="updated" itemprop="datePublished" :datetime="post.date" pubdate>{{post.date}}</time> </small>
            </div>
          </div>

        </div>

    </header>

    <main v-if="post.content.rendered" v-html="post.content.rendered" class="entry-content article-body uk-container" itemprop="articleBody"></main>

    <!-- <footer class="post-footer entry-footer uk-container">

      <div class="post-tags uk-margin-top uk-margin-bottom" >
        Tags: <post-tag v-for="tag in post.tag_objects"  :tag="tag"></post-tag>
      </div>

      <post-pagination :next_post="post.next_post" :previous_post="post.previous_post" ></post-pagination>

    </footer> -->

  </article>

</template>

<script>
export default {
  name : 'post',
  data : function(){
    return {
      post : '',
      slug : '',
    }
  },
  created : function(){
    this.slug = this.$route.params.slug;
  },
  mounted : function(){
    this.getPost(this, this.$route.params.slug);
  },

  watch: {
    // call again the method if the route changes
    '$route': function () {
      this.getPost(this, this.$route.params.slug);
    },
  },
  methods : {
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
  computed : {
    allPosts :  function(){
      return this.$store.getters.getAllPosts;
    },
    singlePost: function(){
      var post = false;
      if(this.allPosts){
        var slug = this.$route.params.slug;
        var post = this.allPosts.filter(function(post){
          return post.slug == slug;
        });
        return post[0];
      }
      return post;
    }
  }

}
</script>



<style scoped>
  .fade-enter-active, .fade-leave-active {
    transition: opacity .5s
  }
  .fade-enter, .fade-leave-to { /* .fade-leave-active in <2.1.8 */
    opacity: 0
  }
  .post-header{
  }
</style>
