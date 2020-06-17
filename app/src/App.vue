<template>
  <div id="app">
    <div class="container">
      <side-menu :onClick="onClick" :activeContent="clickedName"/>
      <main-content :activeContent="clickedName"/>
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
      clickedName: ""
    };
  },
  components: {
    HelloWorld,
    SideMenu,
    MainContent
  },
  methods: {
    onClick: function(name: string) {
      this.clickedName = name;
      window.scrollTo( 0, 1000 );
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
