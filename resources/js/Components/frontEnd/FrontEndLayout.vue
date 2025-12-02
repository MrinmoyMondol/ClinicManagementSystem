<template>
    <div>
        <Header />   <!-- Vue header -->
        <router-view />
        <Footer />
    </div>
</template>


<script>

import Header from '../frontEnd/includes/Header.vue'
import Footer from '../frontEnd/includes/Footer.vue'

export default {
name: "FrontEndLayout",
    components: {
        Header,
        Footer
    }
}
</script>

<style scoped>

</style>
