<template>
  <section>
    <div class="work__container">
      <div class="work__thumbnail">
        <img class="work__thumbnail__image" ref="image" v-bind:src="work.image" alt="サムネイル" />
        <div class="work__description" v-on:mouseover="onMouseOver" v-on:mouseleave="onMouseLeave">
          <div class="work__description__content">
            <p class="work__description__text" v-if="isHover">{{work.description}}</p>
            <a
              :href="work.youtube"
              target="_blank"
              ref="youtube"
              v-if="hasMovie && isHover"
              class="button--square"
            >
              <font-awesome-icon :icon="['fab', 'youtube']" class="button--square__icon" />動画を見る
            </a>
          </div>
        </div>
      </div>
      <h3 class="work__title" v-on:mouseover="onMouseOver" v-on:mouseleave="onMouseLeave">
        <span class="work__title__label--start" />
        <span class="work__title__text">{{work.name}}</span>
      </h3>
    </div>
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
      hasMovie: false,
      isHover: false
    };
  },
  created: function() {
    this.hasMovie = this.$props.work.youtube !== undefined;
  },
  mounted: function() {},
  methods: {
    onMouseOver: function() {
      this.isHover = true;
    },
    onMouseLeave: function() {
      this.isHover = false;
    }
  }
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/style/_variables";
.work__container {
}
.work__title {
  position: relative;
  width: 100%;
  height: 40px;
  margin: 0;
  padding: 10px;
  background-color: $mint;
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
}
.work__title__text {
  position: absolute;
  z-index: 1;
}
.work__thumbnail {
  position: relative;
  width: 100%;
  height: 300px;
  &__image {
    width: 100%;
    height: 100%;
    object-fit: cover;
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
  &:hover {
    background: rgba($color: $black, $alpha: 0.6);
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
.button--square {
  padding: 8px;
  border-radius: 5px;
  border: 1px solid $salmon;
  background: $salmon;
  color: #fff;
}
.button--square__icon {
  margin-right: 8px;
}
</style>
