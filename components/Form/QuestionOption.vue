<script setup>
import axios from "axios";

import { questions } from "./../../assets/questions.json";

const currentQuestionIndex = ref(0);

const processeded = ref(0);

const currentQuestion = computed(() => questions[currentQuestionIndex.value]);

const progressStyle = ref("");

const isFinshed = ref(false);

const currentAnswer = ref(null);

const optionsClicked = (option, index) => {

  // Store the answer and question index in local storage
  const answers =
    currentQuestionIndex.value != 0
      ? JSON.parse(localStorage.getItem("answers"))
      : [];

  processeded.value = (currentQuestionIndex.value * 100) / questions.length;

  progressStyle.value = "width:" + processeded.value + "px";

  if (currentQuestionIndex.value + 1 == questions.length) {
  
    sendEmail(answers);

    isFinshed.value = true;

    return true;

  } else {

    answers.push({ question: currentQuestionIndex.value, answer: option });

    localStorage.setItem("answers", JSON.stringify(answers));

    currentQuestionIndex.value++;
  }
};

// Prev Questions
const previousQuestion = () => {
  if (currentQuestionIndex.value > 0) {

    const answers = JSON.parse(localStorage.getItem("answers")) || [];

    currentAnswer.value = answers[currentQuestionIndex.value];

    currentQuestionIndex.value--;

    processeded.value = (currentQuestionIndex.value * 100) / questions.length;
  }
};

const sendEmail = (answers) => {
  const emailData = {
    to: "othman.fiver@gmail.com",
    subject: "Answers",
    message: JSON.stringify(answers),
    type: "questions ",
  };

  axios
    .post("https://qcodex.com/api/email.php", JSON.stringify(emailData))
    .then((response) => {
      console.log("Email sent successfully", response.data);
    })
    .catch((error) => {
      console.error("Email sending failed", error);
    });
};
</script>

<template lang="">
  <div class="container py-5">
    <div class="row">
      <div
        class="col-lg-10 mx-auto apply_form_design apply_form_design_click col-xl-8"
      >
        <!-- Progress Bar -->
        <div
          v-if="processeded > 0"
          class="progress mt-3 mx-md-4 form-progress-container"
        >
          <div
            aria-valuemin="0"
            aria-valuemax="100"
            class="progress-bar progress-bar-striped progress-bar-animated rounded-pill form-progress"
            :style="{ width: Math.round(processeded) + '%' }"
          >
            {{ Math.round(processeded) }}%
          </div>
        </div>
        <!-- End of progress bar -->

        <div class="card mt-4 mt-md-5 border-0 rounded-1-25">
          <!-- Question Card -->
          <div
            class="card-body px-2 p-md-5 radio-group justify-content-between text-center step"
          >
            <div class="row justify-content-center">
              <div class="col-12 mb-5">
                <h4>{{ currentQuestion.title }}</h4>
              </div>
              <div
                v-for="(option, optionIndex) in currentQuestion.options"
                :key="optionIndex"
                class="col-12 col-md-4 col-sm-6 mb-3"
              >
                <div
                  @click="optionsClicked(option, optionIndex)"
                  class="form-group mb-3"
                >
                  <label
                    class="icon-btn text-center mx-auto"
                    for="radioPropertyType0"
                    ><span class="step-label-bg mx-auto"
                      ><span class="step-label-bg2 mx-auto"
                        ><span class="align-self-center justify-content-center"
                          ><img
                            width="90"
                            class="img-fluid mb-1 align-self-center px-2 mx-auto"
                            src="./../../images/ic_home_refinance.png"
                            alt="single family detached"
                          /><span class="d-block step_title">{{
                            option
                          }}</span></span
                        ></span
                      ></span
                    ></label
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- end of question card -->
          <div class="px-2 px-md-5"><!----></div>
          <div class="card-footer p-3 p-md-4">
            <button
              @click="previousQuestion"
              class="theme-btn btn-item back btn btn-transparent-kpi my-sm-0 px-4 py-1-5 text-size-16 rounded-pill border-color-light"
            >
              Back
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style></style>
<style lang="css">
.apply_form_design .card {
  box-shadow: 0 0.1rem 0.4rem rgb(0 0 0 / 15%);
}
@media (min-width: 768px) {
  .mt-md-5 {
    margin-top: 3rem !important;
  }
}

@media (min-width: 768px) {
  .p-md-5 {
    padding: 3rem !important;
  }

  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
}
button,
input,
optgroup,
select,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
.apply_form_design .radio-group .icon-btn {
  height: 200px;
  width: 200px;
  border-radius: 30% !important;
  border: 1px solid #d8d0ce;
  padding: 15px;
  cursor: pointer;
}
.icon-btn[_ngcontent-serverApp-c48] span[_ngcontent-serverApp-c48] {
  display: flex;
  flex-wrap: wrap;
}
.apply_form_design .radio-group .icon-btn span {
  display: flex;
  flex-wrap: wrap;
}
.apply_form_design .radio-group .step-label-bg {
  height: 170px;
  border-radius: 30% !important;
  width: 170px;
  background: linear-gradient(#fdfdfd, #d8d0ce);
  position: relative;
  box-shadow: 1px 0 7px #989393;
  padding: 2px;
  cursor: pointer;
}
.apply_form_design .radio-group .step-label-bg:hover {
  background: linear-gradient(90deg, #fdfdfd, #d8d0ce);
  transition: 0.1s linear;
}
</style>
