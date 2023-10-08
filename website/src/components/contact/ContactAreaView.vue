<template>
  <div class="contact-area">
    <div class="contact-area default-padding-top bottom-half">
      <div class="container">
        <div class="contact-items">
          <div class="row">
            <div class="col-md-6 address">
              <div class="address-items text-center text-light" style="background-image: url(/assets/img/banner/13.jpg);">
                <ul class="info">
                  <li>
                    <div class="icon"><i class="flaticon-location"></i></div>
                    <h4>Office Location</h4>
                    <span v-html="contact.location"></span>
                  </li>
                  <li>
                    <div class="icon"><i class="flaticon-call-center"></i></div>
                    <h4>Phone</h4>
                    <span v-html="contact.phone"></span>
                  </li>
                  <li>
                    <div class="icon"><i class="flaticon-email"></i> </div>
                    <h4>Email</h4>
                    <span v-html="contact.email"></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 form-box">
              <h2>{{contact.headline}}</h2>
              <p v-html="contact.description"></p>
              <form action="#" method="POST" class="contact-form">
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group">
                      <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                      <span class="alert-error"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                      <span class="alert-error"></span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                      <span class="alert-error"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group comments">
                      <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <button type="submit" name="submit" id="submit">
                      Send Message <i class="fa fa-paper-plane"></i>
                    </button>
                  </div>
                </div>
                <!-- Alert Message -->
                <div class="col-md-12 alert-notification">
                  <div id="message" class="alert-msg"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "ContactAreaView",
  data() {
    return {
      contact : '',
    }
  },
  created() {
    axios.get("http://127.0.0.1:8000/api/contact").then(response => {
      this.contact = response.data;
      console.log(response.data)
    })
  }
}
</script>

<style scoped>

</style>