<template>
  <footer id="footer" >
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Franklin</h3>
            <H6>Hacemos mesas de estilo unico. No hay dos iguales</H6>
         </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Enlaces utiles</h4>
            <ul>
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Acerca de</a></li>
              <li><a href="#">Productos</a></li>
              <li><a href="#">Servicios</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactanos</h4>
            <p>
              Primera junta 648 <br />
              Buenos Aires, CP1663<br />
              Argentina <br />
              <strong>Telefono:</strong> 11-2829-6699<br />
              <strong>Email:</strong> fernandoCorinaldesi@hotmail.com<br />
            </p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        
            </div>
          </div>
          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Suscribete</h4>
            <p>
              Si deseas recibir las mejores ofertas de Franklin, ingresa tu casilla de mail y hace click en suscriberme.
            </p>
            <form action="" method="post">
            <input type="email" name="email" /><input type="submit" value="Subscribirme" />
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container-copy">
      <div class="copyright">&copy; Copyright <strong>Franklin</strong>. Todos los derechos reservados</div>
      <div class="credits"><strong>Made by </strong><a href="https://codexa-tech.com/" style="color:white">Codexa-tech</a></div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style>
.container-copy {
  background: black;
  width: 100%;
  position: absolute;
}
#footer {
  background: url("https://i.ibb.co/1QjmzMD/maderas.jpg");
  background-size: cover;
  padding: 0 0 30px 0;
  color: #eee;
  font-size: 14px;
}
#footer .footer-top {
  background: rgba(0, 0, 0, 0.9);
  padding: 60px 0 30px 0;
  text-align: start;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
  
}

#footer .footer-top .footer-info h3 {
  font-size: 34px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 10px;
  line-height: 1;
    font-family: 'kunstlerschreibschdbolregular';
  font-weight: bold;
  font-weight: 700;
  letter-spacing: 3px;
  /* border-left: 4px solid #f8cb3f; */
  border-left: 4px solid #5cb85c;
  
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Montserrat", sans-serif;
  color: #eee;
}

#footer .footer-top .social-links a {
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

#footer .footer-top .social-links a:hover {
  /* background: #f8cb3f; */
  background: #5cb85c;
  color: #fff;
}

#footer .footer-top h4 {
  font-size: 14px;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 8px;
  color: #ddd;
}

#footer .footer-top .footer-links ul li {
  border-bottom: 1px solid #333;
  padding: 10px 0;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #eee;
}

#footer .footer-top .footer-links ul a:hover {
  /* color: #f8cb3f; */
  color: #5cb85c;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact p {
  line-height: 26px;
}

#footer .footer-top .footer-newsletter {
  margin-bottom: 30px;
}

#footer .footer-top .footer-newsletter input[type="email"] {
  border: 0;
  padding: 6px 8px;
  width: 65%;
  background-color: white;
}

#footer .footer-top .footer-newsletter input[type="submit"] {
  /* background: #f8cb3f; */
  background: #5cb85c;
  border: 0;
  width: 35%;
  padding: 6px 0;
  text-align: center;
  color: #fff;
  transition: 0.3s;
  cursor: pointer;
}

#footer .footer-top .footer-newsletter input[type="submit"]:hover {
  /* background: #f8cb3f; */
  background: #5cb85c;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
  color: white;
}
#footer .credits {
  text-align: center;
  font-size: 13px;
  color: white;
}
</style>
