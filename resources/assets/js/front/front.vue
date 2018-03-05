<template>
    <div>
        <nav class="nav">
            <router-link class="nav-link" to="/projects">
                <span class="lnr lnr-home"></span>
                <p class="description">Projects</p>
            </router-link>
        </nav>
        <div class="content">
            <transition name="slide-fade" mode="out-in">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>

<script>

</script>