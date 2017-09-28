<template>
  <!--
  <div id="post-card">
      <div class="element-item uk-card uk-card-default uk-card-hover">
          <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
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
-->
  <v-card class="my-3" hover id="post-card">
    <v-card-media
      class="white--text"
      height="190px"
      :src="post.imgUrl"
    >
      <v-container fill-height fluid>
        <v-layout fill-height>
          <v-flex xs12 align-end flexbox>
            <span class="headline">{{ post.title.rendered }}</span>
          </v-flex>
        </v-layout>
      </v-container>
    </v-card-media>
    <v-card-text v-html="post.excerpt.rendered">
    </v-card-text>
    <v-card-actions>
      <v-btn icon class="red--text">
        <v-icon medium>fa-reddit</v-icon>
      </v-btn>
      <v-btn icon class="light-blue--text">
        <v-icon medium>fa-twitter</v-icon>
      </v-btn>
      <v-btn icon class="blue--text text--darken-4">
        <v-icon medium>fa-facebook</v-icon>
      </v-btn>
      <v-spacer></v-spacer>
      <v-btn flat class="blue--text">Read More</v-btn>
    </v-card-actions>
  </v-card>

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
