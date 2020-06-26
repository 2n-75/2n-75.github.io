<template>
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
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name: "SNSList"
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>

@import "../assets/style/main";
.list--sns {
  @include mq-up() {
    position: absolute;
    bottom: 80px;
  }
  @include mq-down() {
    width: 100%;
    display: flex;
    margin-top: 8px;
  }

  &__item {
    margin-bottom: 8px;
    @include mq-down() {
      margin: 0 auto;
    }
  }
}
.sns__text {
  margin-left: 8px;
}
</style>
