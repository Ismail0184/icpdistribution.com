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

    <div class="team-area default-padding bg-gray bottom-less">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="site-heading text-center">
              <h2>VISION</h2>
            </div>
          </div>
        </div>
        <div class="team-items">
          <div class="row">
            <div class="single-item col-md-12 col-sm-6">
                <div class="col-md-6">
                  <img src="/assets/img/about/6.jpg" style="height: 500px; width: 100%" alt="Thumb">
                </div>
                <div class="col-md-6">
                  <p>
                    At ICP Distribution Company, our vision is to be the foremost and most trusted distribution partner, delivering excellence in every aspect of our operations. We aspire to set the industry standard for innovation, reliability, and customer-centricity, while contributing to the growth and success of our partners and communities.
                    <br><br>
                    <strong>1. Customer-Centric Excellence:</strong><br>
                    We envision a future where every interaction with ICP Distribution Company is marked by exceptional customer service. We are committed to understanding and exceeding the unique needs of our customers, ensuring their satisfaction and success. Our goal is to build lasting relationships founded on trust, transparency, and reliability.

                    <br><br><strong>2. Global Reach, Local Touch:</strong><br>
                    We see ourselves as a global distribution powerhouse with a local touch. Our expansive reach allows us to serve clients across borders, while our localized knowledge ensures we adapt to the unique needs and cultures of the regions we operate in. We envision a world where our distribution network spans continents while maintaining the personal touch of a neighborhood business.
                  </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
export default {
  components: {AboutAreaOfAboutPage, AboutPageTitleView}
}
</script>