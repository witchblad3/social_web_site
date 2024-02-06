export default function ({next, store}){
    if(store.getters['auth/loggedIn'] === true){
        return next({
            name: 'currentUserProfile'
        });
    }
    return next();
}
