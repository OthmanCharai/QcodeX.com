<script setup>
import axios from "axios";

const fullName = ref("");
const phoneNumber = ref("");
const subject = ref("");
const email = ref("");
const message = ref("");

// Contact Us

const contactUs = () => {
  
  const userData = {
    email: email.value,
    fullName: fullName.value,
    phoneNumber: phoneNumber.value,
    message: message.value,
    subject: subject.value,
    to: "othman.fiver@gmail.com",
    type: "contact",
  };

  axios
    .post("https://qcodex.com/api/email.php", JSON.stringify(userData))
    .then((response) => {
      console.log("Email sent successfully", response.data);
    })
    .catch((error) => {
      console.error("Email sending failed", error);
    });
};
</script>

<template lang="">
  <!-- Contact One -->
  <section
    class="contact-one"
    style="background-image: url(./../../ages/background/map-1.png)"
  >
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title">
        <div
          class="d-flex justify-content-between align-items-center flex-wrap"
        >
          <div class="left-box">
            <div class="sec-title_title">Contact us</div>
            <h2 class="sec-title_heading">
              Grow Your Business With <br />
              <span>Our Expertise</span>
            </h2>
          </div>
          <div class="right-box">
            <div class="sec-title_text">
              The perfect blend of mature processes, flexible delivery <br />
              models, effective project management.
            </div>
          </div>
        </div>
      </div>
      <div class="row clearfix">
         <!-- Form Column -->
         <div class="form-column col-lg-8 col-md-12 col-sm-12">
          <div class="inner-column">
            <!-- Contact Form -->
            <div class="contact-form">
              <form method="post" @submit.prevent="contactUs" id="contact-form">
                <div class="row clearfix">
                  <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <label>Name (required)</label>
                    <input
                      type="text"
                      name="username"
                      placeholder="Your name*"
                      required=""
                      v-model="fullName"
                    />
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <label>Email adress (required)</label>
                    <input
                      type="text"
                      name="email"
                      placeholder="Email"
                      v-model="email"
                      required=""
                    />
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <label>Phone (optional)</label>
                    <input
                      type="text"
                      name="phone"
                      v-model="phoneNumber"
                      placeholder="Phone"
                      required=""
                    />
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <label>Subject (required)</label>
                    <input
                      type="text"
                      name="subject"
                      placeholder="Subject"
                      v-model="subject"
                      required=""
                    />
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label>Your message</label>
                    <textarea
                      class=""
                      name="message"
                      v-model="message"
                      placeholder="Your text here..."
                    ></textarea>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <button
                      @click="contactUs"
                      class="btn-style-seven theme-btn"
                    >
                      <span class="btn-wrap">
                        <span class="text-one">Send message</span>
                        <span class="text-two">Send message</span>
                      </span>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <!-- End Comment Form -->
          </div>
        </div>
        <!-- Info Column -->
        <div class="info-column col-lg-4 col-md-12 col-sm-12">
          <div class="inner-column" style="margin-top:0px">
            <!-- Contact Block -->
            <div class="contact-block">
              <div class="block-inner">
                <span class="icon"
                  ><img src="./../../images/icons/contact-1.png" alt=""
                /></span>
                <strong>Office address</strong>
                Digital Agency Network 20 Eastbourne Terrace London W2 6LG
              </div>
            </div>

            <!-- Contact Block -->
            <div class="contact-block">
              <div class="block-inner">
                <span class="icon"
                  ><img src="./../../images/icons/contact-2.png" alt=""
                /></span>
                <strong>Telephone number</strong>
                +1(646)667-9097 <br />
                +1(646)667-9097
              </div>
            </div>

            <!-- Contact Block -->
            <div class="contact-block">
              <div class="block-inner">
                <span class="icon"
                  ><img src="./../../images/icons/contact-3.png" alt=""
                /></span>
                <strong>Mail address</strong>
                contact@qcodex.com<br />
                contact@qcodex.com
              </div>
            </div>
          </div>
        </div>

       
      </div>
    </div>
  </section>
  <!-- End Contact One -->
</template>

<style lang=""></style>
