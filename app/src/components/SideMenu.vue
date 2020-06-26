<template>
  <aside>
    <div class="sideMenu__container">
      <div class="sideMenu__header">
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
      </div>
      <SNSList class="sns" />
    </div>
  </aside>
</template>

<script lang="ts">
import Vue from "vue";
import SNSList from "./SNSList.vue";

export default Vue.extend({
  name: "SideMenu",
  components: {
    SNSList
  },
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

.sideMenu__container {
  @include mq-up() {
    position: fixed;
    height: 100%;
    margin: 40px 20px;
  }
  margin: 0;
  padding: 20px;
  background: #fff;
}
.sideMenu__header {
  @include mq-down() {
    width: 100%;
    height: auto;
    margin: 0;
    display: grid;
    grid-template-columns: minmax(150px, 1fr) 3fr;
    & h1{
      margin: auto 0;
    }
  }
}
.sideMenu__list {
  @include mq-down() {
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
}
.sideMenu__item {
  margin: 10px 0;
  font-size: 1.2em;
  @include mq-down() {
    text-align: center;
  }
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
.sns {
  @include mq-down() {
    display: none;
  }
}
</style>
