<template>
  <div class="main-containter">
    <center>
     <SeccionMaderasTitulo v-bind:titulo="titulo" v-bind:detalle="detalle"/>
      <div class="list-madera-container">
        <div class="medidas">
          <h5>Elegi tu madera favorita</h5>
          <table border="0" class="rectangle-list">
            <tr>
              <td>
                <ol >
                  <li v-for="item in data" v-bind:key="item.id">
                    <p v-on:click="elegir" :id="item.id">{{ item.titulo }}</p>
                  </li>
                </ol>
              </td>
            </tr>
          </table>
       </div>
        <div class="contenido">
          <v-card max-width="600" max-height="600" class="mx-auto" color="#ffffff" light>
            <div class="d-flex ">
              <div>
                <v-card-title class="headline"></v-card-title>
                <v-card-subtitle v-text="elegido.descripcion"></v-card-subtitle>
              </div>
              <v-avatar size="350" tile>
                <v-img :src="elegido.imagen"></v-img>
              </v-avatar>
            </div>
         </v-card>
        </div>
      </div>
    </center>
  </div>
</template>

<script>
// import axios from "axios";
import maderas from "@/assets/json/maderas.json";
import SeccionMaderasTitulo from "./TituloBase";


export default {
  name: "ProductoMaderas",
  components:{
    SeccionMaderasTitulo
  },
  data() {
    return {
      // baseUrl: process.env.VUE_APP_BASE_URL,
      data: maderas,
      elegido: {},
      titulo:"Maderas",
      detalle:"En Franklin.steelnwood nos caracterizamos por confeccionar mesas artesanales convinando madera y resina. Por lo tanto a todos nuestros modelos se pueden agregar detalles en resina y asi dar el toque personal y unico."
    };
  },

   created() {
   setTimeout(() => {
        this.elegido = this.data[0];
       }, 1000);
   },

  methods: {
    // fetchData() {
    //   axios.get("http://localhost:8080/maderas.json").then((response) => {
    //     this.data = response.data;
    //   });
    //   setTimeout(() => {
    //     this.elegido = this.data[0];
    //   }, 1000);
    // },
    elegir: function(e) {
      this.elegido = this.data[e.currentTarget.id - 1];
    },
  },
};
</script>

<style scoped>
.medidas{
  height: 500px;
  overflow: scroll;
}
.main-containter{
  margin-bottom: 70px;
}
.list-madera-container {
  display: flex;
  flex-wrap: wrap;
}
.contenido {
  margin-left: 10%;
  margin-top: 5%;
}
.descripcion {
  width: 80%;
}
/* -------------------------------------- */
/* rectangle  list style                  */

/* list */

.rectangle-list ol {
 
  /*counter-reset: li; /* Initiate a counter */
  margin-left: 0; /* Remove the default left margin */
  padding-left: 0; /* Remove the default left padding */
}

/* item  */
.rectangle-list ol > li {
  
  position: relative;
  list-style: none; /* Disable the normal item numbering */
}


/* item hover */
.rectangle-list p {
  display: list-item;
  font-weight: bold;
  padding: 0.4em 0.4em 0.4em 0.8em;
  *padding: 0.4em;
  margin: 0.5em 0 0.5em 2.5em;
  background: #ddd;
  color: #444;
  text-decoration: none;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

/* item hover */
.rectangle-list p:hover {
  background: #5cb85c;
}

/* number  */
.rectangle-list p:before {
  /* content: counter(li);
  counter-increment: li;*/

  position: absolute;
  left: -2.5em;
  top: 50%;
  margin-top: -1em;

  background: #5cb85c;
  height: 2em;
  width: 2em;
  color: #5cb85c;
  line-height: 2em;
  text-align: center;
  font-weight: bold;
}

/* number hover */
.rectangle-list p:after {
  position: absolute;
  left: -1em;
  top: 50%;
  margin-top: -0.5em;

  content: "";
  border: 0.5em solid transparent;

  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

.rectangle-list p:hover:after {
  left: -0.5em;
  border-left-color: #5cb85c;
}

/* -------------------------------------- */
</style>
