import User from "../models/user";
import Hat from "../models/hat";

export default class UserService {

    constructor(apiService) {
        this.api = apiService;
    }

    async getUserById(id) {
        let response = await this.api.getUserById(id);
        return new User(response.body.data);
    }

    async updateUserData(payload) {
        let formData = new FormData();
        for (let elem in payload) {
            formData.append(elem, payload[elem]);
        }
        let response = await this.api.updateUser(formData);
        return new User(response.body.user);
    }

    async subscribeToUser(payload) {
        return await this.api.subscribeOnUser(payload);
    }

    async updateUserHat(payload){
        let formData = new FormData();
        formData.append('hat', payload.hat);
        let response = await this.api.updateUserHat(formData);
        return new Hat(response.body.data);
    }
}
