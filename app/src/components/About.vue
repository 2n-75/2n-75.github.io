<template>
  <section>
    <h2>自己紹介</h2>
    <p>大学卒業→フロントエンドエンジニアとして働いています</p>
    <div>
      <h3>言語・フレームワーク</h3>
      <ul>
        <li>JavaScript</li>
        <li>TypeScript React</li>
        <li>Vue.js</li>
        <li>PHP</li>
        <li>Python</li>
        <li>Unity</li>
        <li>Arduino</li>
        <li>Processing</li>
      </ul>
    </div>
    <div>
      <h3>すきなもの</h3>
      <ul>
        <li>音楽</li>
        <li>ゲーム</li>
        <li>廃墟</li>
      </ul>
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
  color: $mint;
  font-family: $fontFamily;
}
</style>
