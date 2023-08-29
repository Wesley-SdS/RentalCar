<template>
    <div>

      <HeroBanner />
      <ImageView/>
      <CarsList/>
  

      <div>
     
      </div>
    </div>
  </template>
  
  <script>
  import HeroBanner from "@/components/HeroBanner.vue";
  import CarsList from "@/components/CarsList.vue"; 
import ImageView from "../components/ImageView.vue";
  
  export default {
    components: {
    HeroBanner,
    CarsList,
    ImageView
},
  };
  </script>
  