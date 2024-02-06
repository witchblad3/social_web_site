export default class VueStoreRepository {

    constructor(vueStore) {
        this._vueStore = vueStore;
    }

    get vueStore() {
        return this._vueStore;
    }

}
