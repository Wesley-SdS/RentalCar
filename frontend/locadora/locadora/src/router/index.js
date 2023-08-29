import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import UserLogin from '../views/UserLogin.vue';
import RequestPassword from '../views/RequestPassword.vue'
import CriarConta from '../views/CriarConta.vue'
import SobreNos from '../views/SobreNos.vue'
import ContactView from '../views/ContactView.vue'
import VeiculosView from '../views/VeiculosView.vue'


const routes = [
  {
    path: '/', component: HomeView
  },
  {
    path: '/login', component: UserLogin
  },
  {
    path: '/sobrenos', component: SobreNos
  },
  {
    path: '/veiculos', component: VeiculosView
  },
  
  {
    path: '/contact', component: ContactView
  },
  {
    name: 'requestPassword',
    path: '/request-password', 
    component: RequestPassword 

  },
  {
    name: 'criarconta',
    path: '/criar-conta', 
    component: CriarConta

  },
  {
    path: '/profile',
    name: 'profile',
    component: () => import(/* webpackChunkName: "Profile" */ '../views/ProfileView.vue'),
    meta: { requiresAuth: true }
  },
];



const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});
export default router
