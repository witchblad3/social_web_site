<template>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <nav class="navbar navbar-light navbar-expand-lg mx-0">
                        <div class="card w-100 p-4">
                            <div class="w-100">
                                <ul class="nav nav-tabs nav-pills nav-pills-soft flex-column fw-bold gap-2 border-0">
                                    <li class="nav-item">
                                        <router-link :to="{name: 'settings.account'}" class="nav-link d-flex mb-0 text-center align-items-center"
                                        :class="$route.name === 'settings.account' ? 'active' : ''">
                                            <i class="fas fa-user-circle"></i>
                                            &nbsp; Общее
                                        </router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link :to="{name: 'settings.privacy'}"
                                                     :class="$route.name === 'settings.privacy' ? 'active' : ''"
                                                     class="nav-link d-flex mb-0">
                                            Приватность
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <router-view @updateUser="updateUser"></router-view>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "SettingsMain",
    methods: {
        async updateUser() {
            await this.$emit('updateUserInfo');
        }
    }
}
</script>
