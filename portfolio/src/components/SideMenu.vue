<template>
  <aside class="sideMenu">
    <ul class="sideMenu__list">
      <li class="sideMenu__item" v-on:click="onclick('top')">TOP</li>
      <li class="sideMenu__item" v-on:click="onclick('work')">Work</li>
      <li class="sideMenu__item" v-on:click="onclick('about')">About</li>
    </ul>
  </aside>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name: "SideMenu",
  methods:{
    onclick: function(name: string){
      console.log(name);
    }
  }
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
</style>
