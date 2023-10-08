<template>
  <div class="contactus">
    <!-- Start Page Title
   ============================================= -->
    <div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/20.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1>Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title -->

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <ul class="breadcrumb">
              <li><router-link :to="{name:'home'}"><i class="fas fa-home"></i> Home</router-link></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
    ============================================= -->
    <ContactAreaView/>
    <!-- End Contact Area -->

    <!-- Star Google Maps
    ============================================= -->
    <div class="maps-area">
      <div class="container-full">
        <div class="row">
          <MapAreaView/>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ContactAreaView from "@/components/contact/ContactAreaView";
import MapAreaView from "@/components/contact/MapAreaView";
export default {
  name: "ContactUsView",
  components: {MapAreaView, ContactAreaView}
}
</script>

<style scoped>

</style>