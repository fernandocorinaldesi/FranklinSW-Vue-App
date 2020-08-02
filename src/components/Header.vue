<template>
  <header>
    <b-navbar toggleable="lg" type="dark" variant="dark" scrolling-navbar>
      <div class="contacts mr-auto">
        <i class="fa fa-map-marker" aria-hidden="true"></i><span>Primera junta 648</span>
        <i class="fa fa-phone-square" aria-hidden="true"></i><span>4664-8710</span>
      </div>
      <div class="social-links ml-auto">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </b-navbar>
  </header>
</template>

<script>
export default {};
</script>

<style>

.contacts i{
  display: inline-block;
  background: #333;;
  color: #eee;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

.contacts span{
  font-size: 16px;
  font-weight: 300;
  margin-left: 5px;
  margin-right: 5px;
  font-family: "Montserrat", sans-serif;
   color: #eee !important;
}

.social-links {
  text-align: end;
}
.social-links a {
  font-size: 18px;
  display: inline-block;
  background: #333;
  color: #eee;
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
  background: #f8cb3f;
  color: #fff;
}
</style>
