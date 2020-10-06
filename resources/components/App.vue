<template>
  <section id="app">
    <NavBar />
    <InnerContainer />
  </section>
</template>
<script>
import NavBar from "./NavBar.vue";
import InnerContainer from "./InnerContainer.vue";
export default {
  name: "main-component",
  components: {
    NavBar,
    InnerContainer,
  },
};
</script>