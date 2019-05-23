<template>
  <div class="mb-24 mt-16 w-10/12 mx-auto h-128">

    <div class="flex justify-between py-4 px-8 bg-gray-900 rounded">
      <label for="classes" class="text-white uppercase">Choose Class</label>
      <select class="rounded" name="classes" v-model="selectedClass">
        <option value="Breakdance">Breakdance</option>
        <option value="HipHop">Hip Hop</option>
        <option value="Contempary">Contempary</option>
        <option value="Ballet">Ballet</option>
      </select>
    </div>

    <div class="flex flex-col border border-orange-600 text-white" v-for="(value, name, index) in allClasses[selectedClass]">
      <!-- for each day of the week spit out the lessons -->
      <h3 class="px-8 py-4 border-b">{{ name }}</h3>

      <div class="flex border-b py-2" v-for="lesson in allClasses[selectedClass][name]">
        <div class="flex flex-col w-1/3 pl-8">
          <p class="mb-0 py-1"> {{ lesson.time }}</p>
          <p class="mb-0 py-1"> {{ lesson.teacher }}</p>
        </div>
        <div class="flex flex-col w-2/3">
          <p class="mb-0 py-1"> {{ lesson.lessonName }}</p>
          <p class="mb-0 py-1"> {{ lesson.difficulty }}</p>
        </div>
      </div>
    </div>



  </div>
</template>

<script>
export default {
  data(){
    return{
      allClasses: {
        Breakdance: {
          Monday: [
              {
                time : '18:00 - 1920',
                teacher : 'Paul Joseph',
                lessonName: 'Breakdance - Elders 16+',
                difficulty: 'medium',
                description: 'Old School to the new school acrobatic techniques',
            },
            {
              time : '17:00 - 1820',
              teacher : 'Paul Joseph',
              lessonName: 'Breakdance - Jnrs 11-15',
              difficulty: 'medium',
              description: 'Old School to the new school acrobatic techniques',
          }
        ],
        Tuesday: [
            {
              time : '13:00 - 1420',
              teacher : 'Pauline Joseph',
              lessonName: 'Breakdance - Elders 21+',
              difficulty: 'medium',
              description: 'Old School to the new school acrobatic techniques',
          },
          {
            time : '14:00 - 1920',
            teacher : 'Pauline Joseph',
            lessonName: 'Breakdance - Elders 40+',
            difficulty: 'medium',
            description: 'Old School to the new school acrobatic techniques',
        }
      ],
      },
      HipHop: {
        Monday: [
            {
              time : '18:00 - 1920',
              teacher : 'Paul Joseph',
              lessonName: 'Breakdance - Elders 16+',
              difficulty: 'medium',
              description: 'Old School to the new school acrobatic techniques',
          },
      ],
      Tuesday: [
          {
            time : '13:00 - 1420',
            teacher : 'Pauline Joseph',
            lessonName: 'Breakdance - Elders 21+',
            difficulty: 'medium',
            description: 'Old School to the new school acrobatic techniques',
        },
        {
          time : '14:00 - 1920',
          teacher : 'Pauline Joseph',
          lessonName: 'Breakdance - Elders 40+',
          difficulty: 'medium',
          description: 'Old School to the new school acrobatic techniques',
      }
    ],
    },
    },
      selectedClass: 'Breakdance',

    }
  },
  mounted() {
      console.log('Component mounted.')
  }
}
</script>

<style lang="css" scoped>
</style>
