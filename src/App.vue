<template>
  <v-app id="app">
    <NavBar />
    <Slider />
    <AboutCard id="acerca"/>
    <SeccionMesa id="productos"/>
    <v-divider></v-divider>
    <SeccionMaderas />
    <v-divider></v-divider>
    <ContactForm id="contacto" />
    <Footer ref="footer"/>
  </v-app>
</template>

<script>
import Footer from "./components/layout/Footer";
import Slider from "./components/Slider";
import AboutCard from "./components/sections/SeccionAbout";
import SeccionMesa from "./components/sections/SeccionMesas";
import SeccionMaderas from "./components/sections/SeccionMaderas";
import NavBar from "./components/layout/NavBar";
import ContactForm from "./components/ContactForm";
//import Header from './components/HeaderSlider'

export default {
  name: "App",
  components: {
    Footer,
    Slider,
    NavBar,
    SeccionMesa,
    SeccionMaderas,
    ContactForm,
    AboutCard,
    //Header
  },
};
</script>

<style>
*{
  scroll-behavior: smooth;
}
</style>
