<template lang="html">
    <div id="welcome" class="uk-overflow-hidden welcome-container uk-cover-container">
        <div class="slide">
            <div class="title-wrapper uk-animation-toggle">
                <div class="inner uk-align-center uk-animation-shake">
                    <router-link :to="{ path: '/blog' }">
                        <div id="main-title" class="uk-heading-primary uk-position-z-index" v-text="title"></div>
                    </router-link>
                    <div id="social-icon-list" class="uk-margin-top">
                        <a target="_blank" href="https://github.com/kylops" class="social-icon">
                          <span uk-icon="icon: github; ratio: 2"></span>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/kyle.yangliu" class="social-icon">
                          <span uk-icon="icon: facebook; ratio: 2"></span>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/kyle.yangliu/" class="social-icon">
                          <span uk-icon="icon: instagram; ratio: 2"></span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="overlay"></div>
            <img id="bg" class="full-height full-width" src="http://www.vv3schools.com/wp-content/uploads/2017/04/3864777-artistic-wallpapers.jpg" alt="wallpaper" uk-scrollspy="cls: uk-animation-kenburns; repeat: true" uk-cover>
        </div>
    </div>

</template>

<script>
export default {
    name: 'Welcome',
    props : {

    },
    data(){
      return {
        title: 'CATS RULE!'
      }
    },
    mounted(){
    },
    methods : {
    },
    computed : {
    }
}

</script>

<style lang="css">
.head-icon-child { background-image: url('http://www.vv3schools.com/wp-content/uploads/2017/04/cooper-logo.jpeg'); }




</style>
