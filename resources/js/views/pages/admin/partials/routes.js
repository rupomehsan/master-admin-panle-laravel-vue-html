import Layout from "./Layout.vue"
import Dashboard from "../Dashboard.vue"
import commom_crud_routes from "../crud/setup/route"
const routes = {
    path: 'admin',
    component: Layout,
    children: [
        {
            path: '',
            name: 'adminDashboard',
            component: Dashboard,
        },
        commom_crud_routes,
    ]
};


export default routes;
