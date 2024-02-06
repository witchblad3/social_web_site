import axios from "axios";
import {ApiErrorResponse, ApiResponse} from "../../helpers/http";

const state = {
    user: null,
    userLoggedIn: localStorage.getItem('access_token' || null) != null,
    access_token: localStorage.getItem('access_token' || null),
    refresh_token: localStorage.getItem('refresh_token' || null),
};

const actions = {
    async loginUser(ctx, payload) {
        let url = "/api/v1/auth";
        return new Promise((resolve, reject) => {
            axios.post(url, payload)
                .then(response => {
                    let access_token = response.data.access_token;
                    let refresh_token = response.data.refresh_token;
                    if (access_token && refresh_token) {
                        localStorage.setItem('access_token', access_token);
                        localStorage.setItem('refresh_token', refresh_token);
                        window.location.replace("/news");
                    } else {
                        console.log("something went wrong");
                    }
                    resolve(new ApiResponse(response));
                })
                .catch(error => {
                    reject(error.response);
                    //reject(new ApiErrorResponse(error.response));
                });
        });
    },

    logout(ctx, payload) {
        localStorage.removeItem('access_token');
        localStorage.removeItem('refresh_token');
        window.location.reload();
    }
};

const mutations = {
    setUser(state, data) {
        state.user = data;
    },
};

const getters = {
    user(state) {
        return state.user;
    },
    loggedIn(state) {
        return state.access_token != null;
    }
};

export default {
    namespaced: true,
    state,
    actions,
    mutations,
    getters
}
