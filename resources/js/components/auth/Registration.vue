<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-3 w-50 p-5">
                <form @submit.prevent="submitForm">
                    <div>
                        <h1>Регистрация</h1>

                        <div v-if="has_errors" class="alert alert-danger">
                            <p v-for="error in this.messages" class="text-dark">
                                {{error}}
                            </p>
                        </div>

                        <div v-if="success" class="alert alert-success text-dark">
                            <p class="text-dark mb-0">
                                {{ messages[0] }}
                            </p>
                        </div>


                        <div class="input-group mb-2">
                            <input class="form-control" v-model="user.first_name" name="first_name" type="text"
                                   placeholder="Имя"/>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control" v-model="user.last_name" name="last_name" type="text"
                                   placeholder="Фамилия"/>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control" v-model="user.login" name="login" type="text"
                                   placeholder="Логин"/>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control" v-model="user.email" name="email" type="text"
                                   placeholder="Почта"/>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control" v-model="user.password" name="password" type="password"
                                   placeholder="Пароль"/>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control" v-model="user.password_confirm" name="rep_password"
                                   type="password" placeholder="Повтори пароль"/>
                        </div>
                        <div class="input-group mb-2">
                            <router-link :to="{name: 'auth'}" class="link-info">Авторизоваться</router-link>
                        </div>
                        <div class="input-group mb-2">
                            <button class="btn btn-info" type="submit">Регистрация</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <loader v-if="loading"></loader>
    </div>
</template>

<script>
import Loader from "../layouts/Loader";

export default {
    name: "Registration",
    inject: ['loginService'],
    components: {
        'loader': Loader
    },
    title: 'Регистрация',
    data() {
        return {
            user: {
                first_name: "",
                last_name: "",
                login: "",
                email: "",
                password: "",
                password_confirm: ""
            },
            success: false,
            has_errors: false,
            messages: [],
            loading: false
        }
    },
    methods: {
        async submitForm() {
            try {
                this.messages = [];
                this.setLoading();

                let response = await this.loginService.registerUser(this.user);
                let res = response.body;

                if (res.error) {
                    this.success = false;
                    this.has_errors = true;
                    this.messages.push("Произошла ошибка при регистрации, попробуйте позже");
                } else {
                    this.success = true;
                    this.has_errors = false;
                    this.messages.push("Регистрация прошла успешно");
                }
            } catch (error) {
                let errors = error.response.data.errors;
                this.setErrorMessages(errors);
            } finally {
                this.removeLoading();
            }
        },
        setErrorMessages(errors){
            this.messages = [];
            this.success = false;
            this.has_errors = true;
            for (let i in errors) {
                for (let j in errors[i]) {
                    this.messages.push(errors[i][j]);
                }
            }
        },
        setLoading(){
            this.loading = true;
        },
        removeLoading(){
            this.loading = false;
        }
    },
}
</script>
