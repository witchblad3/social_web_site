import {createRouter, createWebHistory} from "vue-router";
import middlewarePipeline from "./middlewarePipeline";
import store from "./store";
import NotFound from "./components/errors/NotFound";

import settingsRoutes from './components/settings/routes';
import authRoutes from './components/auth/routes';
import profileRoutes from './components/profile/routes';
import newsRoutes from './components/news/routes';
import searchRoutes from './components/search/routes';

const routes = [
    ...authRoutes,
    ...profileRoutes,
    ...newsRoutes,
    ...settingsRoutes,
    ...searchRoutes,
    {
        path: '/404',
        name: '404_notfound',
        component: NotFound,
    },
    {
        path: "/:catchAll(.*)",
        redirect: {name: "404_notfound"}
    }
];

const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
});

router.beforeEach((to, from, next) => {
    if(!to.meta.middleware) {
        return next()
    }

    const middleware = to.meta.middleware

    const context = {
        to,
        from,
        next,
        store
    }

    return middleware[0] ({
        ...context,
        next: middlewarePipeline(context, middleware, 1)
    })
})

export default router;
