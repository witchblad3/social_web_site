<template>
    <main>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 vstack gap-4">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "SearchMain"
}
</script>
