<template>
    <div class="col-lg-6 vstack gap-4">
        <div class="tab-pane fade active show">
            <div class="card mb-4">
                <div class="card-header border-0 pb-0">
                    <div v-if="success" class="alert alert-success" role="alert">
                        Данные профиля успешно изменены
                    </div>
                    <div v-if="fail" class="alert alert-danger" role="alert">
                        {{ errorMessage }}
                    </div>
                    <h5>Настройки аккаунта</h5>
                    <span>Здесь можно изменить основные настройки и информацию профиля</span>
                </div>

                <div class="card-body">
                    <form @submit.prevent="updateUser">
                        <div class="form-group mb-2">
                            <label for="first_name">Имя</label>
                            <input v-model="dataToUpdate.first_name" type="text" class="form-control" id="first_name"
                                   title="Имя"/>
                        </div>
                        <div class="form-group mb-2">
                            <label for="last_name">Фамилия</label>
                            <input v-model="dataToUpdate.last_name" type="text" class="form-control" id="last_name"
                                   title="Фамилия"/>
                        </div>
                        <div class="form-group mb-2">
                            <label for="login">Логин</label>
                            <input v-model="dataToUpdate.login" type="text" class="form-control" id="login"
                                   title="Логин"/>
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">Email address</label>
                            <input v-model="dataToUpdate.email" type="email" class="form-control"
                                   id="exampleInputEmail1" aria-describedby="emailHelp"/>
                            <!--                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                        </div>
                        <div class="form-group mb-2">
                            <label for="bdate">Дата рождения</label>
                            <input v-model="dataToUpdate.birth_date" type="date" min="1970-01-01" max="2023-01-01"
                                   class="form-control" id="bdate" title="Дата рождения"/>
                        </div>
                        <div class="form-group mb-2">
                            <label for="avatar">Аватар</label>
                            <input type="file" ref="images"
                                   class="form-control" id="avatar" title="Аватар"
                                   @change="setFiles" name="images-upload"
                                   accept="image/png, image/jpeg, image/jpg"/>
                            <div v-if="imagePreview != null" style="margin: 15px;">
                                <img :src="this.imagePreview" class="float-left" alt="Аватар"
                                     style="width: 150px; height: 150px; border: 1px solid black; border-radius: 50%;"
                                >
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">Описание</label>
                            <textarea v-model="dataToUpdate.description" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label for="new_pass">Новый пароль</label>
                            <input v-model="user_password" type="password" class="form-control" id="new_pass"/>
                        </div>
                        <div class="form-group mb-2">
                            <label for="new_pass_again">Новый пароль еще раз</label>
                            <input v-model="user_password_confirm" type="password" class="form-control"
                                   id="new_pass_again"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        <div class="form-group mb-2 mt-5">
                            <button @click.prevent="deleteProfile" type="submit" class="btn btn-danger">Удалить
                                профиль
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <loader v-if="loading"></loader>
    </div>
</template>

<script>
import Loader from "../layouts/Loader";
import User from "../../models/user";

export default {
    name: "AccountSettings",
    title: "Настройки аккаунта",
    inject: ['userService'],
    components: {
        'loader': Loader
    },
    data() {
        return {
            loading: false,
            file: null,
            imagePreview: null,
            user_password: "",
            user_password_confirm: "",
            dataToUpdate: {},
            success: false,
            fail: false,
            errorMessage: ""
        }
    },
    computed: {
        formData() {
            return {
                first_name: this.dataToUpdate.first_name,
                last_name: this.dataToUpdate.last_name,
                login: this.dataToUpdate.login,
                description: this.dataToUpdate.description,
                email: this.dataToUpdate.email,
                birth_date: this.dataToUpdate.birth_date,
                avatar: this.file,
                password: this.user_password,
                password_confirm: this.user_password_confirm
            }
        }
    },
    methods: {
        async updateUser() {
            //todo: добавить валидацию
            this.fail = false;
            this.success = false;
            try {
                this.setLoading();
                let updatedUser = await this.userService.updateUserData(this.formData);
                this.success = true;
                this.$emit('updateUser');
            } catch (error) {
                this.success = false;
                this.fail = true;
                this.errorMessage = error.message;
                console.log(error);
            } finally {
                this.removeLoading();
            }
        },
        deleteProfile() {
            let confirmed = confirm('Вы действительно хотите удалить профиль?');
            if (confirmed) {
                console.log('логика по удалению профиля');
            }

        },
        async setFiles(event) {
            this.file = this.$refs.images.files[0];
            let reader = new FileReader();
            reader.addEventListener("load", function () {
                this.imagePreview = reader.result;
            }.bind(this), false);
            if (this.file) {
                reader.readAsDataURL(this.file);
            }
        },
        setLoading() {
            this.loading = true;
        },
        removeLoading() {
            this.loading = false;
        },
        getUser() {
            return new User(Object.assign({}, this.$store.getters['auth/user'].data));
        },
        async initComponent() {
            let user = await this.getUser();
            this.dataToUpdate.first_name = user.first_name;
            this.dataToUpdate.last_name = user.last_name;
            this.dataToUpdate.login = user.login;
            this.dataToUpdate.email = user.email;
            this.dataToUpdate.birth_date = user.birth_date;
            this.dataToUpdate.description = user.description;
        }
    },
    async created() {
        await this.initComponent();
    }
}
</script>
