<template>
    <div class="carousel-container">
      <vue-carousel :autoplay="true" :autoplayTimeout="3000">
        <slide v-for="(item, index) in carouselItems" :key="index">
          <img :src="item.imageUrl" alt="Carousel Item" />
        </slide>
      </vue-carousel>
    </div>
  </template>
  
  <script>
  import VueCarousel from "vue-carousel";
  
  export default {
    components: {
      VueCarousel,
    },
    data() {
      return {
        carouselItems: [
          { imageUrl: "/images/1.png" },
          { imageUrl: "/images/2.png" },
          { imageUrl: "/images/3.png" },
     
        ],
      };
    },
  };
  </script>
  
  <style>
  .carousel-container {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
  }
  </style>
  