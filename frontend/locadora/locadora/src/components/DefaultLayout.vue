<script setup>
import { RouterView } from 'vue-router';
import CustomHeader from './components/CustomHeader.vue'
import SobreNos from './components/SobreNos.vue'
import HeroBanner from './components/HeroBanner.vue';
import CarsList from './components/CarsList.vue';

import CustomFooter from "./components/CustomFooter.vue";
import BackToTopBtn from "./components/BackToTopBtn.vue";





import './style.css';
</script>

<template>
 
    
    <main class=" max-w-[1920px] bg-white mx-auto relative overflow-hidden">
     
<CustomHeader />
      <HeroBanner />      
      <SobreNos />
      <CarsList />      
      <CustomFooter/>
      <BackToTopBtn />
      <RouterView />
     
    </main>
 
</template>
