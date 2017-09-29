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
      <v-parallax src="https://unsplash.it/1920/1080/?random" height="700" jumbotron>
        <v-layout
          column
          align-center
          justify-center
          class="white--text"
        >
          <img src="" alt="">
          <h1 class="white--text mb-2 display-3">See Amazing</h1>
          <div class="headline mb-3 text-xs-center"> </div>
          	<a class="scroll-btn" href="#main-content" uk-scroll>
          		<span class="mouse">
          			<span>
          			</span>
          		</span>
          	</a>
            <p>scroll down</p>
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
h1{
  text-align: center;
  text-shadow: 2px 2px 8px #c4c4c4;
}
.headline{
    margin-bottom: 10% !important;
}
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
			background: transparent;
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
			text-decoration: none;
		}
	}
}

@-webkit-keyframes ani-mouse {
	0% {
	opacity: 1;
	top: 29%;
	}
	15% {
	opacity: 1;
	top: 50%;
	}
	50% {
	opacity: 0;
	top: 50%;
	}
	100% {
	opacity: 0;
	top: 29%;
	}
}
@-moz-keyframes ani-mouse {
	0% {
	opacity: 1;
	top: 29%;
	}
	15% {
	opacity: 1;
	top: 50%;
	}
	50% {
	opacity: 0;
	top: 50%;
	}
	100% {
	opacity: 0;
	top: 29%;
	}
}
@keyframes ani-mouse {
	0% {
	opacity: 1;
	top: 29%;
	}
	15% {
	opacity: 1;
	top: 50%;
	}
	50% {
	opacity: 0;
	top: 50%;
	}
	100% {
	opacity: 0;
	top: 29%;
	}
}
 .scroll-btn {
	display: block;
	position: relative;
	left: 0;
	right: 0;
  bottom: 0;
	text-align: center;
}
.scroll-btn > * {
	display: inline-block;
	line-height: 18px;
	font-size: 13px;
	font-weight: normal;
	color: #7f8c8d;
	color: #ffffff;
	font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
	letter-spacing: 2px;
}
.scroll-btn > *:hover,
.scroll-btn > *:focus,
.scroll-btn > *.active {
	color: #ffffff;
}
.scroll-btn > *:hover,
.scroll-btn > *:focus,
.scroll-btn > *:active,
.scroll-btn > *.active {
	opacity: 0.8;
	filter: alpha(opacity=80);
}
.scroll-btn .mouse {
	position: relative;
	display: block;
	width: 35px;
	height: 55px;
	margin: 0 auto 20px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border: 3px solid white;
	border-radius: 23px;
}
.scroll-btn .mouse > * {
	position: absolute;
	display: block;
	top: 29%;
	left: 50%;
	width: 8px;
	height: 8px;
	margin: -4px 0 0 -4px;
	background: white;
	border-radius: 50%;
	-webkit-animation: ani-mouse 2.5s linear infinite;
	-moz-animation: ani-mouse 2.5s linear infinite;
	animation: ani-mouse 2.5s linear infinite;
}
/* HERO HEADER */
</style>
