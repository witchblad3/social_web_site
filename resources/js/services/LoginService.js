export default class LoginService {
    constructor(apiService) {
        this.api = apiService;
    }

    async registerUser(formData) {
        let url = "/register";
        return this.api.create(url, formData);
    }
}
