<template>
  <aside class="sideMenu">
    <div class="sideMenu__container">
      <h1>PortFolio</h1>
      <ul class="sideMenu__list">
        <li class="sideMenu__item" v-on:click="onclick('work')">Work</li>
        <li class="sideMenu__item" v-on:click="onclick('about')">About</li>
      </ul>
      <ul class="list--sns">
        <li class="list--sns__item">
          <a href="./" class="link sns">
            <font-awesome-icon :icon="['fab', 'github']" />
            <span class="sns__text">GitHub</span>
          </a>
        </li>
        <li class="list--sns__item">
          <a href="./" class="link sns">
            <font-awesome-icon :icon="['fab', 'facebook-square']" />
            <span class="sns__text">Fackbook</span>
          </a>
        </li>
      </ul>
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
  margin: 40px 20px;
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
.list--sns {
  position: absolute;
  bottom: 80px;
  &__item{
    margin-bottom: 8px;
  }
}
.sns__text {
  margin-left: 10px;
}
</style>
