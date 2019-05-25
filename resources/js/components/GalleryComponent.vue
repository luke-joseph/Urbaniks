<template>
  <div>
    <!-- <button @click="showSingle">Show single picture.</button>
    <button @click="showMultiple">Show a group of pictures.</button> -->
    <div class="flex flex-wrap w-10/12 mx-auto">
      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(0)" src="/img/gallery/10954771.jpg" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>
      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(1)" src="/img/gallery/handstand-stage.png" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>
      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(2)" src="/img/gallery/10954773.jpg" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>


      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(3)" src="/img/gallery/10954759.jpg" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>

      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(4)" src="/img/gallery/10954762.jpg" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>

      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(5)" src="/img/gallery/10954765.jpg" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>

      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(6)" src="/img/gallery/10954766.jpg" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>

      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(7)" src="/img/gallery/10954767.jpg" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>

      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(8)" src="/img/gallery/10954775.jpg" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>

      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(9)" src="/img/gallery/10989230.jpg" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>

      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(10)" src="/img/gallery/10986121.jpg" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>

      <div class="w-1/3">
        <div class="p-4 h-40 overflow-hidden">
          <img @click="showMultiple(11)" src="/img/gallery/10989228.jpg" alt="" class="cursor-pointer w-full gallery-image">
        </div>
      </div>

    </div>
    <VueEasyLightbox
      :visible="visible"
      :imgs="imgs"
      :index="index"
      @hide="handleHide"
    ></VueEasyLightbox>

    <!-- Component name: 'vue-easy-lightbox' -->
    <!--
      <vue-easy-lightbox
        :visible="visible"
        :imgs="imgs"
        :index="index"
        @hide="handleHide"
      ></vue-easy-lightbox>
     -->
  </div>
</template>

<script>
import VueEasyLightbox from 'vue-easy-lightbox'

export default {
  components: {
    VueEasyLightbox
  },
  data() {
    return {
      imgs: '',  // Img Url , string or Array
      visible: false,
      index: 0   // default
    }
  },
  methods: {
    showSingle() {
      this.imgs = 'http://static1.squarespace.com/static/5b635679ee17591ac752ba2b/5b64be71f950b70769fc3c3d/5bedf8a9898583e32dd80169/1547393646450/?format=1500w'
      this.show()
    },
    showMultiple(index) {
      this.imgs = [
        '/img/gallery/10954771.jpg',
        '/img/gallery/handstand-stage.png',
        '/img/gallery/10954773.jpg',
        '/img/gallery/10954759.jpg',
        '/img/gallery/10954762.jpg',
        '/img/gallery/10954765.jpg',
        '/img/gallery/10954766.jpg',
        '/img/gallery/10954767.jpg',
        '/img/gallery/10954775.jpg',
        '/img/gallery/10989230.jpg',
        '/img/gallery/10986121.jpg',
        '/img/gallery/10989228.jpg',
      ];
      this.index = index;  // index of imgList
      this.show();
    },
    show() {
      this.visible = true
    },
    handleHide() {
      this.visible = false
    }
  }
}
</script>
<style lang="css" scoped>
.gallery-image{
  object-fit: cover;
  /* width: 100%; */
  height: 10rem;
}
</style>
