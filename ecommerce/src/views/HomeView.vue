<template>
  <div class="home">
    <HeroAreaView/>
    <FeaturedCategoriesView/>
    <TrendingProductView/>
    <BannerSection/>
    <SpecialOfferView/>
    <HomeProductListView/>
    <BrandsView/>
    <BlogSectionView/>
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
import BrandsView from "@/components/home/BrandsView";
import BlogSectionView from "@/components/home/BlogSectionView";
import ShippingInfoView from "@/components/home/ShippingInfoView";
export default {
  components: {
    ShippingInfoView,
    BlogSectionView,
    BrandsView,
    HomeProductListView,
    SpecialOfferView, BannerSection, TrendingProductView, FeaturedCategoriesView, HeroAreaView},
  created() {
    document.title = "Home Page"
  }
}
</script>
