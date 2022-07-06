import vue from "vue";
import VueRouter from "vue-router";
import axios from "axios";
import VueAxios from "vue-axios";
import { routes } from "./app/routes";
import App from "./app/layouts/App";

window.Vue = vue;
Vue.use(VueAxios, axios);
Vue.use(VueRouter);

const router = new VueRouter({
    routes,
    mode: "history",
});

const app = new Vue({
    el: "#app",
    router: router,
    render: (h) => h(App),
});
