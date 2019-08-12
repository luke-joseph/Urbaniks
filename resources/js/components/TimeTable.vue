<template>
  <div class="mb-8 mt-16 w-10/12 mx-auto h-128 rounded-b">

    <div class="flex flex-col sm:flex-row justify-between py-4 px-8 rounded-t" style="background-color: #0e1111;">
      <label for="classes" class="mb-2 sm:mb-0 text-white uppercase tracking-wider font-bold">Choose Age Range</label>
      <select class="rounded" name="classes" v-model="selectedClass">

          <option value="KIDS">KIDS</option>
          <option value="JUNIORS">JUNIORS</option>
          <option value="SENIORS">SENIORS</option>
          <option value="COMPETITIVE">COMPETITIVE</option>
          <option value="PRIVATE">PRIVATE</option>

      </select>
    </div>

    <div class="flex flex-col text-white" v-for="(value, name) in allClasses[selectedClass]">
      <!-- show lessons by days in the week -->
      <h3 class="weekday pl-4 sm:px-8 py-4 font-bold tracking-wide border-l-2 border-lightblue-300">{{ name }}</h3>

      <div class="flex py-2" v-for="lesson in allClasses[selectedClass][name]" :class="bgColor(lesson.index)">
        <div class="flex flex-col w-1/3 pl-4 sm:pl-8">
          <p class="mb-0 py-1 font-bold tracking-wide"> {{ lesson.time }}</p>
          <p class="mt-auto mb-0 py-1 text-gray-200 w-4/5"> {{ lesson.location }}</p>
          <p class="hidden sm:flex mb-0 py-1 text-gray-200 w-4/5 text-xs"> {{ lesson.address }}</p>
        </div>
        <div class="pl-2 sm:pl-0 flex flex-col w-2/3">
          <p class="lesson-name mb-0 py-1 font-bold tracking-wide"> {{ lesson.info }}</p>
          <p class="mb-0 py-1 text-gray-200"> {{ lesson.sex }}</p>
          <p class="mb-0 py-1 text-gray-200"> {{ lesson.lessonName }}</p>
          <p class="mb-0 py-1 text-gray-300">with {{ lesson.teacher }}</p>
        </div>
      </div>
    </div>



  </div>
</template>

<script>
import danceclasses from './src/danceclasses';

export default {
  data(){
    return{
      selectedClass: 'KIDS',
      allClasses: danceclasses,
    }
  },
  computed:{

  },
  methods:{
    bgColor: function(index){
      return {
        'class-details-dark' : index % 2 === 0,
        'class-details-darker' : index % 2 === 1,
      }
    },
  },
}
</script>

<style lang="css" scoped>

.weekday {
  background-color: #1E2626;
}

.class-details-darker{
  background-color: #3b444b;
}

.class-details-dark{
  background-color: #414a4c;
}

@media (max-width: 640px) {
.lesson-name {
  height: 56px;
}
}
</style>
