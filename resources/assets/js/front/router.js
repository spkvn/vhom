import VueRouter from 'vue-router';
import App from './front.vue';
import ProjectRoutes from './projects/routes';

const routes = [
    {
        path : '',
        name : 'App',
        component : App,
        children: [
            ...ProjectRoutes,
        ]
    }
];

export default new VueRouter({
    mode: 'history',
    routes
})