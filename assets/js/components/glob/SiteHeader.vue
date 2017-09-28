<template lang="html">

    <!-- <header id="site-header" class="dbr-hero-header uk-block uk-block-large uk-background-cover uk-flex uk-flex-middle uk-height-viewport uk-contrast">
       <div class="uk-container uk-container-center">
          <section class="uk-grid uk-grid-match" data-uk-grid-margin="">
             <div class="uk-width-medium-1-1">
                <div class="uk-panel  uk-text-center" data-uk-parallax="{ opacity: '1,0', y:'-150' }">
                   <h3>SCROLL</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quasi, tempore eligendi. Rerum, asperiores, accusantium! Suscipit molestiae obcaecati libero a consequuntur eos quos voluptas voluptatibus quo eaque, excepturi blanditiis sapiente.</p>
                   <a class="uk-button-large uk-margin-top" href="#">Get started</a>
                </div>
             </div>
          </section>
       </div>
    </header> -->
    <header>
      <v-parallax src="assets/hero.jpeg" height="300">
        <v-layout
          column
          align-center
          justify-center
          class="white--text"
        >
          <img src="https://unsplash.it/1920/1080/?random" alt="header-bg">
          <h1 class="white--text mb-2 display-3">Parallax Template</h1>
          <div class="headline mb-3 text-xs-center">Lorem ipsum dolor</div>
          <v-btn
            class="blue lighten-2 mt-5"
            dark
            large
            href="/pre-made-themes"
          >
            Get Started
          </v-btn>
        </v-layout>
      </v-parallax>
    </header>

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

<style lang="scss" scoped>
// #header-title{
//     color: white;
// }
// #header-text{
//     color: white;
// }
// .uk-vertical-align:before {
//     content: '';
//     display: inline-block;
//     height: 100%;
//     vertical-align: middle;
// }
// .uk-vertical-align-middle {
//     vertical-align: middle;
//     display: inline-block;
//     max-width: 100%;
//     font-size: 1rem;
// }

h3{
	font-size: 50px;
	line-height: 60px;
	font-weight: 400;
	color: white;
   font-weight:300;
   letter-spacing: 5px;
}

/* HERO HEADER */

header {
	&.dbr-hero-header {
		background-image: url("https://unsplash.it/1920/1080/?random");
		// background-attachment: ;
		&:before {
			content: "";
			position: absolute;
			width: 100%;
			height: 100%;
			background: rgba(61,67,78,0.7);
			top:0;
		}
	}
	a {
		&:link, &:visited {
			letter-spacing: 2px;
			display: inline-block;
			height: 55px;
			padding:0px 40px;
			background: #f7b243;
			border: 0;
			border-radius: 5px;
			color: white;
			font-size: 15px;
			line-height: 55px;
			text-transform: uppercase;
			cursor: pointer;
			-moz-transition: background 0.6s;
			-o-transition: background 0.6s;
			-webkit-transition: background 0.6s;
			transition: background 0.6s;
		}
		&:hover {
			$hero-rgba-color: rgba(red(#f7b243), green(#f7b243), blue(#f7b243), 0.5);
			background-color: $hero-rgba-color;
			text-decoration: none;
		}
	}
}

/* HERO HEADER */
</style>
