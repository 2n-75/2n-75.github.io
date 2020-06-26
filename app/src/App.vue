<template>
  <div id="app">
    <div class="container">
      <side-menu :onClick="onClick" :activeContentName="activeContentName" class="sideMenu" />
      <main-content :activeContentName="activeContentName" :isSp="isSp" ref="main" class="main" />
      <footer class="footer">
        <SNSList />
      </footer>
    </div>
  </div>
</template>

<script lang="ts">
import Vue from "vue";
import HelloWorld from "./components/HelloWorld.vue";
import SideMenu from "./components/SideMenu.vue";
import MainContent from "./components/MainContent.vue";
import SNSList from "./components/SNSList.vue";

export default Vue.extend({
  name: "App",
  data() {
    return {
      timeout: 0,
      byClick: false,
      activeContentName: "",
      toggleValue: 600,
      isSp: false
    };
  },
  components: {
    HelloWorld,
    SideMenu,
    MainContent,
    SNSList
  },
  created() {
    window.addEventListener("scroll", this.handleScroll);
    const userAgent = navigator.userAgent;
    this.isSp = this.checkIsSp(userAgent);
    this.toggleValue = this.checkIsSp(userAgent) ? 1100 : 600;
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
          this.activeContentName =
            window.pageYOffset > this.toggleValue ? "about" : "works";
        }.bind(this),
        500
      );
    },
    checkIsSp: function(userAgent: String) {
      if (
        (userAgent.indexOf("iPhone") > 0 || userAgent.indexOf("android") > 0) &&
        navigator.userAgent.indexOf("Mobile") > 0
      ) {
        return true;
      } else {
        return false;
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
  @include mq-up() {
    display: grid;
    grid-template-columns: minmax(150px, 1fr) 3fr;
  }
}
.sideMenu {
  height: 100vh;
  @include mq-down() {
    height: auto;
    position: fixed;
    z-index: 2;
    top: 0;
  }
}
.main {
  @include mq-down() {
    margin-top: 100px;
  }
}
.footer {
  @include mq-up() {
    display: none;
  }
  @include mq-down() {
    margin: 40px 20px;
  }
}
</style>
