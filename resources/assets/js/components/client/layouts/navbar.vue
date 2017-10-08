<template>
    <v-toolbar class="teal accent-4">
        <!--<v-toolbar-side-icon></v-toolbar-side-icon>-->
        <v-toolbar-title class="white--text"><strong>CHAUTARO</strong></v-toolbar-title>
        <v-toolbar-items>
            <v-toolbar-item><router-link to="/home">HOME</router-link></v-toolbar-item>
            <v-toolbar-item><router-link to="/login">LOGIN</router-link></v-toolbar-item>
            <v-toolbar-item><router-link to="/register">REGISTER</router-link></v-toolbar-item>
        </v-toolbar-items>
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