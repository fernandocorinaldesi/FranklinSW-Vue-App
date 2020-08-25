<template>
  <v-app id="inspire">
  <b-card-group deck >
    <v-hover v-slot:default="{ hover }" v-for="item in datamesa" v-bind:key="item.id">
      <v-card  class="mr-16 ml-16 mb-16 " color="grey lighten-4" max-width="300">
        <v-img :cover="true" :src="`${item.imagen}`">
          <v-expand-transition>
            <div v-if="hover" class="d-flex transition-fast-in-fast-out green darken-2 v-card--reveal display-3 white--text" style="height: 100%;">
              {{item.precio}}
            </div>
          </v-expand-transition>
        </v-img>
        <v-card-text style="position: relative;">
          <!-- <v-btn absolute color="orange" class="white--text" fab large right top>
            <v-icon>mdi-cart</v-icon>
          </v-btn> -->
          <!-- <h3 class="display-1 font-weight-light orange--text mb-2"></h3> -->
          <div class="font-weight-light desc mb-2">
           {{item.descripcion}}
           </div>
            <!-- <v-btn color="success" dark large>Informacion</v-btn> -->
        </v-card-text>
      </v-card>
    </v-hover>
   </b-card-group>
  </v-app>
</template>

<script>
// import axios from 'axios'


export default {
  name: "MesasBase",
  props: ['datamesa'],
  // props: {
  // },
  // created() {
  //   this.fetchData();
  // },
  data() {
    return {
    //  baseUrl: process.env.VUE_APP_BASE_URL,
    
    };
  },
  // methods: {
  //   fetchData(){
  //     axios.get('http://localhost:8080/mesas.json').then(response => {
  //       this.data=response.data;
  //    })
  // }
   
  // },
};
</script>

<style>
.desc{
  font-size: 14px;
}
.v-card--reveal {
  align-items: center;
  bottom: 0;
  justify-content: center;
  opacity: 0.5;
  position: absolute;
  width: 100%;
}
</style>