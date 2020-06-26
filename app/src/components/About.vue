<template>
  <section>
    <h2>自己紹介</h2>
    <p>大学卒業→フロントエンドエンジニアとして働いています</p>
    <SNSList class="sns" />
    <div class="profile__row">
      <section>
        <h3>
          <font-awesome-icon :icon="['fas', 'laptop-code']" class="icon" />言語・フレームワーク
        </h3>
        <ul class="list">
          <li v-for="item in lang" :key="item" class="list__item">{{ item }}</li>
        </ul>
      </section>
      <div />
      <section>
        <h3>
          <font-awesome-icon :icon="['fas', 'heart']" class="icon" />すきなもの
        </h3>
        <ul class="list">
          <li v-for="item in love" :key="item" class="list__item">{{ item }}</li>
        </ul>
      </section>
    </div>
  </section>
</template>

<script lang="ts">
import Vue from "vue";
import SNSList from "./SNSList.vue";

export default Vue.extend({
  name: "About",
  components: {
    SNSList
  },
  data() {
    return {
      lang: [
        "JavaScript",
        "TypeScript React",
        "Vue.js",
        "PHP",
        "Python",
        "Unity",
        "Arduino",
        "Procrssing"
      ],
      love: ["音楽", "ゲーム", "廃墟"]
    };
  }
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/style/main";

h3 {
  color: $salmon;
  font-family: $fontFamily;
  margin-bottom: 8px;
  text-align: center;
  .icon {
    margin-right: 8px;
  }
}
.profile__row {
  display: grid;
  grid-template-columns: 1fr 0.1fr 1fr;
  @include mq-down() {
    display: inline-block;
    width: 100%;
    margin: 10px auto;
  }
  margin-top: 16px;
  & section {
    border-radius: 5px;
    padding: 16px 0;
  }
}
.list {
  text-align: center;
  &__item {
    width: 60%;
    margin: 0 auto;
    padding: 4px;
    border-bottom: 1px dashed $sand;
    font-weight: $fontBold;
    color: $mint;
  }
}

.sns{
  @include mq-up() {
    display: none;
  }
}
</style>
