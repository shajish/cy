<template>
    <div id="main-wrapper">

        <div class="profile-bnr sub-bnr user-profile-bnr">
            <div class="position-center-center">
                <div class="container">
                    <h2>Search Professionals</h2>
                </div>
            </div>
        </div>

        <!-- search-->
        <div class="search-pro">
            <div class="map-search">
                <div class="container">
                    <div class="row">
                        <form action="" @submit.prevent="getUserBySearch"><!-- v-on="submit: getUserBySearch"-->
                            <div class="col-md-12">
                                <div class="map-toggleButton"> <i class="fa fa-bars"></i> </div>
                                <div class="map-search-fields">
                                    <div class="field">
                                        <input type="text" v-model="firstname" placeholder="Name">
                                    </div>
                                    <div class="field">
                                        <input type="text" v-model="degree" placeholder="Degree">
                                    </div>
                                    <div class="field custom-select-box">
                                        <input type="text" placeholder="Profession">
                                    </div>
                                </div>
                                <div class="search-button">

                                    <input type="submit" value="submit" class="btn-btn-primary">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="search-pro">
            <div class="map-search">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="map-toggleButton"> <i class="fa fa-bars"></i> </div>
                            <div class="map-search-fields">
                                <div class="field">
                                    <input type="text" placeholder="Keyword">
                                </div>
                                <div class="field">
                                    <input type="text" placeholder="Location">
                                </div>
                                <div class="field custom-select-box">
                                    <input type="text" placeholder="Profession">
                                </div>
                            </div>
                            <div class="search-button">
                                <button>Search Professionals</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- Members -->
        <section class="pro-mem">
            <div class="container pb30">
                <h3>Professionals</h3>
                <div class="row">
                    <div v-if="userlist">
                        <div class="col-sm-3" v-for="user in userlist">
                            <div class="uou-block-6a"> <img src="images/member-1.png" alt="">
                                <h6>Name : {{user.first_name}} {{user.last_name}}<span>Degree : {{user.degree}}</span><span>Proffession : Web Designer</span><span>{{user.email}}</span></h6>
                                <p><i class="fa fa-map-marker"></i>Chamati, KTM-16</p>
                            </div>
                            <!-- end .uou-block-6a -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</template>

<script>
    export default {
        name: 'professionals',

        data(){
          return{
              userlist:[],
              searchlist:[],
              firstname: '',
              degree: ''
//              searchObj: {
//                  firstname: '',
//                  degree: ''
//              }
            }
        },
        mounted() {
            this.getAllUsers();
            this.getUserBySearch();
            console.log('Component mounted.')
        },
        methods:{
            getAllUsers:function(){
                var app = this;
                axios.get('api/userlist').then(response => {
                    app.userlist = response.data.datas;
                    console.log(app.userlist);
                })

            },
            getUserBySearch:function(){

                console.log(this.firstname, this.degree)
                var app = this;
                axios.post('api/search',{
                    firstname : this.firstname,
                    degree : this.degree
                }).then(response =>{
                    app.userlist = response.data.data;
                })
            }
        }
    }
</script>
