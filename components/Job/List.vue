<template>
  <!-- Sidebar Side -->
  <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar">
      <!-- Sidebar Widget -->
      <div class="sidebar-widget category-widget">
        <ul class="cat-list">
          <li
            v-for="(service, index) in services"
            :key="service"
            :class="{
              active: isActive(`/jobs/${service}`),
              ative: index === activeService.value,
            }"
          >
            <nuxt-link :to="`/jobs/${service}`">
              {{ service }}
            </nuxt-link>
          </li>
        </ul>
      </div>

      <!-- Contact Widget -->
      <div class="sidebar-widget contact-widget">
        <div
          class="widget-content"
          style="background-image: url(./../../images/indestry/8.jpg)"
        >
          <div class="title">Contact us now</div>
          <div class="help">If need help!</div>
          <a class="phone" href="tel:+1(646)667-9097">+1(646)667-9097</a>
          <div class="form">or go to contact form:</div>
          <div class="button-box text-center">
            <nuxt-link to="contact"
              >Let’s start now <span class="fa-solid fa-link fa-fw"></span
            ></nuxt-link>
          </div>
        </div>
      </div>
    </aside>
  </div>
</template>
<script setup>
const props = defineProps({
  services: Object,
});

const route = useRoute();

const activeService = ref(0);

const currentRoutePath = computed(() => {
  return route.path;
});

const isActive = (routePath) => {
  return currentRoutePath.value === routePath;
};

onMounted(() => {
  activeService.value = props.services.findIndex((service) =>
    currentRoutePath.value.includes(service)
  );
});
</script>
<style lang=""></style>
