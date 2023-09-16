<template lang="">
  <!-- Process One -->
  <section class="process-one">
    <div class="auto-container">
      <div class="process-one_inner-conatiner">
        <div class="four-item-carousel owl-carousel owl-theme">
          <Swiper
            :modules="[SwiperAutoplay, SwiperEffectCreative]"
            :slides-per-view="4"
            :loop="true"
            :scrollbar="{ draggable: true }"
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
          >
            <SwiperSlide class="slide" v-for="slider in refrences">
              <!-- Process Column -->
              <div class="process-one_block">
                <div class="process-one_block-inner">
                  <div class="process-one_image">
                    <img src="././../../images/resource/process-1.png" alt="" />
                  </div>
                  <div class="process-one_year" :class="slider.color">
                    {{ slider.year }}
                  </div>
                  <h5 class="process-one_heading">{{ slider.title }}</h5>
                  <div class="process-one_text">
                    {{ slider.description }}
                  </div>
                </div>
              </div>
            </SwiperSlide>
          </Swiper>
        </div>
      </div>
    </div>
  </section>
  <!-- End Process One -->
</template>
<script setup>
const props = defineProps({
  refrences: Object,
});
</script>
<style lang=""></style>
