<?php
include('header.php');
?>

<!-- Extra Resources-->

<!-- End Extra Resources -->


<!-- - - - - - - - - - SECTION - - - - - - - - - -->
<div class="pi-section-w pi-shadow-inside-top pi-section-grey">
    <div class="pi-section pi-section-md pi-titlebar pi-titlebar-breadcrumb-right pi-titlebar-small">
        <h1>Our Services</h1>

        <div class="pi-breadcrumb">You are here:
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Company</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</div>
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->




<!-- - - - - - - - - - SECTION - - - - - - - - - -->
<main class="inner_page">
    <div class="pi-section-w pi-section-white piCounter">
        <div class="pi-section pi-padding-bottom-30">

            <?php include('what_we_do.php') ?>
        </div>
    </div>


    <!-- - - - - - - - - - SECTION - - - - - - - - - -->
    <div class="pi-section-w pi-shadow-inside-top pi-section-parallax" style="background-image: url(img_external/gallery/consulting.jpg);">
        <div class="pi-texture" style="background: rgba(31, 37, 44, 0.85);"></div>
        <div class="pi-section pi-padding-top-110 pi-padding-bottom-100 pi-text-center">

            <h3 class="pi-uppercase pi-weight-700 pi-letter-spacing pi-margin-bottom-20">
                Want to work with us?
            </h3>

            <p class="lead-16 pi-margin-bottom-30">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br>accusantium doloremque laudantium
            </p>

            <p>
                <a href="#" class="btn pi-btn-contur-3 pi-btn-big">
                    Get in Touch
                </a>

                <span class="pi-or">or</span>

                <a href="#" class="btn pi-btn-base pi-btn-no-border pi-shadow pi-btn-big">
                    Get a Free Quote
                </a>
            </p>

        </div>
    </div>
    <!-- - - - - - - - - - END SECTION - - - - - - - - - -->
</main>
<?php
include('footer.php');
