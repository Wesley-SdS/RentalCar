
<template>
<section class=" flex flex-col items-center justify-center h-screen ">
  <h1 class="text-2xl text-slate-900">Entre em sua Conta</h1>
  <form class=" space-y-10 w-[50%] max-w-[600px] " method="POST" @submit.prevent="login">
        <div v-if="errorMsg" class="flex items-center justify-between py-3 px-5 bg-red-500 text-white rounded">
          {{ errorMsg }}
          <span
            @click="errorMsg = ''"
            class="w-8 h-8 flex items-center justify-center rounded-full transition-colors cursor-pointer hover:bg-[rgba(0,0,0,0.2)]"
          >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </span>
        </div>
        <input type="hidden" name="remember" value="true"/>
        <div class="rounded-md shadow-sm space-y-6">
          <div>
            <label for="email-address" class="text-indigo-600 ">Digite o seu Email</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required="" v-model="user.email"
                   class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                   placeholder="Email"/>
          </div>
          <div>
            <label for="password" class="text-indigo-600">Digite a sua Senha</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required=""
                   v-model="user.password"
                   class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                   placeholder="Senha"/>
          </div>
        </div>
  
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox" v-model="user.remember"
                   class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"/>
            <label for="remember-me" class="ml-2 block text-sm text-indigo-600"> Lembrar </label>
          </div>
  
          <div class="text-sm">
            <router-link :to="{name: 'requestPassword'}" class="font-medium text-indigo-600 hover:text-indigo-500"> Esqueceu a sua Senha?
            </router-link>
          </div>
        </div>
  
        <div>
          <button type="submit"
                  :disabled="loading"
                  class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                  :class="{
                    'cursor-not-allowed': loading,
                    'hover:bg-indigo-500': loading,
                  }">
            <svg
              v-if="loading"
              class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"
              ></circle>
              <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
              ></path>
            </svg>
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
               
              </span>
            Entrar
          </button>
        </div>
      </form>
   

</section>
</template>

<script setup>
// Importe as dependências necessárias
import { ref } from 'vue';
import store from "../../../../../backend/src/store";
import axiosClient from "../../../../../backend/src/axios";
import router from '../router';



let loading = ref(false);
let errorMsg = ref("");

const user = {
  email: '',
  password: '',
  remember: false
}

async function login() {
  loading.value = true;
  try {
    await store.dispatch('login', user);
    loading.value = false;
    const userInfo = await axiosClient.get('/user'); // Assuming the API endpoint to get user info is /user
    const userName = userInfo.data.name; // Adjust this according to the actual response structure
    alert(`Welcome, ${userName}!`);
    router.push({ name: 'profile' }); 
  } catch (error) {
    loading.value = false;
    errorMsg.value = error.response.data.message;
  }
}
</script>