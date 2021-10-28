// ES6 Syntaxe to import
import VueRouter from "vue-router";
import ExampleComponent from "./components/ExampleComponent";
import Bookables from "./bookables/Bookables";


const routes = [
    {
        path: "/first",
        component: ExampleComponent,
        name:'first'
    },
    {
        path: "/second",
        component: Bookables,
        name:'second',
    }
]

const router = new VueRouter({
    routes, // short for `routes: routes`
    mode:'history'
  })

//export the vue-router to default so that the default can knowwhat route to choose
export default router;