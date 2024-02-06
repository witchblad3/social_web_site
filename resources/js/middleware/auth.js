export default function ({next, store}) {
    if(store.getters['auth/loggedIn'] === false){
        return next({
            name: 'auth'
        });
    }
    return next();
}
