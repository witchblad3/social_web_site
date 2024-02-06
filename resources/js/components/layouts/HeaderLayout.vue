<template>
    <header class="navbar-light fixed-top header-static bg-mode">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <router-link class="navbar-brand" :to="{name: 'news'}">
                    <img class="light-mode-item navbar-brand-item" :src="`/favicon.png`" alt="Logo"/>
                </router-link>
                <h4 class="m-auto">Яблочко в капусте</h4>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll ms-auto">
<!--                        <li class="nav-item m-auto">-->
<!--                            <div class="input-group" >-->
<!--                                <div class="form-outline">-->
<!--&lt;!&ndash;                                    <input @focusin="openDropDownForSearch"&ndash;&gt;-->
<!--&lt;!&ndash;                                           @focusout="closeDropDownForSearch"&ndash;&gt;-->
<!--&lt;!&ndash;                                           id="t1"&ndash;&gt;-->
<!--&lt;!&ndash;                                           type="search"&ndash;&gt;-->
<!--&lt;!&ndash;                                           class="form-control" placeholder="Поиск" />&ndash;&gt;-->

<!--                                </div>-->
<!--                                <button type="button" class="btn btn-primary">-->
<!--                                    <i class="fas fa-search"></i>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                           <div class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3" id="dropdown_search_field">-->
<!--                               <ul class="list-group">-->
<!--                                   <li class="list-group-item">-->
<!--                                       132-->
<!--                                   </li>-->
<!--                                   <li class="list-group-item">-->
<!--                                       132-->
<!--                                   </li>-->
<!--                               </ul>-->
<!--                           </div>-->
<!--                        </li>-->

                        <li class="nav-item dropdown">
                            <router-link :to="'/news'" class="nav-link">Новости</router-link>
                        </li>
                        <li class="nav-item dropdown">
                            <router-link :to="'/news'" class="nav-link">Сообщения</router-link>
                        </li>
<!--                        <li class="nav-item dropdown">-->
<!--                            <router-link :to="'/news'" class="nav-link">Рекомендации</router-link>-->
<!--                        </li>-->
                        <li class="nav-item dropdown">
                            <router-link :to="{name: 'search'}" class="nav-link">Поиск</router-link>
                        </li>

                    </ul>






