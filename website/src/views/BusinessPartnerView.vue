<template>
  <div class="careers">
    <div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url(/assets/img/careers.jpeg);">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1>Business Partner</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="breadcrumb-area bg-gray text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <ul class="breadcrumb">
              <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Business Partner</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="services-area text-center carousel-shadow default-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-heading text-center">
              <img :src="bp.logo" height="200" width="200">
              <!--h2>{{bp.partner_name}}</h2--><br>
              <div v-html="bp.description"></div>
            <br>
              <a :href="bp.website" target="_blank">Learn More..</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-medium">
        <div class="row">
          <div class="col-md-12">
            <div class="services-items services-carousel owl-carousel owl-theme">
              <!-- Single Item -->
              <div class="item">
                <div class="icon">
                  <i class="flaticon-analysis"></i>
                </div>
                <h4>Business Strategy</h4>
                <p>
                  Minuter believe service arrived civilly add all. Acuteness allowance an at eagerness favourite in extensive exquisite ye.
                </p>
                <a href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
              <!-- End Single Item -->
              <!-- Single Item -->
              <div class="item">
                <div class="icon">
                  <i class="flaticon-meeting"></i>
                </div>
                <h4>Resource Allocation</h4>
                <p>
                  Minuter believe service arrived civilly add all. Acuteness allowance an at eagerness favourite in extensive exquisite ye.
                </p>
                <a href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
              <!-- End Single Item -->
              <!-- Single Item -->
              <div class="item">
                <div class="icon">
                  <i class="flaticon-money-1"></i>
                </div>
                <h4>Capital Markets</h4>
                <p>
                  Minuter believe service arrived civilly add all. Acuteness allowance an at eagerness favourite in extensive exquisite ye.
                </p>
                <a href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
              <!-- End Single Item -->
              <!-- Single Item -->
              <div class="item">
                <div class="icon">
                  <i class="flaticon-result"></i>
                </div>
                <h4>Business Strategy</h4>
                <p>
                  Minuter believe service arrived civilly add all. Acuteness allowance an at eagerness favourite in extensive exquisite ye.
                </p>
                <a href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
              <!-- End Single Item -->
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
  name: "BusinessPartnerView",
  data(){
    return {
      id : this.$route.params.id,
      bp : '',
    }
  },
  created() {
    axios.get('http://127.0.0.1:8000/api/website/business-partner-single/'+this.id).then(response => {
      this.bp = response.data;
    })
  }
}
</script>

<style scoped>

</style>