<template>
  <div class="category-view">
    <CategoryPageTitle/>
    <section class="product-grids section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12">
            <CategoryLeftSection/>
          </div>
          <div class="col-lg-9 col-12">
            <CategoryRightSection/>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import CategoryPageTitle from "@/components/category/CategoryPageTitle";
import CategoryLeftSection from "@/components/category/CategoryLeftSection";
import CategoryRightSection from "@/components/category/CategoryRightSection";

export default {
  name: "CategoryView",
  components: {CategoryRightSection, CategoryLeftSection, CategoryPageTitle},
  created() {
    document.title = "Category Wise Product";

  }
}
</script>

<style scoped>

</style>