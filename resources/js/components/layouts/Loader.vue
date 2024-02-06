<template>
    <div class="body_block">
        <div class="own_loader">
            <div></div>
            <div></div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Loader"
}
</script>
<style scoped>
@keyframes own_loader {
    0% {
        top: 32px;
        left: 32px;
        width: 0;
        height: 0;
        opacity: 1;
    }
    100% {
        top: 0;
        left: 0;
        width: 64px;
        height: 64px;
        opacity: 0;
    }
}

.own_loader {
    position: relative;
    width: 64px;
    height: 64px;
}

.own_loader div {
    position: absolute;
    border: 4px solid blue;
    border-radius: 50%;
    animation: own_loader 1s ease-out infinite;
}

.own_loader div:nth-child(2) {
    animation-delay: -0.5s;
}

.body_block {
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: 9999;
    top: 0;
    justify-content: center;
    align-items: center;
    text-align: center;
    display: flex;
    background: #ffffffc4;
}
</style>
