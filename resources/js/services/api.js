import {ApiErrorResponse, ApiResponse} from "../helpers/http";

export default class ApiService {
    async setHat(){

    }
    async setLike(postId){
        let url = `/like/${postId}`;
        return this.create(url);
    }

    async setDislike(postId){
        let url = `/dislike/${postId}`;
        return this.create(url);
    }

    async createCommentOnPost(payload){
        let url = "/post/comment";
        return this.create(url, payload);
    }

    async fetchCurrentUser() {
        let url = "/profile/me";
        return this.fetch(url);
    }

    async getWallPosts(id) {
        let url = `/get_wall_posts/${id}`;
        return this.fetch(url)

    }

    async createWallPost(formData) {
        let url = "/create_wall_post";
        return this.createFromFormData(url, formData);
    }

    async deleteWallPost(payload) {
        let url = "/delete_wall_post";
        return this.change(url, payload);
    }

    async getUserById(id) {
        let url = `/profile/${id}`;
        return await this.fetch(url);
    }

    async updateUser(formData) {
        let url = "/profile/update";
        return this.createFromFormData(url, formData);
    }

    async updateUserHat(formData) {
        let url = "/profile/updateHat";
        return await this.createFromFormData(url, formData);
    }

    async getUsersBySearch(payload){
        let url = "/search/get_users";
        return this.fetch(url, payload);
    }

    async subscribeOnUser(payload){
        let url = "/subscribe";
        return this.create(url, payload);
    }

    async fetch(url, queryParams = {}) {
        let params = {params: queryParams};
        return new Promise((resolve, reject) => {
            axios.get(url, params).then(response => {
                resolve(new ApiResponse(response));
            }).catch(error => {
                reject(new ApiErrorResponse(error.response));
            });
        });
    }

    async create(url, params) {
        return new Promise((resolve, reject) => {
            axios.post(url, params).then(response => {
                resolve(new ApiResponse(response));
            }).catch(error => {
                reject(new ApiErrorResponse(error.response));
            });
        });
    }

    async change(url, params) {
        return new Promise((resolve, reject) => {
            axios.patch(url, params).then(response => {
                resolve(new ApiResponse(response));
            }).catch(error => {
                reject(new ApiErrorResponse(error.response));
            });
        });
    }

    async delete(url) {
        return new Promise((resolve, reject) => {
            axios.delete(url).then(response => {
                resolve(new ApiResponse(response));
            }).catch(error => {
                reject(new ApiErrorResponse(error.response));
            });
        });
    }

    async createFromFormData(url, formData) {
        let config = {headers: {'Content-Type': 'multipart/form-data'}};
        return new Promise((resolve, reject) => {
            axios.post(url, formData, config).then(response => {
                resolve(new ApiResponse(response));
            }).catch(error => {
                reject(new ApiErrorResponse(error.response));
            });
        });
    }
}
