<template>
  <div class="mesas-title-containter mb-4 ">
    <center>
      <h3 class="subtitle">{{ titulo }}</h3>
      <div class="list-container">
        <div class="medidas">
          <h4>Medidas a eleccion</h4>
          <table border="0" class="rounded-list">
            <tr>
              <td>
                <ol >
                  <li v-for="item in medidas" v-bind:key="item.id">
                    <p>{{ item.medida }}</p>
                  </li>
                </ol>
              </td>
            </tr>
          </table>
        </div>
        <div class="pintura">
          <h4>Pintura</h4>
          <table border="0" class="rounded-list">
            <tr>
              <td>
                <ol>
                  <li><p>Natural</p></li>
                  <li><p>Negro o blanco en horno</p></li>
                </ol>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </center>
  </div>
</template>

<script>
export default {
  name: "MesaTitle",
  props: ["medidas", "titulo"],
};
</script>

<style>
.subtitle {
  display: inline-block;
  border-bottom: #5cb85c 1px solid;
}
.list-container {
  display: flex;
}
.list-container {
  margin-top: 5%;
  margin-left: 5%;
  width: 100%;
}
.medidas {
  margin-left: 10%;
}
.pintura {
  margin-left: 10%;
}

/* -------------------------------------- */
/* rounded  list style                    */

/* list */
.rounded-list ol {
  counter-reset: li; /* Initiate a counter */
  margin-left: 0; /* Remove the default left margin */
  padding-left: 0; /* Remove the default left padding */
}

/* item  */
.rounded-list ol > li {
  position: relative; /* Create a positioning context */
  list-style: none; /* Disable the normal item numbering */
  background: #f6f6f6; /* Item background color */
  margin: 0; /* Give each list item a left margin to make room for the numbers */
  padding-left: 15px; /* Add some spacing around the content */
  padding-bottom: 0px;
  padding-top: 0px;
}

/* number  */
.rounded-list ol > li p:before {
  content: counter(li);
  counter-increment: li;
  position: absolute;
  left: -1.3em;
  top: 50%;

  /* number background */
  background: #5cb85c;
  height: 2em;
  width: 2em;
  margin-top: -1em;
  line-height: 1.5em;
  border: 0.3em solid #fff;
  text-align: center;
  font-weight: bold;
  border-radius: 2em;
}
/* -------------------------------------- */
/* rectangle  list style                  */

/* list */
.rectangle-list ol {
  counter-reset: li; /* Initiate a counter */
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
  display: block;
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
  content: counter(li);
  counter-increment: li;

  position: absolute;
  left: -2.5em;
  top: 50%;
  margin-top: -1em;

  background: #5cb85c;
  height: 2em;
  width: 2em;
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
