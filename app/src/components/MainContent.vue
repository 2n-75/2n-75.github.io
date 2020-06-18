<template>
  <main>
    <div class="main__container">
      <div class="space">
        <Works ref="works" />
      </div>
      <div class="space">
        <About ref="about" />
      </div>
    </div>
  </main>
</template>

<script lang="ts">
import Vue from "vue";
import HelloWorld from "./HelloWorld.vue";
import About from "./About.vue";
import Works from "./Works.vue";

export default Vue.extend({
  name: "MainContent",
  components: {
    HelloWorld,
    About,
    Works
  },
  props: {
    activeContentName: String,
    handleScroll: Function
  },
  watch: {
    activeContentName() {
      this.scrollToActiveElement(event);
    }
  },
  methods: {
    scrollToActiveElement(event: any) {
      const activeElement = this.$refs[this.activeContentName] as Vue;
      activeElement.$el.scrollIntoView({ behavior: "smooth", block: "center" });
      const parent = this.$parent as Vue;
      event && event.preventDefault();
    }
  }
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/style/_variables";
main {
  border-left: 1px solid $lemon;
}
.main__container {
  margin: 40px;
}
.space {
  margin-bottom: 80px;
}
</style>
