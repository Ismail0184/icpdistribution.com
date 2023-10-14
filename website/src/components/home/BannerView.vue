<template>
  <div class="banner" style="height: 700px">
    <div class="banner-area text-center">
      <div id="bootcarousel" class="carousel text-medium slide carousel-fade animate_text" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner text-light carousel-zoom">
          <div class="item active" v-for="(carouselac,key) in carouselsActive" :key="key">
            <div class="slider-thumb bg-cover" style="background-image: url(/assets/img/banner/3.jpg);"></div>
            <div class="box-table shadow dark">
              <div class="box-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="content">
                        <h2 data-animation="animated slideInDown" v-html="carouselac.headline"></h2>
                        <p data-animation="animated slideInLeft">
                          Arrived Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                        </p>
                        <a data-animation="animated slideInUp" class="btn circle btn-light border btn-md" href="#">Our Services</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item" v-for="(carousel,key) in carousels" :key="key">
            <div class="slider-thumb bg-cover" style="background-image: url(/assets/img/banner/3.jpg);"></div>
            <div class="box-table shadow dark">
              <div class="box-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="content">
                        <h2 data-animation="animated slideInDown" v-html="carousel.headline"></h2>
                        <p data-animation="animated slideInLeft">
                          {{carousel.details}}
                        </p>
                        <a data-animation="animated slideInUp" class="btn circle btn-light border btn-md" href="#">Our Services</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
          <i class="fa fa-angle-left"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootcarousel" data-slide="next">
          <i class="fa fa-angle-right"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "BannerView",
  data() {
    return {
      carouselsActive : '',
      carousels : '',

    }
  },
  created() {
    axios.get('http://admin.icpdistribution.com/api/carousel').then(response => {
      this.carousels = response.data
    })
    axios.get('http://admin.icpdistribution.com/api/carousel-active').then(response => {
      this.carouselsActive = response.data
    })
  }
}
</script>

<style scoped>

</style>