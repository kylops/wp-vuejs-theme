<template>
  <div id="post-card">
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
              <router-link :to="{ path: post.slug }" append class="uk-button uk-button-text uk-align-right">Read More</router-link>
          </div>
      </div>

  </div>
</template>
<script>
export default {
  name: 'post-card',
  data() {
      return { }
  },
  props: {
      post: {}
  },

}
</script>
<style lang="css" scoped>
</style>
