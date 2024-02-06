import User from "../models/user";

export default class SearchService {

    constructor(apiService) {
        this.api = apiService;
    }

    async getUsersBySearch(payload){
        let response = await this.api.getUsersBySearch(payload);
        let data = response.body.data;

        return data.map(x => new User(x));
    }
}
