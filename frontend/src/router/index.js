import { createRouter, createWebHistory } from 'vue-router'
import MainView from '@/views/MainView.vue'
import AuthView from '@/views/AuthView.vue'

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
  ]
})

export default router
