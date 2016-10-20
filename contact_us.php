<?php
include('header.php');
?>

<!-- Extra Resources--> 

<!-- End Extra Resources -->


<!-- - - - - - - - - - SECTION - - - - - - - - - -->
<div class="pi-section-w pi-shadow-inside-top pi-section-grey">
    <div class="pi-section pi-section-md pi-titlebar pi-titlebar-breadcrumb-right pi-titlebar-small">
        <h1>Contact Us</h1>

        <div class="pi-breadcrumb">You are here:
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Company</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->




<!-- - - - - - - - - - SECTION - - - - - - - - - -->
<main class="inner_page">
    <div class="pi-section-w pi-section-white piCounter">
        <div class="pi-section pi-padding-bottom-30"> 
            <div class="pi-row">
                <div class="pi-col-sm-6">
                    <h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
                        Get In Touch
                    </h2>

                    <!-- Contact form -->
                    <form role="form" action="handlers/formContact.php" class="pi-contact-form">

                        <div class="pi-error-container"></div>

                        <div class="form-group">
                            <label for="exampleInputName1">Name *</label>
                            <input type="text" class="form-control form-control-name" id="exampleInputName1"
                                   placeholder="e.g. Adam Smith">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address *</label>
                            <input type="email" class="form-control form-control-email" id="exampleInputEmail1"
                                   placeholder="e.g. mail@example.com">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputCompany">Company Name</label>
                            <input type="text" class="form-control form-control-company-name" id="exampleInputCompany"
                                   placeholder="e.g. PI Studio">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPhone">Phone</label>
                            <input type="text" class="form-control form-control-phone" id="exampleInputPhone"
                                   placeholder="e.g. +11111111">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputSelect">Your Budget</label>
                            <select class="form-control form-control-budjet" id="exampleInputSelect">
                                <option>$1000</option>
                                <option>$1500</option>
                                <option>$3000</option>
                                <option>$5000</option>
                                <option>$10000</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputMessage1">Message *</label>
                            <textarea class="form-control form-control-comments" id="exampleInputMessage1" placeholder="How can we help?"
                                      rows="3"></textarea>
                        </div>
                        <div  class="form-group pi-padding-bottom-10">
                            <script type="text/javascript">
                                var RecaptchaOptions = {
                                    theme: 'clean'
                                };
                            </script>
                            <script type="text/javascript"
                                    src="http://www.google.com/recaptcha/api/challenge?k=6LcQ-_USAAAAACuWYZck-TkqvxpqeptnCgasjQlJ">
                            </script>
                            <noscript>
                            <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LcQ-_USAAAAACuWYZck-TkqvxpqeptnCgasjQlJ"
                                    height="300" width="500" frameborder="0"></iframe><br>
                            <textarea name="recaptcha_challenge_field" rows="3" cols="40">
                            </textarea>
                            <input type="hidden" name="recaptcha_response_field"
                                   value="manual_challenge">
                            </noscript>
                        </div>
                        <p>
                            <button class="btn pi-btn">
                                Submit
                            </button>
                        </p>
                    </form>
                    <!-- End contact form -->

                </div>
                <div class="pi-col-sm-6">



                    <h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
                        Contact Us
                    </h2>

                    <p>
                        Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                        eligendi.
                    </p>

                    <p class="h6 pi-uppercase pi-weight-700 pi-padding-top-20">
                        <i class="icon-location pi-text-base" style="margin-right: 5px;"></i> 557 Cyan Avenue, Suite 65, New York, CA 9008
                    </p>

                    <p class="h6 pi-uppercase pi-weight-700">
                        <i class="icon-mail pi-text-base" style="margin-right: 5px;"></i> <a href="#" class="pi-link-dark">example@mail.com</a>
                    </p>

                    <p class="h6 pi-uppercase pi-weight-700  pi-padding-bottom-30">
                        <i class="icon-phone pi-text-base" style="margin-right: 5px;"></i> +1 (330) 993-443
                    </p>

                    <p>
                        Monday - Friday: <strong>9:00 am - 10:00 pm</strong>
                        <br>
                        Saturday - Sunday: <strong>Closed</strong>
                    </p>

                    <ul class="pi-social-icons pi-jump pi-colored-bg pi-small pi-round pi-padding-top-10  pi-padding-bottom-30">
                        <li><a href="#" class="pi-social-icon-facebook"><i class="icon-facebook"></i></a></li>
                        <li><a href="#" class="pi-social-icon-twitter"><i class="icon-twitter"></i></a></li>
                        <li><a href="#" class="pi-social-icon-dribbble"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#" class="pi-social-icon-rss"><i class="icon-rss"></i></a></li>
                    </ul>

                    <div class="pi-google-map"
                         data-map-type="roadmap"
                         data-map-zoom="14"
                         data-map-style="base"
                         data-map-marker="img/marker-base.png"
                         data-map-marker-size="67,81"
                         data-map-marker-anchor="33,81"
                         data-map-address="14 Wall Street New York, NY 10005">
                    </div>

                </div>
            </div>
        </div>


        <!-- - - - - - - - - - SECTION - - - - - - - - - -->
        <div class="pi-section-w pi-shadow-inside-top pi-section-base">
            <div class="pi-texture" style="background: url(img/hexagon.png) repeat;"></div>
            <div class="pi-section pi-padding-top-60 pi-padding-bottom-40 pi-text-center">

                <p class="lead-30">
                    <span class="pi-text-white">Have a project with us? <span class="pi-weight-400">Feel free.</span></span>

                    <button class="btn pi-btn-base-2 pi-btn-big" style="margin-left: 25px;">
                        <i class="icon-mail pi-icon-left"></i> Get in Touch
                    </button>

                </p>

            </div>
        </div>
        <!-- - - - - - - - - - END SECTION - - - - - - - - - -->
    </div>

</main>
<?php
include('footer.php');
