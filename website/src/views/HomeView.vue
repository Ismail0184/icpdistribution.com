<template>
  <div class="homes">
    <BannerView/>
    <AboutAreaView/>
    <BlogAreaView/>
  </div>
</template>

<script>
import BannerView from "@/components/home/BannerView";
import AboutAreaView from "@/components/home/AboutAreaView";
import BlogAreaView from "@/components/home/BlogAreaView";
export default {
  components: {BlogAreaView, AboutAreaView, BannerView}
}
</script>
