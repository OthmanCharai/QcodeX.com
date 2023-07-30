<template lang="">
  <!-- Testimonial Section -->
  <section
    class="testimonial-section"
    style="background-image: url(./../../public/images/background/5.jpg)"
  >
    <div
      class="pattern-layer-one"
      style="
        background-image: url(./../../public/images/background/pattern-25.png);
      "
    ></div>
    <div class="auto-container">
      <div class="row clearfix">
        <!-- Title Column -->
        <div class="title-column col-lg-5 col-md-12 col-sm-12">
          <div
            class="inner-column wow fadeInLeft"
            data-wow-delay="0ms"
            data-wow-duration="1500ms"
          >
            <!-- Sec Title -->
            <div class="sec-title_two">
              <div class="sec-title_two-title">Testimonials ~</div>
              <h2 class="sec-title_two-heading">
                Here's what our <br />
                <span>customers</span> have said.
              </h2>
              <div class="sec-title_two-text">
                Simplified IT is designed to help make sure you and your data is
                protected and your computer runs it's best. The network Access
                provides is valuable.
              </div>
            </div>
            <!-- Button Box -->
            <div class="button-box">
              <nuxt-link class="btn-style-three theme-btn btn-item" to="/contact">
                <div class="btn-wrap">
                  <span class="text-one"
                    >View More <i class="fa-solid fa-arrow-right fa-fw"></i
                  ></span>
                  <span class="text-two"
                    >View More <i class="fa-solid fa-arrow-right fa-fw"></i
                  ></span>
                </div>
              </nuxt-link>
            </div>
          </div>
        </div>

        <!-- Carousel Column -->
        <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
          <div
            class="inner-column"
            style="
              background-image: url(./../../public/images/background/pattern-26.png);
            "
          >
            <div class="authors-outer">
              <div class="author-one">
                <img src="./../../public/images/resource/author-2.jpg" alt="" />
              </div>
              <div class="author-two">
                <img src="./../../public/images/resource/author-3.jpg" alt="" />
              </div>
              <div class="author-three">
                <img src="./../../public/images/resource/author-4.jpg" alt="" />
              </div>
              <div class="author-four">
                <img src="./../../public/images/resource/author-5.jpg" alt="" />
              </div>
            </div>
            <div class="single-item-carousel owl-carousel owl-theme">
              <Swiper
                :modules="[SwiperAutoplay, SwiperEffectCreative]"
                :slides-per-view="1"
                :loop="true"
                :autoplay="{
                  delay: 8000,
                  disableOnInteraction: true,
                }"
              >
                <SwiperSlide
                  class="slide"
                  v-for="slider in reviews"
                  :key="slide"
                >
                  <!-- Testimonial Block -->
                  <div class="testimonial-block">
                    <div class="inner-box">
                      <div class="rating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="text">
                        {{ slider.text }}
                      </div>
                    </div>
                    <div class="author-box">
                      <div class="box-inner">
                        <span class="author-image">
                          <img :src="slider.image" alt="" />
                        </span>
                        <h5>{{ slider.name }}</h5>
                        <div class="designation">{{ slider.role }}</div>
                      </div>
                    </div>
                  </div>
                </SwiperSlide>
              </Swiper>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial Section -->
</template>
<script setup>
const reviews = [
  {
    text: "“I To helped the client achieve their goal of calling theattention of mobile network operators. The expert team wasalso able to develop an app with commendable UI/UX. Theclient appreciates their flexibility in terms.”",
    name: "Othman CHARAI",
    post: "Senior Developer",
    image: "./../../public/images/resource/author-1.jpg",
  },
  {
    text: "“I To helped the client achieve their goal of calling theattention of mobile network operators. The expert team wasalso able to develop an app with commendable UI/UX. Theclient appreciates their flexibility in terms.”",
    name: "Othman CHARAI",
    post: "Senior Developer",
    image: "./../../public/images/resource/author-1.jpg",
  },
  {
    text: "“I To helped the client achieve their goal of calling theattention of mobile network operators. The expert team wasalso able to develop an app with commendable UI/UX. Theclient appreciates their flexibility in terms.”",
    name: "Othman CHARAI",
    post: "Senior Developer",
    image: "./../../public/images/resource/author-1.jpg",
  },
  {
    text: "“I To helped the client achieve their goal of calling theattention of mobile network operators. The expert team wasalso able to develop an app with commendable UI/UX. Theclient appreciates their flexibility in terms.”",
    name: "Othman CHARAI",
    post: "Senior Developer",
    image: "./../../public/images/resource/author-1.jpg",
  },
];
</script>
<style lang=""></style>
