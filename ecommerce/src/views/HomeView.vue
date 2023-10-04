<template>
  <div class="home">
    <HeroAreaView/>
    <FeaturedCategoriesView/>
    <TrendingProductView/>
    <BannerSection/>
    <SpecialOfferView/>
    <HomeProductListView/>
    <BrandsView/>
    <ShippingInfoView/>
  </div>
</template>

<script>
import HeroAreaView from "@/components/home/HeroAreaView";
import FeaturedCategoriesView from "@/components/home/FeaturedCategoriesView";
import TrendingProductView from "@/components/home/TrendingProductView";
import BannerSection from "@/components/home/BannerSection";
import SpecialOfferView from "@/components/home/SpecialOfferView";
import HomeProductListView from "@/components/home/HomeProductListView";
import ShippingInfoView from "@/components/home/ShippingInfoView";
export default {
  components: {
    ShippingInfoView,
    HomeProductListView,
    SpecialOfferView, BannerSection, TrendingProductView, FeaturedCategoriesView, HeroAreaView},
  created() {
    document.title = "Home Page"
  }
}
</script>
