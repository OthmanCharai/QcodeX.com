<template lang="">
  <!-- Choose One -->
  <section class="choose-one">
    <div
      class="choose-one_pattern-layer"
      style="
        background-image: url(./../../public/images/background/pattern-19.png);
      "
    ></div>
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title_two centered pt-5">
        <div class="sec-title_two-title">~ Why choose Us? ~</div>
        <h2 class="sec-title_two-heading">
          We serve a wide <span>variety</span> <br />
          of industries
        </h2>
      </div>

      <!-- Choose Info Tabs -->
      <div class="choose-info-tabs">
        <!-- Choose Tabs -->
        <div class="choose-tabs tabs-box">
          <!-- Tab Btns -->
          <ul class="tab-btns tab-buttons clearfix">
            <li
              v-for="tab in tabs"
              :key="tab.id"
              :data-tab="tab.id"
              class="tab-btn"
              :class="{ 'active-btn': activeTab === tab.id }"
              @click="handleTabClick(tab.id)"
            >
              {{ tab.title }}
            </li>
          </ul>

          <!-- Tabs Container -->
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
              <div class="row clearfix">
                <!-- Image Column -->
                <div
                  class="choose-one_image-column col-lg-6 col-md-12 col-sm-12"
                >
                  <div class="choose-one_image-inner">
                    <div
                      class="choose-one_dotted-layer"
                      :style="{ backgroundImage: `url(${tab.image})` }"
                    ></div>
                    <div class="choose-one_color-layer"></div>
                    <div class="choose-one_image">
                      <img :src="tab.image" alt="" />
                    </div>
                  </div>
                </div>
                <!-- Content Column -->
                <div
                  class="choose-one_content-column col-lg-6 col-md-12 col-sm-12"
                >
                  <div class="choose-one_content-inner">
                    <div class="choose-one_title">{{ tab.title }}</div>
                    <h2 class="choose-one_heading">{{ tab.heading }}</h2>
                    <div class="choose-one_text">{{ tab.text }}</div>
                    <div class="choose-one_button">
                      <nuxt-link
                        class="btn-style-three theme-btn btn-item"
                        to="/contact"
                      >
                        <div class="btn-wrap">
                          <span class="text-one"
                            >{{ tab.btnText }}
                            <i class="fa-solid fa-arrow-right fa-fw"></i
                          ></span>
                          <span class="text-two"
                            >{{ tab.btnText }}
                            <i class="fa-solid fa-arrow-right fa-fw"></i
                          ></span>
                        </div>
                      </nuxt-link>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Choose One -->
</template>
<script setup>
const activeTab = ref("prod-mission"); // Set the initial active tab

const tabs = [
  {
    id: "prod-mission",
    title: "Company Mission",
    image: "./../../public/images/resource/choose.jpg",
    heading: "Fingent's Four Pillars of Influence",
    text: "We believe in four pillars of influence that drive our growth. This is ingrained in everything we do We use technology to create a better and smarter environment.",
    link: "#",
    btnText: "Contact Us",
  },
  {
    id: "prod-winner",
    title: "Awards Winner",
    image: "./../../public/images/resource/choose.jpg",
    heading: "Fingent's Four Pillars of Influence",
    text: "We believe in four pillars of influence that drive our growth. This is ingrained in everything we do We use technology to create a better and smarter environment.",
    link: "#", // Replace with the link URL for this tab
    btnText: "Contact Us",
  },
  {
    id: "prod-software",
    title: "Using Softwares",
    image: "./../../public/images/resource/choose.jpg",
    heading: "Fingent's Four Pillars of Influence",
    text: "We believe in four pillars of influence that drive our growth. This is ingrained in everything we do We use technology to create a better and smarter environment.",
    link: "#", // Replace with the link URL for this tab
    btnText: "Contact Us",
  },
];

const handleTabClick = (tabId) => {
  activeTab.value = tabId; // Update the activeTab when a tab is clicked
};
</script>
<style lang=""></style>
