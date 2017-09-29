import Vue from 'vue'
import Router from 'vue-router'
import Blog from './components/templates/Blog.vue'
import Welcome from './components/templates/Welcome.vue'
import SinglePost from './components/posts/SinglePost.vue'
import About from './components/templates/About.vue'
Vue.use(Router)

const routes = [
    { path: '/', name: 'welcome', component: Welcome },
    { path: '/blog', name: 'blog',  component: Blog },
    { path: '/about', name: 'about',  component: About },
    { path: '/blog/:slug', name: 'singlePost',  component: SinglePost },
]

export default new Router({
    routes,
    mode: 'history',
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }
    },
    linkActiveClass : 'uk-active',
})
