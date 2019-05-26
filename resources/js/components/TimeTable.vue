<template>
  <div class="mb-24 mt-16 w-10/12 mx-auto h-128 rounded-b">

    <div class="flex justify-between py-4 px-8 bg-gray-900 rounded-t">
      <label for="classes" class="text-white uppercase tracking-wider font-bold">Choose Class</label>
      <select class="rounded" name="classes" v-model="selectedClass">
        <option value="Breakdance">Breakdance</option>
        <option value="HipHop">Hip Hop</option>
        <option value="Contempary">Contempary</option>
        <option value="Ballet">Ballet</option>
      </select>
    </div>

    <div class="flex flex-col text-white" v-for="(value, name) in allClasses[selectedClass]">
      <!-- for each day of the week spit out the lessons -->
      <h3 class="px-8 py-4 bg-gray-600 font-bold tracking-wide">{{ name }}</h3>

      <div class="flex py-2" v-for="lesson in allClasses[selectedClass][name]" :class="bgColor(lesson.index)">
        <div class="flex flex-col w-1/3 pl-8">
          <p class="mb-0 py-1 font-semibold"> {{ lesson.time }}</p>
          <p class="mb-0 py-1 text-gray-300"> {{ lesson.teacher }}</p>
          <p class="mb-0 py-1 text-gray-200"> {{ lesson.location }}</p>
        </div>
        <div class="flex flex-col w-2/3">
          <p class="mb-0 py-1"> {{ lesson.lessonName }}</p>
          <p class="mb-0 py-1 text-gray-200"> {{ lesson.difficulty }}</p>
          <p class="mb-0 py-1 text-gray-300"> £{{ lesson.price }}</p>
        </div>
      </div>
    </div>



  </div>
</template>

<script>
export default {
  data(){
    return{
      selectedClass: 'Breakdance',
      allClasses: {
        Breakdance: {
          Monday: [
              {
                index: 0,
                time : '18:00 - 1920',
                teacher : 'Paul Joseph',
                location: 'Balloch',
                googleLocation: 'https://google.com',
                lessonName: 'Breakdance - Elders 16+',
                difficulty: 'Medium',
                description: 'Old School to the new school acrobatic techniques',
                price: 5,
            },
            {
              index: 1,
              time : '17:00 - 1820',
              teacher : 'Paul Joseph',
              location: 'Milngavie sports club',
              googleLocation: 'https://google.com',
              lessonName: 'Breakdance - Jnrs 11-15',
              difficulty: 'Medium',
              description: 'Old School to the new school acrobatic techniques',
              price: 5,
          }
        ],
        Tuesday: [
            {
              index: 0,
              time : '13:00 - 1420',
              teacher : 'Pauline Joseph',
              location: 'Milngavie sports club',
              googleLocation: 'https://google.com',
              lessonName: 'Breakdance - Elders 21+',
              difficulty: 'Medium',
              description: 'Old School to the new school acrobatic techniques',
              price: 5,
          },
          {
            index: 1,
            time : '14:00 - 1920',
            teacher : 'Pauline Joseph',
            location: 'Milngavie sports club',
            googleLocation: 'https://google.com',
            lessonName: 'Breakdance - Elders 40+',
            difficulty: 'Medium',
            description: 'Old School to the new school acrobatic techniques',
            price: 5,
        }
      ],
      },
      HipHop: {
        Monday: [
            {
              index: 0,
              time : '18:00 - 1920',
              teacher : 'Paul Joseph',
              location: 'Milngavie sports club',
              googleLocation: 'https://google.com',
              lessonName: 'Breakdance - Elders 16+',
              difficulty: 'Medium',
              description: 'Old School to the new school acrobatic techniques',
              price: 5,
          },
      ],
      Tuesday: [
          {
            index: 0,
            time : '13:00 - 1420',
            teacher : 'Pauline Joseph',
            location: 'Milngavie sports club',
            googleLocation: 'https://google.com',
            lessonName: 'Breakdance - Elders 21+',
            difficulty: 'Medium',
            description: 'Old School to the new school acrobatic techniques',
            price: 5,
        },
        {
          index: 1,
          time : '14:00 - 1920',
          teacher : 'Pauline Joseph',
          location: 'Milngavie sports club',
          googleLocation: 'https://google.com',
          lessonName: 'Breakdance - Elders 40+',
          difficulty: 'Medium',
          description: 'Old School to the new school acrobatic techniques',
          price: 5,
      }
    ],
    },
    }
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
  mounted() {
      console.log('Component mounted.')
  }
}
</script>

<style lang="css" scoped>
</style>
