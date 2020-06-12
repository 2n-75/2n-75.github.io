<template>
  <section>
    <div class="work__container">
      <div>
        <h3 class="work__title">
          <span class="work__title__label" />
          <span class="work__title__text">{{name}}</span>
        </h3>
        <div class="work__description">{{description}}</div>
      </div>
      <img v-bind:src="image" alt="サムネイル" />
    </div>
  </section>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name: "Works",
  props: {
    name: String,
    description: String,
    image: String
  },
  data() {
    return {
      name: "",
      description: "",
      image: ""
    };
  },
  created: function() {
    console.log(this.description);
  }
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/style/_variables";
.work__container {
  display: grid;
  grid-template-columns: 3fr minmax(150px, 2fr);
  margin: 40px 0;
}
.work__title {
  position: relative;
  height: 40px;
  margin: 0;
  padding: 10px;
  background-color: $mint;
  color: #fff;
}
.work__title__label {
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 40px 200px 0 0;
  border-color: #f6e335 transparent transparent transparent;
}
.work__title__text {
  position: absolute;
  z-index: 1;
}
.work__description {
  margin: 16px 0;
}
</style>
