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
      changed: false,
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
    this.changed = false;
  },
  mounted() {
    const mainContent = this.$refs.main as Vue;
    //mainContent.$el.addEventListener("scroll", this.handleScroll);
  },
  beforeDestroy() {
    const mainContent = this.$refs.main as Vue;
    //mainContent.$el.removeEventListener("scroll", this.handleScroll);
  },
  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);
  },
  methods: {
    onClick(name: string, event: any) {
      this.changed = false;
      this.changeActiveContent(true, name);
      event.preventDefault();
    },
    handleScroll(event: any) {
      !this.changed && this.changeActiveContent(false, undefined);
      event.preventDefault();
    },
    changeActiveContent(byClick: boolean, name?: string) {
      if (byClick) {
        this.activeContentName = name || "works";
        this.changed = true;
      }else{
        this.activeContentName = window.pageYOffset > 600 ? "about" : "works";
      }
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
