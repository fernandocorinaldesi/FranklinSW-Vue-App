<template>
  <b-navbar toggleable="lg" type="dark" variant="dark" sticky id="custom">
    <b-navbar-brand href="#"><div class="logo"><h1>Franklin</h1></div></b-navbar-brand>
    <!-- <img src="../../public/img/logo.png" width="5%" height="5%" /> -->
    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav class="mr-auto">
        <b-nav-item active href="#">Inicio</b-nav-item>
        <b-nav-item href="#acerca">Acerca de</b-nav-item>
        <b-nav-item href="#productos">Productos</b-nav-item>
        <b-nav-item href="#">Servicios</b-nav-item>
        <b-nav-item href="#contacto">Contacto</b-nav-item>
       <b-button variant="success">Cotizador</b-button>
      </b-navbar-nav>
      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <div class="social-links ml-auto">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://www.instagram.com/franklin.snw/" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>

<script>
export default {
  name: "NavBar",
  data() {
    return {};
  },
};
</script>

<style>
 #custom {
  background: url("https://i.ibb.co/T45XBYw/nav.jpg") !important;
  
} 
.logo{
  font-family: 'kunstlerschreibschdbolregular';
  font-weight: bold;
  
}

.social-links {
  text-align: end;
}
.social-links a {
  font-size: 18px;
  display: inline-block;
  background: #333;
  color: rgb(255, 255, 255)!important;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}
.social-links a:hover {
  /* background: #f8cb3f; */
  background: #5cb85c !important;
  color: #fff;
}
</style>
