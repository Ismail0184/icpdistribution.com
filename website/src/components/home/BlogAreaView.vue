<template>
  <div class="blog-area">
    <div class="blog-area default-padding bottom-less">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="site-heading text-center">
              <h2>Latest News</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="blog-items">
            <div class="single-item col-md-4 col-sm-6" v-for="(blog,key) in blogs" :key="key">
              <div class="item">
                <div class="thumb">
                  <router-link to="/"><img :src="blog.image" style="width: 800px; height: 280px" alt="Thumb"></router-link>
                </div>
                <div class="info">
                  <div class="top-meta">
                    <ul>
                      <li><a href="#"><i class="fas fa-user"></i> Admin</a></li>
                      <li><i class="fas fa-calendar-alt"></i>{{blog.created_at}}</li>
                    </ul>
                  </div>
                  <h4>
                    <router-link :to="{name:'blog',params:{'id':blog.id}}">{{blog.headline}}</router-link>
                  </h4>
                  <p>{{blog.description}}</p>
                </div>
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
  name: "BlogAreaView",
  data(){
    return {
      blogs : [],
    }
  },
  created() {
    axios.get('http://127.0.0.1:8000/api/website/blogs').then(response => {
      this.blogs = response.data;
      console.log(response.data)
    })
  }
}
</script>

<style scoped>

</style>