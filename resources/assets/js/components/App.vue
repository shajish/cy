<template>
    <v-app>
        <cy-navbar></cy-navbar>
            <router-view></router-view>
        <cy-footer></cy-footer>
    </v-app>
</template>

<script>

    import CyNavbar from './client/layouts/navbar.vue'
    import CyFooter from './client/layouts/footer.vue'

    export default {
        name: 'cy-app',
        mounted(){
            console.log('this is the main app content')
        },
        components: {
            CyNavbar,
            CyFooter
        }
    }

</script>