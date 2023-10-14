<template>
  <div class="gallery-items">
    <div class="portfolio-area default-padding">
      <div class="container">
        <div class="gallery-items-area">
          <div class="row">
            <div class="col-md-12 gallery-content">
              <div class="row magnific-mix-gallery masonary">
                <div id="portfolio-grid" class="gallery-items col-4">
                  <div class="pf-item development capital" v-for="(gallery , key) in galleries" :key="key">
                    <div class="effect-box">
                      <div class="thumb">
                        <img :src="gallery.image" style="width: 270px; height: 270px" alt="thumb">
                      </div>
                      <div class="info">
                        <div class="left">
                          <h4><a href="#"></a></h4>
                          <p>{{gallery.image_name}}</p>
                        </div>
                        <div class="right">
                          <a href="/assets/img/portfolio/1.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
  name: "GalleryImageView",
  data() {
    return {
      galleries : [],
    }
  },
  created() {
    axios.get('http://admin.icpdistribution.com/api/website/gallery').then(response => {
      this.galleries = response.data
    })
  }
}
</script>

<style scoped>

</style>