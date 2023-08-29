<template>
  <div class="text-primary px-10 mt-20">
    <h1 class="text-center text-5xl mb-10 text-green-500">RentCar Express</h1>

    <div class="border border-1px solid p-10 mb-10">
 

      <CarsList/>
      <div class="grid grid-cols-6 gap-4">
       
      </div>
    </div>
  </div>
</template>
<script>

  import CarsList from "@/components/CarsList.vue"; 
  
  export default {
    components: {

      CarsList, 
    },
  };
  </script>

