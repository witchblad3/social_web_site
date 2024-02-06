<template>
    <main>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 vstack gap-4">
                    <div class="card">
                        <div class="h-200px rounded-top"
                             @mouseenter="showButton()"
                             @mouseleave="hideButton()"
                             :style="`background-image: url(${user.hat.path});`"
                             style="background-position: center; background-size: cover; background-repeat: no-repeat;">
                            <button type="button" id="changeHeader" style="display:none"
                                    class="form-control" data-bs-toggle="modal" data-bs-target="#avatarHatModal">
                                Изменить картинку
                            </button>
                        </div>
                        <div class="card-body py-0">
                            <div class="d-sm-flex align-items-start text-center text-sm-start">
                                <div>
                                    <div class="avatar avatar-xxl mt-n5 mb-3">
                                        <img v-if="user.avatar"
                                             class="avatar-img rounded-circle border border-white border-3"
                                             :src="user.avatar.path"
                                             alt="Avatar">
                                    </div>
                                </div>
                                <div class="ms-sm-4 mt-sm-3">
                                    <h1 class="mb-0 h5">{{ user.first_name }} {{ user.last_name }}
                                        <i v-if="user.is_verified"
                                           class="bi bi-patch-check-fill text-primary small"></i>
                                        <div v-if="user.is_admin" class="h6"
                                             style="display: inline; padding: 5px; width: 5%; height: 10%">
                                            <span style="background: #3434efbd;" class="badge badge-primary h6">developer</span>
                                        </div>
                                    </h1>
                                    <p>@{{ user.login }}</p>
                                    <!--                                    <p>0 Подписчиков</p>-->
                                </div>
                                <div class="d-flex mt-3 justify-content-center ms-sm-auto">
<!--                                    <router-link v-if="i_am_profile_owner"  class="btn btn-danger-soft me-2"-->
<!--                                                 type="button">-->
<!--                                        <i class="bi bi-pencil-fill pe-1"></i>-->
<!--                                        Редактировать профиль-->
<!--                                    </router-link>-->
                                    <button v-if="!i_am_profile_owner && user.i_am_subscribed === false" @click.prevent="subscribe" class="btn btn-primary me-2">
                                        Подписаться
                                    </button>
                                    <button v-if="!i_am_profile_owner && user.i_am_subscribed === true" class="btn btn-light me-2">
                                        <li class="fa fa-check"></li>
                                    </button>
                                    <div v-if="i_am_profile_owner" class="dropdown">
                                        <!--                                        data-bs-toggle="dropdown" aria-expanded="false"-->
                                        <router-link :to="{name: 'settings.account'}" class="icon-md btn btn-light"
                                                     type="button" id="profileAction2">
                                            <!--                                            <i class="bi bi-three-dots"></i>-->
                                            <i class="bi bi-gear fa-fw pe-2"></i>
                                        </router-link>
                                        <!--                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileAction2">-->
                                        <!--                                            &lt;!&ndash;                                            <li><a class="dropdown-item"&ndash;&gt;-->
                                        <!--                                            &lt;!&ndash;                                                   href="https://social.webestica.com/my-profile.html#"> <i&ndash;&gt;-->
                                        <!--                                            &lt;!&ndash;                                                class="bi bi-bookmark fa-fw pe-2"></i>Share profile in a message</a>&ndash;&gt;-->
                                        <!--                                            &lt;!&ndash;                                            </li>&ndash;&gt;-->
                                        <!--                                            &lt;!&ndash;                                            <li><a class="dropdown-item"&ndash;&gt;-->
                                        <!--                                            &lt;!&ndash;                                                   href="https://social.webestica.com/my-profile.html#"> <i&ndash;&gt;-->
                                        <!--                                            &lt;!&ndash;                                                class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save your profile to&ndash;&gt;-->
                                        <!--                                            &lt;!&ndash;                                                PDF</a></li>&ndash;&gt;-->
                                        <!--                                            <li>-->
                                        <!--                                                <a class="dropdown-item"-->
                                        <!--                                                   href="https://social.webestica.com/my-profile.html#">-->
                                        <!--                                                    <i class="bi bi-lock fa-fw pe-2"></i>-->
                                        <!--                                                    Lock profile-->
                                        <!--                                                </a>-->
                                        <!--                                            </li>-->
                                        <!--                                            <li>-->
                                        <!--                                                <hr class="dropdown-divider">-->
                                        <!--                                            </li>-->
                                        <!--                                            <li>-->
                                        <!--                                                <a class="dropdown-item"-->
                                        <!--                                                   href="https://social.webestica.com/my-profile.html#">-->
                                        <!--                                                    <i class="bi bi-gear fa-fw pe-2"></i>-->
                                        <!--                                                    Profile settings-->
                                        <!--                                                </a>-->
                                        <!--                                            </li>-->
                                        <!--                                        </ul>-->
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline mb-0 text-center text-sm-start mt-3 mt-sm-0">
                                <li class="list-inline-item">
