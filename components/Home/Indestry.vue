<template lang="">
  <!-- Choose One -->
  <section class="choose-one">
    <div
      class="choose-one_pattern-layer"
      style="background-image: url(./../../ages/background/pattern-19.png)"
    ></div>
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title_two centered pt-5">
        <div class="sec-title_two-title">~ Why choose Us? ~</div>
        <h2 class="sec-title_two-heading">
          We serve a wide <span>variety</span> <br />
          of Business Lines
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
const activeTab = ref("prod-sales-forces"); // Set the initial active tab

const tabs = [
  {
    id: "prod-sales-forces",
    title: "Sales Force",
    image: "./../../images/indestry/sales-force.png",
    heading: "BI for sales departments",
    text: "Data-driven sales organizations are 23% more profitable than their counterparts who do not use data in their decision-making processes. “Source: McKinsey & Company”",
    link: "#",
    btnText: "Contact Us",
  },
  {
    id: "prod-finance",
    title: "Finance",
    image: "./../../images/indestry/finance.png",
    heading: "BI for Financial control",
    text: "Refine data collection to elevate your strategic insightsIn a recent survey, 74% of CFOs stated that leveraging Business Intelligence tools is crucial for forecasting and strategic planning in today's complex financial landscape. “Source: Gartner Research”",
    link: "#", // Replace with the link URL for this tab
    btnText: "Contact Us",
  },
  {
    id: "prod-supply",
    title: "Supply Chain",
    image: "./../../images/indestry/supply-chain.png",
    heading: "BI for the supply chain",
    text: "Enhance your value chain by harnessing the power of data78% of supply chain leaders believe that implementing Business Intelligence tools will be the cornerstone of creating more resilient and adaptive supply chains in the next five years. “Source: Deloitte Supply Chain Survey”",
    link: "#", // Replace with the link URL for this tab
    btnText: "Contact Us",
  },
  {
    id: "prod-marketing",
    title: "Marketing",
    image: "./../../images/indestry/marketing.png",
    heading: "BI for marketing departments",
    text: "Deeply understand your audience down to the finest nuances68% of marketing leaders affirm that utilizing Business Intelligence tools is pivotal in crafting more personalized and impactful customer experiences. “Source: HubSpot Marketing Statistics”",
    link: "#", // Replace with the link URL for this tab
    btnText: "Contact Us",
  },
  {
    id: "prod-humain-resources",
    title: "Human Resources",
    image: "./../../images/indestry/humain-ressource.png",
    heading: "BI for human resources",
    text: "Harness the full potential of your HR data to drive insightsOver 50% of HR professionals believe that utilizing Business Intelligence tools is key to fostering a more engaged and productive workforce. “Source: Human Capital Institute (HCI) Annual Report”",
    link: "#", // Replace with the link URL for this tab
    btnText: "Contact Us",
  },
];

const handleTabClick = (tabId) => {
  activeTab.value = tabId; // Update the activeTab when a tab is clicked
};
</script>
<style lang=""></style>
