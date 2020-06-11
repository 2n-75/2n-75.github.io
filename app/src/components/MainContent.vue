<template>
  <main>
    <About />
    <Works />
    <div :is="children"></div>
  </main>
</template>

<script lang="ts">
import Vue from "vue";
import HelloWorld from "./HelloWorld.vue";
import About from "./About.vue";
import Works from "./Works.vue";

export default Vue.extend({
  name: "MainContent",
  components: {
    HelloWorld,
    About,
    Works
  },
  props: {
    children: String
  }
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
</style>
