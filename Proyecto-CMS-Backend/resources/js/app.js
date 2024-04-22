/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/*
// añadido nuevo
import {createApp} from 'vue';
import App from './App.vue';

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import PaginaComponent from './components/PaginaComponent.vue';

createApp(App).mount("#app");
createApp(Pagina).mount("#pagina");
*/
// eliminar para dejar paso a Vue 3
  window.Vue = require('vue');

/**
 const app = createApp(App);

 app.component('pagina-component', PaginaComponent);
 
 app.mount('#app');
*/

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));



// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Vue.component('pagina-component', require('./components/PaginaComponent.vue').default);


// Vue.component('tareas',require('./components/TareasComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */




const app = new Vue({
    el: '#app',
    
});

