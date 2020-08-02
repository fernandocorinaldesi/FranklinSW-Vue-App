import Vue from 'vue'
import App from './App.vue'
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";
import  { BootstrapVue, BootstrapVueIcons } from 'bootstrap-vue';
import vuetify from './plugins/vuetify';




// import style




Vue.config.productionTip = false
Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)



new Vue({
  vuetify,
  render: h => h(App)
}).$mount('#app')
