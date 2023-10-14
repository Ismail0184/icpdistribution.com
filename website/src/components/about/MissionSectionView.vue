<template>
  <div class="mission-section">
    <div class="services-area carousel-shadow default-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="site-heading text-center">
              <h2>MISSION</h2>
            </div>
          </div>
        </div>
        <div class="team-items">
          <div class="row">
            <div class="single-item col-md-12 col-sm-6">
              <div class="col-md-6">
                <p v-html="missionSection.description"></p>
              </div>
              <div class="col-md-6">
                <img :src="missionSection.image" style="height: 500px; width: 100%" alt="Thumb">
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
  name: "MissionSectionView",
  data() {
    return {
      missionSection : '',
    }
  },
  created() {
    axios.get("http://admin.icpdistribution.com/api/website/mission").then(response => {
      this.missionSection = response.data;
    })
  }
}
</script>

<style scoped>

</style>