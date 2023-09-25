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
                    <span>Email</span> info@icpbd.com
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="flaticon-call-center"></i>
                  </div>
                  <div class="info">
                    <span>Phone</span> +88 01952 244000
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
              <li><a href="https://www.facebook.com/ICPBDLTD" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
              <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
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
                  <li v-for="(category, key) in categories" :key="key"><a href="services.html">{{category.name}}</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Business Partners</a>
                <ul class="dropdown-menu">
                  <li><a href="https://believe.sg/" target="_blank">Believe Pte. Ltd.</a></li>
                  <li><a href="https://www.bosch.com.bd/bd/en/" target="_blank">Robert Bosch (Bangladesh) Limited</a></li>
                </ul>
              </li>
              <li><router-link to="/media">Media</router-link></li>
              <li><router-link to="/careers">Careers</router-link></li>
              <li><router-link to="/contact">Contact</router-link></li>
              <li><a href="http://192.168.0.25:8081/" target="_blank">Buy Products</a></li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
          <a href="#" class="close-side"><i class="fas fa-times"></i></a>
          <div class="widget">
            <img src="/assets/img/logo.png" alt="Logo">
            <p>
              Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
            </p>
          </div>
          <div class="widget contact address">
            <div>
              <ul>
                <li>
                  <div class="content"><p>ADDRESS</p><strong>California, TX 70240</strong></div>
                </li>
                <li>
                  <div class="content"><p>EMAIL</p><strong>support@validtheme.com</strong></div>
                </li>
                <li>
                  <div class="content"><p>PHONE</p><strong>+44-20-7328-4499</strong></div>
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
    }
  },
  created() {
    axios.get("http://127.0.0.1:8000/api/all-category").then(response => {
      this.categories = response.data
    })
  }
}
</script>

<style>

</style>