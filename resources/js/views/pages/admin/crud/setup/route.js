
import All from "../All.vue";
import Form from "../Form.vue";
import Layout from "../Layout.vue";

const routes =
{
    path: 'crud',
    component: Layout,
    children: [
        {
            path: '',
            name: "All",
            component: All,
        },
        {
            path: 'create',
            name: "Create",
            component: Form,
        },

    ]
};


export default routes;
