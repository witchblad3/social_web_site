<template>
    <div class=" vstack gap-4">
        <div class="tab-pane fade active show">
            <div class="card mb-4">
                <div class="card-header border-0 pb-0">
                    <h5>Поиск</h5>
<!--                    <span>тут настройки приватоcсти</span>-->
                </div>
                <div class="card-body">
                    <form @submit.prevent="submitForm">
                        <div style="display: inline-flex;width: 100%;" class="form-group mb-2">
<!--                            <label for="first_name">Имя</label>-->
                            <input v-model="search_text" type="text" class="form-control" id="first_name" title="Имя"/>
                            <button @click.prevent="submitForm" type="button" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="tab-pane fade active show">
            <div class="card mb-4">
                <div class="card-header border-0 pb-0">
                    <h5>Поиск</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                                <table class="table manage-candidates-top mb-0">
                                    <tbody>
<!--                                    todo: вынести в отдельный айтем-->
                                    <tr v-if="users.length > 0" v-for="user in users" class="candidates-list">
                                        <td class="title">
                                            <div class="thumb">
                                                <img style="width: 110px;height: 110px;"
                                                     class="avatar-img rounded-circle border border-white border-3"
                                                     :src="user.avatar.path" alt="">
                                            </div>
                                            <div class="candidate-list-details">
                                                <div class="candidate-list-info">
                                                    <div class="candidate-list-title">
                                                        <h5 class="mb-0">
                                                            <router-link :to="`/profile/`+user.id">{{user.first_name}} {{user.last_name}}
                                                            </router-link>
                                                            <i v-if="user.is_verified" class="bi bi-patch-check-fill text-primary small"></i>
                                                            <div v-if="user.is_admin" class="h6" style="display: inline; padding: 5px; width: 5%; height: 10%">
                                                                <span style="background: #3434efbd;" class="badge badge-primary h6">developer</span>
                                                            </div>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="justify-content: center; text-align: center; align-items: center; align-content: center; margin: 0 auto; padding: 30px; width: 15%;">
                                            25 подписчиков
                                        </td>
                                        <td style="justify-content: center; text-align: center; align-items: center; align-content: center; margin: 0 auto; padding: 30px; width: 15%;">
                                            <button class="btn btn-primary me-2">
                                                Подписаться
                                            </button>
<!--                                            <button class="btn btn-light">-->
<!--                                                подписан-->
<!--                                            </button>-->
                                        </td>
<!--                                        <td>-->
<!--                                            <ul class="list-unstyled mb-0 d-flex justify-content-end">-->
<!--                                                <li><a href="#" class="text-primary" data-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>-->
<!--                                                <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>-->
<!--                                                <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>-->
<!--                                            </ul>-->
<!--                                        </td>-->
                                    </tr>
                                    <tr v-else>
                                        <img src="https://www.meme-arsenal.com/memes/c00af80a80f31bb3d6ca07553f7795e7.jpg" alt="ing" />
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <loader v-if="loading"></loader>
    </div>
</template>

<script>
import Loader from "../layouts/Loader";

export default {
    name: "SearchPeople",
    title: "Поиск",
    inject: ['searchService'],
    components: {
        'loader': Loader,
    },
    data(){
        return{
            search_text: "",
            loading: false,
            users: []
        }
    },
    methods:{
        setLoading(){
            this.loading = true;
        },
        removeLoading(){
            this.loading = false;
        },
        async submitForm(){
            this.search_text = this.search_text.trim();
            if(this.search_text.length === 0){
                return;
            }

            let data = {
                'search_text': this.search_text
            };
            this.setLoading();
            try{
                this.users = await this.searchService.getUsersBySearch(data);
            }catch (error){
                console.log(error)
            }finally {
                this.removeLoading();
            }
        }
    }
}
</script>
