import moment from "moment";

export default class Comment {
    constructor(data) {
        this.data = data;
    }

    get id() {
        return this.data.id;
    }

    get text(){
        return this.data.text;
    }

    get comment_creator(){
        return this.data.comment_creator;
    }

    get created_at(){
        return moment(new Date(this.data.created_at)).format('DD.MM.Y H:m');
    }
}
