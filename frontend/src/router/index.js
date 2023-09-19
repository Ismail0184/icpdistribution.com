import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/',
    name: 'home',
    component: () => import(/* webpackChunkName: "home" */ '../views/HomeView.vue')
  },
  {
    path: '/about',
    name: 'about',
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path: '/contact',
    name: 'contact',
    component: () => import(/* webpackChunkName: "contact" */ '../views/ContactUsView.vue')
  },
  {
    path: '/careers',
    name: 'careers',
    component: () => import(/* webpackChunkName: "careers" */ '../views/CareersView.vue')
  }
  ,
  {
    path: '/media',
    name: 'media',
    component: () => import(/* webpackChunkName: "media" */ '../views/MediaView.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
