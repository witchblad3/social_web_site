import Middleware from "../../middleware";
import SearchMain from "./SearchMain";
import SearchPeople from "./SearchPeople";

export default [
    {
        path: '/search',
        component: SearchMain,
        meta: {
            breadcrumb: 'Поиск',
        },
        children: [
            {
                path: '/search',
                name: 'search',
                component: SearchPeople,
                meta: {
                    middleware: [Middleware.auth]
                }
            },
        ]
    }
]
