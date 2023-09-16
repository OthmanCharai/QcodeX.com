<script setup>
/**
 *  define slider object
 */
const sliders = [
  {
    mainImage: "background-image:url(./../../images/main-slider/2.jpg)",
    patternImage:
      "background-image:url(./../../images/main-slider/pattern-1.png)",
    title: "We are Business Solution",
    head: "UNLEASH THE FULL POTENTIAL OF YOUR COMPANY",

    link: "Contact one of our experts",
  },
  {
    mainImage: "background-image:url(./../../images/main-slider/2.jpg)",
    patternImage:
      "background-image:url(./../../images/main-slider/pattern-1.png)",
    title: "We are Business Solution",
    head: "UNLEASH THE FULL POTENTIAL  OF YOUR COMPANY",

    link: "Contact one of our experts",
  },
  {
    mainImage: "background-image:url(./../../images/main-slider/2.jpg)",
    patternImage:
      "background-image:url(./../../images/main-slider/pattern-1.png)",
    title: "We are Business Solution",
    head: "UNLEASH THE FULL POTENTIAL OF YOUR COMPANY",
    link: "Contact one of our experts",
  },
];

/**
 *  set slider animation
 */
const mainSlider = ref(null);
const onSlideChange = () => {
  mainSlider.value.classList.add("active");
};

const onSlideBeforeChanges = () => {
  mainSlider.value.classList.remove("active");
};
</script>

<template>
  <section class="slider-two">
    <div ref="mainSlider" class="single-item-carousel owl-carousel owl-theme">
      <Swiper
        :modules="[SwiperAutoplay, SwiperEffectCreative]"
        :slides-per-view="1"
        :loop="true"
        :effect="'creative'"
        :scrollbar="{ draggable: true }"
        navigation
        @afterInit="onSlideChange"
        @beforeDestroy="onSlideBeforeChanges"
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
        <SwiperSlide class="slide" v-for="slider in sliders" :key="slide">
          <div class="slider-two_image-layer" :style="slider.mainImage"></div>
          <div
            class="slider-two_pattern-layer"
            :style="slider.patternImage"
          ></div>
          <div class="auto-container">
            <!-- Content Column -->
            <div class="slider-two-content">
              <div class="slider-two_inner">
                <div class="slider-two_title">
                  {{ slider.title }}
                </div>
                <h1 v-html="slider.head" class="slider-two_heading"></h1>
                <!-- Button Box -->
                <div class="slider-two_button-box">
                  <a class="btn-style-two theme-btn btn-item" href="#">
                    <div class="btn-wrap">
                      <nuxt-link to="/contact">
                        <span class="text-one"
                          >{{ slider.link }}
                          <i class="fa-solid fa-arrow-right fa-fw"></i
                        ></span>
                        <span class="text-two"
                          >{{ slider.link }}
                          <i class="fa-solid fa-arrow-right fa-fw"></i
                        ></span>
                      </nuxt-link>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </SwiperSlide>
      </Swiper>
    </div>
  </section>
</template>

<style>
.a {
  color: red;
}
</style>
