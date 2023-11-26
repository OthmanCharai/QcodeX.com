<template lang="">
  <!-- Page Title -->
  <section
    class="page-title"
    style="background-image: url(./../../images/indestry/7.jpg)"
  >
    <div class="auto-container">
      <h2>Service Detail</h2>
      <ul class="bread-crumb clearfix">
        <li><nuxt-link to="/">Home</nuxt-link></li>
        <li>{{ name }}</li>
      </ul>
    </div>
  </section>
  <!-- End Page Title -->
</template>
<script setup>

const props = defineProps({
  name: String,
  image: String
});



</script>
<style lang=""></style>
