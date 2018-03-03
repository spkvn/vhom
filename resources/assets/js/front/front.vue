<template>
    <div>
        <nav class="nav">
            <router-link to="/projects">
                <span class="lnr lnr-home"></span>
                <p class="description">Projects</p>
            </router-link>
        </nav>
        <div class="content">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>

</script>