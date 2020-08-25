<template>
  <div>
    <center>
      <h2 class="titulo">{{titulo}}</h2>
      <p class="detalle">{{detalle}}</p>
    </center>
  </div>
</template>

<script>
export default {
  name: "TituloBase",
  props: ['titulo','detalle'],
};
</script>

<style>
.titulo {
  display: inline-block;
  color: black;
  border-bottom: #5cb85c 2px solid;
  margin-top: 10%;
}
.detalle{
  width: 80%;
}
</style>
