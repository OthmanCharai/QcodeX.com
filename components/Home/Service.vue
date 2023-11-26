<script setup>
import jsonData from "./../../assets/services.json";
const services = jsonData.services;
</script>
<template lang="">
  <!-- Services One -->
  <section class="services-one">
    <div
      class="services-one_pattern-layer"
      style="background-image: url(./../../images/background/pattern-14.png)"
    ></div>
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title_two centered">
        <div class="sec-title_two-title">~ Our Awesome Services ~</div>
        <h2 class="sec-title_two-heading">
          Choose <span>The Best</span> Data <br />
          Service Company
        </h2>
      </div>

      <div class="services-one_inner-coontainer">
        <div class="four-item-carousel owl-carousel owl-theme">
          <Swiper
            :modules="modules"
            :slides-per-view="3"
            :space-between="50"
            :scrollbar="{ draggable: true }"
            :loop="true"
            :effect="'creative'"
            :autoplay="{
              delay: 8000,
              disableOnInteraction: true,
            }"
            :creative-effect="{
              prev: {
                shadow: false,
                translate: ['-20%', 0, -1],
              },
              next: {
                translate: ['100%', 0, 0],
              },
            }"
            :breakpoints="{
              '340': {
                slidesPerView: 1,
                spaceBetween: 20,
              },
              '500': {
                slidesPerView: 2,
                spaceBetween: 20,
              },
              '768': {
                slidesPerView: 2,
                spaceBetween: 40,
              },
              '1024': {
                slidesPerView: 3,
                spaceBetween: 50,
              },
            }"
          >
            <SwiperSlide
              class="slide"
              v-for="service in services"
              :key="service"
            >
              <!-- Service Block One -->
              <div class="service-block_three">
                <div class="service-block_three-inner">
                  <span class="service-block_three-icon"
                    ><img style="width:55px;height:55px;margin-top:5px" :src="service.icon" alt=""
                  /></span>
                  <h5 class="service-block_three-heading">
                    {{ service.name }}
                  </h5>
                  <div
                    style="
                      white-space: nowrap;
                      overflow: hidden;
                      text-overflow: ellipsis;
                    "
                    class="service-block_three-text overlapping"
                  >
                    {{ service.content }}
                  </div>
                  <div class="service-block_three-overlay">
                    <div class="service-block_three-color-layer"></div>
                    <span class="service-block_three-icon-two"
                      ><img style="width:55px;height:55px;margin-top:5px" :src="service.icon" alt=""
                    /></span>

                    <h5 class="service-block_three-heading alternate">
                      <nuxt-link :to="`/jobs/${service.name}`">{{
                        service.name
                      }}</nuxt-link>
                    </h5>
                  </div>
                </div>
              </div>
            </SwiperSlide>
          </Swiper>
        </div>
      </div>
    </div>
  </section>
  <!-- End Services One -->
</template>
<style lang="css">
.overlapping {
  height: 80px;
}
</style>
