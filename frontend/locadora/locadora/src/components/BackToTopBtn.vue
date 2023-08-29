<template>
    <button @click="scrollToTop" class="fixed bottom-5 right-5 p-4 bg-green-500 text-white border-none rounded-lg transform">
      Voltar ao Topo
    </button>
  </template>
  
  <script>
  export default {
    methods: {
      scrollToTop() {
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      },
    },
  };
  </script>
  
  <style scoped>
  .back-to-top-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    padding: 10px 15px;
    background-color: #ed1d24;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  </style>
  