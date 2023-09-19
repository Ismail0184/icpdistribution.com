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
              <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
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
                    <span>Plot-43, Alam Arcade(4th floor)<br>NorthC/A,Gulshan-2<br> Dhaka-1212.; Gulshan PS<br> Dhaka-1212</span>
                  </li>
                  <li>
                    <div class="icon"><i class="flaticon-call-center"></i></div>
                    <h4>Phone</h4>
                    <span>+88 01952244000 <br>+880 2-9860176</span>
                  </li>
                  <li>
                    <div class="icon"><i class="flaticon-email"></i> </div>
                    <h4>Email</h4>
                    <span>info@icpbd.com<br>admin@icpbd.com</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 form-box">
              <h2>Let's lalk about your idea</h2>
              <p>
                Our next drew much you with rank. Tore many held age hold rose than our. She literature sentiments any contrasted. Set aware joy sense young now tears china shy.
              </p>
              <form action="https://validthemes.net/site-template/biness/assets/mail/contact.php" method="POST" class="contact-form">
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
    <!-- End Contact Area -->

    <!-- Star Google Maps
    ============================================= -->
    <div class="maps-area">
      <div class="container-full">
        <div class="row">
          <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ContactUsView"
}
</script>

<style scoped>

</style>