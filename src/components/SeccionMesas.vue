<template>
  <div>
   <SeccionMesasTitulo  v-bind:titulo="titulo" v-bind:detalle="detalle"/>
   <SeccionMesasDetalle titulo="Mesas ratonas" v-bind:medidas="medidasratonas"/>
   <MesaBase v-bind:datamesa="dataratona"/>
   <SeccionMesasDetalle titulo="Mesas de living" v-bind:medidas="medidasliving"/>
   <MesaBase v-bind:datamesa="dataliving"/>
  </div>
</template>

<script>
import mesasratonas from "@/assets/json/mesasratonas.json";
import mesasliving from "@/assets/json/mesasliving.json";
import medidasliving from "@/assets/json/medidasliving.json";
import medidasratonas from "@/assets/json/medidasratonas.json";
import MesaBase from "./MesasBase"
import SeccionMesasDetalle from "./DetalleBase";
import SeccionMesasTitulo from "./TituloBase"
export default {
 name:"SeccionMesas",
 data() {
    return {
     dataratona:mesasratonas,
     dataliving:mesasliving,
     medidasratonas:medidasratonas,
     medidasliving:medidasliving,
     titulo:"Patas de mesa",
     detalle:"Hierro natural-pintado en horno por franklin.steelnwood"
    };
  },
  components: {
   MesaBase,
   SeccionMesasDetalle,
   SeccionMesasTitulo
  },
}
</script>

<style>

</style>