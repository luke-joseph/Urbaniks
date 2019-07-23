<template>
  <div class="flex w-10/12 mx-auto mt-16">

    <div id="teachers-controls" class="flex flex-col w-1/4">

      <div @click="selectTeacher('PaulPauline')" class="flex h-32 bg-gray-100 cursor-pointer">
        <img src="/img/pp.jpg" class="ml-2 h-16 w-16 rounded-full my-auto object-cover" alt="Paul and Pauline urbaniks">
        <div class="my-auto ml-2">
          <h4 class="text-lg">Paul & Pauline</h4>
        </div>
      </div>

      <div @click="selectTeacher('Honey')" class="flex h-32 bg-gray-400 cursor-pointer">
        <img src="/img/testimonials/testimonial7.jpg" class="ml-2 h-16 w-16 rounded-full my-auto object-cover" alt="Honey Urbaniks">
        <div class="my-auto ml-2">
          <h4 class="text-lg">Honey Joseph</h4>
        </div>
      </div>

      <div @click="selectTeacher('ErinRach')" class="flex h-32 bg-gray-100 cursor-pointer">
        <img src="/img/testimonials/testimonial5.jpg" class="ml-2 h-16 w-16 rounded-full my-auto object-cover" alt="Erin and Rach Urbaniks">
        <div class="my-auto ml-2">
          <h4 class="text-lg">Erin and Rach</h4>
        </div>
      </div>

      <div @click="selectTeacher('Chloe')" class="flex h-32 bg-gray-400 cursor-pointer">
        <img src="/img/testimonials/testimonial4.jpg" class="ml-2 h-16 w-16 rounded-full my-auto object-cover" alt="Chloe Urbaniks">
        <div class="my-auto ml-2">
          <h4 class="text-lg">Chloe Mcgovern</h4>
        </div>
      </div>
    </div>

      <PaulPauline v-if="selected == 'PaulPauline'" class="w-3/4 flex flex-col"></PaulPauline>
      <Honey v-if="selected == 'Honey'" class="w-3/4 flex flex-col"></Honey>
      <ErinRach v-if="selected == 'ErinRach'" class="w-3/4 flex flex-col"></ErinRach>
      <Chloe v-if="selected == 'Chloe'" class="w-3/4 flex flex-col"></Chloe>

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
