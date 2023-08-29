
<template>
  <div class="bg-white">
    <!-- Mobile menu -->
    <TransitionRoot as="template" :show="open">
      <Dialog as="div" class="relative z-40 lg:hidden" @close="open = false">
        <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100" leave-to="opacity-0">
          <div class="fixed inset-0 bg-black bg-opacity-25" />
        </TransitionChild>

        <div class="fixed inset-0 z-40 flex">
          <TransitionChild as="template" enter="transition ease-in-out duration-300 transform" enter-from="-translate-x-full" enter-to="translate-x-0" leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0" leave-to="-translate-x-full">
            <DialogPanel class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
              <div class="flex px-4 pb-2 pt-5">
                <button type="button" class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400" @click="open = false">
                  <span class="absolute -inset-0.5" />
                  <span class="sr-only">Close menu</span>
                  <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                </button>
              </div>

              <!-- Links -->
              <TabGroup as="div" class="mt-2">
                <div class="border-b border-gray-200">
                  <TabList class="-mb-px flex space-x-8 px-4">
                    <Tab as="template" v-for="category in navigation.categories" :key="category.name" v-slot="{ selected }">
                      <button :class="[selected ? 'border-indigo-600 text-indigo-600' : 'border-transparent text-gray-900', 'flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium']">{{ category.name }}</button>
                    </Tab>
                  </TabList>
                </div>
                <TabPanels as="template">
                  <TabPanel v-for="category in navigation.categories" :key="category.name" class="space-y-10 px-4 pb-8 pt-10">
                    <div class="grid grid-cols-2 gap-x-4">
                      <div v-for="item in category.featured" :key="item.name" class="group relative text-sm">
                        <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                          <img :src="item.imageSrc" :alt="item.imageAlt" class="object-cover object-center" />
                        </div>
                        <a :href="item.href" class="mt-6 block font-medium text-gray-900">
                          <span class="absolute inset-0 z-10" aria-hidden="true" />
                          {{ item.name }}
                        </a>
                        <p aria-hidden="true" class="mt-1">Alugue Agora</p>
                      </div>
                    </div>
                    <div v-for="section in category.sections" :key="section.name">
                      <p :id="`${category.id}-${section.id}-heading-mobile`" class="font-medium text-gray-900">{{ section.name }}</p>
                      <ul role="list" :aria-labelledby="`${category.id}-${section.id}-heading-mobile`" class="mt-6 flex flex-col space-y-6">
                        <li v-for="item in section.items" :key="item.name" class="flow-root">
                          <a :href="item.href" class="-m-2 block p-2 text-gray-500">{{ item.name }}</a>
                        </li>
                      </ul>
                    </div>
                  </TabPanel>
                </TabPanels>
              </TabGroup>

              <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                <div v-for="page in navigation.pages" :key="page.name" class="flow-root">
                  <a :href="page.href" class="-m-2 block p-2 font-medium text-gray-900">{{ page.name }}</a>
                </div>
              </div>

              <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                <div class="flow-root">
                  <a href="/login" class="-m-2 block p-2 font-medium text-green-600">Entrar</a>
                </div>
                <div class="flow-root">
                  <a href="/criar-conta" class="-m-2 block p-2 font-medium text-green-600">Criar Conta</a>
                </div>
              </div>

             
            </DialogPanel>
          </TransitionChild>
        </div>
      </Dialog>
    </TransitionRoot>

    <header class=" relative bg-white">
      

      <nav aria-label="Top" class="z-999 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="border-b border-gray-200">
          <div class="flex h-16 items-center">
            <button type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden" @click="open = true">
              <span class="absolute -inset-0.5" />
              <span class="sr-only">Abrir Menu</span>
              <Bars3Icon class="h-6 w-6" aria-hidden="true" />
            </button>

            <!-- Logo -->
            <div class="ml-4 flex lg:ml-0">
              <a href="#">
                <span class="sr-only">Locadora</span>
                <img class="h-8 w-auto" src="/" alt="" />
              </a>
            </div>

            <!-- Flyout menus -->
            <PopoverGroup class="lg:ml-8 lg:block lg:self-stretch ">
              <div class="flex h-full space-x-8">
                <Popover v-for="category in navigation.categories" :key="category.name" class="flex" v-slot="{ open }">
                  <div class="relative flex">
                    <PopoverButton :class="[open ? 'border-indigo-600 text-indigo-600' : 'border-transparent text-gray-700 hover:text-gray-800', 'relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out']">{{ category.name }}</PopoverButton>
                  </div>

                  <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0" enter-to-class="opacity-100" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100" leave-to-class="opacity-0">
                    <PopoverPanel class="absolute inset-x-0 top-full text-sm text-gray-500">

                      <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true" />

                      <div class="relative bg-white">
                        <div class="mx-auto max-w-7xl px-8">
                          <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                            <div class="col-start-2 grid grid-cols-2 gap-x-8">
                              <div v-for="item in category.featured" :key="item.name" class="group relative text-base sm:text-sm">
                                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                  <img :src="item.imageSrc" :alt="item.imageAlt" class="object-cover object-center" />
                                </div>
                                <a :href="item.href" class="mt-6 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true" />
                                  {{ item.name }}
                                </a>
                                <p aria-hidden="true" class="mt-1">Alugue Agora</p>
                              </div>
                            </div>
                            <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                              <div v-for="section in category.sections" :key="section.name">
                                <p :id="`${section.name}-heading`" class="font-medium text-gray-900">{{ section.name }}</p>
                                <ul role="list" :aria-labelledby="`${section.name}-heading`" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                  <li v-for="item in section.items" :key="item.name" class="flex">
                                    <a :href="item.href" class="hover:text-gray-800">{{ item.name }}</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </PopoverPanel>
                  </transition>
                </Popover>

                <a v-for="page in navigation.pages" :key="page.name" :href="page.href" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">{{ page.name }}</a>
              </div>
            </PopoverGroup>

            <div class="ml-auto flex items-center">
              <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">

  <template v-if="userLoggedIn">
    <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">{{ userName }} Logado</a>
    <span class="h-6 w-px bg-gray-200" aria-hidden="true" />
    <button @click="logout" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sair</button>
  </template>

  <template v-else>
    <a href="/login" class="text-sm font-medium text-gray-700 hover:text-green-600">Entrar</a>
    <span class="h-6 w-px bg-gray-200" aria-hidden="true" />
    <a href="/criar-conta" class="text-sm font-medium text-gray-700 hover:text-green-600">Criar Conta</a>
  </template>
