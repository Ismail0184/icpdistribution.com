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
                          <h4><router-link :to="{name:'product',params:{'id':product.id}}">{{product.category.name}}</router-link></h4>
                          <p>{{product.name}}</p>
                        </div>
                        <div class="right">
                          <router-link :to="{name:'product',params:{'id':product.id}}" class="item popup-link"><i class="fa fa-plus"></i></router-link>
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
  name: "CategoryProductView",
  data() {
    return {
      id : this.$route.params.id,
      products : []
    }
  },
  created() {
    axios.get('http://admin.icpdistribution.com/api/all-category-product/'+this.id).then(response =>{
      this.products = response.data;
    })
  }
}
</script>

<style scoped>

</style>