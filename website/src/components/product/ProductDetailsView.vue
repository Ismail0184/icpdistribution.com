<template>
  <div>
    <div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url(/assets/img/banner/8.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1>{{product.name}}</h1>
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
              <li class="active">Products Details</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="services-single-area default-padding">
      <div class="container">
        <div class="row">
          <div class="services-info col-md-8">
            <div class="thumb">
              <img :src="product.image" alt="Thumb">
            </div>
            <div class="info">
              <h2>{{product.name}}</h2>
              <p>{{product.short_description}}</p>
              <p v-html="product.long_description"></p>
            </div>


          </div>
          <div class="sidebar col-md-4">
            <!-- Single Item -->
            <div class="sidebar-item link">
              <div class="title">
                <h4>Categories</h4>
              </div>
              <ul>
                <li v-for="(category,key) in categories" :key="key"><router-link :to="{name:'category',params:{'id':category.id}}">{{category.name}}</router-link></li>
              </ul>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="sidebar-item contact address" style="background-image: url('/assets/img/about/2.jpg');">
              <div class="title">
                <h4>Need Help?</h4>
              </div>
              <ul>
                <li v-html="contact.location"></li>
                <li v-html="contact.mobile "></li>
                <li v-html="contact.email"></li>
              </ul>
            </div>
            <!-- End Single Item -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "ProductDetailsView",
  data(){
    return {
      id : this.$route.params.id,
      product : [],
      contact : '',
      categories : [],
    }
  },
  created() {
    axios.get('http://admin.icpdistribution.com/api/product-details/'+this.id).then(response =>{
      this.product = response.data;
    })
    axios.get("http://admin.icpdistribution.com/api/contact").then(contactResponse => {
      this.contact = contactResponse.data
    });
    axios.get("http://admin.icpdistribution.com/api/all-category").then(response => {
      this.categories = response.data
    });
  }
}
</script>

<style scoped>

</style>