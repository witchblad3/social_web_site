import moment from "moment";
import Avatar from "./avatar";
import Hat from "./hat";

export default class User {
    constructor(data) {
        this.data = data;
    }

    get id() {
        return this.data.id;
    }

    get first_name() {
        return this.data.first_name;
    }

    get last_name() {
        return this.data.last_name;
    }

    get birth_date() {
        if (this.data.birth_date === null) {
            return null;
        }
        let date = new Date(this.data.birth_date);
        //let date = new Date(this.data.birth_date).toLocaleString("ru", options);
        return moment(date).format('Y-MM-DD');
    }

    get rendered_birth_date() {
        let date = new Date(this.data.birth_date);
        return moment(date).format('DD.MM.Y');
    }

    set birth_date(val) {
        this.data.birth_date = val;
    }

    get created_at() {
        return this.data.created_at;
    }

    get email() {
        return this.data.email;
    }

    get login() {
        return this.data.login;
    }

    get is_admin() {
        return this.data.is_admin;
    }

    get is_verified() {
        return this.data.is_verified;
    }

    get about() {
        return this.data.about;
    }

    get avatar() {
        return new Avatar(this.data.avatar);
    }


    get hat() {
        return new Hat(this.data.hat);
    }

    set hat(value) {
        this.data.hat = value;
    }

    get subscriptions_count() {
        return this.data.subscriptions_count;
    }

    get i_am_subscribed() {
        return this.data.i_am_subscribed;
    }

    set i_am_subscribed(val) {
        this.data.i_am_subscribed = val;
    }

    get description() {
        return this.data.description;
    }
}
