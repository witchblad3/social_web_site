<template>
    <main class="container ver text-center" style="background-color: black;">
        <div class="error" id="error">
            <div style="margin-top: 200px">
                <div class="container">
                    <div class="content centered"><img style="width:500px;"
                                                       src="https://media.dayoftheshirt.com/images/shirts/YkSXG/pampling_error-404-motivation-not-found_1501299120.large.png">
                        <router-link :to="{name: 'currentUserProfile'}" style="font-size: 50px;">В профиль</router-link>
                        <p>
                            Появился, значит, в Зоне Черный Сталкер....
                        </p>
                        <p style="font-size:22px;" class="sub-header text-block-narrow ">Ухади</p>
                    </div>
                </div>

            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "NotFound",
    created() {
        $('body').css('backgroundColor', 'black');
        // $('header').css({display : 'none'})
        this.$emit('hideHeader');
    }
}
</script>
