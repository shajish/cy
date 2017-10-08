<template>
    <v-toolbar class="teal accent-4 toolbar-wrapper">
        <!--<v-toolbar-side-icon></v-toolbar-side-icon>-->
        <v-toolbar-title class="white--text"><strong>CHAUTARO</strong></v-toolbar-title>
        <v-spacer></v-spacer>
        <router-link to="/" class="nav-item">
            <!--<v-btn icon>-->
                <!--<v-icon>search</v-icon> -->
            Home
            <!--</v-btn>-->
        </router-link>

        <router-link to="/login" class="nav-item">
            <!--<v-btn icon>-->
                <!--<v-icon>apps</v-icon> -->
            Login
            <!--</v-btn>-->
        </router-link>

        <router-link to="/register" class="nav-item">
            <!--<v-btn icon>-->
                <!--<v-icon>refresh</v-icon> -->
            Register
            <!--</v-btn>-->
        </router-link>


    </v-toolbar>
</template>

<script>

    export default{
        name: 'cy-navbar',

        mounted() {
            console.log('this is the navbar component');
        }
    }

</script>