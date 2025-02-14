<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<!-- Mirrored from demo.zytheme.com/lalan/home-map.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jan 2020 12:57:10 GMT -->
<?php include("header.php"); ?>
============================================ -->
        <section id="map" class="hero-map pt-0 pb-0">
            <div class="container-fluid pr-0 pl-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div id="googleMap"></div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
            <!--<div class="search-properties">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">-->
                            <!-- <form class="mb-0 ">
                                 <div class="form-box ">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-location" id="select-location">
                                            <option>Any Location</option>
                                            <option>Alabama</option>
											<option>Alaska</option>
											<option>California</option>
											<option>Florida</option>
											<option>Mississippi</option>
											<option>Oregon</option>
                                        </select>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!-- .col-md-3 end -->
                                        <!--<div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-type" id="select-type">
                                            <option>Any Type</option>
                                            <option>Apartment</option>
											<option>House</option>
											<option>Office</option>
											<option>Villa</option>
                                        </select>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!-- .col-md-3 end -->
                                        <!--<div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-status" id="select-status">
                                           <option>Any Status</option>
                                            <option>For Rent</option>
                                        	<option>For Sale</option>
                                        </select>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="submit" value="Search" name="submit" class="btn btn--primary btn--block mb-30">
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-beds" id="select-beds">
                                            <option>Beds</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-baths" id="select-baths">
                                            <option>Baths</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-6 option-hide">
                                            <div class="filter mb-30">
                                                <p>
                                                    <label for="amount">Price Range: </label>
                                                    <input id="amount" type="text" class="amount" readonly>
                                                </p>
                                                <div class="slider-range"></div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <a href="#" class="less--options">Less options</a>
                                        </div>
                                    </div>
                                    <!-- .row end -->
                                </div> -->
                                <!-- .form-box end -->
                            </form>
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
        </section>
        <!-- #map end -->

        <!-- properties-carousel
============================================= -->
        <section id="properties-carousel" class="properties-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">Latest Properties</h2>
                            <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                            <!-- .property-item #1 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                            <img src="assets/images/properties/3.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Sale</span>
</a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">Apartment in Long St.</a></h5>
                                        <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                        <p class="property--price">$70,000</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">200 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #2 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <img src="assets/images/properties/11.jpg" alt="property image" class="img-responsive">
                                    <span class="property--status">For Sale</span>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title">Villa in Chicago IL</h5>
                                        <p class="property--location">1445 N State Pkwy, Chicago, IL 60610</p>
                                        <p class="property--price">$235,000</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">3</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">1120 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #3 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <img src="assets/images/properties/5.jpg" alt="property image" class="img-responsive">
                                    <span class="property--status">For Rent</span>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title">2750 House in Urban St.</h5>
                                        <p class="property--location">2750 Urban Street Dr, Anderson, IN 46011</p>
                                        <p class="property--price">$1,550<span class="time">month</span></p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">1390 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #4 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <img src="assets/images/properties/4.jpg" alt="property image" class="img-responsive">
                                    <span class="property--status">For Sale</span>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">House in Kent Street</a></h5>
                                        <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                        <p class="property--price">$130,000</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">587 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #5 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                            <img src="assets/images/properties/2.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Rent</span>
</a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">Villa in Oglesby Ave</a></h5>
                                        <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                        <p class="property--price">$130,000<span class="time">month</span></p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">4</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">3</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">800 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #6 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                            <img src="assets/images/properties/3.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Sale</span>
</a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">Apartment in Long St.</a></h5>
                                        <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                        <p class="property--price">$70,000</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">200 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                        </div>
                        <!-- .carousel end -->
                    </div>
                    <!-- .col-md-12 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #properties-carousel  end  -->

        <!-- Feature
============================================= -->
        <section id="feature" class="feature feature-1 text-center bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">Simple Steps</h2>
                            <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- feature Panel #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="assets/images/features/icons/5.png" alt="icon img">
                            </div>
                            <div class="feature--content">
                                <h3>Search For Real Estates</h3>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eule pariate.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- feature Panel #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="assets/images/features/icons/6.png" alt="icon img">
                            </div>
                            <div class="feature--content">
                                <h3>Select Your Favorite</h3>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eule pariate.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- feature Panel #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="assets/images/features/icons/7.png" alt="icon img">
                            </div>
                            <div class="feature--content">
                                <h3>Take Your Key</h3>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eule pariate.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->

                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- .feature end -->
        <!-- city-property
