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
  <v-card class="my-3" id="post-card" tile>
    <v-card-media
      class="white--text"
      height="190px"
      :src="post.better_featured_image.source_url"
    >
    <!-- <h1>{{post.title.rendered}}</h1> -->
      <v-container fill-height fluid>
        <v-layout fill-height>
          <v-flex xs12 align-end flexbox>
            <span class="uk-heading-bullet headline">{{ post.title.rendered }}</span>
          </v-flex>
        </v-layout>
      </v-container>
    </v-card-media>
    <!-- <v-card-text v-html="post.excerpt.rendered">
    </v-card-text> -->
    <v-card-actions>
      <v-btn icon class="black--text">
        <v-icon medium>fa-github</v-icon>
      </v-btn>
      <v-btn icon class="blue--text text--darken-4">
        <v-icon medium>fa-facebook</v-icon>
      </v-btn>
      <v-spacer></v-spacer>

      <router-link :to="post.slug">
        <v-btn flat class="blue--text">Read More</v-btn>
      </router-link>
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
.headline{
  margin-bottom: 10% !important;
  text-shadow: 2px 2px 8px #c4c4c4;

}
span{
  font-size:
}
</style>
