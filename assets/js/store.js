import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)



const state = {
    siteInfo : '',
    allPosts  : '',
    allPages : '',
    allCategories : '',
    allTags : ''
}

const getters = {
    getSiteInfo(state){
      return state.siteInfo
    },
    getAllPosts(state){
        return state.allPosts
    },
    getAllPages(state){
        return state.allPages
    },
    getAllCategories(state){
        return state.allCategories
    },
    getAllTags(state){
        return state.allTags
    },
}

const mutations = {
    updateSiteInfo(state, value){
        state.siteInfo = value
    },
    updateAllPages(state, value){
        state.allPages = value
    },
    updateAllPosts(state, value){
        state.allPosts = value
    },
    updateAllCategories(state, value){
        state.allCategories = value
    },
    updateAllTags(state, value){
        state.allTags = value
    },
}

const actions = {
    fetchSiteInfo({commit}){
        var siteInfo = axios.get('/wp-json/kylops/v1/info')
            .then(function (response) {
                commit('updateSiteInfo', response.data)
                return response.data
            })
            .catch(function (error) {
                console.log(error)
            })
    },
    fetchAllPages({commit}){
        var pages = axios.get('/wp-json/wp/v2/pages?per_page=100')
            .then(function (response) {
                commit('updateAllPages', response.data)
            })
            .catch(function (error) {
                console.log(error)
            })
    },
    fetchAllPosts({commit, state}){
        var posts = axios.get('/wp-json/wp/v2/posts??_embed&per_page=10')
            .then(function (response) {
                commit('updateAllPosts', response.data)
            })
            .catch(function (error) {
                console.log(error)
            })
    },
    fetchAllCategories({commit}){
        var categories = axios.get('/wp-json/wp/v2/categories')
            .then(function (response) {
                commit('updateAllCategories', response.data )
                return response.data
            })
            .catch(function (error) {
                console.log(error)
            })
    },
    fetchAllTags({commit}){
        var tags = axios.get('/wp-json/wp/v2/tags')
            .then(function (response) {
                commit('updateAllTags', response.data )
                return response.data
            })
            .catch(function (error) {
                console.log(error)
            })
    },
}

export default new Vuex.Store({
    state,
    getters,
    mutations,
    actions,

})
