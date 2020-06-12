<template>
  <section>
    <h2 class="work__title">作品紹介</h2>
    <Work
      name="Light Factory"
      :image="lightFactory.image"
      :description="lightFactory.description"
    />
    <Work
      name="まほうつかいになろう"
      :image="magic.image"
      :description="magic.description"
    />
    <Work name="AR人狼" :image="jinro.image" :description="jinro.description" />
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
        image: LightFactoryImage,
        description: "lightfactoryの説明"
      },
      magic: {
        image: MagicImage,
        description: "説明"
      },
      jinro: {
        image: JinroImage,
        description: "人狼"
      }
    };
  }
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
</style>
