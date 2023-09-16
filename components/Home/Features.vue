<script setup>
const features = [
  {
    link: "/",
    image: "./../../images/icons/feature-1.png",
    title: "Data & Analytics",
  },
  {
    link: "/",
    image: "./../../images/icons/feature-2.png",
    title: "Finance & Performance",
  },
  {
    link: "/",
    image: "./../../images/icons/feature-3.png",
    title: "Architecture & Cloud",
  },
  {
    link: "/",
    image: "./../../images/icons/feature-5.png",
    title: "Data Science",
  },
  {
    link: "/",
    image: "./../../images/icons/feature-4.png",
    title: "Training",
  },
];
</script>
<template lang="">
  <!-- Featured One -->
  <section class="featured-one">
    <div class="auto-container">
      <div class="row clearfix">
        <!-- Feature Block One -->
        <div v-for="feature in features" class="feature-block_one">
          <nuxt-link :to="`/jobs/${feature.title}`">
            <div class="feature-block_one-inner max-height">
              <span class="color-layer"></span>
              <span class="feature-block_one-icon">
                <img :src="feature.image" alt="" />
              </span>
              <h5 class="feature-block_one-title">
                {{ feature.title }}
              </h5>
            </div>
          </nuxt-link>
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured One -->

  <!-- Clients One -->
  <!--   <section class="clients-one">
    <div
      class="clients-one_pattern"
      style="background-image: url(./../../images/background/3.jpg)"
    ></div>
    <div class="auto-container">
      <div class="row clearfix">
       
        <div class="clients-one_title-column col-lg-4 col-md-12 col-sm-12">
          <div class="client-one_title">Join over +15,000 happy clients!</div>
        </div>
       
        <div class="clients-one_carousel-column col-lg-8 col-md-12 col-sm-12">
        
          <ul class="sponsors-carousel-two owl-carousel owl-theme">
            <Swiper
              :modules="modules"
              :slides-per-view="3"
              :space-between="20"
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
            >
              <SwiperSlide class="slide" v-for="slider in 10" :key="slide">
                <li class="slide-item">
                  <figure class="client-one_image-box">
                    <a href="#"
                      ><img src="./../../images/clients/5.png" alt=""
                    /></a>
                  </figure>
                </li>
              </SwiperSlide>
            </Swiper>
          </ul>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End Clients One -->
</template>
<style lang="css">
.max-height {
  height: 100%;
}
</style>