<!--                    <ul class="navbar-nav navbar-nav-scroll ms-auto">-->
<!--                        <li class="nav-item dropdown">-->
<!--                            <a class="nav-link active dropdown-toggle" href="#"-->
<!--                               id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true"-->
<!--                               aria-expanded="false">Demo</a>-->
<!--                            <ul class="dropdown-menu" aria-labelledby="homeMenu">-->
<!--                                <li><a class="dropdown-item active" href="https://social.webestica.com/index.html">Home-->
<!--                                    default</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/index-classic.html">Home-->
<!--                                    classic</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/index-post.html">Home-->
<!--                                    post</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/index-video.html">Home-->
<!--                                    video</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/index-event.html">Home-->
<!--                                    event</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/landing.html">Landing-->
<!--                                    page</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/app-download.html">App-->
<!--                                    download</a>-->
<!--                                </li>-->
<!--                                <li class="dropdown-divider"></li>-->
<!--                                <li>-->
<!--                                    <a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/"-->
<!--                                       target="_blank">-->
<!--                                        <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Social!-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="nav-item dropdown">-->
<!--                            <a class="nav-link dropdown-toggle" href="#" id="pagesMenu"-->
<!--                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>-->
<!--                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/albums.html">Albums</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/celebration.html">Celebration</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/messaging.html">Messaging</a>-->
<!--                                </li>-->
<!--                                <li class="dropdown-submenu dropend">-->
<!--                                    <a class="dropdown-item dropdown-toggle" href="https://social.webestica.com/#!">Profile</a>-->
<!--                                    <ul class="dropdown-menu" data-bs-popper="none">-->
<!--                                        <li><a class="dropdown-item"-->
<!--                                               href="https://social.webestica.com/my-profile.html">Feed</a></li>-->
<!--                                        <li><a class="dropdown-item"-->
<!--                                               href="https://social.webestica.com/my-profile-about.html">About</a></li>-->
<!--                                        <li><a class="dropdown-item"-->
<!--                                               href="https://social.webestica.com/my-profile-connections.html">Connections</a>-->
<!--                                        </li>-->
<!--                                        <li><a class="dropdown-item"-->
<!--                                               href="https://social.webestica.com/my-profile-media.html">Media</a></li>-->
<!--                                        <li><a class="dropdown-item"-->
<!--                                               href="https://social.webestica.com/my-profile-videos.html">Videos</a>-->
<!--                                        </li>-->
<!--                                        <li><a class="dropdown-item"-->
<!--                                               href="https://social.webestica.com/my-profile-events.html">Events</a>-->
<!--                                        </li>-->
<!--                                        <li><a class="dropdown-item"-->
<!--                                               href="https://social.webestica.com/my-profile-activity.html">Activity</a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/events.html">Events</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/events-2.html">Events-->
<!--                                    2</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/event-details.html">Event-->
<!--                                    details</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/event-details-2.html">Event-->
<!--                                    details 2</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/groups.html">Groups</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/group-details.html">Group-->
<!--                                    details</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/post-videos.html">Post-->
<!--                                    videos</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item"-->
<!--                                       href="https://social.webestica.com/post-video-details.html">Post video-->
<!--                                    details</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/post-details.html">Post-->
<!--                                    details</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/video-details.html">Video-->
<!--                                    details</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/blog.html">Blog</a></li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/blog-details.html">Blog-->
<!--                                    details</a>-->
<!--                                </li>-->
<!--                                <li class="dropdown-divider"></li>-->
<!--                                <li class="dropdown-submenu dropend">-->
<!--                                    <a class="dropdown-item dropdown-toggle" href="#">Dropdown-->
<!--                                        levels</a>-->
<!--                                    <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">-->
<!--                                        <li><a class="dropdown-item" href="#">Dropdown-->
<!--                                            item</a>-->
<!--                                        </li>-->
<!--                                        <li><a class="dropdown-item" href="#">Dropdown-->
<!--                                            item</a>-->
<!--                                        </li>-->
<!--                                        <li class="dropdown-submenu dropstart">-->
<!--                                            <a class="dropdown-item dropdown-toggle"-->
<!--                                               href="#">Dropdown (start)</a>-->
<!--                                            <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">-->
<!--                                                <li><a class="dropdown-item" href="#">Dropdown-->
<!--                                                    item</a>-->
<!--                                                </li>-->
<!--                                                <li><a class="dropdown-item" href="#">Dropdown-->
<!--                                                    item</a>-->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li><a class="dropdown-item" href="#">Dropdown-->
<!--                                            item</a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="nav-item dropdown">-->
<!--                            <a class="nav-link dropdown-toggle" href="#" id="postMenu"-->
<!--                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account </a>-->
<!--                            <ul class="dropdown-menu" aria-labelledby="postMenu">-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/create-page.html">Create-->
<!--                                    a page</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item"-->
<!--                                       href="https://social.webestica.com/settings.html">Settings</a></li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/notifications.html">Notifications</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/help.html">Help-->
<!--                                    center</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/help-details.html">Help-->
<!--                                    details</a>-->
<!--                                </li>-->
<!--                                <li class="dropdown-submenu dropstart">-->
<!--                                    <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>-->
<!--                                    <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">-->
<!--                                        <li><a class="dropdown-item" href="https://social.webestica.com/sign-in.html">Sign-->
<!--                                            in</a>-->
<!--                                        </li>-->
<!--                                        <li><a class="dropdown-item" href="https://social.webestica.com/sign-up.html">Sing-->
<!--                                            up</a>-->
<!--                                        </li>-->
<!--                                        <li><a class="dropdown-item"-->
<!--                                               href="https://social.webestica.com/forgot-password.html">Forgot-->
<!--                                            password</a>-->
<!--                                        </li>-->
<!--                                        <li class="dropdown-divider"></li>-->
<!--                                        <li><a class="dropdown-item"-->
<!--                                               href="https://social.webestica.com/sign-in-advance.html">Sign in-->
<!--                                            advance</a>-->
<!--                                        </li>-->
<!--                                        <li><a class="dropdown-item"-->
<!--                                               href="https://social.webestica.com/sign-up-advance.html">Sing up-->
<!--                                            advance</a>-->
<!--                                        </li>-->
<!--                                        <li><a class="dropdown-item"-->
<!--                                               href="https://social.webestica.com/forgot-password-advance.html">Forgot-->
<!--                                            password advance</a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/error-404.html">Error-->
<!--                                    404</a>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item"-->
<!--                                       href="https://social.webestica.com/offline.html">Offline</a></li>-->
<!--                                <li><a class="dropdown-item" href="https://social.webestica.com/privacy-and-terms.html">Privacy-->
<!--                                    &amp; terms</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="https://social.webestica.com/my-profile-connections.html">My-->
<!--                                network</a>-->
<!--                        </li>-->
<!--                    </ul>-->
                </div>
                <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
                    <li class="nav-item ms-2">
                        <a class="nav-link icon-md btn btn-light p-0"
                           href="https://social.webestica.com/messaging.html">
                            <i class="bi bi-chat-left-text-fill fs-6"> </i>
                        </a>
                    </li>
                    <li class="nav-item dropdown ms-2">
                        <a class="nav-link icon-md btn btn-light p-0" href="#"
                           id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                           data-bs-auto-close="outside">
                            <span class="badge-notif animation-blink"></span>
                            <i class="bi bi-bell-fill fs-6"> </i>
                        </a>
                        <div
                            class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0"
                            aria-labelledby="notifDropdown">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">Notifications <span
                                        class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                                    <a class="small" href="#">Clear all</a>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush list-unstyled p-2">
                                        <li>
                                            <div
                                                class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
                                                <div class="avatar text-center d-none d-sm-inline-block">
                                                    <img class="avatar-img rounded-circle"
                                                         :src="`/images/header_img/logo.svg`" alt="avatar">
                                                </div>
                                                <div class="ms-sm-3">
                                                    <div class=" d-flex">
                                                        <p class="small mb-2"><b>Judy Nguyen</b> sent you a friend
                                                            request.
                                                        </p>
                                                        <p class="small ms-3 text-nowrap">Just now</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button class="btn btn-sm py-1 btn-primary me-2">Accept</button>
                                                        <button class="btn btn-sm py-1 btn-danger-soft">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3 position-relative">
                                                <div class="avatar text-center d-none d-sm-inline-block">
                                                    <img class="avatar-img rounded-circle"
                                                         :src="`/images/header_img/02.jpg`" alt="">
                                                </div>
                                                <div class="ms-sm-3 d-flex">
                                                    <div>
                                                        <p class="small mb-2">Wish <b>Amanda Reed</b> a happy birthday
                                                            (Nov 12)
                                                        </p>
                                                        <button class="btn btn-sm btn-outline-light py-1 me-2">Say happy
                                                            birthday 🎂
                                                        </button>
                                                    </div>
                                                    <p class="small ms-3">2min</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
                                                <div class="avatar text-center d-none d-sm-inline-block">
                                                    <div class="avatar-img rounded-circle bg-success"><span
                                                        class="text-white position-absolute top-50 start-50 translate-middle fw-bold">WB</span>
                                                    </div>
                                                </div>
                                                <div class="ms-sm-3">
                                                    <div class="d-flex">
                                                        <p class="small mb-2">Webestica has 15 like and 1 new
                                                            activity
                                                        </p>
                                                        <p class="small ms-3">1hr</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="list-group-item list-group-item-action rounded d-flex border-0 p-3 mb-1">
                                                <div class="avatar text-center d-none d-sm-inline-block">
                                                    <img class="avatar-img rounded-circle"
                                                         :src="`images/header_img/12.svg`" alt="">
                                                </div>
                                                <div class="ms-sm-3 d-flex">
                                                    <p class="small mb-2"><b>Bootstrap in the news:</b> The search
                                                        giant’s parent company, Alphabet, just joined an exclusive club
                                                        of tech stocks.
                                                    </p>
                                                    <p class="small ms-3">4hr</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="#" class="btn btn-sm btn-primary-soft">See all
                                        incoming activity</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item ms-2 dropdown">
                        <a class="nav-link btn icon-md p-0" href="#" id="profileDropdown"
                           role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <img class="avatar-img rounded-2" :src="user.avatar.path" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3"
                            aria-labelledby="profileDropdown" id="menuDropDown">
                            <li class="px-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="avatar me-3">
                                        <img class="avatar-img rounded-2" :src="user.avatar.path"
                                             alt="">
                                    </div>
                                    <div>
                                        <a class="h6 stretched-link"
                                           href="#">
                                            {{ user.first_name }} {{ user.last_name }}</a>
                                    </div>
                                </div>
                                <router-link @click="closeDropDown"
                                             class="dropdown-item btn btn-primary-soft btn-sm my-2 text-center"
                                             :to="{name: 'currentUserProfile'}">
                                    Профиль
                                </router-link>
                            </li>
                            <li>
                                <router-link @click="closeDropDown"
                                             class="dropdown-item" :to="{name: 'settings.account'}">
                                    <i class="bi bi-gear fa-fw me-2"></i>
                                    Настройки
                                </router-link>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <button @click.prevent="logout" class="dropdown-item bg-danger-soft-hover">
                                    <i class="bi bi-power fa-fw me-2"></i>
                                    Выйти
                                </button>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <loader v-if="loading"></loader>
    </header>
</template>

<script>
import Loader from "./Loader";

export default {
    name: "Header",
    props: ['user'],
    components: {
        'loader': Loader
    },
    data() {
        return {
            loading: false
        }
    },
    methods: {
        logout() {
            this.loading = true;
            this.$store.dispatch('auth/logout');
        },
        closeDropDown() {
            $('#menuDropDown').removeClass('show');
        },
        // openDropDownForSearch(){
        //     $('#dropdown_search_field').css('opacity', 1).css('visibility', 'visible');
        // },
        // closeDropDownForSearch(event){
        //     console.log(event)
        //     $('#dropdown_search_field').css('opacity', 0).css('visibility', 'hidden');
        // }
    },
    created() {

    }
}
</script>
