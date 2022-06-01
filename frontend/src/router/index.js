import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import(/* webpackChunkName: "MainView" */ '@/views/MainView.vue')
    },
    {
      path: '/auth',
      name: 'auth',
      component: () => import(/* webpackChunkName: "AuthView" */ '@/views/AuthView.vue')
    },
    {
      path: '/catalog',
      name: 'catalog',
      component: () => import(/* webpackChunkName: "CatalogView" */ '@/views/CatalogView.vue')
    },
    {
      path: '/profile',
      name: 'profile',
      component: () => import(/* webpackChunkName: "ProfileView" */ '@/views/ProfileView.vue')
    },
    {
      path: '/catalog/:id',
      name: 'offer',
      component: () => import(/* webpackChunkName: "OfferView" */ '@/views/OfferView.vue')
    },
  ]
})

export default router
