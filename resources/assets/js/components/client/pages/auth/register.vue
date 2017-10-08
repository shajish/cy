
<template>
    <v-container grid-list-xl text-xs-center>
        <v-layout row wrap>
            <v-flex xs10 offset-xs1>
                <v-card class=" login-card">

                    <v-layout xs12 row wrap>
                        <v-flex xs4 d-flex class="login-info-grid">
                            <v-card class="login-info" >
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
                                            label="Firstname"
                                            required
                                            class="col-md-6"
                                    ></v-text-field>
                                    <v-text-field
                                            label="Lastname"
                                            required
                                            class="col-md-6"
                                    ></v-text-field>
                                    <v-text-field
                                            label="E-mail"
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
                                    <!--<v-spacer></v-spacer>-->
                                    <v-flex xs11 sm5>
                                        <v-dialog
                                                persistent
                                                v-model="modal"
                                                lazy
                                                full-width
                                        >
                                            <v-text-field
                                                    slot="activator"
                                                    label="Date of Birth"
                                                    v-model="date"
                                                    prepend-icon="event"
                                                    readonly
                                            ></v-text-field>
                                            <v-date-picker v-model="date" scrollable actions>
                                                <template scope="{ save, cancel }">
                                                    <v-card-actions>
                                                        <v-spacer></v-spacer>
                                                        <v-btn flat color="primary" @click="cancel">Cancel</v-btn>
                                                        <v-btn flat color="primary" @click="save">OK</v-btn>
                                                    </v-card-actions>
                                                </template>
                                            </v-date-picker>
                                        </v-dialog>
                                    </v-flex>
                                    <!--<v-text-field-->
                                            <!--label="Date of Birth"-->
                                            <!--required-->
                                    <!--&gt;</v-text-field>-->
                                    <v-radio-group :mandatory="false" row>
                                        <v-radio label="Male" value="male" ></v-radio>
                                        <v-radio label="Female" value="female"></v-radio>
                                        <v-radio label="Other" value="other"></v-radio>
                                    </v-radio-group>


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
                password: 'Password',
                date: null,
                menu: false,
                modal: false
            }
        }


    }
</script>