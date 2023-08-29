<template>
  <div class="container mx-auto">
    <h1 class="text-3xl font-semibold mb-6">Nossos Veículos</h1>
    <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      <div v-for="(vehicle) in vehicles" :key="vehicle.id" class="bg-white p-6 shadow-md rounded-lg">
        <div class="mb-4">
          <img :src="vehicle.image" alt="Vehicle" class="w-full rounded-lg">
        </div>
        <h2 class="text-lg font-semibold">{{ vehicle.title }}</h2>
        <p class="text-sm text-gray-500 mb-2">{{ vehicle.category }}</p>        
        <p class="mb-2">{{ vehicle.description }}</p>
        <div class="flex items-center mt-2">
          <img src="/icons/motor.png" alt="Gasoline Icon" class="h-8 mr-4">
          <img src="/icons/transmissao.png" alt="Ethanol Icon" class="h-6">
          <img src="/icons/bomba-de-gasolina.png" alt="Gasoline Icon" class="h-6 mx-4">
        </div>
        <p v-if="vehicle.available" class="text-green-500 font-semibold">Disponível</p>
        <p v-else class="text-red-500 font-semibold">Indisponível</p>
        
        <p class="text-lg font-bold mt-2">R$ {{ vehicle.rentalPrice.toLocaleString('pt-BR') }} /dia</p>
        
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      vehicles: [
        {
          title: 'Tiggo 7X PRO',
          category: 'SUV',
          description: 'O Tiggo 7X PRO é um SUV moderno e versátil que combina estilo com desempenho excepcional. Experimente o conforto e a potência do Tiggo 7X PRO agora mesmo!',
          image: '/images/carSlider/tiggo7x.jpg',
          available: true,
          rentalPrice: 100
        },
        {
          title: 'Tiggo 5x PRO',
          category: 'SUV',
          description: 'O Tiggo 5X PRO oferece elegância e desempenho em um SUV compacto, com tecnologia avançada e estilo moderno.',
          image: '/images/carSlider/tiggo5x.jpg',
          available: false,
          rentalPrice: 70
        },
        {
          title: 'Tiggo 5x PRO',
          category: 'SUV',
          description: 'O Tiggo 5X PRO oferece elegância e desempenho em um SUV compacto, com tecnologia avançada e estilo moderno.',
          image: '/images/carSlider/tiggo5x.jpg',
          available: false,
          rentalPrice: 70
        },
        {
          title: 'Tiggo 5x PRO',
          category: 'SUV',
          description: 'O Tiggo 5X PRO oferece elegância e desempenho em um SUV compacto, com tecnologia avançada e estilo moderno.',
          image: '/images/carSlider/tiggo5x.jpg',
          available: false,
          rentalPrice: 70
        },
        {
          title: 'Tiggo 5x PRO',
          category: 'SUV',
          description: 'O Tiggo 5X PRO oferece elegância e desempenho em um SUV compacto, com tecnologia avançada e estilo moderno.',
          image: '/images/carSlider/tiggo5x.jpg',
          available: false,
          rentalPrice: 70
        },
        {
          title: 'Tiggo 5x PRO',
          category: 'SUV',
          description: 'O Tiggo 5X PRO oferece elegância e desempenho em um SUV compacto, com tecnologia avançada e estilo moderno.',
          image: '/images/carSlider/tiggo5x.jpg',
          available: false,
          rentalPrice: 70
        },
        {
          title: 'Tiggo 5x PRO',
          category: 'SUV',
          description: 'O Tiggo 5X PRO oferece elegância e desempenho em um SUV compacto, com tecnologia avançada e estilo moderno.',
          image: '/images/carSlider/tiggo5x.jpg',
          available: false,
          rentalPrice: 70
        },
        {
          title: 'Tiggo 5x PRO',
          category: 'SUV',
          description: 'O Tiggo 5X PRO oferece elegância e desempenho em um SUV compacto, com tecnologia avançada e estilo moderno.',
          image: '/images/carSlider/tiggo5x.jpg',
          available: false,
          rentalPrice: 70
        },
       
      ]
    };
  }
};

</script>
