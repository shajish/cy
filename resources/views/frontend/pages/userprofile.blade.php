@extends('views.frontend.layout.main')

@section('content')
    <div id="main-wrapper">

        <div class="compny-profile">
            <!-- SUB Banner -->
            <div class="profile-bnr user-profile-bnr">
                <div class="container">
                    <div class="pull-left">
                        <h2>Michael Peterson</h2>
                        <h5>Front-End Developer</h5>
                    </div>
                </div>

                <!-- Modal POPUP -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="container">
                                <h6><a class="close" href="#." data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a> Send Message</h6>

                                <!-- Forms -->
                                <form action="#">
                                    <ul class="row">
                                        <li class="col-xs-6">
                                            <input type="text" placeholder="First Name ">
                                        </li>
                                        <li class="col-xs-6">
                                            <input type="text" placeholder="Last Name">
                                        </li>
                                        <li class="col-xs-6">
                                            <input type="text" placeholder="Country">
                                        </li>
                                        <li class="col-xs-6">
                                            <input type="text" placeholder="Email">
                                        </li>
                                        <li class="col-xs-12">
                                            <textarea placeholder="Your Message"></textarea>
                                        </li>
                                        <li class="col-xs-12">
                                            <button class="btn btn-primary">Send message</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Company Content -->
            <div class="profile-company-content user-profile main-user" data-bg-color="f5f5f5">
                <div class="container">
                    <div class="row">

                        <!-- Nav Tabs -->
                        <div class="col-md-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#profile"> General Profile</a></li>
                                <li><a data-toggle="tab" href="#profession">Profession</a></li>
                                <li><a data-toggle="tab" href="#contact">Contact</a></li>
                                <li><a data-toggle="tab" href="#business">Business</a></li>
                                <li><a data-toggle="tab" href="#experience">Experience</a></li>
                                <li><a data-toggle="tab" href="#education">Education</a></li>
                                <li><a data-toggle="tab" href="#interest">Interests</a></li>

                            </ul>
                        </div>

                        <!-- Tab Content -->
                        <div class="col-md-12">
                            <div class="tab-content">

                                <!-- PROFILE -->
                                <div id="profile" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="profile-main">
                                                <h3>About</h3>
                                                <div class="profile-in">
                                                    <div class="media-left">
                                                        <div class="img-profile"> <img class="media-object" src="images/avatar-1.jpg" alt=""> </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquidautem
                                                            laudantium sapiente ad enim ipsa modi labo rum accusantium deleniti neque architecto vitae.<br>
                                                            <br>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo
                                                            itate id molestiae consectetur quae pariatur repudi andae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut imcati
                                                            nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda. <br>
                                                            <br>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">

                                            <!-- Skills -->
                                            <div class="sidebar">
                                                <h5 class="main-title">Skills</h5>
                                                <div class="job-skills">

                                                    <!-- Logo Design -->
                                                    <ul class="row">
                                                        <li class="col-sm-3">
                                                            <h6><i class="fa fa-plus"></i> HTML5 and Css3</h6>
                                                        </li>
                                                        <li class="col-sm-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> </div>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                    <!-- Logo Design -->
                                                    <ul class="row">
                                                        <li class="col-sm-3">
                                                            <h6><i class="fa fa-plus"></i> Logo Design</h6>
                                                        </li>
                                                        <li class="col-sm-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> </div>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                    <!-- Logo Design -->
                                                    <ul class="row">
                                                        <li class="col-sm-3">
                                                            <h6><i class="fa fa-plus"></i> Web Design</h6>
                                                        </li>
                                                        <li class="col-sm-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"> </div>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                    <!-- UI / UX -->
                                                    <ul class="row">
                                                        <li class="col-sm-3">
                                                            <h6><i class="fa fa-plus"></i> UI/UX</h6>
                                                        </li>
                                                        <li class="col-sm-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> </div>
                                                            </div>
                                                            <p>Preferred languages are Arabic, French & Italian. Proin nibh augue, suscipit asce lerisque sed, lacinia in, mi.</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Professional Details -->
                                            <div class="sidebar">
                                                <h5 class="main-title">Similar Professionals</h5>

                                                <!-- Similar -->
                                                <div class="similar">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <div class="inn-simi"> <img class="media-object" src="images/med-avatar.jpg" alt=""> <a href="#">Profile </a> </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Media heading</h5>
                                                            <p>SEO Specialist - New York, USA</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia,
                                                                voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum
                                                                accusantium deleniti neque architecto vitae.</p>

                                                            <!-- Share -->
                                                            <div class="share-w"><a href="#."><i class="fa fa-bookmark-o"></i></a> <a href="#."><i class="fa fa-envelope-o"></i></a> <a href="#."><i class="fa fa-eye"></i></a></div>
                                                        </div>
                                                    </div>

                                                    <!-- Similar -->
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <div class="inn-simi"> <img class="media-object" src="images/med-avatar.jpg" alt=""> <a href="#">Profile </a> </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Denise Walsh</h5>
                                                            <p>SEO Specialist - New York, USA</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia,
                                                                voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum
                                                                accusantium deleniti neque architecto vitae.</p>

                                                            <!-- Share -->
                                                            <div class="share-w"><a href="#."><i class="fa fa-bookmark-o"></i></a> <a href="#."><i class="fa fa-envelope-o"></i></a> <a href="#."><i class="fa fa-eye"></i></a></div>
                                                        </div>
                                                    </div>

                                                    <!-- Similar -->
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <div class="inn-simi"> <img class="media-object" src="images/med-avatar.jpg" alt=""> <a href="#">Profile </a> </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Denise Walsh</h5>
                                                            <p>SEO Specialist - New York, USA</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia,
                                                                voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum
                                                                accusantium deleniti neque architecto vitae.</p>

                                                            <!-- Share -->
                                                            <div class="share-w"><a href="#."><i class="fa fa-bookmark-o"></i></a> <a href="#."><i class="fa fa-envelope-o"></i></a> <a href="#."><i class="fa fa-eye"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Col -->
                                        <div class="col-md-4">

                                            <!-- Professional Details -->
                                            <div class="sidebar">
                                                <h5 class="main-title">Professional Details</h5>
                                                <div class="sidebar-information">
                                                    <ul class="single-category">
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Name</h6>
                                                            <span class="subtitle col-xs-6">Abu Antar</span></li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Age</h6>
                                                            <span class="subtitle col-xs-6">38 Years Old</span></li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Location</h6>
                                                            <span class="subtitle col-xs-6">Jordan Amman</span></li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Experiance</h6>
                                                            <span class="subtitle col-xs-6">15 Years</span></li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Dgree</h6>
                                                            <span class="subtitle col-xs-6">MBA</span></li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Career Lavel</h6>
                                                            <span class="subtitle col-xs-6">Mid-Level</span></li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Phone</h6>
                                                            <span class="subtitle col-xs-6">(800) 123-4567</span></li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Fax </h6>
                                                            <span class="subtitle col-xs-6">(800) 123-4568</span></li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">E-mail</h6>
                                                            <span class="subtitle col-xs-6"><a href="#.">example@example.com</a></span></li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Website</h6>
                                                            <span class="subtitle col-xs-6"><a href="#.">example.com </a></span></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Rating -->
                                            <div class="sidebar">
                                                <h5 class="main-title">Rating</h5>
                                                <div class="sidebar-information">
                                                    <ul class="single-category com-rate">
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Expertise:</h6>
                                                            <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span> </li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Knowledge:</h6>
                                                            <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i></span> </li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Quality::</h6>
                                                            <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></span> </li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Price:</h6>
                                                            <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span> </li>
                                                        <li class="row">
                                                            <h6 class="title col-xs-6">Services:</h6>
                                                            <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></span> </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Social Profiles -->
                                            <div class="sidebar">
                                                <h5 class="main-title">Social Profiles</h5>
                                                <ul class="socil">
                                                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#."><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Jobs -->
                                <div id="jobs" class="tab-pane fade">
                                    <div class="header-listing">
                                        <h6>Sort by</h6>
                                        <div class="custom-select-box">
                                            <select name="order" class="custom-select">
                                                <option value="0">Most popular</option>
                                                <option value="1">The latest</option>
                                                <option value="2">The best rating</option>
                                            </select>
                                        </div>
                                        <ul class="listing-views">
                                            <li class="active"><a href="#"><i class="fa fa-list"></i></a></li>
                                            <li><a href="#"><i class="fa fa-th"></i></a></li>
                                            <li><a href="#"><i class="fa fa-th-large"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="listing listing-1">
                                        <div class="listing-section">
                                            <div class="listing-ver-3">
                                                <div class="listing-heading">
                                                    <h5>Front-End Web Developer</h5>
                                                    <ul class="bookmark list-inline">
                                                        <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-share"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-inner">
                                                    <div class="listing-content">
                                                        <h6 class="title-company">Mars Planet Telecommunications Inc.</h6>
                                                        <span class="location"> <i class="fa fa-map-marker"></i> Manhattan, New york, USA </span> <span class="type-work full-time"> Full Time </span>
                                                        <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio pellentesque habitant morbi tristique senectus et netus et malesuada. <a href="single_job.html">read more</a></p>
                                                        <h6 class="title-tags">Skills required:</h6>
                                                        <ul class="tags list-inline">
                                                            <li><a href="#">Javascript</a></li>
                                                            <li><a href="#">Wordpress</a></li>
                                                            <li><a href="#">Presta</a></li>
                                                            <li><a href="#">Sass</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="listing-tabs">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-envelope"></i> email@mail.com</a></li>
                                                        <li><a href="#"><i class="fa fa-phone"></i> 012 345 678</a></li>
                                                        <li><a href="#"><i class="fa fa-globe"></i> www.webstite.com</a></li>
                                                        <li class="share-button"> <a href="#"><i class="fa fa-share"></i> Share</a>
                                                            <div class="contact-share">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="listing-ver-3">
                                                <div class="listing-heading">
                                                    <h5>Front-End Web Developer</h5>
                                                    <ul class="bookmark list-inline">
                                                        <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-share"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="listing-inner">
                                                    <div class="listing-content">
                                                        <h6 class="title-company">Mars Planet Telecommunications Inc.</h6>
                                                        <span class="location"> <i class="fa fa-map-marker"></i> Manhattan, New york, USA </span> <span class="type-work full-time"> Full Time </span>
                                                        <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio pellentesque habitant morbi tristique senectus et netus et malesuada. <a href="single_job.html">read more</a></p>
                                                        <h6 class="title-tags">Skills required:</h6>
                                                        <ul class="tags list-inline">
                                                            <li><a href="#">Javascript</a></li>
                                                            <li><a href="#">Wordpress</a></li>
                                                            <li><a href="#">Presta</a></li>
                                                            <li><a href="#">Sass</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="listing-tabs">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-envelope"></i> email@mail.com</a></li>
                                                        <li><a href="#"><i class="fa fa-phone"></i> 012 345 678</a></li>
                                                        <li><a href="#"><i class="fa fa-globe"></i> www.webstite.com</a></li>
                                                        <li class="share-button"> <a href="#"><i class="fa fa-share"></i> Share</a>
                                                            <div class="contact-share">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contact -->
                                <div id="contact" class="tab-pane fade">
                                    <div class="profile-main">
                                        <h3>Contact the Company</h3>
                                        <div class="profile-in">
                                            <form action="#">
                                                <input type="text" placeholder="Mobile Number" name="mobile">
                                                <input type="text" placeholder="Telephone Number" name="tele">
                                                <input type="text" placeholder="Social Link">
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                {{--profession--}}
                                <div id="profession" class="tab-pane fade">
                                    <div class="profile-main">
                                        <h3>Enter your profession</h3>
                                        <div class="profile-in">
                                            <form action="#">
                                                <select name="Profession Type" style="width:200px">
                                                    <option value="volvo">IT</option>
                                                    <option value="saab">Marketing</option>
                                                    <option value="fiat">CA</option>
                                                    <option value="audi">Accoutant</option>
                                                </select>
                                                <textarea placeholder="Detail"></textarea>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{--Business--}}
                                <div id="business" class="tab-pane fade">
                                    <div class="profile-main">
                                        <h3>Enter your Business</h3>
                                        <div class="profile-in">
                                            <form action="#">
                                                <input type="text" placeholder="Business Name">
                                                <select name="Business Type" style="width:200px">
                                                    <option value="volvo">IT</option>
                                                    <option value="saab">Marketing</option>
                                                    <option value="fiat">CA</option>
                                                    <option value="audi">Accoutant</option>
                                                </select>
                                                <textarea placeholder="Description"></textarea>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{--Experience--}}
                                <div id="experience" class="tab-pane fade">
                                    <div class="profile-main">
                                        <h3>Enter your Experience</h3>
                                        <div class="profile-in">
                                            <form action="#">
                                                <input type="text" placeholder="Organization Name">
                                                <input type="text" placeholder="Title">

                                                <p style="width:550px">
                                                    <label class="">
                                                        From:
                                                        <input type="date" name="from">
                                                    </label>

                                                    <labe class="pull-right">
                                                        To:
                                                        <input type="date" name="to">
                                                    </labe>
                                                </p>

                                                Position:<select name="Position" style="width:200px">
                                                    <option value="volvo">Manager</option>
                                                    <option value="saab">CEO</option>
                                                    <option value="fiat">Supervisor</option>
                                                </select>



                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Education-->
                                <div id="education" class="tab-pane fade">
                                    <div class="profile-main">
                                        <h3>Fill up your Education Detail</h3>
                                        <div class="profile-in">
                                            <form action="#">
                                                Degree:<select name="Position" style="width:200px">
                                                    <option value="volvo">S.L.C</option>
                                                    <option value="saab">Bachelor</option>
                                                    <option value="fiat">Master</option>
                                                </select>
                                                <p style="width:550px">
                                                    <label class="">
                                                        From:
                                                        <input type="date" name="from">
                                                    </label>

                                                    <labe class="pull-right">
                                                        To:
                                                        <input type="date" name="to">
                                                    </labe>
                                                </p>
                                                Institution:<input type="text" placeholder="School/College">


                                                <button class="btn btn-primary">Send message</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{--Interest--}}
                                <div id="interest" class="tab-pane fade">
                                    <div class="profile-main">
                                        <h3>Enter your Interest</h3>
                                        <div class="profile-in">
                                            <form action="#">
                                                <textarea placeholder="Write your Interest"></textarea>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




 {{--   <div class="col-md-9 col-sm-9 dashboard-section-right">
        <div class="company-info-blk dashboard-bg-color jobseeker-search-wrap clearfix">
            <div class="title">
                <div class="row">
                    <div class="col-md-9 col-sm-9">search a jobs</div>
                    <div class="col-md-3 col-sm-3 right"><a href="/searchjob"><i
                                    class="fa fa-search"
                                    aria-hidden="true"></i> &nbsp;Advance
                            Search</a></div>
                </div>
            </div>

        </div>


        <div class="company-info-blk posted-jobs-blk dashboard-bg-color clearfix" id="profile_personal_information">
            <div class="title">
                <div class="row posted-jobs-blk">
                    <div class="col-md-9 col-sm-9">Profile Detail</div>
                    <div class="col-md-3 col-sm-3 right">
                        <input type="submit" data-toggle="modal"
                               data-target="#updateProfile"
                               data-educationId=""
                               data-title="Update Profile"
                               value="Update profile">
                    </div>
                </div>
            </div>
            <div class="posted-jobs-blk-list-blk">
                <table>
                    <tr>
                        <td><b>First Name</b></td>
                        <td>Sanjay</td>
                        <td><b>Last Name</b></td>
                        <td>Shrestha</td>
                    </tr>
                    <tr>
                        <td><b>Email-address</b></td>
                        <td><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="68181a09021f0704050900091a0209065050280f05090104460b0705">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></td>
                        <td><b>Address</b></td>
                        <td>basantapur</td>
                    </tr>
                    <tr>
                        <td><b>Date of Birth</b></td>
                        <td>1994-1-16</td>
                        <td><b>Gender</b></td>
                        <td>male</td>
                    </tr>

                </table>
            </div>
        </div>

        --}}{{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open </button>--}}{{--


        <div class="modal fade" id="updateProfile" role="dialog" arial-hidden="true">
            <div class="col-md-6">
                <div class="modal-dialog" style="width: 500px">
                <div class="modal-content" >
                    <div class="modal-header">
                        <p class="modal-title">Update User Profile</p>
                        <div class="modal-header" align="right">
                        <button type="button" data-dismiss="modal" class="close">&times</button>
                        </div>
                    </div>
                    <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" name="firstname" maxlength="20" placeholder="First Name"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" name="lastname" maxlength="20" placeholder="Last Name"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="text" name="Email" maxlength="20" placeholder="Email"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Date of Birth</label>
                                <input type="text" name="Dateofbirth" maxlength="20" placeholder="Date of Birth"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address</label>
                                <input type="text" name="Address" maxlength="20" placeholder="Address"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <input type="text" name="Gender" maxlength="20" placeholder="Gender"  class="form-control">
                            </div>

                    </div>
                        <div class="modal-header" align="left">
                            <input type="submit">
                        </div>
                </div>
            </div>
            </div>
        </div>
        <div class="modal">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Modal title</p>
                    <button class="delete"></button>
                </header>
                <section class="modal-card-body">
                    <!-- Content ... -->
                </section>
                <footer class="modal-card-foot">
                    <a class="button is-success">Save changes</a>
                    <a class="button">Cancel</a>
                </footer>
            </div>
        </div>--}}
@endsection
