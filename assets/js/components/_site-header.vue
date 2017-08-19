<template lang="html">

<div id="site-header" class="" data-uk-grid-margin uk-grid>
      <div class="uk-width-medium-1-1">

          <div class="uk-vertical-align uk-text-center" style="background: url('http://vv3schools.dev/wp-content/uploads/2017/04/3864777-artistic-wallpapers.jpg') 50% 0 no-repeat; height: 450px;">
              <div id="header-content" class="uk-vertical-align-middle uk-width-3-4">
                  <h1 id="header-title" class="uk-heading-large">{{title}}</h1>
                  <p id="header-text" class="uk-text-large">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
          </div>

      </div>
  </div>

</template>

<script>
export default {
    name: 'site-header',
    props : {
    },
    data(){
      return {
        title : 'This is the Homepage title'
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
#header-title{
    color: white;
}
#header-text{
    color: white;
}
.uk-vertical-align:before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}
.uk-vertical-align-middle {
    vertical-align: middle;
    display: inline-block;
    max-width: 100%;
    font-size: 1rem;
}
</style>
