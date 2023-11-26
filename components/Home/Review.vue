<template lang="">
  <!-- Testimonial Section -->
  <section
    class="testimonial-section"
    
  >
    <div
      class="pattern-layer-one"
     
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
              <div class="sec-title_two-title">Reviews ~</div>
              <h2 class="sec-title_two-heading">
                Here's what our <br />
                <span>customers</span> have said.
              </h2>
              <div class="sec-title_two-text">
                Discover how our data solutions have made a difference for
                businesses. Read client reviews showcasing real-world impact and
                success
              </div>
            </div>
            <!-- Button Box -->
            <div class="button-box">
              <nuxt-link
                class="btn-style-three theme-btn btn-item"
                to="/contact"
              >
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
          
          >
           
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
    text: "“The data strategies implemented have revolutionized our efficiency. The seamless integration and insightful analytics have exceeded our expectations.”",
    name: "Alten Group",
    post: "Senior Developer",
    image: "./../../images/indestry/alten.png",
  },
  {
    text: "“The data strategies implemented have revolutionized our efficiency. The seamless integration and insightful analytics have exceeded our expectations.”",
    name: "KG Consulting",
    post: "Senior Developer",
    image: "./../../images/resource/download.jpeg",
  },
  {
    text: "“Exceptional data services transformed our operations, enabling precise decisions. The team's insights and support have been invaluable for our growth.”",
    name: "Multitransporte GMBH",
    post: "Senior Developer",
    image: "./../../images/resource/gmbh.jpeg",
  },
];
</script>
<style lang=""></style>
