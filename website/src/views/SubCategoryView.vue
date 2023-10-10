<template>
  <div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url(/assets/img/banner/11.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <h1>Sub-Category Products</h1>
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
            <li class="active">Products</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <SubCategoryProductView/>
</template>

<script>
import SubCategoryProductView from "@/components/subCategory/SubCategoryProductView";
export default {
  name: "SubCategoryView",
  components: {SubCategoryProductView}
}
</script>

<style scoped>

</style>