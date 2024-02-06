<template>
<div>
    <ul class="comment-wrap list-unstyled">
        <!-- Comment item START -->
        <li class="comment-item">
            <div class="d-flex">
                <!-- Avatar -->
                <div class="avatar avatar-xs">
                    <a href="https://social.webestica.com/index.html#"> <img
                        class="avatar-img rounded-circle"
                        :src="comment.comment_creator.avatar.path"
                        alt="">
                    </a>
                </div>
                <div class="ms-2">
                    <!-- Comment by -->
                    <div class="bg-light rounded-start-top-0 p-3 rounded">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-1">
                                <a href="#">{{comment.comment_creator.first_name}} {{comment.comment_creator.last_name}}</a></h6>
                            <small class="ms-2">{{ this.comment.created_at }}</small>
                        </div>
                        <p class="small mb-0">{{comment.text}}</p>
                    </div>
                    <!-- Comment rect -->
                    <ul class="nav nav-divider py-2 small">
                        <li class="nav-item">
                            <a class="nav-link"
                               href="https://social.webestica.com/index.html#!">
                                Like (3)</a>
                        </li>
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link"-->
<!--                               href="https://social.webestica.com/index.html#!">-->
<!--                                Reply</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link"-->
<!--                               href="https://social.webestica.com/index.html#!">-->
<!--                                View 5 replies</a>-->
<!--                        </li>-->
                    </ul>
                </div>
            </div>
        </li>
        <!-- Comment item END -->
    </ul>
</div>
</template>

<script>
export default {
    name: "Comment",
    props: ['comment'],
    mounted() {
        console.log(this.comment.created_at);;
    },
    created() {
        console.log('created comment');
    }
}
</script>

<style scoped>

</style>
