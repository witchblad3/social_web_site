import User from "./user";
import Comment from "./comment";

export default class Wallpost {
    constructor(data) {
        this.data = data;
    }

    get id() {
        return this.data.id;
    }

    get text() {
        return this.data.text;
    }

    get dislikes_count() {
        return this.data.dislikes_count
    }

    set dislikes_count(value) {
        this.data.dislikes_count = value;
    }

    get likes_count() {
        return this.data.likes_count
    }

    set likes_count(value) {
        this.data.likes_count = value;
    }

    get liked_by_me() {
        return this.data.liked_by_me;
    }

    set liked_by_me(value) {
        this.data.liked_by_me = value;
    }

    get disliked_by_me() {
        return this.data.disliked_by_me;
    }

    set disliked_by_me(value) {
        this.data.disliked_by_me = value;
    }

    get post_creator() {
        return new User(this.data.post_creator);
    }

    get comments(){
        return this.data.comments.data.map(x => new Comment(x));
        // return new Comment(this.data)
    }
}
