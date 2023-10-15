<template>
  <div class="trending-product">
    <section class="trending-product section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Trending Product</h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12" v-for="(product,key) in TrendingProducts" :key="key">
            <div class="single-product">
              <div class="product-image">
                <img :src="product.image" alt="#" height="335" width="337">
                <!--span class="sale-tag">-25%</span-->
                <div class="button">
                  <router-link :to="{name:'product',params:{'id':product.id}}" class="btn"><i class="lni lni-cart"></i> Add to Cart</router-link>
                </div>
              </div>
              <div class="product-info">
                <span class="category">{{product.category.name}}</span>
                <h4 class="title">
                  <router-link :to="{name:'product',params:{'id':product.id}}">{{product.name}}</router-link>
                </h4>
                <ul class="review">
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><span>5.0 Review(s)</span></li>
                </ul>
                <div class="price">
                  <span>BDT {{product.selling_price}}</span>
                  <span class="discount-price">BDT {{product.regular_price}}</span>
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
import axios from "axios";
export default {
  name: "TrendingProductView",
  data() {
    return{
      TrendingProducts : []
    }
  },
  created() {
    axios.get('http://admin.icpdistribution.com/api/trending-products').then( response => {
      this.TrendingProducts = response.data
    })
  }
};
</script>
<style scoped>

</style>