<template lang="">
  <JobService :selectedService="service[0]" />
  <LandingFooter />
</template>
<script setup>
import jsonData from "./../../assets/services.json";
const route = useRoute();
const services = jsonData.services;
let service = [];
service = services.filter((item) => {
  return item.name === route.params.job;
});
</script>
<style lang=""></style>
