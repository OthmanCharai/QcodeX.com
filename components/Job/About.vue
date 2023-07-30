<template lang="">
  <!-- About One -->
  <section class="about-one">
    <div class="auto-container">
      <div class="row clearfix">
        <!-- Content Column -->
        <div class="about-one_content col-lg-6 col-md-12 col-sm-12">
          <div class="about-one_content-inner">
            <div class="sec-title">
              <div class="sec-title_title">About us</div>
              <h2 class="sec-title_heading">
                The Best <br /><span>{{ name }}</span>
                Service Company
              </h2>
              <div class="sec-title_text">
                {{ about.content }}
              </div>
            </div>

            <!-- About Info Tabs -->
            <div class="about-info-tabs">
              <!-- About Tabs -->
              <div class="about-tabs tabs-box">
                <!-- Tab Btns -->
                <ul class="tab-btns tab-buttons clearfix">
                  <li
                    v-for="tab in tabs"
                    :key="tab.id"
                    :data-tab="tab.id"
                    act
                    :class="{ 'active-btn': activeTab === tab.id }"
                    class="tab-btn"
                    @click="handleTabClick(tab.id)"
                  >
                    {{ tab.title }}
                  </li>
                </ul>

                <div class="tabs-content">
                  <div
                    v-for="tab in tabs"
                    :key="tab.id"
                    :class="{
                      'tab active-tab': activeTab === tab.id,
                      tab: activeTab !== tab.id,
                    }"
                    :id="tab.id"
                  >
                    <div class="content">
                      <div class="text">
                        {{ tab.content }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- About One Detail -->
            <a
              class="about-one_detail lightbox-video"
              href="https://www.youtube.com/watch?v=kxPCFljwJws"
            >
              Check details about our company
              <span class="play-icon"
                ><span class="fa-solid fa-play fa-fw"></span
                ><i class="ripple"></i
              ></span>
            </a>
          </div>
        </div>
        <!-- Image Column -->
        <div class="about-one_image-column-two col-lg-6 col-md-12 col-sm-12">
          <div class="about-one-image-inner-two">
            <div class="about-cicle_layer-two">
              <img
                src="./../../public/images/background/pattern-45.png"
                alt=""
              />
            </div>
            <div class="about-one_image-two">
              <!-- Counter Column -->
              <div class="about-one_counter-block">
                <div
                  class="dots-layer"
                  style="
                    background-image: url(./../../public/images/icons/about-dots.png);
                  "
                ></div>
                <div class="about-one_counter-number">
                  <span class="odometer" data-count="12"></span>
                </div>
                <div class="about-one_counter-text">
                  years of <br />
                  experiences
                </div>
              </div>
              <img src="./../../public/images/resource/about-4.jpg" alt="" />
              <div class="about-one_award">
                <div class="about-one_award-inner">
                  <div class="about-one_award-icon">
                    <img src="./../../public/images/icons/award.png" alt="" />
                  </div>
                  <strong>Best Awarded Company</strong>
                  We adapt our delivery to the way your work, whether as an
                  external provider.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About One -->
</template>
<script setup>
const props = defineProps({
  about: Object,
  name: String,
});

const activeTab = ref("prod-mission"); // Set the initial active tab

const tabs = [
  {
    id: "prod-mission",
    title: "Our Mission",
    content:  props.about.mission,
  },
  {
    id: "prod-vision",
    title: "Our Vision",
    content: props.about.vision,
  },
  {
    id: "prod-value",
    title: "Our Value",
    content: props.about.value
  },
];

const handleTabClick = (tabId) => {
  activeTab.value = tabId; // Update the activeTab when a tab is clicked
};
</script>
<style lang=""></style>
