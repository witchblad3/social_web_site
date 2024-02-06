export class ApiResponse {

    constructor(response) {
        this.response = response;
    }

    get status() {
        return this.response.status;
    }

    get body() {
        return this.response.data;
    }
}

export class ApiErrorResponse extends ApiResponse {

    constructor(response) {
        super(response);
        this.message = this.body.message || '';
        this._errors = this.body.errors || {};
    }

    get errors() {
        let collection = [];

        for (const key of Object.keys(this._errors)) {
            let item = this._errors[key];

            if (item instanceof Array && item.length) {
                collection.push(item[0]);
            }
        }

        return collection;
    }
}
