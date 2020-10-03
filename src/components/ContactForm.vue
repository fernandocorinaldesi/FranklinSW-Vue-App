<template>
  <v-container fluid>
    <div class="title">
      <h2>¿En qué podemos ayudarte?</h2>
      <h2>¡Estamos para asesorarte!</h2>
    </div>
    <v-row id="form-container">
      <v-col cols="12">
        <v-form ref="form" v-model="valid" :lazy-validation="lazy">
          <v-text-field
            v-model="name"
            :counter="20"
            :rules="nameRules"
            label="Name"
            required
          ></v-text-field>

          <v-text-field
            v-model="email"
            :rules="emailRules"
            label="E-mail"
            required
          ></v-text-field>
          <v-textarea
            v-model="mensaje"
            :rules="mensajeRules"
            label="Mensaje"
            required
          ></v-textarea>

          <v-btn
            :disabled="!valid"
            color="success"
            class="mr-4 mt-4"
            @click="validate"
          >
            Enviar
          </v-btn>
          <v-btn color="success" class="mr-4 mt-4" @click="reset">
            Reset
          </v-btn>
        </v-form>
      </v-col>
    </v-row>
    <div class="text-center ma-2">
      <v-snackbar v-model="snackbar">
        {{ text }}
        <template v-slot:action="{ attrs }">
          <v-btn color="white" text v-bind="attrs" @click="snackbar = false">
            Cerrar
          </v-btn>
        </template>
      </v-snackbar>
    </div>
  </v-container>
</template>

<script>
let emailjs = require('emailjs-com');
export default {
  data: () => ({
    snackbar: false,
    text: "Mensaje enviado con éxito",
    valid: true,
    name: "",
    nameRules: [
      (v) => !!v || "Debe ingresar un nombre",
      (v) =>
        (v && v.length <= 20) || "El nombre debe tener menos de 20 caracteres",
    ],
    email: "",
    emailRules: [
      (v) => !!v || "De ingresar un mail válido",
      (v) => /.+@.+\..+/.test(v) || "El mail debe ser valido",
    ],
    mensaje: "",
    mensajeRules: [(v) => !!v || "Debe ingresar un mensaje"],
    select: null,
    lazy: false,
  }),
  created(){
  emailjs.init("user_H85pcS1wXNXie0zjrNN9l");
},
  methods: {
    validate() {
      // this.$refs.form.validate();
      this.sendEmail()
      this.snackbar = true;
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    },
    sendEmail () {
      emailjs.send('service_m78l7ou', 'template_vhmf57l',{email:this.email,name: this.name, subject: "FranklinSw consultas", text: this.mensaje})
        .then((result) => {
            console.log('SUCCESS!', result.status, result.text);
        }, (error) => {
            console.log('FAILED...', error);
        });
    }
  },
};
</script>

<style scoped>
.title {
  text-align: center;
  position: relative;
  height: 200px;
  width: 100%;
  padding-top: 2%;
  background-color: #4caf50;
  color: white;
}
#form-container {
  bottom: 50px;
  position: relative;
  background-color: rgb(233, 233, 233) !important;
  margin: auto !important;
  width: 50% !important;
  border: 1px rgb(190, 190, 190) solid;
}
.v-btn {
  background-color: #4caf50 !important;
  border-color: #4caf50 !important;
}
@media only screen and (max-width: 500px) {
  #form-container {
    width: 80% !important;
  }
  .title h2 {
    font-size: 26px;
  }
}
</style>
