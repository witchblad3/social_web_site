<template>
    <div id="main" v-if="ready">
        <header-layout v-if="user != null && is_header_hide === false" :user="user"></header-layout>
        <router-view @updateUserInfo="updateUserInfo" @hideHeader="hideHeader" @showHeader="showHeader"></router-view>
<!--        <div v-if="loggedIn"> footer</div>-->
    </div>
</template>

<script>
import LoginService from "../services/LoginService";
import ApiService from "../services/api";
import UserService from "../services/userService";
import UserRepository from "../repositories/userRepo";
import HeaderLayout from "./layouts/HeaderLayout";
import wallPostService from "../services/wallPostService";
import SearchService from "../services/searchService";
import ModalService from "../services/modalService";


const apiService = new ApiService();
export default {
    name: "MainComponent",
    components: {
        'header-layout': HeaderLayout
    },
    provide() {
        return {
            loginService: new LoginService(apiService),
            userService: new UserService(apiService),
            wallPostService: new wallPostService(apiService),
            searchService: new SearchService(apiService),
            modalService: new ModalService()

        }
    },
    data() {
        return {
            user: null,
            ready: false,
            is_header_hide: false
        }
    },
    computed: {
        loggedIn() {
            return this.$store.getters['auth/loggedIn'];
        }
    },
    methods: {
        hideHeader(){
            this.is_header_hide = true;
        },
        showHeader(){
            this.is_header_hide = false;
        },
        async initUser() {
            const userRepo = new UserRepository(this.$store, apiService);


            try {
                this.user = await userRepo.getCurrentUser();
                this.ready = true;
            } catch (error) {
                this.ready = false;
                this.$store.dispatch('auth/logout');
                //this.handleInitUserError(error);
            }
        },
        async updateUserInfo() {
            await this.initUser();
        }
        // handleInitUserError(error) {
        //     // todo: тут поправить, это чтобы передать ошибку в компонент авторизации
        //     return;
        //     if (403 === error.response.status || 422 === error.response.status) {
        //         this.$router.push({name: 'auth.login', params: {forbiddenMessage: error.message}});
        //     }
        // }
    },
    async created() {
        if (this.loggedIn) {
            await this.initUser();
        }
        this.ready = true;
    }
}
</script>
