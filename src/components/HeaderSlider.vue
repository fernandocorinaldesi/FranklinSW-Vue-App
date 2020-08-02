<template>
  <v-carousel
    cycle
    height="35"
    hide-delimiters
    :show-arrows="false"
  >
    <v-carousel-item
      v-for="(slide, i) in slides"
      :key="i"
    >
          <div class="display-3 text-center">{{ slide }}</div>
      </v-carousel-item>
  </v-carousel>
</template>

<script>
  export default {
    data () {
      return {
        colors: [
          'black',
          'black',
          'black',
          'black',
          'black',
        ],
        slides: [
          'Encontranos en Primera junta 648',
          'Comunicate con nosotros al 4664-8710',
          'Seguinos en instagram',
          'Fourth',
          'Fifth',
        ],
      }
    },
  }
</script>
<style scoped>
.display-3{
    background-color: black !important;
    font-size: 14px !important;
}

</style>