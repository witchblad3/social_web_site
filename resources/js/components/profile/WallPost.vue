<template>
    <div class="card">
        <div class="card-header border-0 pb-0">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-story me-2">
                        <router-link :to="`/profile/`+post.post_creator.id">
                            <img
                                class="avatar-img rounded-circle"
                                :src="post.post_creator.avatar.path"
                                alt=""/>
                        </router-link>
                    </div>
                    <div>
                        <div class="nav nav-divider">
                            <h6 class="nav-item card-title mb-0">
                                <router-link :to="`/profile/`+post.post_creator.id">
                                    {{ post.post_creator.first_name }} {{ post.post_creator.last_name }}
                                </router-link>
                            </h6>
                            <!--                            <span class="nav-item small"> 2hr</span>-->
                        </div>
                        <p class="mb-0 small">2hr</p>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="https://social.webestica.com/my-profile.html#"
                       class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction1"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction1">
                        <li v-if="isMyPost() === true" style="cursor: pointer;">
                            <a class="dropdown-item" @click.prevent="deletePost">
                                <i class="bi bi-x-circle fa-fw pe-2"></i>
                                Удалить
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-bookmark fa-fw pe-2"></i>
                                <!--                                todo: посты будем сохранять в архив, надо будет это дело проработать-->
                                Save post
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-person-x fa-fw pe-2"></i>
                                Unfollow lori ferguson
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-slash-circle fa-fw pe-2"></i>
                                Block
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">
                            <!--                            todo: а также механику стукачества, надо будет нам админку сделать хорошую-->
                            <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p>{{ post.text }}</p>
            <!--            <img class="card-img" :src="post.post_creator.avatar.path" alt="Post">-->
            <ul class="nav nav-stack py-3 small">
                <li class="nav-item" @click.prevent="setLike">
                    <span style="cursor: pointer;"
                          v-bind:class="this.post.liked_by_me === true ? 'text-danger' : 'text-secondary'">
<!-- bi bi-hand-thumbs-up-fill pe-1                       -->
                        <i class="fas fa-heart"></i>
                        Нравится: {{ post.likes_count }}
                    </span>
                </li>
                <li class="nav-item" @click.prevent="setDislike">
                    <span v-bind:class="this.post.disliked_by_me === true ? 'disliked' : 'not-disliked'"
                          style="cursor: pointer;">
                        <i class="fas fa-heart-broken"></i>
                        Не нравится: {{ post.dislikes_count }}
                    </span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://social.webestica.com/my-profile.html#!"> <i
                        class="bi bi-chat-fill pe-1"></i>Комментарии (0)</a>
                </li>
                <li class="nav-item dropdown ms-sm-auto">
                    <a class="nav-link mb-0" href="https://social.webestica.com/my-profile.html#"
                       id="cardShareAction8" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (0)
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction8">
                        <li><a class="dropdown-item" href="https://social.webestica.com/my-profile.html#">
                            <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
                        <li><a class="dropdown-item" href="https://social.webestica.com/my-profile.html#">
                            <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
                        <li><a class="dropdown-item" href="https://social.webestica.com/my-profile.html#">
                            <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
                        <li><a class="dropdown-item" href="https://social.webestica.com/my-profile.html#">
                            <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="https://social.webestica.com/my-profile.html#">
                            <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
                    </ul>
                </li>

            </ul>

            <div class="d-flex mb-3">
                <!-- Avatar -->
                <div class="avatar avatar-xs me-2">
                    <a href="https://social.webestica.com/my-profile.html#!"> <img
                        class="avatar-img rounded-circle"
                        :src="me.avatar.path" alt=""> </a>
                </div>

                <form class="position-relative w-100" style="display: flex;">
                                <textarea v-model="comment_text" class="form-control bg-light" rows="1"
                                          placeholder="Add a comment..."></textarea>
                    <button @click="createComment" type="button" class="btn btn-success m-2">отправить</button>
                </form>
            </div>
            <comment v-if="this.post.comments.length" v-for="item in post.comments"  :comment="item"></comment>
        </div>
        <!-- Card body END -->
        <!-- Card footer START -->
        <!--        <div class="card-footer border-0 pt-0">-->
        <!--            &lt;!&ndash; Load more comments &ndash;&gt;-->
        <!--            <a href="https://social.webestica.com/my-profile.html#!" role="button"-->
        <!--               class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center"-->
        <!--               data-bs-toggle="button" aria-pressed="true">-->
        <!--                <div class="spinner-dots me-2">-->
        <!--                    <span class="spinner-dot"></span>-->
        <!--                    <span class="spinner-dot"></span>-->
        <!--                    <span class="spinner-dot"></span>-->
        <!--                </div>-->
        <!--                Load more comments-->
        <!--            </a>-->
        <!--        </div>-->
    </div>
</template>

<script>
import Comment from "./Comment";

export default {
    props: ['post'],
    name: "WallPost",
    components:{
        'comment': Comment
    },
    inject: ['wallPostService'],
    data() {
        return {
            me: null,
            comment_text: "",
        }
    },
    methods: {
        async createComment() {
            try {
                //todo: переделать тут на formdata
                let data = {
                    'text': this.comment_text,
                    'post_id': this.post.id,
                };
                let comment = await this.wallPostService.createCommentOnPost(data);
                console.log(comment);
            } catch (error) {
                console.log(error)
            } finally {
                this.comment_text = "";
            }
        },
        async deletePost() {
            try {
                let postId = this.post.id;
                await this.wallPostService.deleteWallPost(postId);
                this.$emit('onPostDelete', postId);
            } catch (error) {
                console.log(error)
            } finally {

            }
        },
        updatePostRating(post) {
            this.post.likes_count = post.likes_count;
            this.post.liked_by_me = post.liked_by_me;
            this.post.dislikes_count = post.dislikes_count;
            this.post.disliked_by_me = post.disliked_by_me;
        },
        async setLike() {
            try {
                let post = await this.wallPostService.setLike(this.post.id);
                this.updatePostRating(post);
            } catch (error) {
                console.log(error);
            }
        },
        async setDislike() {
            try {
                let post = await this.wallPostService.setDislike(this.post.id);
                this.updatePostRating(post);
            } catch (error) {
                console.log(error);
            }
        },
        isMyPost() {
            return this.post.post_creator.id === this.me.id;
        }
    },
    created() {
        this.me = this.$store.getters['auth/user'];
    },
}
</script>

<style scoped>
.not-disliked {
    color: #6d6d6d;
}

.disliked {
    color: black;
}

</style>
