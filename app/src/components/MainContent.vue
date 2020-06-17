<template>
  <main>
    <div class="main__container">
      <div class="space">
        <Works />
      </div>
      <div class="space">
        <About />
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
    activeContent: String
  },
  computed:{
    scrollToActiveContent: function(){
      console.log(this.activeContent)
      window.scrollTo( 0, 1000 );
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
