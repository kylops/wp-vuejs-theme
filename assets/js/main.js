import '../scss/style.scss'
import Vue from 'vue'
import App from './App.vue'
import $ from "jquery"

// Vue Router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

// Vuex
import store from './store.js'

import router from './router.js'

console.log('hello')
// Axios Import
import Axios from 'axios'
Vue.use(Axios)
window.axios = require('axios')

import iView from 'iview'
Vue.use(iView)

import UIkit from 'uikit'
import Icons from 'uikit/dist/js/uikit-icons'

// loads the Icon plugin
UIkit.use(Icons)

import Vuetify from 'vuetify'
Vue.use(Vuetify)
console.log(Vuetify);
// components can be called from the imported UIkit reference
// UIkit.notification('Hello world.')

var Blog = Vue.component(
    'blog',
    require('./components/templates/Blog.vue')
)
var Welcome = Vue.component(
    'welcome',
    require('./components/templates/Welcome.vue')
)
var siteHeader = Vue.component(
    'site-header',
    require('./components/glob/SiteHeader.vue')
)
var siteFooter = Vue.component(
    'site-footer',
    require('./components/glob/SiteFooter.vue')
)
var siteFooter = Vue.component(
    'site-nav',
    require('./components/glob/SiteNav.vue')
)
var postList = Vue.component(
    'post-list',
    require('./components/posts/PostList.vue')
)
var postList = Vue.component(
    'post-card',
    require('./components/posts/PostCard.vue')
)
var postList = Vue.component(
    'single-post',
    require('./components/posts/SinglePost.vue')
)




// Initialize
Vue.config.productionTip = false
/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  template: '<App/>',
  components: { App },  // render(h) {
  //   return h(App, {
  //     props: {
  //       siteTitle: this.$el.attributes.siteTitle.value
  //     },
  //   })
  // }
})
