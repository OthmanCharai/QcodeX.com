<script setup>


</script>

<template>
  <!-- Footer -->
  <footer
    class="main-footer"
    style="background-image: url(./../../images/background/pattern-11.png)"
  >
    <div class="auto-container">
      <!-- Widgets Section -->
      <div class="widgets-section">
        <div class="row clearfix">
          <!-- Big Column -->
          <div class="big-column col-lg-10 col-md-12 col-sm-12">
            <div class="row clearfix">
              <!-- Footer Column -->
              <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                <div class="footer-widget logo-widget">
                  <div class="logo">
                    <nuxt-link to="/" 
                      ><img style="width:170px;height:60px;background-size:contain;" src="./../../images/logo.jpeg" alt=""
                    /></nuxt-link>
                  </div>
                  <div class="text">
                    We work with a passion of taking challenges and creating new
                    ones in Data sector.
                  </div>
                  <nuxt-link href="#" class="theme-btn about-btn" style="border-radius: 10px;">Contact Us</nuxt-link>
                </div>
              </div>

              <!-- Footer Column -->
              <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                <div class="footer-widget newsletter-widget">
                  <h4>Newsletter</h4>
                  <div class="text">
                    Subscribe our newsletter to get our latest update & news
                  </div>

                  <!-- Email Box -->
                  <div class="email-box">
                    <form method="post" action="/contact">
                      <div class="form-group">
                        <input
                          type="email"
                          name="search-field"
                          value=""
                          placeholder="Your mail address"
                          required
                        />
                        <button type="submit">
                          <span
                            class="icon fa-solid fa-paper-plane fa-fw"
                          ></span>
                        </button>
                      </div>
                    </form>
                  </div>

                  <!-- Social Box -->
                  <ul class="social-box">
                    <li>
                      <a
                        href="https://www.twitter.com/"
                        class="fa-brands fa-facebook-f fa-fw"
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://www.facebook.com/"
                        class="fa-brands fa-twitter fa-fw"
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://dribbble.com/"
                        class="fa-solid fa-dribbble fa-fw"
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://behance.com/"
                        class="fa-solid fa-behance fa-fw"
                      ></a>
                    </li>
                  </ul>
                  <!-- End Social Box -->
                </div>
              </div>
            </div>
          </div>

          <!-- Big Column -->
          <div class="big-column col-lg-2 col-md-12 col-sm-12">
            <div class="row clearfix">
              <!-- Footer Column -->
              <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                <div class="footer-widget contact-widget">
                  <h4>Official info:</h4>
                  <ul class="contact-list">
                    <li>
                      <span class="icon fa fa-phone"></span>
                      30 Commercial Road <br />
                      USA
                    </li>
                    <li>
                      <span class="icon fa fa-envelope"></span>
                      +1(646)667-9097
                    </li>
                  </ul>
                  <div class="timing">
                    <strong>Open Hours: </strong>
                    Mon - Sat: 8 am - 5 pm, <br />
                    Sunday: CLOSED
                  </div>
                </div>
              </div>

              
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="copyright">
          2023 &copy; All rights reserved by
          <a href="#">Qcodex</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer -->
</template>

<style lang=""></style>
