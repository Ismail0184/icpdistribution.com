<template>
  <div class="heroarea">
    <section class="hero-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12 custom-padding-right">
            <div class="slider-head">
              <div class="hero-slider">
                <div class="single-slider" style="background-image: url(/assets/images/hero/slider-bg1.jpg);" >
                  <div class="content">
                    <h2><span></span></h2>
                    <p></p>
                    <h3><span></span></h3>
                    <div class="button">
                      <!--router-link to="/category-product" class="btn">Shop Now</router-link-->
                    </div>
                  </div>
                </div>
                <div class="single-slider" style="background-image: url(/assets/images/hero/slider-bg2.png);">
                  <div class="content">
                    <h2><span></span>
                    </h2>
                    <p></p>
                    <h3></h3>
                    <div class="button">
                      <a href="product-grids.html" class="btn"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="row">
              <div class="col-lg-12 col-md-6 col-12 md-custom-padding">

                <div class="hero-small-banner" style="background-image: url('/assets/images/hero/slider-bnr.jpg');">
                  <div class="content">
                    <h2>
                      <span>New line required</span>
                      iPhone 12 Pro Max
                    </h2>
                    <h3>$259.99</h3>
                  </div>
                </div>

              </div>
              <div class="col-lg-12 col-md-6 col-12">

                <div class="hero-small-banner style2">
                  <div class="content">
                    <h2>Weekly Sale!</h2>
                    <p>Saving up to 50% off all online store items this week.</p>
                    <div class="button">
                      <a class="btn" href="product-grids.html">Shop Now</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import {tns} from 'tiny-slider/src/tiny-slider';
import axios from "axios";
export default {
  name: "HeroAreaView",
  mounted() {
    tns({
      container: '.hero-slider',
      slideBy: 'page',
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      gutter: 0,
      items: 1,
      nav:false,
      controls:true,
      controlsText:['<i class="lni lni-chevron-left"></i>','<i class="lni lni-chevron-right"></i>']
    })
  },
  data(){
    return{
      carousels : [],
    }
  },
  created() {
    axios.get('http://admin.icpdistribution.com/api/carousel-ecommerce').then(response => {
      this.carousels = response.data
    })
  }
}
</script>

<style scoped>

</style>