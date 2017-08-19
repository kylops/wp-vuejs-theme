import Vue from 'vue'
import Router from 'vue-router'
import Blog from './components/Blog.vue'
import Welcome from './components/Welcome.vue'

Vue.use(Router)

const routes = [
    { path: '/', name: 'welcome', component: Welcome },

    { path: '/blog', name: 'blog',  component: Blog },

]

export default new Router({
    routes,
    mode: 'history',
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }
    },
    linkActiveClass : 'uk-active',
})
