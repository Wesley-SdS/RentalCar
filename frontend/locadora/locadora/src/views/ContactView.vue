<template>
  <div class="p-8">
    <h1 class="text-2xl font-bold mb-4 text-center">Fale Conosco - RentCar Express</h1>
    <p class="mb-10">Bem-vindo à <strong>RentCar Express</strong>! Somos uma empresa dedicada a proporcionar experiências excepcionais de aluguel de veículos para nossos clientes. Desde <strong>2005</strong>, temos orgulho de oferecer uma ampla seleção de veículos modernos e bem-mantidos, atendendo a diversas necessidades e preferências.</p>
    <p class="mb-4">Estamos aqui para ajudar! Entre em contato conosco através do formulário abaixo:</p>
    
    <form @submit.prevent="submitForm" class="mb-20 p-4 rounded shadow">
      <div class="mb-4">
        <label for="name" class="block font-semibold">Nome:</label>
        <input v-model="name" type="text" id="name" class="w-full p-2 border rounded" required>
      </div>
      <div class="mb-4">
        <label for="email" class="block font-semibold">Email:</label>
        <input v-model="email" type="email" id="email" class="w-full p-2 border rounded" required>
      </div>
      <div class="mb-4">
        <label for="message" class="block font-semibold">Mensagem:</label>
        <textarea v-model="message" id="message" class="w-full p-2 border rounded" rows="4" required></textarea>
      </div>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enviar</button>
    </form>
    </div>
    
</template>

<script>


export default {
  components: {

  },
  data() {
    return {
      name: '',
      email: '',
      message: ''
    };
  },
  methods: {
    submitForm() {
      alert('Formulário enviado com sucesso!');
      this.name = '';
      this.email = '';
      this.message = '';
    }
  }
};
</script>

<style scoped>
/* Estilos específicos para este componente podem ser adicionados aqui */
</style>
