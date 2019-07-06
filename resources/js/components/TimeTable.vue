<template>
  <div class="mb-24 mt-16 w-10/12 mx-auto h-128 rounded-b">

    <div class="flex justify-between py-4 px-8 bg-gray-900 rounded-t">
      <label for="classes" class="text-white uppercase tracking-wider font-bold">Choose Class</label>
      <select class="rounded" name="classes" v-model="selectedClass">

        <optgroup label="kids" class="bg-gray-100">
          <option value="BOOGIE_BABEZ">BOOGIE BABEZ</option>
          <option value="KOOL_KIDZ">KOOL KIDZ</option>
          <option value="WEE_SKILLZ">WEE SKILLZ</option>
        </optgroup>

        <optgroup label="juniors" class="bg-gray-200">
          <option value="JNR_CONTEMPORARY">JNR CONTEMPORARY</option>
          <option value="JNR_BOYZ">JNR BOYZ</option>
          <option value="JNR_GIRLS">JNR GIRLS</option>
          <option value="BIGGIE_SMALLZ">BIGGIE SMALLZ</option>
          <option value="BEGINNERS_TAP">BEGINNERS TAP</option>
        </optgroup>

        <optgroup label="senior" class="bg-gray-100">
          <option value="GIRLS_YOUTH_CREW">GIRLS YOUTH CREW (GYC)</option>
          <option value="LAYDEEZ">LAYDEEZ</option>
          <option value="BALLET_BARRE_PRIVATES">BALLET BARRE PRIVATES</option>
          <option value="SNR_CREATIVE">SNR CREATIVE</option>
          <option value="SNR_BOYS_STREET_SKILLZ">SNR BOYS STREET</option>
        </optgroup>

        <optgroup label="competitive training" class="bg-gray-200">
          <option value="COMPETITION_TEAM_DANCERS">COMPETITION TEAM DANCERS</option>
          <option value="HOODLUMZ_CHOREO">HOODLUMZ CHOREO</option>
          <option value="COMPETITIVE_TRAINING">COMPETITIVE TRAINING</option>
        </optgroup>

      </select>
    </div>

    <div class="flex flex-col text-white" v-for="(value, name) in allClasses[selectedClass]">
      <!-- for each day of the week spit out the lessons -->
      <h3 class="px-8 py-4 bg-gray-600 font-bold tracking-wide">{{ name }}</h3>

      <div class="flex py-2" v-for="lesson in allClasses[selectedClass][name]" :class="bgColor(lesson.index)">
        <div class="flex flex-col w-1/3 pl-8">
          <p class="mb-0 py-1 font-semibold"> {{ lesson.time }}</p>
          <p class="mb-0 py-1 text-gray-300"> {{ lesson.teacher }}</p>
          <p class="mb-0 py-1 text-gray-200 w-4/5"> {{ lesson.location }}</p>
          <p class="mb-0 py-1 text-gray-200 w-4/5 text-xs"> {{ lesson.address }}</p>
        </div>
        <div class="flex flex-col w-2/3">
          <p class="mb-0 py-1"> {{ lesson.lessonName }}</p>
          <p class="mb-0 py-1 text-gray-200"> {{ lesson.difficulty }}</p>
          <p class="mb-0 py-1 text-gray-300"> {{ lesson.info }}</p>
          <p class="mb-0 py-1 text-gray-200"> £{{ lesson.price }}</p>
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
      selectedClass: 'BOOGIE_BABEZ',
      allClasses: danceclasses,
    }
  },
  computed:{

  },
  methods:{
    bgColor: function(index){
      return {
        'bg-gray-800' : index % 2 === 0,
        'bg-gray-900' : index % 2 === 1,
      }
    },
  },
}
</script>

<style lang="css" scoped>
</style>
