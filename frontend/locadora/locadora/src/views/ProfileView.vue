<template>
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
      <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <div class="mb-4 text-center">
          <img :src="profileData.avatar" alt="Profile" class="mx-auto w-24 h-24 rounded-full" />
          <h1 class="text-xl font-semibold mt-2">{{ profileData.name }}</h1>
          <p class="text-gray-600">{{ profileData.position }}</p>
        </div>
        <div class="mb-4">
          <h2 class="text-lg font-semibold mb-2">Informações de Contato</h2>
          <p class="text-gray-600"><strong>Email:</strong> {{ profileData.email }}</p>
          <p class="text-gray-600"><strong>Telefone:</strong> {{ profileData.phone }}</p>
        </div>
        <div>
          <h2 class="text-lg font-semibold mb-2">Sobre Mim</h2>
          <p class="text-gray-600">{{ profileData.about }}</p>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import axiosClient from "../../../../../backend/src/axios";

  
  const profileData = ref({
    name: 'Nome do Usuário',
    email: 'email@example.com',
    position: 'Cargo',
    phone: '(123) 456-7890',
    avatar: 'https://via.placeholder.com/150',
    about: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae gravida ex.'
  });
  
  (async () => {
    try {
      const response = await axiosClient.get('/user'); 
      const userData = response.data;
      profileData.value = {
        name: userData.name,
        email: userData.email,
        position: userData.position,
        phone: userData.phone,
        avatar: userData.avatar,
        about: userData.about
      };
    } catch (error) {
      console.error('Failed to fetch user profile data:', error);
    }
  })();
  </script>
  
  <style scoped>
  
  </style>
  