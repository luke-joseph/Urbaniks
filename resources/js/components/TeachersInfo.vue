<template>
  <div class="flex flex-wrap w-11/12 md:w-10/12 mx-auto mt-16">

    <div id="teachers-controls-lg" class="flex flex-wrap md:flex-col justify-between md:justify-start w-11/12 mx-auto md:mx-0 md:w-1/4 mb-8">

      <div @click="selectTeacher('PaulPauline')" class="flex flex-col md:flex-row w-1/2 md:w-auto py-4 cursor-pointer rounded-tl-lg md:rounded-t-lg"
      :class="selected == 'PaulPauline' ? 'bg-gray-300' : 'bg-gray-500 text-gray-900'">
        <img src="/img/pp.jpg" class="md:ml-2 h-16 w-16 rounded-full mx-auto md:mx-0 my-auto object-cover" alt="Paul and Pauline urbaniks">
        <div class="my-auto ml-2">
          <h4 class="text-lg? font-bold text-center md:text-left">Paul & Pauline</h4>
        </div>
      </div>

      <div @click="selectTeacher('Honey')" class="flex flex-col md:flex-row w-1/2 md:w-auto py-4 cursor-pointer rounded-tr-lg md:rounded-tr-none"
      :class="selected == 'Honey' ? 'bg-gray-300' : 'bg-gray-500 text-gray-900'">
        <img src="/img/testimonials/testimonial7.jpg" class="md:ml-2 h-16 w-16 rounded-full mx-auto md:mx-0 my-auto object-cover" alt="Honey Urbaniks">
        <div class="my-auto ml-2">
          <h4 class="text-lg? font-bold text-center md:text-left">Honey Joseph</h4>
        </div>
      </div>

      <div @click="selectTeacher('ErinRach')" class="flex flex-col md:flex-row w-1/2 md:w-auto py-4 cursor-pointer rounded-bl-lg md:rounded-bl-none"
      :class="selected == 'ErinRach' ? 'bg-gray-300' : 'bg-gray-500 text-gray-900'">
        <img src="/img/testimonials/testimonial5.jpg" class="md:ml-2 h-16 w-16 rounded-full mx-auto md:mx-0 my-auto object-cover" alt="Erin and Rach Urbaniks">
        <div class="my-auto ml-2">
          <h4 class="text-lg? font-bold text-center md:text-left">Erin and Rach</h4>
        </div>
      </div>

      <div @click="selectTeacher('Chloe')" class="flex flex-col md:flex-row w-1/2 md:w-auto py-4 cursor-pointer rounded-br-lg md:rounded-b-lg"
      :class="selected == 'Chloe' ? 'bg-gray-300' : 'bg-gray-500 text-gray-900'">
        <img src="/img/testimonials/testimonial4.jpg" class="md:ml-2 h-16 w-16 rounded-full mx-auto md:mx-0 my-auto object-cover" alt="Chloe Urbaniks">
        <div class="my-auto ml-2">
          <h4 class="text-lg? font-bold text-center md:text-left">Chloe Mcgovern</h4>
        </div>
      </div>
    </div>

      <PaulPauline v-if="selected == 'PaulPauline'" class="w-full md:w-3/4 flex flex-col"></PaulPauline>
      <Honey v-if="selected == 'Honey'" class="w-full md:w-3/4 flex flex-col"></Honey>
      <ErinRach v-if="selected == 'ErinRach'" class="w-full md:w-3/4 flex flex-col"></ErinRach>
      <Chloe v-if="selected == 'Chloe'" class="w-full md:w-3/4 flex flex-col"></Chloe>

  </div>
</template>

<script>
import PaulPauline from './src/teachers/PaulPauline';
import Honey from './src/teachers/Honey';
import ErinRach from './src/teachers/ErinRach';
import Chloe from './src/teachers/Chloe';

export default {
  components: {
    PaulPauline, Honey, ErinRach, Chloe
  },
  data(){
    return{
      selected: 'PaulPauline',
    }
  },
  methods:{
    selectTeacher(name){
      this.selected = name;
    }
  }
}
</script>

<style lang="css" scoped>
</style>
