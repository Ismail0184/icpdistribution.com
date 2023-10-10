<template>
  <div class="about">
    <AboutPageTitleView/>

    <div class="breadcrumb-area bg-gray text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <ul class="breadcrumb">
              <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">About</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <AboutAreaOfAboutPage/>
    <VisionSectionView/>


    <div class="services-area carousel-shadow default-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="site-heading text-center">
              <h2>MISSION</h2>
            </div>
          </div>
        </div>
        <div class="team-items">
          <div class="row">
            <div class="single-item col-md-12 col-sm-6">
              <div class="col-md-6">
                <p>
                  At ABC Distribution Company, our mission is to provide seamless and reliable distribution services that empower businesses to thrive, connect consumers to the products they need, and contribute positively to the communities we serve. Our commitment to this mission is reflected in our core values:
                  <br><br>
                  <strong>1. Customer-Centricity::</strong><br>
                  We exist to serve our customers. Our mission is to understand their unique needs and provide tailored distribution solutions that exceed their expectations. We are dedicated to building lasting relationships based on trust, integrity, and a relentless focus on customer satisfaction.

                  <br><br><strong>2. Efficiency and Precision::</strong><br>
                  We strive for operational excellence. Our mission is to optimize distribution processes, reduce waste, and enhance efficiency at every stage. We aim to deliver products accurately and on time, ensuring the smooth flow of goods from suppliers to end-users.

                </p>
              </div>
              <div class="col-md-6">
                <img src="/assets/img/about/6.jpg" style="height: 500px; width: 100%" alt="Thumb">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import AboutPageTitleView from "@/components/about/AboutPageTitleView";
import AboutAreaOfAboutPage from "@/components/about/AboutAreaOfAboutPage";
import VisionSectionView from "@/components/about/VisionSectionView";
export default {
  components: {VisionSectionView, AboutAreaOfAboutPage, AboutPageTitleView}
}
</script>