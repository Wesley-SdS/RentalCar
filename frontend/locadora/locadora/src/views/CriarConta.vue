<template>
  <div class="flex flex-col items-center justify-center h-screen ">
    <h1 class="text-center text-2xl text-indigo-600 my-10"> Crie a sua Conta</h1>
<form @submit="createUser" class="space-y-10 w-[50%] max-w-[600px]">
  <div class="mb-6">
    <label for="email" class="text-indigo-600">Adicione o seu E-mail</label>
    <input type="email" id="email" class="appearance-none rounded-none  block w-full  py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="E-mail" required>
  </div>
  <div class="mb-6">
    <label for="password" class="text-indigo-600 ">Crie uma Senha</label>
    <input type="password" id="password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Senha" required>
  </div>
  <div class="flex items-start mb-6">
    <div class="flex items-center h-5">
      <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
    </div>
    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 ">Lembrar</label>
  </div>
  <button type="submit" class="text-white bg-indigo-600 hover:bg-indigo-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Salvar</button>
</form>
</div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import axiosClient from "../../../../../backend/src/axios";

  
  const email = ref('');
const password = ref('');

async function createUser(event) {
  event.preventDefault();

  try {
    const response = await axiosClient.post('auth/register', {
      email: email.value,
      password: password.value
    });


    console.log('Usuário criado:', response.data);


    email.value = '';
    password.value = '';
  } catch (error) {
    console.error('Erro ao criar usuário:', error);
  }
}
  </script>
  
  <style scoped>

  </style>
  