<template>
  <div class="features">
    <section class="featured-categories section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Featured Categories</h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12" v-for="(category , key) in FeaturedCategories" :key="key">
            <div class="single-category">
              <h3 class="heading">{{category.name}}</h3>
              <ul>
                <li v-for="(sub_category, key1) in category.sub_category" :key="key1"><a href="product-grids.html">{{sub_category.name}}</a></li>
              </ul>
              <div class="images">
                <img :src="category.image" alt="Category Image" height="220" width="200">
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
  name: "FeaturedCategoriesView",
  data() {
    return {
      FeaturedCategories : [],
    }
  },
  created() {
    axios.get("http://admin.icpdistribution.com/api/all-category").then(response => {
      this.FeaturedCategories = response.data,
      console.log(response.data);
    })
  }
}
</script>

<style scoped>

</style>