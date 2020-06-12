<template>
  <section>
    <h2>自己紹介</h2>
    <div>
      どうやらアトモスフェアの高い位置まで到達したようだった。
      空は真っ暗で、星の瞬きもなくなっていた。
      丘の上では彼方に広がる水平線が同じ高さに見えるのと同じ錯覚によって、
      眼下に真っ暗な雲が広がり、車は巨大な暗い空間の真ん中に浮いているように見えた。
      その空間の上半分は銀色にきらめいていた。
    </div>
  </section>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name: "About"
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/style/_variables";
h3 {
  color: $lemon;
  font-family: $fontFamily;
}
</style>
