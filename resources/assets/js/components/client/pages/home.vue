
<template>
    <div id="main-wrapper">
        <!-- HOME PRO-->
        <div class="home-pro">

            <!-- PRO BANNER HEAD -->
            <div class="banr-head">
                <div class="container">
                    <div class="row">

                        <!-- CONTENT -->
                        <div class="col-sm-7">
                            <div class="text-area">
                                <div class="position-center-center col-md-10">
                                    <h1>Creative Youth</h1>
                                    <h6> where you can be a enterprenuer </h6>
                                </div>
                            </div>
                        </div>

                        <!-- FORM SECTION -->
                        <div class="col-sm-5">
                            <div class="login-sec">

                                <!-- TABS -->
                                <div class="uou-tabs accordion-xs">
                                    <ul class="tabs">
                                        <li class="active"><a href="#register">Register Now</a></li>
                                        <li><a href="#log-in">Member Login</a></li>
                                    </ul>

                                    <!-- REGISTER -->
                                    <div class="content">

                                        <div id="register">
                                            <form>
                                                <input type="firstname" placeholder="First Name" name="firstname">
                                                <input type="lastname" placeholder="Last Name" name="lastname">
                                                <input type="Gender" placeholder="Gender" name="gender">
                                                <input type="dateofbirth" placeholder="Date of Birth" name="dateofbirth">
                                                <input type="email" placeholder="Email Address" name="email">
                                                <input type="password" placeholder="Password" name="password">
                                                <input type="confirmpassword" placeholder=" Confirm Password" name="confirmpassword">
                                                <button type="submit">Register</button>
                                            </form>
                                        </div>

                                        <!-- LOGIN -->
                                        <div id="log-in" class="active">
                                            <form @submit.prevent="checkUser()">
                                                <input type="email" v-model="userDetail.username" placeholder="Email Address">
                                                <input type="password" v-model="userDetail.password" placeholder="Password">
                                                <button type="submit">Login</button>
                                                <div class="forget">Forgot your password? <a href="#.">Click Here</a></div>
                                            </form>
                                        </div>
                                        <div id="forget">
                                            <form>
                                                <input type="email" placeholder="Email Address">
                                                <button type="submit">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SERVICES -->
            <section class="services">

                <!-- SERVICES ROW -->
                <ul class="row">

                    <!-- SECTION -->
                    <li class="col-md-4">
                        <div class="ser-inn">
                            <i class="fa fa-globe"></i>
                            <h4>Stay in touch with other community member</h4>
                            <i class="fa fa-globe big"></i>

                            </div>
                    </li>

                    <!-- SECTION -->
                    <li class="col-md-4">
                        <div class="ser-inn">
                            <i class="fa fa-book"></i>
                            <h4>Get the latest news
                                in your community</h4>
                            <i class="fa fa-book big"></i>

                        </div>
                    </li>

                    <!-- SECTION  -->
                    <li class="col-md-4">
                        <div class="ser-inn">
                            <i class="fa fa-picture-o"></i>
                            <h4>Share what’s up
                                with you</h4>
                            <i class="fa fa-picture-o big"></i>

                        </div>
                    </li>
                </ul>
            </section>

            <!-- PRO SECTION -->
            <section class="pro-content">
                <div class="container-fluid">
                    <div class="row">

                        <!-- PRO IMAGE -->
                        <div class="col-md-6 pro-inside" style="background:url(../images/pro-img-1.jpg) center center no-repeat;"></div>

                        <!-- PRO CONTENT -->
                        <div class="col-md-6 pro-inside">
                            <div class="position-center-center col-md-6">
                                <h1>Creative Youth
                                </h1>
                                <p> Creative Youth is a community-based website with the capacity of connecting and using the local resources in one’s community.
                                    Creative Youth is a social networking site, which actually works in the dynamic environment.  </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRO SECTION -->
                <div class="container-fluid">
                    <div class="row">

                        <!-- PRO TEXT -->
                        <div class="col-md-6 pro-inside">
                            <div class="position-center-center col-md-6">
                                <h1>Creative Youth Development
                                    </h1>
                                <p> Creative youth development in our communities encourages positive risk taking, promotes leadership development, fosters relationships with adult mentors and peers, and offers real-world opportunities to contribute to social change. </p>
                            </div>
                        </div>

                        <!-- PRO BACKGROUND -->
                        <div class="col-md-6 pro-inside" style="background:url(images/pro-img-2.jpg) center center no-repeat;"></div>
                    </div>
                </div>
            </section>

            <!-- APP IMAGE -->
            <section class="app-images">
                <div class="container">
                    <div class="row">

                        <!-- TEXT -->
                        <div class="col-md-6 text-center text-area">
                            <h1>SocialMe for your
                                Smartphone</h1>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                beatae vitae dicta sunt explicabo. </p>
                             </div>

                        <!-- APP IMAGE -->

                    </div>
                </div>
            </section>

            <!-- TESTIMONIALS -->
            <section class="clients-says">
                <div class="container">
                    <h3 class="section-title">what our users say </h3>
                    <div class="testi">
                        <div class="texti-slide">
                            <!-- SLide -->
                            <div class="clints-text">
                                <div class="text-in">
                                    <p>i m working in php as a frontend developer</p>
                                </div>
                                <div class="avatar">
                                    <div class="media-left"> <a href="#."> <img src="images/clients-avatar-1.jpg" alt=""> </a> </div>
                                    <div class="media-body">
                                        <h6>Sanjay Shrestha</h6>
                                        <span>sanzayshrestha01@gmail.com</span> </div>
                                </div>
                            </div>

                            <!-- SLide -->
                            <div class="clints-text">
                                <div class="text-in">
                                    <p>i m working in php as a backend developer</p>
                                </div>
                                <div class="avatar">
                                    <div class="media-left"> <a href="#"> <img src="images/clients-avatar-1.jpg" alt=""> </a> </div>
                                    <div class="media-body">
                                        <h6>Aman Maharjan</h6>
                                        <span>maharjanaman76@gmail.com</span> </div>
                                </div>
                            </div>

                            <!-- SLide -->
                            <div class="clints-text">
                                <div class="text-in">
                                    <p>i m working in database design in php</p>
                                </div>
                                <div class="avatar">
                                    <div class="media-left"> <a href="#"><img src="images/clients-avatar-1.jpg" alt=""> </a> </div>
                                    <div class="media-body">
                                        <h6>Prajwol Maharjan</h6>
                                        <span>prajwolmaharjan88@gmail.com</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                userDetail: {
                    username: '',
                    password: '',
                },
                userData: []
            }
        },
        methods:{
          checkUser: function(){
              var users =  this;
              axios.post('api/auth/login', {
                  email: this.userDetail.username,
                  password: this.userDetail.password
              }).then((response) => {
//                  console.log(response.data.token);

                  localStorage.setItem('token', response.data.token);
//                  console.log(localStorage.getItem('token'));
                 users.userData =  this.parseJWT(localStorage.getItem('token'));

                 users.$router.push('/userprofile');
              })
          },
            parseJWT: function(userToken){
                var splitToken = userToken.split('.')[1];
                var tokenReplace = splitToken.replace('-', '+').replace('_', '/');

                return JSON.parse(window.atob(tokenReplace));
            }

        }
    }
</script>
