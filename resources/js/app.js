require('./bootstrap');
import router from "./routes";
import VueRouter from "vue-router";
import Vue from "vue";


//import the local vue
import Index from "./Index";

// makes vue available in all components 
window.Vue = require('vue').default;

//register globally the components
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('example2', require('./components/Example2.vue').default);

//every vue will have access to vue-router properties 
Vue.use(VueRouter);

//attach vue to the app id of the page
const app = new Vue({
    el: '#app',
    router:router,
    components:{
        indexx:Index,
    },
});
