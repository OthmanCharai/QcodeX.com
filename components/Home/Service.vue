<script setup>
const services = [
    {
        image: "./../../public/images/icons/service-8.png",
        title: "t UI/UX Design",
        link:"/home",
        description:
            "Our customers get solutions and business opportunities instead of just projects.",
    },
    {
        image: "./../../public/images/icons/service-8.png",
        title: "r UI/UX Design",
        link:"/home",
        description:
            "Our customers get solutions and business opportunities instead of just projects.",
    },
    {
        image: "./../../public/images/icons/service-8.png",
        title: "g UI/UX Design",
        link:"/home",
        description:
            "Our customers get solutions and business opportunities instead of just projects.",
    },
    {
        image: "./../../public/images/icons/service-8.png",
        title: "UI/UX Design",
        link:"/home",
        description:
            "Our customers get solutions and business opportunities instead of just projects.",
    },
    {
        image: "./../../public/images/icons/service-8.png",
        title: "UI/UX Design",
        link:"/home",
        description:
            "Our customers get solutions and business opportunities instead of just projects.",
    },
];
</script>
<template lang="">
    <!-- Services One -->
    <section class="services-one">
        <div
            class="services-one_pattern-layer"
            style="background-image: url(images/background/pattern-14.png)"
        ></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title_two centered">
                <div class="sec-title_two-title">~ Our Awesome Services ~</div>
                <h2 class="sec-title_two-heading">
                    Choose <span>The Best</span> IT <br />
                    Service Company
                </h2>
            </div>

            <div class="services-one_inner-coontainer">
                <div class="four-item-carousel owl-carousel owl-theme">
                    <Swiper
                        :modules="[SwiperAutoplay, SwiperEffectCreative]"
                        :slides-per-view="2"
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
                        <SwiperSlide
                            class="slide"
                            v-for="service in services"
                            :key="service"
                        >
                            <!-- Service Block One -->
                            <div class="service-block_three">
                                <div class="service-block_three-inner">
                                    <span class="service-block_three-icon"
                                        ><img :src="service.image" alt=""
                                    /></span>
                                    <h5 class="service-block_three-heading">
                                        {{ service.title }}
                                    </h5>
                                    <div class="service-block_three-text">
                                        {{ service.description }}
                                    </div>
                                    <div class="service-block_three-overlay">
                                        <div
                                            class="service-block_three-color-layer"
                                        ></div>
                                        <span
                                            class="service-block_three-icon-two"
                                            ><img :src="service.image" alt=""
                                        /></span>

                                        <h5
                                            class="service-block_three-heading alternate"
                                        >
                                            <nuxt-link :to="service.link">{{
                                                service.title
                                            }}</nuxt-link>
                                        </h5>
                                        <a
                                            class="service-block_three-learn"
                                            href="service-detail.html"
                                            >Learn More</a
                                        >
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
<style lang=""></style>
