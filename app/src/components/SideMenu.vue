<template>
  <aside class="sideMenu">
    <div class="sideMenu__container">
      <h1>PortFolio</h1>
      <ul class="sideMenu__list">
        <li class="sideMenu__item" v-on:click="onclick('top')">TOP</li>
        <li class="sideMenu__item" v-on:click="onclick('work')">Work</li>
        <li class="sideMenu__item" v-on:click="onclick('about')">About</li>
      </ul>
      <div>
        <a href="./" class="link sns">
          <font-awesome-icon :icon="['fab', 'facebook-square']" />
          <span class="sns__text">Fackbook</span>
        </a>
      </div>
    </div>
  </aside>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name: "SideMenu",
  methods: {
    onclick: function(name: string) {
      console.log(name);
    }
  }
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/style/main";

aside {
  height: 100vh;
}
.sideMenu__container {
  position: fixed;
  height: 100%;
  margin: 10px 20px;
}
.sideMenu__item {
  margin: 10px 0;
  font-size: 1.2em;
  &:hover {
    cursor: pointer;
    color: $mint;
    font-weight: $fontBold;
  }
}
.sns{
  position: absolute;
  bottom: 50px;
}
.sns__text {
  margin-left: 10px;
}
</style>
