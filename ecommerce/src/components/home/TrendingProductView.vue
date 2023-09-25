<template>
  <div class="trending-product">
    <section class="trending-product section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Trending Product</h2>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form.</p>
            </div>
          </div>
        </div>
        <div class="row">


          <div class="col-lg-3 col-md-6 col-12" v-for="item in items" :key="item.id">

            <div class="single-product">
              <div class="product-image">
                <img src="assets/images/products/product-1.jpg" alt="#">
                <div class="button">
                  <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                </div>
              </div>
              <div class="product-info">
                <span class="category">Watches</span>
                <h4 class="title">
                  <a href="product-grids.html">{{ item.name }}</a>
                </h4>
                <ul class="review">
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star-filled"></i></li>
                  <li><i class="lni lni-star"></i></li>
                  <li><span>4.0 Review(s)</span></li>
                </ul>
                <div class="price">
                  <span>$199.00</span>
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
import axios from 'axios';

export default {
  name: "TrendingProductView",
  data() {
    return {
      items: [],
    };
  },
  created() {
    axios
        .get('http://127.0.0.1:8000/api/all-category') // Replace with your API endpoint
        .then((response) => {
          this.items = response.data;
        })
        .catch((error) => {
          console.error('Error fetching data:', error);
        });
  },
};
</script>
<style scoped>

</style>