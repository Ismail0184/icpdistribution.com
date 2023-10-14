<template>
  <div class="portfolio-area">
    <div class="portfolio-area default-padding">
      <div class="container">
        <div class="gallery-items-area">
          <div class="row">
            <div class="col-md-12 gallery-content">
              <div class="row magnific-mix-gallery masonary">
                <div id="portfolio-grid" class="gallery-items col-4">
                  <div class="pf-item development capital" v-for="(product , key) in products" :key="key">
                    <div class="effect-box">
                      <div class="thumb">
                        <img :src="product.image" style="width: 270px; height: 270px" alt="thumb">
                      </div>
                      <div class="info">
                        <div class="left">
                          <h4><a href="#">{{product.category.name}}</a></h4>
                          <p>{{product.name}}</p>
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
  name: "SubCategoryProductView",
  data() {
    return {
      id : this.$route.params.id,
      products : []
    }
  },
  created() {
    axios.get('http://admin.icpdistribution.com/api/all-sub-category-product/'+this.id).then(response =>{
      this.products = response.data;
    })
  }
}
</script>

<style scoped>

</style>