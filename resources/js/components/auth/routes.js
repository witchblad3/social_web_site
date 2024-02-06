import Registration from "./Registration";
import Middleware from "../../middleware";
import Login from "./Login";

export default [
    {
        path: '/register',
        name: "register",
        component: Registration,
        meta: {
            middleware: [Middleware.already_logged]
        },
    },
    {
        path: '/signin',
        name: "auth",
        component: Login,
        meta: {
            middleware: [Middleware.already_logged]
        },
    },
]