============================================= -->
        <section id="city-property" class="city-property text-center pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">Property By City</h2>
                            <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- City #1 -->
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div class="property-city-item">
                            <div class="property--city-img">
                                <a href="#">
                        <img src="assets/images/properties/city/1.jpg" alt="city" class="img-responsive">
                        <div class="property--city-overlay">
                            <div class="property--item-content">
                                <h5 class="property--title">New York</h5>
                                <p class="property--numbers">16 Properties</p>
                            </div>
                        </div>
						</a>
                            </div>
                            <!-- .property-city-img end -->
                        </div>
                        <!-- . property-city-item end -->
                    </div>
                    <!-- .col-md-8 end -->
                    <!-- City #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="property-city-item">
                            <div class="property--city-img">
                                <a href="#">
                        <img src="assets/images/properties/city/2.jpg" alt="city" class="img-responsive">
                        <div class="property--city-overlay">
                            <div class="property--item-content">
                                <h5 class="property--title">Chicago</h5>
                                <p class="property--numbers">14 Properties</p>
                            </div>
                        </div>
						</a>
                            </div>
                            <!-- .property-city-img end -->
                        </div>
                        <!-- . property-city-item end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
                <div class="row">

                    <!-- City #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="property-city-item">
                            <div class="property--city-img">
                                <a href="#">
                        <img src="assets/images/properties/city/3.jpg" alt="city" class="img-responsive">
                        <div class="property--city-overlay">
                            <div class="property--item-content">
                                <h5 class="property--title">Manhatten</h5>
                                <p class="property--numbers">18 Properties</p>
                            </div>
                        </div>
						</a>
                            </div>
                            <!-- .property-city-img end -->
                        </div>
                        <!-- . property-city-item end -->
                    </div>
                    <!-- .col-md-8 end -->
                    <!-- City #4 -->
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div class="property-city-item">
                            <div class="property--city-img">
                                <a href="#">
                        <img src="assets/images/properties/city/4.jpg" alt="city" class="img-responsive">
                        <div class="property--city-overlay">
                            <div class="property--item-content">
                                <h5 class="property--title">Los Angeles</h5>
                                <p class="property--numbers">10 Properties</p>
                            </div>
                        </div>
						</a>
                            </div>
                            <!-- .property-city-img end -->
                        </div>
                        <!-- . property-city-item end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- .city-property end -->

        <!-- agents
============================================= -->
        <section id="agents" class="agents bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">Trusted Agents</h2>
                            <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                        </div>
                        <!-- .heading end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- agent #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="agent">
                            <div class="agent--img">
                                <img src="assets/images/agents/grid/1.png" alt="agent" />
                                <div class="agent--details">
                                    <p>Lorem ipsum dolor sit amet, consece adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                                    <div class="agent--social-links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .agent-img end -->
                            <div class="agent--info">
                                <h5 class="agent--title">Steve Martin</h5>
                                <h6 class="agent--position">Buying Agent</h6>
                            </div>
                            <!-- .agent-info end -->
                        </div>
                        <!-- .agent end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- agent #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="agent">
                            <div class="agent--img">
                                <img src="assets/images/agents/grid/2.png" alt="agent" />
                                <div class="agent--details">
                                    <p>Lorem ipsum dolor sit amet, consece adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                                    <div class="agent--social-links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .agent-img end -->
                            <div class="agent--info">
                                <h5 class="agent--title">Mark Smith</h5>
                                <h6 class="agent--position">Selling Agent</h6>
                            </div>
                            <!-- .agent-info end -->
                        </div>
                        <!-- .agent end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- agent #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="agent">
                            <div class="agent--img">
                                <img src="assets/images/agents/grid/3.png" alt="agent" />
                                <div class="agent--details">
                                    <p>Lorem ipsum dolor sit amet, consece adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                                    <div class="agent--social-links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .agent-img end -->
                            <div class="agent--info">
                                <h5 class="agent--title">Ryan Printz</h5>
                                <h6 class="agent--position">Real Estate Broker</h6>
                            </div>
                            <!-- .agent-info end -->
                        </div>
                        <!-- .agent end -->
                    </div>
                    <!-- .col-md-4 end -->

                </div>
            </div>
        </section>
        <!-- #agents end  -->

        <!-- cta #1
============================================= -->
        <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="assets/images/cta/bg-1.jpg" alt="Background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>Join our professional team & agents to start selling your house</h3>
                        <a href="#" class="btn btn--primary">Contact</a>
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #cta1 end -->

        <!-- Footer #1
============================================= -->
        <footer id="footer" class="footer footer-1 bg-white">
            <!-- Widget Section
	============================================= -->
            <?php include("footer.php"); ?>
    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
    <script src="assets/js/plugins/jquery.gmap.min.js"></script>
    <script src="assets/js/map-addresses.js"></script>
    <script src="assets/js/map-custom.js"></script>
</body>


<!-- Mirrored from demo.zytheme.com/lalan/home-map.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jan 2020 12:57:11 GMT -->
</html>
