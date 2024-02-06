import SettingsMain from "./SettingsMain";
import AccountSettings from "./AccountSettings";
import Middleware from "../../middleware";
import PrivacySettings from "./PrivacySettings";

export default [
    {
        path: '/settings',
        component: SettingsMain,
        meta: {
            breadcrumb: 'Настройки',
        },
        children: [
            {
                path: '/settings/account',
                name: 'settings.account',
                component: AccountSettings,
                meta: {
                    middleware: [Middleware.auth]
                }
            },
            {
                path: '/settings/privacy',
                name: 'settings.privacy',
                component: PrivacySettings,
                meta: {
                    middleware: [Middleware.auth]
                }
            }
        ]
    }
]
