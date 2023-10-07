<template>
  <HeaderView/>
  <router-view :key="$route.path"/>
  <FooterView/>
</template>

<style>

</style>
<script>
import HeaderView from "@/components/includes/HeaderView";
import FooterView from "@/components/includes/FooterView";
export default {
  components: {FooterView, HeaderView}
}
</script>