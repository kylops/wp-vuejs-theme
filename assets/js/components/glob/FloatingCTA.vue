<template>
  <div id="floating-cta">
    <v-speed-dial
      v-model="fab"
      :top="top"
      :bottom="bottom"
      :right="right"
      :left="left"
      :direction="direction"
      :hover="hover"
      :transition="transition"
      fixed
    >
      <v-btn
        slot="activator"
        class="blue white--text"
        light
        fab
        hover
        v-model="fab"
        to="/blog"
      >
        <v-icon>home</v-icon>
      </v-btn>
      <v-btn
        fab
        light
        small
        class="grey darken-4 white--text"
      >
        <v-icon>fa-github</v-icon>
      </v-btn>
      <v-btn
        fab
        light
        small
        class="indigo white--text"
      >
        <v-icon>fa-facebook</v-icon>
      </v-btn>
      <v-btn
        fab
        light
        small
        class="red white--text"
      >
        <v-icon>fa-instagram</v-icon>
      </v-btn>
    </v-speed-dial>
  </div>
</template>
<script>
export default {
  name:'floating-cta',
  data() {
    return {
      direction: "top",
      fab: false,
      fling: false,
      hover: true,
      tabs: null,
      top: false,
      right: true,
      bottom: true,
      left: false,
      transition: 'slide-y-reverse-transition'
    }
  }
}
</script>
<style lang="scss" scoped>
</style>
