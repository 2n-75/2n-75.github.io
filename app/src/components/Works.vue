<template>
  <section>
    <h2 class="work__title">作品紹介</h2>
    <div class="works__row">
      <Work :work="lightFactory" />
      <div />
      <Work :work="magic" />
    </div>
    <div class="works__row">
      <Work :work="jinro" />
    </div>
  </section>
</template>

<script lang="ts">
import Vue from "vue";
import Work from "./Work.vue";
import LightFactoryImage from "@/assets/lightFactory.png";
import JinroImage from "@/assets/jinro.png";
import MagicImage from "@/assets/magic.jpg";

export default Vue.extend({
  name: "Works",
  components: {
    Work
  },
  data() {
    return {
      lightFactory: {
        name: "Light Factory",
        image: LightFactoryImage,
        description:
          "LEDテープの点灯パターンをwebページ上でデザインし制御するシステム。グループ制作・制作期間：約1ヶ月",
        lang: ["HTML", "CSS", "JavaScript", "PHP", "Arduino"],
        youtube: "https://www.youtube.com/watch?v=l1XULtuvLic&feature=youtu.be"
      },
      magic: {
        name: "まほうつかいになろう",
        image: MagicImage,
        description:
          "工作とデジタル遊びの融合を目的とした、未就学児向けのコンテンツ。Webカメラで色認識を行い認識した色と同じ色のエフェクトを投影する。個人制作・制作期間：約3ヶ月",
        lang: ["Unity", "Arduino"]
      },
      jinro: {
        name: "AR人狼",
        image: JinroImage,
        description:
          "ARマーカーを利用してゲーム内の役職を表示させて遊ぶ人狼ゲーム。自身の役職によって他のユーザーの表示役職が異なって表示されるのが特徴。 グループ制作・制作期間：1ヶ月",
        lang: ["Processing", "Arduino"]
      }
    };
  }
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/style/main";

.work__title {
  margin-bottom: 8px;
}
.works__row {
  @include mq-up() {
    display: grid;
    grid-template-columns: 1fr 0.1fr 1fr;
    margin-bottom: 40px;
  }
}
</style>
