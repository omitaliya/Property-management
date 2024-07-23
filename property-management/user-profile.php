<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<!-- Mirrored from demo.zytheme.com/lalan/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jan 2020 12:57:31 GMT -->
<?php include("header.php"); ?>
============================================ -->
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="assets/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>user Profile</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">user Profile</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->

        <!-- #user-profile
============================================= -->
        <section id="user-profile" class="user-profile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="edit--profile-area">
                            <ul class="edit--profile-links list-unstyled mb-0">
                                <li><a href="user-profile.html" class="active">Edit Profile</a></li>
                                <li><a href="social-profile.html">Social Profiles</a></li>
                                <li><a href="my-properties.html">My Properties</a></li>
                                <li><a href="favourite-properties.html">Favorite Properties</a></li>
                                <li><a href="add-property.html">Add Property</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <form class="mb-0">
                            <div class="form-box">
                                <h4 class="form--title">Profile Picture</h4>
                                <div class="upload--img-area">
                                    <div class="preview--img">
                                        <img src="#" id="output--img" class="output--img">
                                    </div>
                                    <a class="btn btn--primary btn-file ml-30">Upload
                                <input type="file" hidden>
                                <input type="file" accept="image/*" onchange="loadFile(event)"> 
                            </a>
                                    <a href="#" class="btn delete--img"><i class="fa fa-times"></i>Delete</a>
                                    <script>
                                        var loadFile = function(event) {
                                            var reader = new FileReader();
                                            reader.onload = function() {
                                                var output = document.getElementById('output--img');
                                                output.src = reader.result;
                                            };
                                            reader.readAsDataURL(event.target.files[0]);
                                        };

                                    </script>
                                </div>
                            </div>
                            <div class="form-box">
                                <h4 class="form--title">Personal Details</h4>
                                <div class="form-group">
                                    <label for="first-name">First Name</label>
                                    <input type="text" class="form-control" name="first-name" id="first-name">
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" class="form-control" name="last-name" id="last-name">
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="email-address">Email Address</label>
                                    <input type="email" class="form-control" name="email-address" id="email-address">
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="phone-number">Phone</label>
                                    <input type="text" class="form-control" name="phone-number" id="phone-number">
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="about-me">About Me</label>
                                    <textarea class="form-control" name="about-me" id="about-me" rows="2"></textarea>
                                </div>
                                <!-- .form-group end -->
                            </div>
                            <!-- .form-box end -->
                            <div class="form-box">
                                <h4 class="form--title">Change Password</h4>
                                <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="confirm-password">confirm password</label>
                                    <input type="password" class="form-control" name="confirm-password" id="confirm-password">
                                </div>
                                <!-- .form-group end -->
                            </div>
                            <!-- .form-box end -->
                            <input type="submit" value="Save Edits" name="submit" class="btn btn--primary">
                        </form>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
        <!-- #user-profile  end -->

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
        <?php include("footer.php"); ?>
    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
</body>


<!-- Mirrored from demo.zytheme.com/lalan/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jan 2020 12:57:31 GMT -->
</html>
