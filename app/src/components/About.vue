<template>
  <section>
    <h2>自己紹介</h2>
    <p>大学卒業→フロントエンドエンジニアとして働いています</p>
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

export default Vue.extend({
  name: "About",
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
@import "../assets/style/_variables";

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

.list--sns {
  display: flex;
  &__item {
    margin-right: 16px;
  }
}
.sns__text {
  margin-left: 8px;
}
</style>
