<template>
  <div class="carousel-container">
    <b-carousel
      id="carousel-1"
      :interval="5000"
      controls
      indicators
      background="#ababab"
      style="text-shadow: 1px 1px 2px #333;"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
      <!-- Text slides with image -->
      <div v-for="item in data" v-bind:key="item.id">
        <b-carousel-slide :img-src="`${item.imagen}`" class="img-responsive">
          <div v-if="item.id !== 5" class="caption">
            <div class="animationX">
              <h1>{{ item.titulo1 }}</h1>
              <h1>{{ item.titulo2 }}</h1>
            </div>
            <div>
              <b-button class="animationY" :href="`${item.ref}`" size="md" pill variant="outline-warning">{{ item.button }}</b-button>
            </div>
          </div>
          <div v-else>
            <div class="d-flex flex-column contactos animationXb">
              <div><i class="fa fa-whatsapp mr-2 mb-2">{{item.titulo1}}</i></div>
              <div><i class="fa fa-instagram mr-2 mb-2">{{item.titulo2}}</i></div>
              <div><i class="far fa-envelope mr-2 mb-2">{{item.titulo3}}</i></div>
              <div><i class="fas fa-user-clock mr-2 mb-2">{{item.titulo4}}</i></div>
              <!-- <h1><div class="fa fa-whatsapp mr-2 mb-2"></div>{{item.titulo1}}</h1>
              <h1><div class="fa fa-instagram mr-2 mb-2"></div>{{item.titulo2}}</h1>
              <h1><div class="far fa-envelope mr-2 mb-2"></div>{{item.titulo3}}</h1>
              <h1><div class="fas fa-user-clock mr-2"></div>{{item.titulo4}}</h1> -->
            </div>
          </div>
        </b-carousel-slide>
      </div>
      <!-- Slides with custom text -->
    </b-carousel>
  </div>
</template>

<script>
// import axios from "axios";
import slider from "@/assets/json/slider.json";

export default {
  name: "Slider",
  props: {},

  // created() {
  //   this.fetchData();
  // },
  data() {
    return {
      // baseUrl: process.env.VUE_APP_BASE_URL,
      data: slider,
      slide: 0,
      sliding: null,
    };
  },
  methods: {
    // fetchData() {
    //   axios.get("http://localhost:8080/slider.json").then((response) => {
    //     this.data = response.data;
    //   });
    // },
    onSlideStart() {
      this.sliding = true;
    },
    onSlideEnd() {
      this.sliding = false;
    },
  },
};
</script>
<style scoped>
.caption {
  margin-bottom: 20%;
}
.contactos{
   margin-bottom: 20%;
   margin-right: 30%;
   font-size: 30px;
   text-shadow: 0px 0px 4px rgba(0, 0, 0, 1);
  
  font-weight: bold;
}
h1 {
  font-size: 30px;
  text-shadow: 4px 3px 0px rgba(0, 0, 0, 1);
  color: rgb(255, 255, 255);
  font-weight: bold;
}
.btn-outline-warning {
  color: #ffc107 !important;
}
.btn-outline-warning:hover {
  color: black !important;
}

@media only screen and (max-width: 500px) {
  .caption {
    margin-bottom: 0;
    margin-top: 15%;
  }
  h1 {
    font-size: 15px;
  }
   .contactos {
    margin-bottom: 0;
    margin-top: 15%;
    font-size: 15px;
}
}

/* .carousel-container {
   border: 2px solid #f8cb3f;
} */
@keyframes fadeIn3 {
  0% {
    opacity: 0;
    transform: translateX(-300px);
  }
  100% {
    opacity: 1;
    transform: translateX(0px);
  }
}
.animationXb {
  animation: fadeIn3 ease 4s;
  -webkit-animation: fadeIn3 ease 4s;
  -moz-animation: fadeIn3 ease 4s;
  -o-animation: fadeIn3 ease 4s;
  -ms-animation: fadeIn3 ease 4s;
}
@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateX(-500px);
  }
  100% {
    opacity: 1;
    transform: translateX(0px);
  }
}
.animationX {
  animation: fadeIn ease 3s;
  -webkit-animation: fadeIn ease 3s;
  -moz-animation: fadeIn ease 3s;
  -o-animation: fadeIn ease 3s;
  -ms-animation: fadeIn ease 3s;
}
@keyframes fadeIn2 {
  0% {
    opacity: 0;
    transform: translateY(500px);
  }
  100% {
    opacity: 1;
    transform: translateY(0px);
  }
}

.animationY {
  animation: fadeIn2 ease 3s;
  -webkit-animation: fadeIn2 ease 3s;
  -moz-animation: fadeIn2 ease 3s;
  -o-animation: fadeIn2 ease 3s;
  -ms-animation: fadeIn2 ease 3s;
}

/* @-moz-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-webkit-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-o-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-ms-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
} 
}*/
</style>
