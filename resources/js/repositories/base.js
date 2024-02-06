import VueStoreRepository from "./vue-store";

export default class BaseRepository extends VueStoreRepository {

    constructor(vueStore, apiService) {
        super(vueStore);
        this._api = apiService;
    }

    get api() {
        return this._api;
    }
}