<!--                                    <i class="bi bi-briefcase me-1"></i>-->
                                    {{ user.description }}
                                </li>
<!--                                <li class="list-inline-item"><i class="bi bi-geo-alt me-1"></i> New Hampshire</li>-->
<!--                                <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> Joined on Nov 26,-->
<!--                                    2019-->
<!--                                </li>-->
                            </ul>
                        </div>
                        <div class="card-footer mt-3 pt-2 pb-0">
                            <ul class="nav nav-bottom-line align-items-center justify-content-center justify-content-md-start mb-0 border-0">
                                <li class="nav-item">
                                    <a class="nav-link active"
                                       href="https://social.webestica.com/my-profile.html">
                                        Посты
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="#" onclick="return false;">
                                        Подписчкики
                                        <span class="badge bg-success bg-opacity-10 text-success small">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="#"
                                       onclick="return false;">
                                        Подписки
                                        <span class="badge bg-success bg-opacity-10 text-success small">{{user.subscriptions_count}}</span>
                                    </a>
                                </li>
                                <!--                                <li class="nav-item"><a class="nav-link"-->
                                <!--                                                        href="https://social.webestica.com/my-profile-media.html">-->
                                <!--                                    Media</a>-->
                                <!--                                </li>-->
                                <!--                                <li class="nav-item"><a class="nav-link"-->
                                <!--                                                        href="https://social.webestica.com/my-profile-videos.html">-->
                                <!--                                    Videos</a>-->
                                <!--                                </li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="card card-body">
                        <div class="d-flex mb-3">
                            <!--                            <div class="avatar avatar-xs me-2">-->
                            <!--                                <a href="https://social.webestica.com/my-profile.html#">-->
                            <!--                                    <img v-if="me.avatar" class="avatar-img rounded-circle"-->
                            <!--                                         :src="me.avatar.path"-->
                            <!--                                         alt=""> </a>-->
                            <!--                            </div>-->
                            <form @keyup.enter="createWallPost" class="w-100">
                                <!--                                 data-bs-toggle="modal" data-bs-target="#modalCreateFeed"-->
                                <textarea v-model="postText"
                                          class="form-control pe-4 border-0"
                                          placeholder="Напишите что-нибудь">
                                </textarea>

                            </form>
                        </div>
                        <ul class="nav nav-pills nav-stack small fw-normal">
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0"
                                   href="#" data-bs-toggle="modal"
                                   data-bs-target="#feedActionPhoto"> <i class="bi bi-image-fill text-success pe-2"></i>Photo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0"
                                   href="#" data-bs-toggle="modal"
                                   data-bs-target="#feedActionVideo">
                                    <i class="bi bi-camera-reels-fill text-info pe-2"></i>Video</a>
                            </li>
                            <li class="nav-item">
                                <button @click.prevent="createWallPost" type="button"
                                        class="nav-link bg-success text-light py-1 px-2 mb-0">Опубликовать
                                </button>
                            </li>
                        </ul>
                    </div>

                    <wall-post v-if="posts.length > 0" @onPostDelete="onPostDelete" v-for="item in posts"
                               :post="item"></wall-post>
                    <div v-else class="card">
                        <div class="card-body">
                            <img
                                src="https://kulinar-crimea.ru/wp-content/uploads/2017/10/%D0%A1%D0%BD%D0%B8%D0%BC%D0%BE%D0%BA-%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0-2017-10-04-%D0%B2-17.51.50.png"
                                alt="No Posts">
                        </div>
                    </div>

                    <!--                    <div class="card">-->
                    <!--                        <div class="card-header border-0 pb-0">-->
                    <!--                            <div class="d-flex align-items-center justify-content-between">-->
                    <!--                                <div class="d-flex align-items-center">-->
                    <!--                                    <div class="avatar avatar-story me-2">-->
                    <!--                                        <a href="https://social.webestica.com/my-profile.html#!">-->
                    <!--                                            <img class="avatar-img rounded-circle"-->
                    <!--                                                 :src="`images/header_img/random_user_avatar.jpg`" alt="">-->
                    <!--                                        </a>-->
                    <!--                                    </div>-->
                    <!--                                    <div>-->
                    <!--                                        <div class="nav nav-divider">-->
                    <!--                                            <h6 class="nav-item card-title mb-0"><a-->
                    <!--                                                href="https://social.webestica.com/my-profile.html#!"> Lori-->
                    <!--                                                Ferguson </a>-->
                    <!--                                            </h6>-->
                    <!--                                            <span class="nav-item small"> 2hr</span>-->
                    <!--                                        </div>-->
                    <!--                                        <p class="mb-0 small">Web Developer at Webestica</p>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="dropdown">-->
                    <!--                                    <a href="https://social.webestica.com/my-profile.html#"-->
                    <!--                                       class="text-secondary btn btn-secondary-soft-hover py-1 px-2"-->
                    <!--                                       id="cardFeedAction1"-->
                    <!--                                       data-bs-toggle="dropdown" aria-expanded="false">-->
                    <!--                                        <i class="bi bi-three-dots"></i>-->
                    <!--                                    </a>-->
                    <!--                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction1">-->
                    <!--                                        <li><a class="dropdown-item"-->
                    <!--                                               href="https://social.webestica.com/my-profile.html#">-->
                    <!--                                            <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a>-->
                    <!--                                        </li>-->
                    <!--                                        <li><a class="dropdown-item"-->
                    <!--                                               href="https://social.webestica.com/my-profile.html#">-->
                    <!--                                            <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a>-->
                    <!--                                        </li>-->
                    <!--                                        <li><a class="dropdown-item"-->
                    <!--                                               href="https://social.webestica.com/my-profile.html#">-->
                    <!--                                            <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a>-->
                    <!--                                        </li>-->
                    <!--                                        <li><a class="dropdown-item"-->
                    <!--                                               href="https://social.webestica.com/my-profile.html#">-->
                    <!--                                            <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a>-->
                    <!--                                        </li>-->
                    <!--                                        <li>-->
                    <!--                                            <hr class="dropdown-divider">-->
                    <!--                                        </li>-->
                    <!--                                        <li><a class="dropdown-item"-->
                    <!--                                               href="https://social.webestica.com/my-profile.html#">-->
                    <!--                                            <i class="bi bi-flag fa-fw pe-2"></i>Report post</a>-->
                    <!--                                        </li>-->
                    <!--                                    </ul>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="card-body">-->
                    <!--                            <p>I'm thrilled to share that I've completed a graduate certificate course in project-->
                    <!--                                management-->
                    <!--                                with the president's honor roll.-->
                    <!--                            </p>-->
                    <!--                            <img class="card-img" :src="`images/header_img/random_user_avatar.jpg`" alt="Post">-->
                    <!--                            <ul class="nav nav-stack py-3 small">-->
                    <!--                                <li class="nav-item">-->
                    <!--                                    <a class="nav-link active" href="https://social.webestica.com/my-profile.html#!"> <i-->
                    <!--                                        class="bi bi-hand-thumbs-up-fill pe-1"></i>Liked (56)</a>-->
                    <!--                                </li>-->
                    <!--                                <li class="nav-item">-->
                    <!--                                    <a class="nav-link" href="https://social.webestica.com/my-profile.html#!"> <i-->
                    <!--                                        class="bi bi-chat-fill pe-1"></i>Comments (12)</a>-->
                    <!--                                </li>-->
                    <!--                                <li class="nav-item dropdown ms-sm-auto">-->
                    <!--                                    <a class="nav-link mb-0" href="https://social.webestica.com/my-profile.html#"-->
                    <!--                                       id="cardShareAction8" data-bs-toggle="dropdown" aria-expanded="false">-->
                    <!--                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)-->
                    <!--                                    </a>-->
                    <!--                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction8">-->
                    <!--                                        <li><a class="dropdown-item"-->
                    <!--                                               href="https://social.webestica.com/my-profile.html#">-->
                    <!--                                            <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a>-->
                    <!--                                        </li>-->
                    <!--                                        <li><a class="dropdown-item"-->
                    <!--                                               href="https://social.webestica.com/my-profile.html#">-->
                    <!--                                            <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a>-->
                    <!--                                        </li>-->
                    <!--                                        <li><a class="dropdown-item"-->
                    <!--                                               href="https://social.webestica.com/my-profile.html#">-->
                    <!--                                            <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a>-->
                    <!--                                        </li>-->
                    <!--                                        <li><a class="dropdown-item"-->
                    <!--                                               href="https://social.webestica.com/my-profile.html#">-->
                    <!--                                            <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a>-->
                    <!--                                        </li>-->
                    <!--                                        <li>-->
                    <!--                                            <hr class="dropdown-divider">-->
                    <!--                                        </li>-->
                    <!--                                        <li><a class="dropdown-item"-->
                    <!--                                               href="https://social.webestica.com/my-profile.html#">-->
                    <!--                                            <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a>-->
                    <!--                                        </li>-->
                    <!--                                    </ul>-->
                    <!--                                </li>-->
                    <!--                            </ul>-->
                    <!--                            <div class="d-flex mb-3">-->
                    <!--                                <div class="avatar avatar-xs me-2">-->
                    <!--                                    <a href="https://social.webestica.com/my-profile.html#!">-->
                    <!--                                        <img-->
                    <!--                                            class="avatar-img rounded-circle"-->
                    <!--                                            :src="`images/header_img/random_user_avatar.jpg`" alt=""> </a>-->
                    <!--                                </div>-->
                    <!--                                <form class="position-relative w-100">-->
                    <!--                                <textarea class="form-control pe-4 bg-light" rows="1"-->
                    <!--                                          placeholder="Add a comment..."></textarea>-->
                    <!--                                </form>-->
                    <!--                            </div>-->

                    <!--                        </div>-->
                    <!--                        <div class="card-footer border-0 pt-0">-->
                    <!--                            <a href="https://social.webestica.com/my-profile.html#!" role="button"-->
                    <!--                               class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center"-->
                    <!--                               data-bs-toggle="button" aria-pressed="true">-->
                    <!--                                <div class="spinner-dots me-2">-->
                    <!--                                    <span class="spinner-dot"></span>-->
                    <!--                                    <span class="spinner-dot"></span>-->
                    <!--                                    <span class="spinner-dot"></span>-->
                    <!--                                </div>-->
                    <!--                                Load more comments-->
                    <!--                            </a>-->
                    <!--                        </div>-->
                    <!--                    </div>-->


                </div>
                <div class="col-lg-4">
                    <div class="row g-4">

                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Описание</h5>

                                </div>
                                <div class="card-body position-relative pt-0">
                                    <p>{{ user.about }}</p>
                                    <ul class="list-unstyled mt-3 mb-0">
                                        <li v-if="user.birth_date != null" class="mb-2">
                                            <i class="bi bi-calendar-date fa-fw pe-1"></i>
                                            Родился:
                                            <strong>{{ user.rendered_birth_date }}</strong>
                                        </li>
                                        <!--<li class="mb-2">-->
                                        <!--<i class="bi bi-heart fa-fw pe-1"></i> -->
                                        <!-- Status: -->
                                        <!-- <strong>Single </strong>-->
                                        <!--</li>-->
                                        <li>
                                            <i class="bi bi-envelope fa-fw pe-1"></i>
                                            Email: <strong>{{ user.email }} </strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="card">

                                <div class="card-header d-sm-flex justify-content-between border-0">
                                    <h5 class="card-title">Photos</h5>
                                    <a class="btn btn-primary-soft btn-sm"
                                       href="https://social.webestica.com/my-profile.html#!"> See all photo</a>
                                </div>
                                <div class="card-body position-relative pt-0">
                                    <div class="row g-2">

                                        <div class="col-6">
                                            <a href="./01(2).jpg" data-gallery="image-popup" data-glightbox="">
                                                <img class="rounded img-fluid"
                                                     :src="`/images/header_img/random_user_avatar.jpg`" alt="">
                                            </a>
                                        </div>

                                        <div class="col-6">
                                            <a href="./02(1).jpg" data-gallery="image-popup" data-glightbox="">
                                                <img class="rounded img-fluid"
                                                     :src="`/images/header_img/random_user_avatar.jpg`" alt="">
                                            </a>
                                        </div>

                                        <div class="col-4">
                                            <a href="./03.jpg" data-gallery="image-popup" data-glightbox="">
                                                <img class="rounded img-fluid"
                                                     :src="`/images/header_img/random_user_avatar.jpg`" alt="">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="./04(1).jpg" data-gallery="image-popup" data-glightbox="">
                                                <img class="rounded img-fluid"
                                                     :src="`/images/header_img/random_user_avatar.jpg`" alt="">
                                            </a>
                                        </div>

                                        <div class="col-4">
                                            <a href="./05(1).jpg" data-gallery="image-popup" data-glightbox="">
                                                <img class="rounded img-fluid"
                                                     :src="`/images/header_img/random_user_avatar.jpg`" alt="">
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!--        <create-post-modal></create-post-modal>-->
        <loader v-if="loading"></loader>
        <update-hat-modal @setHatFile="setHatFile" @updateHat="updateHat"></update-hat-modal>
    </main>
