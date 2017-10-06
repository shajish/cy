<template>
    <div>
        <v-app>
            <v-toolbar dark class="primary">
                <!--<v-toolbar-side-icon></v-toolbar-side-icon>-->
                <v-toolbar-title class="white--text">CHAUTARO</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-btn icon>
                    <v-icon>search</v-icon>
                </v-btn>
                <v-btn icon>
                    <v-icon>apps</v-icon>
                </v-btn>
                <v-btn icon>
                    <v-icon>refresh</v-icon>
                </v-btn>
                <v-btn icon>
                    <v-icon>more_vert</v-icon>
                </v-btn>
            </v-toolbar>
        </v-app>
    </div>
</template>

<script>

    export default{
        name: 'cy-navbar',

        mounted() {
            console.log('this is the navbar component');
        }
    }

</script>