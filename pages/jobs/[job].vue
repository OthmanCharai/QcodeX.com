<template lang="">
  <LandingHeader />
  <JobSlider
    :name="service[0].name"
    :image="service[0].image"
    :title="service[0].title"
    :content="service[0].content"
  />
  <JobAbout :about="service[0].about" :name="route.params.job" />
  <JobProcess :refrences="service[0].references" />
  <JobTeam :teams="service[0].teams" />
  <!-- <JobCounter />
  <JobDetails /> -->
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
