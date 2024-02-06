<template>
    <main>
        <!-- Container START -->
        <div class="container">
            <div class="row g-4">

                <!-- Sidenav START -->
                <div class="col-lg-3">

                    <!-- Advanced filter responsive toggler START -->
                    <div class="d-flex align-items-center d-lg-none">
                        <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
                            <i class="btn btn-primary fw-bold fa-solid fa-sliders-h"></i>
                            <span class="h6 mb-0 fw-bold d-lg-none ms-2">My profile</span>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->

                    <!-- Navbar START-->
                    <nav class="navbar navbar-expand-lg mx-0">
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close text-reset ms-auto"
                                        data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                            </div>

                            <!-- Offcanvas body -->
                            <div class="offcanvas-body d-block px-2 px-lg-0">
                                <!-- Card START -->
                                <div class="card overflow-hidden">
                                    <!-- Cover image -->
                                    <div class="h-50px"></div>
                                    <!--                                         style="background-image:url(assets/images/news/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>-->
                                    <!-- Card body START -->
                                    <div class="card-body pt-0">
                                        <div class="text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg mt-n5 mb-3">
                                                <a href="https://social.webestica.com/index.html#!"><img
                                                    class="avatar-img rounded border border-white border-3"
                                                    :src="`images/news/07.jpg`"
                                                    alt=""></a>
                                            </div>
                                            <!-- Info -->
                                            <h5 class="mb-0"><a href="https://social.webestica.com/index.html#!">Sam
                                                Lanson </a></h5>
                                            <small>Web Developer at Webestica</small>
                                            <p class="mt-3">I'd love to change the world, but they won’t give me the
                                                source
                                                code.</p>

                                            <!-- User stat START -->
                                            <div class="hstack gap-2 gap-xl-3 justify-content-center">
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">256</h6>
                                                    <small>Post</small>
                                                </div>
                                                <!-- Divider -->
                                                <div class="vr"></div>
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">2.5K</h6>
                                                    <small>Followers</small>
                                                </div>
                                                <!-- Divider -->
                                                <div class="vr"></div>
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">365</h6>
                                                    <small>Following</small>
                                                </div>
                                            </div>
                                            <!-- User stat END -->
                                        </div>

                                        <!-- Divider -->
                                        <hr>

                                        <!-- Side Nav START -->
                                        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                   href="https://social.webestica.com/my-profile.html">
                                                    <img class="me-2 h-20px fa-fw"
                                                         :src="`images/header_img/random_user_avatar.jpg`"
                                                         alt=""><span>Feed </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                   href="https://social.webestica.com/my-profile-connections.html">
                                                    <img
                                                        class="me-2 h-20px fa-fw"
                                                        :src="`images/header_img/random_user_avatar.jpg`"
                                                        alt=""><span>Connections </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://social.webestica.com/blog.html">
                                                    <img
                                                        class="me-2 h-20px fa-fw"
                                                        :src="`images/header_img/random_user_avatar.jpg`"
                                                        alt=""><span>Latest News </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://social.webestica.com/events.html">
                                                    <img
                                                        class="me-2 h-20px fa-fw"
                                                        :src="`images/header_img/random_user_avatar.jpg`"
                                                        alt=""><span>Events </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://social.webestica.com/groups.html">
                                                    <img
                                                        class="me-2 h-20px fa-fw"
                                                        :src="`images/header_img/random_user_avatar.jpg`"
                                                        alt=""><span>Groups </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                   href="https://social.webestica.com/notifications.html">
                                                    <img class="me-2 h-20px fa-fw"
                                                         :src="`images/header_img/random_user_avatar.jpg`"
                                                         alt=""><span>Notifications </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                   href="https://social.webestica.com/settings.html"> <img
                                                    class="me-2 h-20px fa-fw"
                                                    :src="`images/header_img/random_user_avatar.jpg`"
                                                    alt=""><span>Settings </span></a>
                                            </li>
                                        </ul>
                                        <!-- Side Nav END -->
                                    </div>
                                    <!-- Card body END -->
                                    <!-- Card footer -->
                                    <div class="card-footer text-center py-2">
                                        <a class="btn btn-link btn-sm"
                                           href="https://social.webestica.com/my-profile.html">View
                                            Profile </a>
                                    </div>
                                </div>
                                <!-- Card END -->

                                <!-- Helper link START -->
                                <ul class="nav small mt-4 justify-content-center lh-1">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="https://social.webestica.com/my-profile-about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="https://social.webestica.com/settings.html">Settings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" target="_blank"
                                           href="https://support.webestica.com/login">Support </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" target="_blank"
                                           href="https://social.webestica.com/docs/index.html">Docs </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://social.webestica.com/help.html">Help</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="https://social.webestica.com/privacy-and-terms.html">Privacy
                                            &amp; terms</a>
                                    </li>
                                </ul>
                                <!-- Helper link END -->
                                <!-- Copyright -->
                                <p class="small text-center mt-1">©2022 <a class="text-body" target="_blank"
                                                                           href="https://www.webestica.com/">
                                    Webestica </a>
                                </p>
                            </div>
                        </div>
                    </nav>
                    <!-- Navbar END-->
                </div>
                <!-- Sidenav END -->

                <!-- Main content START -->
                <div class="col-md-8 col-lg-6 vstack gap-4">
                   
                    <div class="card card-body">
                        <div class="d-flex mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs me-2">
                                <a href="https://social.webestica.com/index.html#"> <img
                                    class="avatar-img rounded-circle"
                                    :src="`images/header_img/random_user_avatar.jpg`"
                                    alt=""> </a>
                            </div>
                            <!-- Post input -->
                            <form class="w-100">
                            <textarea class="form-control pe-4 border-0" rows="2" data-autoresize=""
                                      placeholder="Share your thoughts..."
                                      data-bs-toggle="modal" data-bs-target="#modalCreateFeed"
                            ></textarea>
                            </form>
                        </div>
                        <!-- Share feed toolbar START -->
                        <ul class="nav nav-pills nav-stack small fw-normal">
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0"
                                   href="https://social.webestica.com/index.html#!"
                                   data-bs-toggle="modal" data-bs-target="#feedActionPhoto"> <i
                                    class="bi bi-image-fill text-success pe-2"></i>Photo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0"
                                   href="https://social.webestica.com/index.html#!"
                                   data-bs-toggle="modal" data-bs-target="#feedActionVideo"> <i
                                    class="bi bi-camera-reels-fill text-info pe-2"></i>Video</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://social.webestica.com/index.html#"
                                   class="nav-link bg-light py-1 px-2 mb-0"
                                   data-bs-toggle="modal" data-bs-target="#modalCreateEvents"> <i
                                    class="bi bi-calendar2-event-fill text-danger pe-2"></i>Event </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0"
                                   href="https://social.webestica.com/index.html#!"
                                   data-bs-toggle="modal" data-bs-target="#modalCreateFeed"> <i
                                    class="bi bi-emoji-smile-fill text-warning pe-2"></i>Feeling /Activity</a>
                            </li>
                            <li class="nav-item dropdown ms-lg-auto">
                                <a class="nav-link bg-light py-1 px-2 mb-0"
                                   href="https://social.webestica.com/index.html#"
                                   id="feedActionShare" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <!-- Dropdown menu -->
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare">
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-envelope fa-fw pe-2"></i>Create a poll</a></li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-bookmark-check fa-fw pe-2"></i>Ask a question </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-pencil-square fa-fw pe-2"></i>Help</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Share feed toolbar END -->
                    </div>
                    <!-- Share feed END -->

                    <!-- Card feed item START -->
                    <div class="card">
                        <!-- Card header START -->
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-story me-2">
                                        <a href="https://social.webestica.com/index.html#!"> <img
                                            class="avatar-img rounded-circle"
                                            :src="`images/header_img/random_user_avatar.jpg`">
                                        </a>
                                    </div>
                                    <!-- Info -->
                                    <div>
                                        <div class="nav nav-divider">
                                            <h6 class="nav-item card-title mb-0"><a
                                                href="https://social.webestica.com/index.html#!"> Lori Ferguson </a>
                                            </h6>
                                            <span class="nav-item small"> 2hr</span>
                                        </div>
                                        <p class="mb-0 small">Web Developer at Webestica</p>
                                    </div>
                                </div>
                                <!-- Card feed action dropdown START -->
                                <div class="dropdown">
                                    <a href="https://social.webestica.com/index.html#"
                                       class="text-secondary btn btn-secondary-soft-hover py-1 px-2"
                                       id="cardFeedAction"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <!-- Card feed action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                    </ul>
                                </div>
                                <!-- Card feed action dropdown END -->
                            </div>
                        </div>
                        <!-- Card header END -->
                        <!-- Card body START -->
                        <div class="card-body">
                            <p>I'm thrilled to share that I've completed a graduate certificate course in project
                                management
                                with the president's honor roll.</p>
                            <!-- Card img -->
                            <img class="card-img"
                                 :src="`images/header_img/random_user_avatar.jpg`"
                                 alt="Post">
                            <!-- Feed react START -->
                            <ul class="nav nav-stack py-3 small">
                                <li class="nav-item">
                                    <a class="nav-link active" href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-hand-thumbs-up-fill pe-1"></i>Liked (56)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
                                </li>
                                <!-- Card share action START -->
                                <li class="nav-item dropdown ms-sm-auto">
                                    <a class="nav-link mb-0" href="https://social.webestica.com/index.html#"
                                       id="cardShareAction" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction">
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
                                    </ul>
                                </li>
                                <!-- Card share action END -->
                            </ul>
                            <!-- Feed react END -->

                            <!-- Add comment -->
                            <div class="d-flex mb-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xs me-2">
                                    <a href="https://social.webestica.com/index.html#!"> <img
                                        class="avatar-img rounded-circle"
                                        :src="`images/header_img/random_user_avatar.jpg`">
                                    </a>
                                </div>
                                <!-- Comment box  -->
                                <form class="w-100">
                                <textarea data-autoresize="" class="form-control pe-4 bg-light" rows="1"
                                          placeholder="Add a comment..."></textarea>
                                </form>
                            </div>
                            <!-- Comment wrap START -->
                            <ul class="comment-wrap list-unstyled">
                                <!-- Comment item START -->
                                <li class="comment-item">
                                    <div class="d-flex position-relative">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs">
                                            <a href="https://social.webestica.com/index.html#!"><img
                                                class="avatar-img rounded-circle"
                                                :src="`images/header_img/random_user_avatar.jpg`"
                                                alt=""></a>
                                        </div>
                                        <div class="ms-2">
                                            <!-- Comment by -->
                                            <div class="bg-light rounded-start-top-0 p-3 rounded">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1"><a
                                                        href="https://social.webestica.com/index.html#!">
                                                        Frances Guerrero </a></h6>
                                                    <small class="ms-2">5hr</small>
                                                </div>
                                                <p class="small mb-0">Removed demands expense account in outward
                                                    tedious do.
                                                    Particular way thoroughly unaffected projection.</p>
                                            </div>
                                            <!-- Comment react -->
                                            <ul class="nav nav-divider py-2 small">
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        Like (3)</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        Reply</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        View 5 replies</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Comment item nested START -->
                                    <ul class="comment-item-nested list-unstyled">
                                        <!-- Comment item START -->
                                        <li class="comment-item">
                                            <div class="d-flex">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-xs">
                                                    <a href="https://social.webestica.com/index.html#!"><img
                                                        class="avatar-img rounded-circle"
                                                        :src="`images/header_img/random_user_avatar.jpg`"
                                                        alt=""></a>
                                                </div>
                                                <!-- Comment by -->
                                                <div class="ms-2">
                                                    <div class="bg-light p-3 rounded">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="mb-1"><a
                                                                href="https://social.webestica.com/index.html#!">
                                                                Lori
                                                                Stevens </a></h6>
                                                            <small class="ms-2">2hr</small>
                                                        </div>
                                                        <p class="small mb-0">See resolved goodness felicity shy
                                                            civility
                                                            domestic had but Drawings offended yet answered Jennings
                                                            perceive.</p>
                                                    </div>
                                                    <!-- Comment react -->
                                                    <ul class="nav nav-divider py-2 small">
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               href="https://social.webestica.com/index.html#!">
                                                                Like
                                                                (5)</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               href="https://social.webestica.com/index.html#!">
                                                                Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Comment item END -->
                                        <!-- Comment item START -->
                                        <li class="comment-item">
                                            <div class="d-flex">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-story avatar-xs">
                                                    <a href="https://social.webestica.com/index.html#!"><img
                                                        class="avatar-img rounded-circle"
                                                        :src="`images/header_img/random_user_avatar.jpg`"
                                                        alt=""></a>
                                                </div>
                                                <!-- Comment by -->
                                                <div class="ms-2">
                                                    <div class="bg-light p-3 rounded">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="mb-1"><a
                                                                href="https://social.webestica.com/index.html#!">
                                                                Billy
                                                                Vasquez </a></h6>
                                                            <small class="ms-2">15min</small>
                                                        </div>
                                                        <p class="small mb-0">Wishing calling is warrant settled was
                                                            lucky.</p>
                                                    </div>
                                                    <!-- Comment react -->
                                                    <ul class="nav nav-divider py-2 small">
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               href="https://social.webestica.com/index.html#!">
                                                                Like</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               href="https://social.webestica.com/index.html#!">
                                                                Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Comment item END -->
                                    </ul>
                                    <!-- Load more replies -->
                                    <a href="https://social.webestica.com/index.html#!" role="button"
                                       class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center mb-3 ms-5"
                                       data-bs-toggle="button" aria-pressed="true">
                                        <div class="spinner-dots me-2">
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                        </div>
                                        Load more replies
                                    </a>
                                    <!-- Comment item nested END -->
                                </li>
                                <!-- Comment item END -->
                                <!-- Comment item START -->
                                <li class="comment-item">
                                    <div class="d-flex">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs">
                                            <a href="https://social.webestica.com/index.html#!"><img
                                                class="avatar-img rounded-circle"
                                                :src="`images/header_img/random_user_avatar.jpg`"
                                                alt=""></a>
                                        </div>
                                        <!-- Comment by -->
                                        <div class="ms-2">
                                            <div class="bg-light p-3 rounded">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1"><a
                                                        href="https://social.webestica.com/index.html#!">
                                                        Frances Guerrero </a></h6>
                                                    <small class="ms-2">4min</small>
                                                </div>
                                                <p class="small mb-0">Removed demands expense account in outward
                                                    tedious do.
                                                    Particular way thoroughly unaffected projection.</p>
                                            </div>
                                            <!-- Comment react -->
                                            <ul class="nav nav-divider pt-2 small">
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        Like (1)</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        Reply</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        View 6 replies</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <!-- Comment item END -->
                            </ul>
                            <!-- Comment wrap END -->
                        </div>
                        <!-- Card body END -->
                        <!-- Card footer START -->
                        <div class="card-footer border-0 pt-0">
                            <!-- Load more comments -->
                            <a href="https://social.webestica.com/index.html#!" role="button"
                               class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center"
                               data-bs-toggle="button" aria-pressed="true">
                                <div class="spinner-dots me-2">
                                    <span class="spinner-dot"></span>
                                    <span class="spinner-dot"></span>
                                    <span class="spinner-dot"></span>
                                </div>
                                Load more comments
                            </a>
                        </div>
                        <!-- Card footer END -->
                    </div>
                    <!-- Card feed item END -->

                    <!-- Card feed item START -->
                    <div class="card">
                        <!-- Card header START -->
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-2">
                                        <a href="https://social.webestica.com/index.html#!"> <img
                                            class="avatar-img rounded-circle"
                                            :src="`images/header_img/random_user_avatar.jpg`">
                                        </a>
                                    </div>
                                    <!-- Info -->
                                    <div>
                                        <h6 class="card-title mb-0"><a
                                            href="https://social.webestica.com/index.html#!">
                                            Bootstrap: Front-end framework </a></h6>
                                        <a href="https://social.webestica.com/index.html#!" class="mb-0 text-body">Sponsored
                                            <i class="bi bi-info-circle ps-1" data-bs-container="body"
                                               data-bs-toggle="popover" data-bs-placement="top"
                                               data-bs-content="You&#39;re seeing this ad because your activity meets the intended audience of our site."
                                               data-bs-original-title="" title=""></i> </a>
                                    </div>
                                </div>
                                <!-- Card share action START -->
                                <div class="dropdown">
                                    <a href="https://social.webestica.com/index.html#"
                                       class="text-secondary btn btn-secondary-soft-hover py-1 px-2"
                                       id="cardShareAction2"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction2">
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                    </ul>
                                </div>
                                <!-- Card share action START -->
                            </div>
                        </div>
                        <!-- Card header START -->

                        <!-- Card body START -->
                        <div class="card-body">
                            <p class="mb-0">Quickly design and customize responsive mobile-first sites with
                                Bootstrap.</p>
                        </div>
                        <img :src="`images/header_img/random_user_avatar.jpg`" alt="">
                        <!-- Card body END -->
                        <!-- Card footer START -->
                        <div class="card-footer border-0 d-flex justify-content-between align-items-center">
                            <p class="mb-0">Currently v5.1.3 </p>
                            <a class="btn btn-primary-soft btn-sm" href="https://social.webestica.com/index.html#">
                                Download
                                now </a>
                        </div>
                        <!-- Card footer END -->

                    </div>
                    <!-- Card feed item END -->

                    <!-- Card feed item START -->
                    <div class="card">
                        <!-- Card header START -->
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-2">
                                        <a href="https://social.webestica.com/index.html#"> <img
                                            class="avatar-img rounded-circle"
                                            :src="`images/header_img/random_user_avatar.jpg`" alt="">
                                        </a>
                                    </div>
                                    <!-- Info -->
                                    <div>
                                        <h6 class="card-title mb-0"><a
                                            href="https://social.webestica.com/index.html#"> Judy
                                            Nguyen </a></h6>
                                        <div class="nav nav-divider">
                                            <p class="nav-item mb-0 small">Web Developer at Webestica</p>
                                            <span class="nav-item small" data-bs-toggle="tooltip"
                                                  data-bs-placement="top"
                                                  title="" data-bs-original-title="Public"> <i
                                                class="bi bi-globe"></i> </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card share action START -->
                                <div class="dropdown">
                                    <a href="https://social.webestica.com/index.html#"
                                       class="text-secondary btn btn-secondary-soft-hover py-1 px-2"
                                       id="cardShareAction3"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction3">
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                    </ul>
                                </div>
                                <!-- Card share action END -->
                            </div>
                        </div>
                        <!-- Card header START -->
                        <!-- Card body START -->
                        <div class="card-body">
                            <p>I'm so privileged to be involved in the <a
                                href="https://social.webestica.com/index.html#!">@bootstrap </a>hiring
                                process! Interviewing with their team was fun and I hope this can be a valuable
                                resource for
                                folks! <a href="https://social.webestica.com/index.html#!"> #inclusivebusiness</a>
                                <a
                                    href="https://social.webestica.com/index.html#!"> #internship</a> <a
                                    href="https://social.webestica.com/index.html#!"> #hiring</a> <a
                                    href="https://social.webestica.com/index.html#"> #apply </a></p>
                            <!-- Card feed grid START -->
                            <div class="d-flex justify-content-between">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <!-- Grid img -->
                                        <a class="h-100"
                                           href="./Social - Network, Community and Event Theme_files/03(1).jpg"
                                           data-glightbox="" data-gallery="image-popup">
                                            <img class="rounded img-fluid"
                                                 :src="`images/header_img/random_user_avatar.jpg`"
                                                 alt="Image">
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <!-- Grid img -->
                                        <a href="./Social - Network, Community and Event Theme_files/01(1).jpg"
                                           data-glightbox="" data-gallery="image-popup">
                                            <img class="rounded img-fluid"
                                                 :src="`images/header_img/random_user_avatar.jpg`"
                                                 alt="Image">
                                        </a>
                                        <!-- Grid img -->
                                        <div class="position-relative bg-dark mt-3 rounded">
                                            <div
                                                class="hover-actions-item position-absolute top-50 start-50 translate-middle z-index-9">
                                                <a class="btn btn-link text-white"
                                                   href="https://social.webestica.com/index.html#"> View all </a>
                                            </div>
                                            <a href="./Social - Network, Community and Event Theme_files/02(1).jpg"
                                               data-glightbox="" data-gallery="image-popup">
                                                <img class="img-fluid opacity-50 rounded"
                                                     :src="`images/header_img/random_user_avatar.jpg`"
                                                     alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card feed grid END -->

                            <!-- Feed react START -->
                            <ul class="nav nav-stack py-3 small">
                                <li class="nav-item">
                                    <a class="nav-link active text-secondary"
                                       href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-heart-fill me-1 icon-xs bg-danger text-white rounded-circle"></i>
                                        Louis, Billy and 126 others </a>
                                </li>
                                <li class="nav-item ms-sm-auto">
                                    <a class="nav-link" href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->

                            <!-- Feed react START -->
                            <ul class="nav nav-pills nav-pills-light nav-fill nav-stack small border-top border-bottom py-1 mb-3">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 active"
                                       href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-heart pe-1"></i>Liked (56)</a>
                                </li>
                                <!-- Card share action menu START -->
                                <li class="nav-item dropdown">
                                    <a href="https://social.webestica.com/index.html#" class="nav-link mb-0"
                                       id="cardShareAction4" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction4">
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
                                    </ul>
                                </li>
                                <!-- Card share action menu END -->
                                <li class="nav-item">
                                    <a class="nav-link mb-0" href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-send-fill pe-1"></i>Send</a>
                                </li>
                            </ul>
                            <!-- Feed react START -->

                            <!-- Comment wrap START -->
                            <ul class="comment-wrap list-unstyled">
                                <!-- Comment item START -->
                                <li class="comment-item">
                                    <div class="d-flex">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs">
                                            <a href="https://social.webestica.com/index.html#"> <img
                                                class="avatar-img rounded-circle"
                                                :src="`images/header_img/random_user_avatar.jpg`"
                                                alt="">
                                            </a>
                                        </div>
                                        <div class="ms-2">
                                            <!-- Comment by -->
                                            <div class="bg-light rounded-start-top-0 p-3 rounded">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1"><a
                                                        href="https://social.webestica.com/index.html#!">
                                                        Frances Guerrero </a></h6>
                                                    <small class="ms-2">5hr</small>
                                                </div>
                                                <p class="small mb-0">Removed demands expense account in outward
                                                    tedious do.
                                                    Particular way thoroughly unaffected projection.</p>
                                            </div>
                                            <!-- Comment rect -->
                                            <ul class="nav nav-divider py-2 small">
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        Like (3)</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        Reply</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        View 5 replies</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Comment item nested START -->
                                    <ul class="comment-item-nested list-unstyled">
                                        <!-- Comment item START -->
                                        <li class="comment-item">
                                            <div class="d-flex">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-xs">
                                                    <a href="https://social.webestica.com/index.html#!"><img
                                                        class="avatar-img rounded-circle"
                                                        :src="`images/header_img/random_user_avatar.jpg`"
                                                        alt=""></a>
                                                </div>
                                                <!-- Comment by -->
                                                <div class="ms-2">
                                                    <div class="bg-light p-3 rounded">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="mb-1"><a
                                                                href="https://social.webestica.com/index.html#!">
                                                                Lori
                                                                Stevens </a></h6>
                                                            <small class="ms-2">2hr</small>
                                                        </div>
                                                        <p class="small mb-0">See resolved goodness felicity shy
                                                            civility
                                                            domestic had but Drawings offended yet answered Jennings
                                                            perceive.</p>
                                                    </div>
                                                    <!-- Comment rect -->
                                                    <ul class="nav nav-divider py-2 small">
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               href="https://social.webestica.com/index.html#!">
                                                                Like
                                                                (5)</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               href="https://social.webestica.com/index.html#!">
                                                                Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Comment item END -->
                                        <!-- Comment item START -->
                                        <li class="comment-item">
                                            <div class="d-flex">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-xs">
                                                    <a href="https://social.webestica.com/index.html#!"><img
                                                        class="avatar-img rounded-circle"
                                                        :src="`images/header_img/random_user_avatar.jpg`"
                                                        alt=""></a>
                                                </div>
                                                <!-- Comment by -->
                                                <div class="ms-2">
                                                    <div class="bg-light p-3 rounded">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="mb-1"><a
                                                                href="https://social.webestica.com/index.html#!">
                                                                Billy
                                                                Vasquez </a></h6>
                                                            <small class="ms-2">15min</small>
                                                        </div>
                                                        <p class="small mb-0">Wishing calling is warrant settled was
                                                            lucky.</p>
                                                    </div>
                                                    <!-- Comment rect -->
                                                    <ul class="nav nav-divider py-2 small">
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               href="https://social.webestica.com/index.html#!">
                                                                Like</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               href="https://social.webestica.com/index.html#!">
                                                                Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- Load more replies -->
                                    <a href="https://social.webestica.com/index.html#!" role="button"
                                       class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center mb-3 ms-5"
                                       data-bs-toggle="button" aria-pressed="true">
                                        <div class="spinner-dots me-2">
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                        </div>
                                        Load more replies
                                    </a>
                                </li>
                                <!-- Comment item END -->
                                <!-- Comment item START -->
                                <li class="comment-item">
                                    <div class="d-flex">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs">
                                            <a href="https://social.webestica.com/index.html#!"><img
                                                class="avatar-img rounded-circle"
                                                :src="`images/header_img/random_user_avatar.jpg`"
                                                alt=""></a>
                                        </div>
                                        <!-- Comment by -->
                                        <div class="ms-2">
                                            <div class="bg-light p-3 rounded">
                                                <div class="d-flex justify-content-center">
                                                    <h6 class="mb-1"><a
                                                        href="https://social.webestica.com/index.html#!">
                                                        Frances Guerrero </a></h6>
                                                    <small class="ms-2">4min</small>
                                                </div>
                                                <p class="small mb-0">Congratulations:)</p>
                                                <div class="card p-2 border border-2 rounded mt-2 shadow-none">
                                                    <img
                                                        :src="`images/header_img/random_user_avatar.jpg`"
                                                        alt="">
                                                </div>
                                            </div>
                                            <!-- Comment rect -->
                                            <ul class="nav nav-divider pt-2 small">
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        Like (1)</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        Reply</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="https://social.webestica.com/index.html#!">
                                                        View 6 replies</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <!-- Comment item END -->
                            </ul>
                            <!-- Comment wrap END -->
                        </div>
                        <!-- Card body END -->
                        <!-- Card footer START -->
                        <div class="card-footer border-0 pt-0">
                            <!-- Load more comments -->
                            <a href="https://social.webestica.com/index.html#!" role="button"
                               class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center"
                               data-bs-toggle="button" aria-pressed="true">
                                <div class="spinner-dots me-2">
                                    <span class="spinner-dot"></span>
                                    <span class="spinner-dot"></span>
                                    <span class="spinner-dot"></span>
                                </div>
                                Load more comments
                            </a>
                        </div>
                        <!-- Card footer END -->
                    </div>
                    <!-- Card feed item END -->

                    <!-- Card feed item START -->
                    <div class="card">
                        <!-- Card header START -->
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-2">
                                        <a href="https://social.webestica.com/index.html#"> <img
                                            class="avatar-img rounded-circle"
                                            :src="`images/header_img/random_user_avatar.jpg`" alt="">
                                        </a>
                                    </div>
                                    <!-- Title -->
                                    <div>
                                        <h6 class="card-title mb-0"><a
                                            href="https://social.webestica.com/index.html#!">
                                            Apple Education </a></h6>
                                        <p class="mb-0 small">9 November at 23:29</p>
                                    </div>
                                </div>
                                <!-- Card share action menu -->
                                <a href="https://social.webestica.com/index.html#"
                                   class="text-secondary btn btn-secondary-soft-hover py-1 px-2"
                                   id="cardShareAction5"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <!-- Card share action dropdown menu -->
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction5">
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                </ul>
                            </div>
                            <!-- Card share action END -->
                        </div>
                        <!-- Card header START -->

                        <!-- Card body START -->
                        <div class="card-body pb-0">
                            <p>Find out how you can save time in the classroom this year. Earn recognition while you
                                learn
                                new skills on iPad and Mac. Start recognition your first Apple Teacher badge
                                today!</p>
                            <!-- Feed react START -->
                            <ul class="nav nav-stack pb-2 small">
                                <li class="nav-item">
                                    <a class="nav-link active text-secondary"
                                       href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-heart-fill me-1 icon-xs bg-danger text-white rounded-circle"></i>
                                        Louis, Billy and 126 others </a>
                                </li>
                                <li class="nav-item ms-sm-auto">
                                    <a class="nav-link" href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->
                        </div>
                        <!-- Card body END -->
                        <!-- Card Footer START -->
                        <div class="card-footer py-3">
                            <!-- Feed react START -->
                            <ul class="nav nav-fill nav-stack small">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 active"
                                       href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-heart pe-1"></i>Liked (56)</a>
                                </li>
                                <!-- Card share action dropdown START -->
                                <li class="nav-item dropdown">
                                    <a href="https://social.webestica.com/index.html#" class="nav-link mb-0"
                                       id="cardShareAction6" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction6">
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
                                    </ul>
                                </li>
                                <!-- Card share action dropdown END -->
                                <li class="nav-item">
                                    <a class="nav-link mb-0" href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-send-fill pe-1"></i>Send</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->
                        </div>
                        <!-- Card Footer END -->
                    </div>
                    <!-- Card feed item END -->

                    <!-- Card feed item START -->
                    <div class="card">
                        <!-- Card header START -->
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-2">
                                        <a href="https://social.webestica.com/index.html#"> <img
                                            class="avatar-img rounded-circle"
                                            :src="`images/header_img/random_user_avatar.jpg`" alt="">
                                        </a>
                                    </div>
                                    <!-- Title -->
                                    <div>
                                        <h6 class="card-title mb-0"><a
                                            href="https://social.webestica.com/index.html#!"> All
                                            in the Mind </a></h6>
                                        <p class="mb-0 small">9 November at 23:29</p>
                                    </div>
                                </div>
                                <!-- Card share action menu -->
                                <a href="https://social.webestica.com/index.html#"
                                   class="text-secondary btn btn-secondary-soft-hover py-1 px-2"
                                   id="cardShareAction7"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <!-- Card share action dropdown menu -->
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction7">
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                </ul>
                            </div>
                            <!-- Card share action END -->
                        </div>
                        <!-- Card header START -->

                        <!-- Card body START -->
                        <div class="card-body pb-0">
                            <p>How do you protect your business against cyber-crime?</p>
                            <div class="vstack gap-2">
                                <!-- Feed poll item -->
                                <div>
                                    <input type="radio" class="btn-check" name="poll" id="option">
                                    <label class="btn btn-outline-primary w-100" for="option">We have cybersecurity
                                        insurance coverage</label>
                                </div>
                                <!-- Feed poll item -->
                                <div>
                                    <input type="radio" class="btn-check" name="poll" id="option2">
                                    <label class="btn btn-outline-primary w-100" for="option2">Our dedicated staff
                                        will
                                        protect us</label>
                                </div>
                                <!-- Feed poll item -->
                                <div>
                                    <input type="radio" class="btn-check" name="poll" id="option3">
                                    <label class="btn btn-outline-primary w-100" for="option3">We give regular
                                        training for
                                        best practices</label>
                                </div>
                                <!-- Feed poll item -->
                                <div>
                                    <input type="radio" class="btn-check" name="poll" id="option4">
                                    <label class="btn btn-outline-primary w-100" for="option4">Third-party vendor
                                        protection</label>
                                </div>
                            </div>

                            <!-- Feed poll votes START -->
                            <ul class="nav nav-divider mt-2 mb-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://social.webestica.com/index.html#">263
                                        votes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://social.webestica.com/index.html#">2d left</a>
                                </li>
                            </ul>
                            <!-- Feed poll votes ED -->

                            <!-- Feed react START -->
                            <ul class="nav nav-stack pb-2 small mt-4">
                                <li class="nav-item">
                                    <a class="nav-link active text-secondary"
                                       href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-heart-fill me-1 icon-xs bg-danger text-white rounded-circle"></i>
                                        Louis, Billy and 126 others </a>
                                </li>
                                <li class="nav-item ms-sm-auto">
                                    <a class="nav-link" href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->
                        </div>
                        <!-- Card body END -->
                        <!-- Card Footer START -->
                        <div class="card-footer py-3">
                            <!-- Feed react START -->
                            <ul class="nav nav-fill nav-stack small">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 active"
                                       href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-heart pe-1"></i>Liked (56)</a>
                                </li>
                                <!-- Card share action dropdown START -->
                                <li class="nav-item dropdown">
                                    <a href="https://social.webestica.com/index.html#" class="nav-link mb-0"
                                       id="feedActionShare6" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare6">
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
                                    </ul>
                                </li>
                                <!-- Card share action dropdown END -->
                                <li class="nav-item">
                                    <a class="nav-link mb-0" href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-send-fill pe-1"></i>Send</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->
                        </div>
                        <!-- Card Footer END -->
                    </div>
                    <!-- Card feed item END -->

                    <!-- Card feed item START -->
                    <div class="card">
                        <!-- Card header START -->
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-2">
                                        <a href="https://social.webestica.com/index.html#"> <img
                                            class="avatar-img rounded-circle"
                                            :src="`images/header_img/random_user_avatar.jpg`" alt="">
                                        </a>
                                    </div>
                                    <!-- Title -->
                                    <div>
                                        <h6 class="card-title mb-0"><a
                                            href="https://social.webestica.com/index.html#!"> All
                                            in the Mind </a></h6>
                                        <p class="mb-0 small">9 November at 23:29</p>
                                    </div>
                                </div>
                                <!-- Card share action menu -->
                                <a href="https://social.webestica.com/index.html#"
                                   class="text-secondary btn btn-secondary-soft-hover py-1 px-2"
                                   id="cardShareAction10"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <!-- Card share action dropdown menu -->
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction10">
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="https://social.webestica.com/index.html#"> <i
                                        class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                </ul>
                            </div>
                            <!-- Card share action END -->
                        </div>
                        <!-- Card header START -->

                        <!-- Card body START -->
                        <div class="card-body pb-0">
                            <p>How do you protect your business against cyber-crime?</p>
                            <div class="card card-body mt-4">
                                <!-- Title -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <span class="small">16/20 responded</span>
                                    <span class="small">Results not visible to participants</span>
                                </div>

                                <!-- Results -->
                                <div class="vstack gap-4 gap-sm-3 mt-3">
                                    <!-- Option 1 result START -->
                                    <div class="d-flex align-items-center justify-content-between">
                                        <!-- Progress bar -->
                                        <div class="overflow-hidden w-100 me-3">
                                            <div class="progress bg-primary bg-opacity-10 position-relative"
                                                 style="height: 30px;">
                                                <div class="progress-bar bg-primary bg-opacity-25"
                                                     role="progressbar"
                                                     style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                </div>
                                                <span
                                                    class="position-absolute pt-1 ps-3 fs-6 fw-normal text-truncate w-100">We have cybersecurity insurance coverage </span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">25%</div>
                                    </div>
                                    <!-- Option 1 result END -->

                                    <!-- Option 2 result START -->
                                    <div class="d-flex align-items-center justify-content-between">
                                        <!-- Progress bar -->
                                        <div class="overflow-hidden w-100 me-3">
                                            <div class="progress bg-primary bg-opacity-10 position-relative"
                                                 style="height: 30px;">
                                                <div class="progress-bar bg-primary bg-opacity-25"
                                                     role="progressbar"
                                                     style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                </div>
                                                <span
                                                    class="position-absolute pt-1 ps-3 fs-6 fw-normal text-truncate w-100">Our dedicated staff will protect us</span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">15%</div>
                                    </div>
                                    <!-- Option 2 result END -->

                                    <!-- Option 3 result START -->
                                    <div class="d-flex align-items-center justify-content-between">
                                        <!-- Progress bar -->
                                        <div class="overflow-hidden w-100 me-3">
                                            <div class="progress bg-primary bg-opacity-10 position-relative"
                                                 style="height: 30px;">
                                                <div class="progress-bar bg-primary bg-opacity-25"
                                                     role="progressbar"
                                                     style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                </div>
                                                <span
                                                    class="position-absolute pt-1 ps-3 fs-6 fw-normal text-truncate w-100">We give regular training for best practices</span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">10%</div>
                                    </div>
                                    <!-- Option 3 result END -->

                                    <!-- Option 4 result START -->
                                    <div class="d-flex align-items-center justify-content-between">
                                        <!-- Progress bar -->
                                        <div class="overflow-hidden w-100 me-3">
                                            <div class="progress bg-primary bg-opacity-10 position-relative"
                                                 style="height: 30px;">
                                                <div class="progress-bar bg-primary bg-opacity-25"
                                                     role="progressbar"
                                                     style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                </div>
                                                <span
                                                    class="position-absolute pt-1 ps-3 fs-6 fw-normal text-truncate w-100">Third-party vendor protection</span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">55%</div>
                                    </div>
                                    <!-- Option 4 result END -->
                                </div>
                            </div>

                            <!-- Feed poll votes START -->
                            <ul class="nav nav-divider mt-2 mb-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://social.webestica.com/index.html#">263
                                        votes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://social.webestica.com/index.html#">2d left</a>
                                </li>
                            </ul>
                            <!-- Feed poll votes ED -->

                            <!-- Feed react START -->
                            <ul class="nav nav-stack pb-2 small mt-4">
                                <li class="nav-item">
                                    <a class="nav-link active text-secondary"
                                       href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-heart-fill me-1 icon-xs bg-danger text-white rounded-circle"></i>
                                        Louis, Billy and 126 others </a>
                                </li>
                                <li class="nav-item ms-sm-auto">
                                    <a class="nav-link" href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->
                        </div>
                        <!-- Card body END -->
                        <!-- Card Footer START -->
                        <div class="card-footer py-3">
                            <!-- Feed react START -->
                            <ul class="nav nav-fill nav-stack small">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 active"
                                       href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-heart pe-1"></i>Liked (56)</a>
                                </li>
                                <!-- Card share action dropdown START -->
                                <li class="nav-item dropdown">
                                    <a href="https://social.webestica.com/index.html#" class="nav-link mb-0"
                                       id="feedActionShare8" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare8">
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="https://social.webestica.com/index.html#"> <i
                                            class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
                                    </ul>
                                </li>
                                <!-- Card share action dropdown END -->
                                <li class="nav-item">
                                    <a class="nav-link mb-0" href="https://social.webestica.com/index.html#!"> <i
                                        class="bi bi-send-fill pe-1"></i>Send</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->
                        </div>
                        <!-- Card Footer END -->
                    </div>
                    <!-- Card feed item END -->

                    <!-- Card feed item END -->

                    <!-- Card feed item START -->

                    <!-- Card feed item END -->

                    <!-- Load more button START -->
                    <a href="https://social.webestica.com/index.html#!" role="button"
                       class="btn btn-loader btn-primary-soft" data-bs-toggle="button" aria-pressed="true">
                        <span class="load-text"> Load more </span>
                        <div class="load-icon">
                            <div class="spinner-grow spinner-grow-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </a>
                    <!-- Load more button END -->
                </div>
                </div>
        </div>
        <create-post-modal></create-post-modal>
    </main>
</template>

<script>
import CreatePostModal from "../modals/user_profile_modals/CreatePostModal";

export default {
    name: "News",
    title: "Новости",
    components: {
        'create-post-modal': CreatePostModal
    },
}
</script>
