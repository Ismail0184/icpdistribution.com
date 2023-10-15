<template>
  <div class="about">
    <div class="about-area solid default-padding">
      <div class="container">
        <div class="about-items">
          <div class="row item-flex center">
            <div class="col-md-6 thumb-box">
              <div class="thumb">
                <img src="assets/img/about/4.jpg" alt="Thumb">
                <img src="assets/img/about/5.jpg" alt="Thumb">
              </div>
            </div>
            <div class="col-md-6 info">
              <h2>{{aboutus.section_name}}</h2>
              <div v-html="aboutus.description"></div>
              <router-link :to="{name:'about'}" class="btn circle btn-theme effect btn-md" href="#">Discover More</router-link>
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
  name: "AboutAreaView",
  data(){
    return{
      aboutus : '',
    }
  },
  created() {
    axios.get('http://admin.icpdistribution.com/api/website/who-we-are').then(response => {
      this.aboutus = response.data
    })
  }
}
</script>

<style scoped>

</style>