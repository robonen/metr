import { createRouter, createWebHistory } from 'vue-router'
import MainView from '@/views/MainView.vue'
import AuthView from '@/views/AuthView.vue'
import CatalogView from "@/views/CatalogView.vue";
import ProfileView from "@/views/ProfileView.vue";
import OfferView from "@/views/OfferView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: MainView
    },
    {
      path: '/auth',
      name: 'auth',
      component: AuthView
    },
    {
      path: '/catalog',
      name: 'catalog',
      component: CatalogView
    },
    {
      path: '/profile',
      name: 'profile',
      component: ProfileView
    },
    {
      path: '/catalog/:id',
      name: 'offer',
      component: OfferView
    },
  ]
})

export default router
