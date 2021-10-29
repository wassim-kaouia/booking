// ES6 Syntaxe to import
import VueRouter from "vue-router";
import Bookables from "./bookables/Bookables";
import Bookable from "./bookable/Bookable";

const routes = [
    {
        path: "/",
        component: Bookables,
        name:"bookables"
    },
    {
        path: "/bookable/:id",
        component: Bookable, 
        name:"bookable",
    }
]

const router = new VueRouter({
    routes, // short for `routes: routes`
    mode:'history'
  })
//export the vue-router to default so that the default can knowwhat route to choose
export default router;