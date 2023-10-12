<template>
  <div class="careers">
    <div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url(/assets/img/careers.jpeg);">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1>Gallery</h1>
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
              <li class="active">Gallery</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <GalleryImageView/>
  </div>
</template>

<script>
import GalleryImageView from "@/components/gallery/GalleryImageView";
export default {
  name: "MediaView",
  components: {GalleryImageView}
}
</script>

<style scoped>

</style>