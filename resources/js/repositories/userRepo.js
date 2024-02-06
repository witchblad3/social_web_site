import BaseRepository from "./base";
import User from "../models/user";

export default class UserRepository extends BaseRepository {
// todo: переделать тут, пробовать брать из стораджа, если там нет - запрос на сервер
    // async getCurrent() {
    //     if (this.vueStore.getters.user) {
    //         return Promise.resolve(this.vueStore.getters.user);
    //     }
    //
    //     return this.obtainCurrentUser();
    // }
    //
    // async obtainCurrentUser() {
    //     const response = await this.api.fetchCurrentUser();
    //     this.vueStore.commit('storeUser', response.body);
    //     return this.vueStore.getters.user;
    // }

    async getCurrentUser() {
        const response = await this.api.fetchCurrentUser();
        let user = new User(response.body.data);
        this.vueStore.commit('auth/setUser', user);
        return user;
        //return this.vueStore.getters.auth.user;
    }

}
