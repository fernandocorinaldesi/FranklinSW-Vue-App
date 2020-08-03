<template>
  <v-container fluid>
    <div class="title">
      <h2>
        ¿En qué podemos ayudarte?
      </h2>
      <h2>
        ¡Estamos para asesorarte!
      </h2>
    </div>
    <v-row id="form-container">
      <v-col cols="12">
        <v-form ref="form" v-model="valid" :lazy-validation="lazy">
          <v-text-field v-model="name" :counter="20" :rules="nameRules" label="Name" required></v-text-field>

          <v-text-field v-model="email" :rules="emailRules" label="E-mail" required></v-text-field>
          <v-textarea v-model="mensaje" :rules="mensajeRules" label="Mensaje" required></v-textarea>

          <v-btn :disabled="!valid" color="success" class="mr-4 mt-4" @click="validate">
            Enviar
          </v-btn>
          <v-btn color="success" class="mr-4 mt-4" @click="reset">
            Reset
          </v-btn>
        </v-form>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data: () => ({
    valid: true,
    name: "",
    nameRules: [(v) => !!v || "Debe ingresar un nombre", (v) => (v && v.length <= 20) || "El nombre debe tener menos de 20 caracteres"],
    email: "",
    emailRules: [(v) => !!v || "De ingresar un mail válido", (v) => /.+@.+\..+/.test(v) || "El mail debe ser valido"],
    mensaje:"",
    mensajeRules: [(v) => !!v || "Debe ingresar un mensaje"],
    select: null,
    lazy: false,
  }),
  methods: {
    validate() {
      // this.$refs.form.validate();
      alert("Enviado")
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    },
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
@media only screen and (max-width: 500px){
  #form-container {
  width: 80% !important;
  
}
.title h2{
  font-size: 26px;
}
}
</style>
