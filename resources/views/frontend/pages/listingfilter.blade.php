@extends('views.frontend.layout.main')

@section('content')
    <div id="main-wrapper">

      <div class="profile-bnr sub-bnr user-profile-bnr">
            <div class="position-center-center">
                <div class="container">
                    <h2>Search Professionals</h2>
                </div>
            </div>
        </div>

        <!-- search -->
        <div class="search-pro">
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
        </div>

        <!-- Members -->
        <section class="pro-mem">
            <div class="container pb30">
                <h3>Professionals</h3>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="uou-block-6a"> <img src="images/member-1.png" alt="">
                            <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                            <p><i class="fa fa-map-marker"></i> New York, USA</p>
                        </div>
                        <!-- end .uou-block-6a -->
                    </div>
                    <div class="col-sm-3">
                        <div class="uou-block-6a"> <img src="images/member-2.png" alt="">
                            <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                            <p><i class="fa fa-map-marker"></i> New York, USA</p>
                        </div>
                        <!-- end .uou-block-6a -->
                    </div>
                    <div class="col-sm-3">
                        <div class="uou-block-6a"> <img src="images/member-2.png" alt="">
                            <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                            <p><i class="fa fa-map-marker"></i> New York, USA</p>
                        </div>
                        <!-- end .uou-block-6a -->
                    </div>
                    <div class="col-sm-3">
                        <div class="uou-block-6a"> <img src="images/member-3.png" alt="">
                            <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                            <p><i class="fa fa-map-marker"></i> New York, USA</p>
                        </div>
                        <!-- end .uou-block-6a -->
                    </div>
                    <div class="col-sm-3">
                        <div class="uou-block-6a"> <img src="images/member-1.png" alt="">
                            <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                            <p><i class="fa fa-map-marker"></i> New York, USA</p>
                        </div>
                        <!-- end .uou-block-6a -->
                    </div>
                    <div class="col-sm-3">
                        <div class="uou-block-6a"> <img src="images/member-1.png" alt="">
                            <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                            <p><i class="fa fa-map-marker"></i> New York, USA</p>
                        </div>
                        <!-- end .uou-block-6a -->
                    </div>
                    <div class="col-sm-3">
                        <div class="uou-block-6a"> <img src="images/member-2.png" alt="">
                            <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                            <p><i class="fa fa-map-marker"></i> New York, USA</p>
                        </div>
                        <!-- end .uou-block-6a -->
                    </div>
                    <div class="col-sm-3">
                        <div class="uou-block-6a"> <img src="images/member-2.png" alt="">
                            <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                            <p><i class="fa fa-map-marker"></i> New York, USA</p>
                        </div>
                        <!-- end .uou-block-6a -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection