<template>
  <div class="vision-section">
    <div class="team-area default-padding bg-gray bottom-less">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="site-heading text-center">
              <h2>VISION</h2>
            </div>
          </div>
        </div>
        <div class="team-items">
          <div class="row">
            <div class="single-item col-md-12 col-sm-6">
              <div class="col-md-6">
                <img :src="visionSection.image" style="height: 500px; width: 100%" alt="Thumb">
              </div>
              <div class="col-md-6">
                <p v-html="visionSection.description"></p>
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
  name: "VisionSectionView",
  data() {
    return {
      visionSection : '',
    }
  },
  created() {
    axios.get("http://admin.icpdistribution.com/api/website/vision").then(response => {
      this.visionSection = response.data;
    })
  }
}
</script>

<style scoped>

</style>