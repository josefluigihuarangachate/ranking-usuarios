import Vue from "vue";
import VueRouter from "vue-router";


//? componentes para el admin
import Home from "./pages/home/Home.vue";

Vue.use(VueRouter);

export const routes = [
    {
        path: "/",
        component: Home,
    }
];
