<template>
      <div
        class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8"
    >
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img
                class="mx-auto h-48 w-auto"
                src="/images/Logo.png"
                alt="LocaAi"
            />
            <h2
                class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900"
            >
                {{ title }}
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            
      <slot></slot>

            <p class="mt-10 text-center text-sm text-gray-500">
                Não tem cadastro?
                {{ " " }}
                <a
                    href="./Dashboard.vue"
                    class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"
                    >Crie a sua conta agora mesmo!</a
                >
            </p>
        </div>
    </div>
  </template>
  
  <script setup>

    const {title} = defineProps({
      title: String
    })
  </script>
  
  <style scoped>
  
  </style>