</div>


        
              <div class="flex lg:ml-6">
                <a href="#" class="p-2 text-green-600 hover:text-gray-500">
                  <span class="sr-only">Buscar</span>
                  <MagnifyingGlassIcon class="h-6 w-6" aria-hidden="true" />
                </a>
              </div>

              <!-- Cart -->
              <div class="ml-4 flow-root lg:ml-6">
                <a href="#" class="group -m-2 flex items-center p-2">
                  <ShoppingBagIcon class="h-6 w-6 flex-shrink-0 text-green-600 group-hover:text-gray-500" aria-hidden="true" />
                  <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                  <span class="sr-only">Itens no carrinho</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </div>
</template>

<script setup>
function logout() {

  clearUserData();
  userLoggedIn.value = false;
  userName.value = "";
  console.log('Após logout - userLoggedIn:', userLoggedIn.value);
  console.log('Após logout - userName:', userName.value);
}
function clearUserData() {

  localStorage.removeItem('authToken');

}
const userLoggedIn = ref(false);
const userName = ref("");


const userData = ref(null);


async function fetchUserData() {
  try {

    const response = await axiosClient.get('/user'); 
    userData.value = response.data;
    userName.value = userData.value.name;
    userLoggedIn.value = true;
  } catch (error) {
    console.error('Erro ao obter dados do usuário:', error);
  }
}


onMounted(() => {
  fetchUserData();
});

import { ref, onMounted } from 'vue'
import axiosClient from '../../../../../backend/src/axios'; 
import {
  Dialog,
  DialogPanel,
  Popover,
  PopoverButton,
  PopoverGroup,
  PopoverPanel,
  Tab,
  TabGroup,
  TabList,
  TabPanel,
  TabPanels,
  TransitionChild,
  TransitionRoot,
} from '@headlessui/vue'
import { Bars3Icon, MagnifyingGlassIcon, ShoppingBagIcon, XMarkIcon } from '@heroicons/vue/24/outline'

const navigation = {
  categories: [
    {
      id: 'categoria',
      name: 'Categoria',
      featured: [
        {
          name: 'CAOA Chery Tiggo 5X',
          href: '#',
          imageSrc: '/images/carSlider/tiggo5x.jpg',
          imageAlt: 'Tiggo 5X',
        },
        {
          name: 'CAOA Chery Tiggo 7X',
          href: '#',
          imageSrc: '/images/carSlider/tiggo7x.jpg',
          imageAlt: 'Tiggo 7X',
        },
      ],
      sections: [
        {
          id: 'Categorias',
          name: 'Categorias',
          items: [
            { name: 'Hatch', href: '#' },
            { name: 'Sedan', href: '#' },
            { name: 'SUV', href: '#' },
            { name: 'Pickup', href: '#' },
            
          ],
        },
        {
          id: 'accessories',
          name: 'Acessorios',
          items: [
            { name: 'Alarme', href: '#' },
            { name: 'Insulfilm', href: '#' },
            { name: 'Lampadas', href: '#' },
            { name: 'Rodas', href: '#' },

          ],
        },
        
        
      ],
    },
    
  ],
  pages: [
  
    { name: 'Home', href: '/' },
    { name: 'Sobre', href: '/sobrenos' },
    { name: 'Locação', href: '/veiculos' },
    { name: 'Contato', href: '/contact' },
  ],

}

const open = ref(false)
</script>