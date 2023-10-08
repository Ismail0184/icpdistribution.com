<template>
  <div class="footer">
    <footer class="bg-dark">
      <div class="container">
        <div class="footer-content default-padding">
          <div class="row">

            <div class="equal-height col-md-4 col-sm-6 item">
              <div class="f-item about">
                <h4 class="widget-title">About</h4>
                <p>
                  <img src="/assets/img/logo.png" class="logo" alt="Logo"> Distribution Company is the pioneer and largest Distributor of Global Manufacturing Companies such as - Robert BOSCH (bangladesh) Limited, Believe Pte Ltd and more.
                </p>
                <ul>
                  <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="equal-height col-md-2 col-sm-6 item">
              <div class="f-item link">
                <h4 class="widget-title">Usefull Links</h4>
                <ul>
                  <li>
                    <a href="#">Classic Business</a>
                  </li>
                  <li>
                    <a href="#">Blog</a>
                  </li>
                  <li>
                    <a href="#">Gallery</a>
                  </li>
                  <li>
                    <router-link to="/about">About Us</router-link>
                  </li>
                  <li>
                    <a href="#">Services</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="equal-height col-md-2 col-sm-6 item">
              <div class="f-item link">
                <h4 class="widget-title">Company</h4>
                <ul>
                  <li>
                    <router-link :to="{name:'home'}">Home</router-link>
                  </li>
                  <li>
                    <router-link :to="{name:'about'}">About Us</router-link>
                  </li>
                  <li>
                    <router-link :to="{name:'contact'}">Contact</router-link>
                  </li>
                  <li>
                    <router-link :to="{name:'gallery'}">Gallery</router-link>
                  </li>
                  <li>
                    <a href="#">Faq</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="equal-height col-md-4 col-sm-6 item">
              <div class="f-item contact address">
                <h4 class="widget-title">Contact Us</h4>
                <ul>
                  <li>
                    <div class="icon"><i class="flaticon-location"></i></div>
                    <span v-html="contact.location"></span>
                  </li>
                  <li>
                    <div class="icon">
                      <i class="flaticon-call-center"></i>
                    </div>
                    <span v-html="contact.phone"></span>
                  </li>
                  <li>
                    <div class="icon"><i class="flaticon-email"></i> </div>
                    <span v-html="contact.email"></span>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- Footer Bottom -->
      <div class="footer-bottom text-light">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <p>Copyright &copy; {{ new Date().getFullYear() }} ICP, All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer Bottom -->
    </footer>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "FooterView",
  data() {
    return {
      contact : '',
      showButton: false,
    }
  },
  created() {
    axios.get("http://127.0.0.1:8000/api/contact").then(response => {
      this.contact = response.data
    })
  },

}
</script>

<style>

</style>