<template>
  <div class="carousel-container">
    <b-carousel
      id="carousel-1"
      :interval="3000"
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
          <div class="caption animationX">
            <h1>{{ item.titulo1 }}</h1>
            <h1>{{ item.titulo2 }}</h1>
            <b-button size="md" pill variant="outline-warning">{{ item.button }}</b-button>
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
    }
  },
};
</script>
<style scoped>
.caption {
  margin-bottom: 20%;
}
h1 {
  font-size: 30px;
  text-shadow: 4px 3px 0px rgba(0, 0, 0, 1);
  color: rgb(255, 255, 255);
  font-weight: bold;
}

@media only screen and (max-width: 500px){
.caption {
  margin-bottom: 0;
  margin-top: 15% ;
  
}
h1{
  font-size: 15px ;
}
}

/* .carousel-container {
   border: 2px solid #f8cb3f;
} */
@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateX(-200px);
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
    transform: translateY(200px);
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