</template>
<script>
import CreatePostModal from "../modals/user_profile_modals/CreatePostModal";
import Loader from "../layouts/Loader";
import WallPost from "./WallPost";
import User from "../../models/user";
import updateHatModal from "../modals/user_profile_modals/updateHatModal";

const updateHatModalId = "avatarHatModal"
export default {
    name: "Profile",
    inject: ['wallPostService', 'userService', 'modalService'],
    components: {
        'create-post-modal': CreatePostModal,
        'loader': Loader,
        'wall-post': WallPost,
        'update-hat-modal': updateHatModal
    },
    title: "Профиль",
    data() {
        return {
            postText: null,
            loading: false,
            posts: [],
            user: {},
            me: null,
            i_am_profile_owner: false
        }
    },
    computed: {
        formData() {
            return {
                text: this.postText,
                wall_owner_id: this.user.id,
            }
        },
        hatData(){
            return {
                hat: this.file
            }
        }
    },
    methods: {
        async updateHat(){
            try {
                this.setLoading();
                let hat = await this.userService.updateUserHat(this.hatData);
                await this.$emit('updateUserInfo');
                this.user.hat = hat;
                //this.$store.getters['auth/user'].hat;
            } catch (error) {
                console.log(error);
            } finally {
                this.removeLoading();
                this.modalService.hideModal(updateHatModalId);
            }
        },
        async setHatFile(image){
            this.file = image;
            let reader = new FileReader();
            reader.addEventListener("load", function () {
                this.imagePreview = reader.result;
            }.bind(this), false);
            if (this.file) {
                reader.readAsDataURL(this.file);
            }
        },
        showButton() {
            $('#changeHeader').toggle()
        },
        hideButton() {
            $('#changeHeader').toggle()
        },
        onPostDelete(postId) {
            let onDeleteItemIndex = this.posts.findIndex(item => item.id === postId);
            this.posts.splice(onDeleteItemIndex, 1);
        },
        async subscribe() {
            try {
                let data = {
                    'user_id': this.user.id
                };
                let response = await this.userService.subscribeToUser(data);
                if(response.status === 200){
                    this.user.i_am_subscribed = true;
                }
                await this.$emit('updateUserInfo');
            } catch (error) {
                console.log(error);
                // alert(error.message);
            } finally {

            }
        },
        setLoading() {
            this.loading = true;
        },
        removeLoading() {
            this.loading = false;
        },
        async getUserById(id) {
            try {
                this.setLoading();
                return await this.userService.getUserById(id);
            } catch (error) {
                console.log(error)
            } finally {
                this.removeLoading();
            }
        },
        async createWallPost() {
            if (this.postText.trim() === "") {
                return;
            }
            try {
                this.setLoading();
                let response = await this.wallPostService.createWallPost(this.formData);
            } catch (error) {
                console.log(error)
            } finally {
                this.removeLoading();
                this.postText = "";
                await this.loadPost()
            }
        },
        async getUser() {
            if ((this.$route.params.id || null) == null) {
                this.user = this.$store.getters['auth/user'];
                this.i_am_profile_owner = true;
            } else {
                this.user = await this.getUserById(this.$route.params.id);
                this.i_am_profile_owner = this.user.id === this.$store.getters['auth/user'].id;
            }
            this.me = this.$store.getters['auth/user'];
        },
        async loadPost() {
            try {
                this.posts = await this.wallPostService.getWallPosts(this.user.id);
            } catch (error) {
                console.log(error)
            }
        },
        async initComponent() {
            this.setLoading();
            this.$emit('showHeader');
            await this.getUser();
            await this.loadPost();
            this.removeLoading();
        }
    },
    async created() {
        await this.initComponent();
    },
    watch: {
        "$route": ["initComponent"]
    }
}
</script>
