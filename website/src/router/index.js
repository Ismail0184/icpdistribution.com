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
    path: '/gallery',
    name: 'gallery',
    component: () => import(/* webpackChunkName: "gallery" */ '../views/GalleryView.vue')
  },
  {
    path: '/business-partner/:id',
    name: 'businessPartner',
    component: () => import(/* webpackChunkName: "businessPartner" */ '../views/BusinessPartnerView.vue')
  },
  {
    path: '/category-product/:id',
    name: 'category',
    component: () => import(/* webpackChunkName: "category" */ '../views/CategoryView.vue')
  },
  {
    path: '/sub-category-product/:id',
    name: 'sub-category',
    component: () => import(/* webpackChunkName: "category" */ '../views/SubCategoryView.vue')
  },
  {
    path: '/blog/:id',
    name: 'blog',
    component: () => import(/* webpackChunkName: "blog" */ '../views/BlogView.vue')
  },
  {
    path: '/product-details/:id',
    name: 'product',
    component: () => import(/* webpackChunkName: "blog" */ '../views/ProductView.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
})

export default router
