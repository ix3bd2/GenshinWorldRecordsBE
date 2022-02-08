import Vue from 'vue'
import App from './App.vue'
import characterRoutes from './router/character';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import character from './store/modules/character/';
import homePage from './components/home/HomePage.vue';
import patchchar from './store/modules/patchchar/';
import AOS from 'aos'
import 'aos/dist/aos.css'
import weaponRoutes from './router/weapon';
import weapon from './store/modules/weapon/';

Vue.use(Vuex)
Vue.use(VueRouter)

// Add routes to VueRouter

const routes = [

    ...characterRoutes,
    ...weaponRoutes,
    { path: '/', name: 'Home', component: homePage },


]

const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior() {
        return { x: 0, y: 0 };
    },

})

export const store = new Vuex.Store({
    // ...
    modules: {
        character,
        patchchar,
        weapon
    }
});
new Vue({
    store: store,
    router,
    mounted() {
        AOS.init()
    },
    render: h => h(App),
}).$mount('#app')