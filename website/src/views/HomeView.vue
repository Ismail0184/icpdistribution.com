<template>
  <div class="homes">
    <BannerView/>
    <AboutAreaView/>
    <div class="services-area icon-only default-padding-bottom bottom-less">

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="site-heading text-center">
              <h4>What we do</h4>
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="services-items">
          <div class="row">
            <!-- Fixed Shape -->
            <div class="fixed-shape">
              <img src="assets/img/shape-8.png" alt="Shape">
            </div>
            <!-- End Fixed Shape -->
            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
              <div class="item">
                <div class="info">
                  <i class="flaticon-research"></i>
                  <h4>Business Strategy</h4>
                  <p>
                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                  </p>
                  <a href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
              <div class="item">
                <div class="info">
                  <i class="flaticon-meeting"></i>
                  <h4>Resource Allocation</h4>
                  <p>
                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                  </p>
                  <a href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
              <div class="item">
                <div class="info">
                  <i class="flaticon-money-1"></i>
                  <h4>Capital Markets</h4>
                  <p>
                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                  </p>
                  <a href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
              <div class="item">
                <div class="info">
                  <i class="flaticon-result"></i>
                  <h4>Market Research</h4>
                  <p>
                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                  </p>
                  <a href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
              <div class="item">
                <div class="info">
                  <i class="flaticon-money"></i>
                  <h4>Saving & Investments</h4>
                  <p>
                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                  </p>
                  <a href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
              <div class="item">
                <div class="info">
                  <i class="flaticon-scalable"></i>
                  <h4>Financial Planning</h4>
                  <p>
                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                  </p>
                  <a href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
          </div>
        </div>
      </div>
    </div>
    <BlogAreaView/>
  </div>
</template>

<script>
import BannerView from "@/components/home/BannerView";
import AboutAreaView from "@/components/home/AboutAreaView";
import BlogAreaView from "@/components/home/BlogAreaView";
export default {
  components: {BlogAreaView, AboutAreaView, BannerView}
}
</script>
