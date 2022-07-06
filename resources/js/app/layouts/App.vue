<template>
  <main>

    <transition name="zoom" mode="out-in">
      <router-view class="view"></router-view>
    </transition>
  </main>
</template>

<script>
export default {
    name: "App",
};
</script>
