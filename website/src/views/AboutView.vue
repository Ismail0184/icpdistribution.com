<template>
  <div class="about">
    <AboutPageTitleView/>

    <div class="breadcrumb-area bg-gray text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <ul class="breadcrumb">
              <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">About</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <AboutAreaOfAboutPage/>
    <VisionSectionView/>
    <MissionSectionView/>
  </div>
</template>
<script>
import AboutPageTitleView from "@/components/about/AboutPageTitleView";
import AboutAreaOfAboutPage from "@/components/about/AboutAreaOfAboutPage";
import VisionSectionView from "@/components/about/VisionSectionView";
import MissionSectionView from "@/components/about/MissionSectionView";
export default {
  components: {MissionSectionView, VisionSectionView, AboutAreaOfAboutPage, AboutPageTitleView}
}
</script>