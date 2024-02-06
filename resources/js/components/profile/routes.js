import Profile from "./Profile";
import Middleware from "../../middleware";


export default [
    {
        path: '/profile/:id',
        name: "profile",
        component: Profile,
        meta: {
            middleware: [Middleware.auth]
        },
    },
    {
        path: '/me',
        name: "currentUserProfile",
        component: Profile,
        meta: {
            middleware: [Middleware.auth]
        }
    },
]
