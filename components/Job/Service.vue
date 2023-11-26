<script setup>
import jsonData from "./../../assets/services.json";
const services = jsonData.services;

const servicesHeader = [];
services.forEach((element) => {
  servicesHeader.push(element.name);
});

const props=defineProps({
  selectedService: Object
})
</script>

<template lang="">
  <LandingHeader />
  <JobHeader :name="selectedService.name" :image="selectedService.image" />
  <!-- Sidebar Page Container -->
  <div class="sidebar-page-container">
    <div class="auto-container">
      <div class="row clearfix">
        <JobList :services="servicesHeader" />
        <JobContent :service="selectedService" />
      </div>
    </div>
  </div>
</template>

<style lang=""></style>
