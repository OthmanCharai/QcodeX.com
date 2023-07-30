<script setup>
const props = defineProps({
  name: String,
  title: String,
  image: String,
  content: String,
});
</script>

<template>
  <section class="slider-two">
    <div class="single-item-carousel owl-carousel owl-theme fixedWIdth active">
      <div
        class="slider-two_image-layer slider-two my-width"
        :style="image"
      ></div>
     
      <div class="auto-container">
        <!-- Content Column -->
        <div class="slider-two-content">
          <div class="slider-two_inner">
            <div class="slider-two_title mt-2">
              {{ title }}
            </div>
            <div v-html="content" class="slider-two_text mt-5"></div>
            <!-- Button Box -->
            <div class="slider-two_button-box mt-5">
              <nuxt-link class="btn-style-two theme-btn btn-item mt-5" to="/contact">
                <div class="btn-wrap">
                  <span class="text-one"
                    >Contact one of our experts
                    <i class="fa-solid fa-arrow-right fa-fw"></i
                  ></span>
                  <span class="text-two"
                    >Contact one of our experts
                    <i class="fa-solid fa-arrow-right fa-fw"></i
                  ></span>
                </div>
              </nuxt-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style >
 .my-width{
    width: 93%;

  }
</style>
