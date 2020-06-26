<template>
  <section>
    <div class="work__thumbnail">
      <img class="work__thumbnail__image" v-bind:src="work.image" alt="サムネイル" />
      <div
        class="work__description"
        v-on:mouseover="onMouseOver"
        v-on:mouseleave="onMouseLeave"
        ref="description"
      >
        <div class="work__description__content" v-if="isHover">
          <p class="work__description__text">{{work.description}}</p>
          <ul v-if="work.lang && isHover" class="tag__list">
            <li v-for="item in work.lang" :key="item" class="tag">#{{ item }}</li>
          </ul>
          <div class="button__wrapper">
            <a
              :href="work.youtube"
              target="_blank"
              ref="youtube"
              v-if="work.youtube && isHover"
              class="button--square"
            >
              <font-awesome-icon :icon="['fab', 'youtube']" class="button--square__icon" />動画を見る
            </a>
          </div>
        </div>
      </div>
    </div>
    <h3 class="work__title" v-on:mouseover="onMouseOver" v-on:mouseleave="onMouseLeave">
      <span class="work__title__label--start" />
      <span class="work__title__text">{{work.name}}</span>
    </h3>
  </section>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name: "Works",
  props: {
    work: {}
  },
  data() {
    return {
      isHover: false
    };
  },
  methods: {
    onMouseOver: function() {
      this.isHover = true;
      const description = this.$refs.description as HTMLDivElement;
      description.classList.add("work__description--hover");
    },
    onMouseLeave: function() {
      this.isHover = false;
      const description = this.$refs.description as HTMLDivElement;
      description.classList.remove("work__description--hover");
    }
  }
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/style/main";

section {
  border-radius: 5px;
  @include mq-down() {
    margin-bottom: 40px;
  }
}
.work__title {
  position: relative;
  width: 100%;
  height: 40px;
  margin: 0;
  padding: 8px;
  background-color: $mint;
  border-radius: 0 0 5px 5px;
}
.work__title__label--start {
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 40px 100px 0 0;
  border-color: #f6e335 transparent transparent transparent;
  border-radius: 0 0 5px 5px;
}
.work__title__text {
  position: absolute;
  z-index: 1;
  margin-left: 16px;
}
.work__thumbnail {
  position: relative;
  width: 100%;
  height: 300px;
  &__image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 5px 5px 0 0;
  }
}
.work__description {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
  border-radius: 5px 5px 0 0;
  &--hover {
    background: rgba($color: $black, $alpha: 0.7);
  }

  &__content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    width: 90%;
  }
  &__text {
    color: #fff;
  }
}
.button {
  &__wrapper {
    margin: 8px 0;
  }
  &--square {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid $salmon;
    background: $salmon;
    color: #fff;
    &__icon {
      margin-right: 8px;
    }
  }
}
.tag__list {
  margin-bottom: 16px;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}
.tag {
  margin-right: 8px;
  color: $sand;
}
</style>
