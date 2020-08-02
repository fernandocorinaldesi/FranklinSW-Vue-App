<template>
  <div class="about-container">
    <v-card elevation="10" max-width="1000" class="mx-auto"  light v-for="item in data" v-bind:key="item.id">
      <div class="about-card d-flex ">
        <div >
          <v-card-title v-text="item.titulo" class="headline mb-1"></v-card-title>
          <v-card-subtitle v-text="item.parrafo1"></v-card-subtitle>
          <v-card-subtitle v-text="item.parrafo2"></v-card-subtitle>
          <v-card-subtitle v-text="item.parrafo3"></v-card-subtitle>
          <v-card-subtitle v-text="item.parrafo4"></v-card-subtitle>
        </div>
        <v-avatar size="400" tile>
          <v-img :src="item.imagen"></v-img>
        </v-avatar>
      </div>
    </v-card>
  </div>
</template>

<script>
import about from "@/assets/json/about.json";
export default {
  name: "AboutCard",
  data() {
    return {
      data: about,
    };
  },
   created() {
        
   },
};
</script>

<style scoped>
.about-container{
  margin-top: 10%;
}
@media only screen and (max-width: 500px){
  .about-card{
    flex-wrap: wrap;
  }
}
</style>
