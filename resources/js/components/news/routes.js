import Middleware from "../../middleware";
import News from "./News";


export default [
    {
        path: '/news',
        name: "news",
        component: News,
        meta: {
            middleware: [Middleware.auth]
        },
    },
]
