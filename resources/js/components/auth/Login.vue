<template>
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <div class="card p-5">
                    <h3 class="card-title text-center mb-4">Войти в свой аккаунт на "Яблочко в капусте"</h3>

                    <div v-if="has_errors" class="alert alert-danger">
                        <p v-for="error in this.messages" class="text-dark mb-0">
                            {{error}}
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" v-model="user.email" name="email" type="text" placeholder="Введите ваш email">
                    </div>

                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input id="password" class="form-control" v-model="user.password" name="password" type="password" placeholder="Введите ваш пароль">
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-primary btn-block" type="submit" @click="submitForm">Войти</button>
                    </div>

                    <div class="form-group text-center">
                        <router-link class="link-info" :to="{name: 'register'}">Зарегистрироваться на "Яблочко в капусте"</router-link>
                    </div>

                    <hr class="my-4">

                    <div class="text-center">
                        <a href="#" class="text-decoration-none">Забыли пароль?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>




<script>
export default {
    name: "Login",
    inject: ['loginService'],
    data() {
        return {
            user: {
                email: "",
                password: "",
            },
            has_errors: false,
            messages: []
        }
    },
    methods: {
        async submitForm() {
            try {
                this.messages = [];

                // Валидация формы на стороне клиента
                const email = this.user.email.trim();
                const password = this.user.password.trim();
                if (!email || !password) {
                    return;
                }

                await this.$store.dispatch("auth/loginUser", this.user);
            } catch (error) {
                this.has_errors = true;
                this.messages.push(error.data.error);
            }
        },
    }
}
</script>
