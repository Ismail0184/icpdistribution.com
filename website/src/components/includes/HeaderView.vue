<template>
  <div class="header">
    <div class="se-pre-con"></div>

    <div class="top-bar-area bg-dark text-light">
      <div class="container">
        <div class="row">
          <div class="col-md-8 address-info text-left">
            <div class="info box">
              <ul>
                <li>
                  <div class="icon">
                    <i class="flaticon-email"></i>
                  </div>
                  <div class="info">
                    <span>Email</span> {{contact.email}}
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="flaticon-call-center"></i>
                  </div>
                  <div class="info">
                    <span>Phone</span> {{contact.mobile}}
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="flaticon-countdown"></i>
                  </div>
                  <div class="info">
                    <span>Office Hours</span> Sat - Thu : 10:00 am - 6:30 pm
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 social text-right">
            <ul>
              <li><a :href="socialMedia.facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a :href="socialMedia.twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li><a :href="socialMedia.linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a :href="socialMedia.youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Top -->
    <!-- Header
    ============================================= -->
    <header id="home">

      <!-- Start Navigation -->
      <nav class="navbar navbar-default attr-border active-border small-pad navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
          <div class="container">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
          </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

          <!-- Start Atribute Navigation -->
          <div class="attr-nav">
            <ul>
              <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
              <li class="side-menu"><a href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
          </div>
          <!-- End Atribute Navigation -->

          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars"></i>
            </button>
            <router-link class="navbar-brand" to="/">
              <img src="/assets/img/logo.png" class="logo" alt="Logo">
            </router-link>
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
              <li><router-link to="/" class="active">Home</router-link></li>

              <li class="dropdown"><router-link to="/about">About Us</router-link></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Products</a>
                <ul class="dropdown-menu">

                  <li class="dropdown" v-for="(category, key) in categories" :key="key">
                    <router-link :to="{name:'category',params:{'id':category.id}}" class="dropdown-toggle" data-toggle="dropdown">{{category.name}}</router-link>
                    <ul class="dropdown-menu">
                      <li v-for="(sub_category, key1) in category.sub_category" :key="key1"><router-link :to="{name:'sub-category',params:{'id':sub_category.id}}">{{sub_category.name}}</router-link></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Business Partners</a>
                <ul class="dropdown-menu">
                  <li v-for="(businessPartner,key) in businessPartners" :key="key"><router-link :to="{name:'businessPartner',params:{'id':businessPartner.id}}">{{businessPartner.partner_name}}</router-link></li>
                </ul>
              </li>
              <li><router-link to="/gallery">Gallery</router-link></li>
              <li><router-link to="/careers">Careers</router-link></li>
              <li><router-link to="/contact">Contact</router-link></li>
              <li><a href="http://ecommerce.icpdistribution.com/" target="_blank">Buy Products</a></li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
          <a href="#" class="close-side"><i class="fas fa-times"></i></a>
          <div class="widget">
            <img src="/assets/img/logo.png" alt="Logo">
            <p>
              ICP Distribution Company is the pioneer and largest Distributor of Global Manufacturing Companies such as - Robert BOSCH (bangladesh) Limited, Believe Pte Ltd and more.            </p>
          </div>
          <div class="widget contact address">
            <div>
              <ul>
                <li>
                  <div class="content"><p>ADDRESS</p><strong>Plot-43, Alam Arcade (4th Floor), Gulshan-2, Dhaka; PS; Dhaka-1212; Bangladesh.</strong></div>
                </li>
                <li>
                  <div class="content"><p>EMAIL</p><strong>info@icpbd.com</strong></div>
                </li>
                <li>
                  <div class="content"><p>PHONE</p><strong><span>+88 01952 244000 <br>+880 2-9860176</span></strong></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget contact newsletter">
            <h4 class="title">Get Subscribed!</h4>
            <form action="#">
              <div class="input-group stylish-input-group">
                <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                <span class="input-group-addon">
                                <button type="submit">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </button>
                            </span>
              </div>
            </form>
          </div>
          <div class="widget social">
            <ul class="link">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="#"><i class="fab fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End Side Menu -->

      </nav>
      <!-- End Navigation -->

    </header>
  </div>
</template>

<script>
import axios from "axios"
export default {
  name: "HeaderView",
  data() {
    return {
      categories : [],
      businessPartners : [],
      contact : '',
      socialMedia : '',
    }
  },
  created() {
    axios.get("http://admin.icpdistribution.com/api/all-category").then(response => {
      this.categories = response.data
    });
    axios.get("http://admin.icpdistribution.com/api/website/business-partner").then(getBusinessPartber => {
      this.businessPartners = getBusinessPartber.data
    });
    axios.get("http://admin.icpdistribution.com/api/contact").then(contactResponse => {
      this.contact = contactResponse.data
    });
    axios.get("http://admin.icpdistribution.com/api/social-media").then(socialMediaData => {
      this.socialMedia = socialMediaData.data
    });
  }
}
</script>

<style>

</style>