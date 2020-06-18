<template>
  <aside class="sideMenu">
    <div class="sideMenu__container">
      <h1>PortFolio</h1>
      <ul class="sideMenu__list" v-if="setActive">
        <li
          class="sideMenu__item sideMenu__item--active"
          ref="work"
          @click="onClick('works', $event)"
        >Work</li>
        <li class="sideMenu__item" ref="about" @click="onClick('about', $event)">About</li>
      </ul>
      <ul class="sideMenu__list" v-else>
        <li class="sideMenu__item" ref="work" @click="onClick('works', $event)">Works</li>
        <li
          class="sideMenu__item sideMenu__item--active"
          ref="about"
          @click="onClick('about', $event)"
        >About</li>
      </ul>
      <ul class="list--sns">
        <li class="list--sns__item">
          <a href="https://github.com/2n-75" class="link sns">
            <font-awesome-icon :icon="['fab', 'github']" />
            <span class="sns__text">GitHub</span>
          </a>
        </li>
        <li class="list--sns__item">
          <a href="https://www.facebook.com/kanako.katsumata.792" class="link sns">
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
  props: {
    onClick: Function,
    activeContentName: String
  },
  computed: {
    setActive() {
      if (!this.activeContentName) {
        return true;
      }
      return this.activeContentName === "works";
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
    color: $lemon;
    font-weight: $fontBold;
  }
  &--active {
    color: $mint;
    font-weight: $fontBold;
  }
}
.list--sns {
  position: absolute;
  bottom: 80px;
  &__item {
    margin-bottom: 8px;
  }
}
.sns__text {
  margin-left: 8px;
}
</style>
