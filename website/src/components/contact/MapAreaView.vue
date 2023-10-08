<template>
  <div>
    <div class="google-maps">
      <iframe :src="contact.map" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "MapAreaView",
  data(){
    return{
      contact : '',
    }
  },
  created() {
    axios.get('http://127.0.0.1:8000/api/contact').then(response => {
      this.contact = response.data
    })
  }
}
</script>

<style scoped>

</style>