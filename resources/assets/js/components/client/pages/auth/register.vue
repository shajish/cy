
<template>
    <v-container grid-list-xl text-xs-center>
        <v-layout row wrap>
            <v-flex xs10 offset-xs1>
                <v-card class=" login-card">

                    <v-layout xs12 row wrap>
                        <v-flex xs4 d-flex class="login-info-grid">
                            <v-card class="teal elevation-0 login-info" >
                                <div class="avatar-background">
                                    <v-avatar class="avatar-circle">
                                        <img src="https://cdn1.iconfinder.com/data/icons/freeline/32/account_friend_human_man_member_person_profile_user_users-256.png" alt="avatar">

                                    </v-avatar>
                                </div>
                                <h2 style="color: white;">
                                    Lets get Started
                                </h2>
                            </v-card>
                        </v-flex>
                        <v-flex xs8 d-flex class="login-info-grid ">
                            <v-card class="white elevation-0 login-form-wrapper">
                                <v-form ref="form">

                                    <v-text-field
                                            label="E-mail"
                                            required
                                    ></v-text-field>
                                    <v-text-field
                                            label="Username"
                                            required
                                    ></v-text-field>
                                    <v-text-field
                                            label="Full Name"
                                            required
                                    ></v-text-field>
                                    <v-text-field
                                            name="input-10-1"
                                            label="Enter your password"
                                            hint="At least 8 characters"
                                            min="8"
                                            :append-icon="e1 ? 'visibility' : 'visibility_off'"
                                            :append-icon-cb="() => (e1 = !e1)"
                                            :type="e1 ? 'password' : 'text'"
                                            counter
                                    ></v-text-field>

                                    <v-btn class="teal pull-right custom-btn">
                                        Register
                                    </v-btn>
                                    <v-btn class="pull-right gray custom-btn">clear</v-btn>
                                </v-form>
                            </v-card>
                        </v-flex>
                    </v-layout>

                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>


<script>
    export default{
        name: 'cy-register',

        mounted(){
            console.log('register component')
        },
        data(){
            return {
                e1: false,
                password: 'Password'
            }
        }


    }
</script>