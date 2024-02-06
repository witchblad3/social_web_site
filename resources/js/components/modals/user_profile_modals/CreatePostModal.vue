<template>
    <div class="modal fade" id="modalCreateFeed" tabindex="-1" aria-labelledby="modalLabelCreateFeed" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal feed header START -->
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabelCreateFeed">Create post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal feed header END -->

                <!-- Modal feed body START -->
                <div class="modal-body">
                    <!-- Add Feed -->
                    <div class="d-flex mb-3">
                        <!-- Avatar -->
                        <div class="avatar avatar-xs me-2">
                            <img class="avatar-img rounded-circle" :src="`images/header_img/random_user_avatar.jpg`" alt="">
                        </div>
                        <!-- Feed box  -->
                        <form class="w-100">
                        <textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="4"
                                  placeholder="Share your thoughts..." autofocus=""></textarea>
                        </form>
                    </div>
                    <!-- Feed rect START -->
                    <div class="hstack gap-2">
                        <a class="icon-md bg-success bg-opacity-10 text-success rounded-circle"
                           href="https://social.webestica.com/my-profile.html#" data-bs-toggle="tooltip"
                           data-bs-placement="top" title="" data-bs-original-title="Photo"> <i class="bi bi-image-fill"></i>
                        </a>
                        <a class="icon-md bg-info bg-opacity-10 text-info rounded-circle"
                           href="https://social.webestica.com/my-profile.html#" data-bs-toggle="tooltip"
                           data-bs-placement="top" title="" data-bs-original-title="Video"> <i
                            class="bi bi-camera-reels-fill"></i> </a>
                        <a class="icon-md bg-danger bg-opacity-10 text-danger rounded-circle"
                           href="https://social.webestica.com/my-profile.html#" data-bs-toggle="tooltip"
                           data-bs-placement="top" title="" data-bs-original-title="Events"> <i
                            class="bi bi-calendar2-event-fill"></i> </a>
                        <a class="icon-md bg-warning bg-opacity-10 text-warning rounded-circle"
                           href="https://social.webestica.com/my-profile.html#" data-bs-toggle="tooltip"
                           data-bs-placement="top" title="" data-bs-original-title="Feeling/Activity"> <i
                            class="bi bi-emoji-smile-fill"></i> </a>
                        <a class="icon-md bg-light text-secondary rounded-circle"
                           href="https://social.webestica.com/my-profile.html#" data-bs-toggle="tooltip"
                           data-bs-placement="top" title="" data-bs-original-title="Check in"> <i
                            class="bi bi-geo-alt-fill"></i> </a>
                        <a class="icon-md bg-primary bg-opacity-10 text-primary rounded-circle"
                           href="https://social.webestica.com/my-profile.html#" data-bs-toggle="tooltip"
                           data-bs-placement="top" title="" data-bs-original-title="Tag people on top"> <i
                            class="bi bi-tag-fill"></i> </a>
                    </div>
                    <!-- Feed rect END -->
                </div>
                <!-- Modal feed body END -->

                <!-- Modal feed footer -->
                <!--            <div class="modal-footer row justify-content-between">-->
                <div class="row" style="padding: 15px;">
                    <!-- Select -->
                    <div class='col-3 col-sm-5 col-md-12 col-lg-4'>
                        <select class="form-control">
                            <option value="PB">Public</option>
                            <option value="PB">Public</option>
                            <option value="PB">Public</option>
                            <option value="PB">Public</option>
                        </select>
                    </div>
                    <div class="col-lg-8 text-sm-end">
                        <button type="button" class="btn btn-danger-soft me-2"><i class="bi bi-camera-video-fill pe-1"></i>
                            Live video
                        </button>
                        <button type="button" class="btn btn-success-soft">Post</button>
                    </div>
                </div>
                <!-- Modal feed footer -->

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CreatePostModal"
}
</script>
