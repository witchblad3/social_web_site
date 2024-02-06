import Wallpost from "../models/wallpost";

export default class wallPostService {
    constructor(apiService) {
        this.api = apiService;
    }

    async createWallPost(formData) {
        let fd = new FormData();
        fd.append('text', formData.text);
        fd.append('wall_owner_id', formData.wall_owner_id);
        let response = await this.api.createWallPost(fd);
        return new Wallpost(response.response.data.wallpost);
    }

    async deleteWallPost(postId){
        let payload = {
            'id': postId
        };
        return await this.api.deleteWallPost(payload);
    }

    async getWallPosts(id) {
        let response = await this.api.getWallPosts(id);
        let posts = response.body.data;
        return posts.map(x => new Wallpost(x))
    }

    async setLike(postId) {
        let response = await this.api.setLike(postId);
        return new Wallpost(response.body.data);
    }

    async setDislike(postId) {
        let response = await this.api.setDislike(postId);
        return new Wallpost(response.body.data);
    }

    async createCommentOnPost(formData){
        let response = await this.api.createCommentOnPost(formData);
        console.log(response)
        return new Comment(response.body.data);
    }

}
