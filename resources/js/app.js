import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHashHistory } from 'vue-router';

import App from './views/App.vue';
import admin_routes from './views/pages/admin/partials/routes.js'

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        {
            path: "/",
            component: App,
            children: [
                admin_routes,
            ]
        },
    ]
})

const app = createApp({});
app.component('app', App);
app.use(router);
app.mount('#app');
