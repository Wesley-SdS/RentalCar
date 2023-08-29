
<template>
 
    
  <main>
  
<CustomHeader />

     <BackToTopBtn />

    <RouterView />
   
  </main>

</template>
<script setup>

import { RouterView } from 'vue-router';
import CustomHeader from './components/CustomHeader.vue'
import BackToTopBtn from "./components/BackToTopBtn.vue";








</script>
