<template>
  <div id="app">
    <div class="container">
      <side-menu :onClick="onClick" :activeContentName="activeContentName" />
      <main-content :activeContentName="activeContentName" ref="main" />
    </div>
  </div>
</template>

<script lang="ts">
import Vue from "vue";
import HelloWorld from "./components/HelloWorld.vue";
import SideMenu from "./components/SideMenu.vue";
import MainContent from "./components/MainContent.vue";

export default Vue.extend({
  name: "App",
  data() {
    return {
      timeout: 0,
      byClick: false,
      activeContentName: ""
    };
  },
  components: {
    HelloWorld,
    SideMenu,
    MainContent
  },
  created() {
    window.addEventListener("scroll", this.handleScroll);
  },
  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);
  },
  methods: {
    onClick(name: string, event: any) {
      this.activeContentName = name;
    },
    handleScroll() {
      clearTimeout(this.timeout);
      this.timeout = setTimeout(
        function() {
          this.activeContentName = window.pageYOffset > 600 ? "about" : "works";
        }.bind(this),
        500
      );
    }
  }
});
</script>

<style lang="scss">
@import "./assets/style/main";

#app {
  color: $black;
}
.container {
  display: grid;
  grid-template-columns: minmax(150px, 1fr) 3fr;
}
</style>
