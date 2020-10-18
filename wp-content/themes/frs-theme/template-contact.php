<?php
/* Template name: Contact */
get_header();
?>

<section class="bg-6 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>SAY HELLO</b></h5>
                                <h3 class="mt-30 mb-15">Contact</h3>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php bloginfo('template_directory');?>/images/heading_logo.png" alt="">
                        <h2>Say hello</h2>
                        <h5 class="mt-10 mb-30">Say hello, send us a message</h5>
                        <p class="mx-w-700x mlr-auto">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium
                                elit elementum quis. Enean porttitor eros non ultrices convallis.
                                Vivamus quis dolor ut arcu lobortis finibus a vitae leo. Sed eget tempus sem.
                                Nullam sed lacus sed metus tincidunt lobortis lobortis at nibh. Morbi euismod, arcu in gravida rhoncus</p>
                </div>

                <form class="form-style-1 placeholder-1">
                        <div class="row">
                                <div class="col-md-6"> <input class="mb-20" type="text" placeholder="Name">  </div>
                                <div class="col-md-6"> <input class="mb-20" type="text" placeholder="E-mail">  </div>
                                <div class="col-md-12"><input class="mb-20" type="text" placeholder="Subject">  </div>
                                <div class="col-md-12">
                                        <textarea class="h-200x ptb-20" placeholder="Message"></textarea></div>
                        </div><!-- row -->
                        <h6 class="center-text mtb-30"><a href="#" class="btn-primaryc plr-25"><b>SEND MESSAGE</b></a></h6>
                </form>
        </div><!-- container -->
</section>


<!-- <div class="map-area h-700x mb--30">
    <div id="map" style="height:100%;"></div>
</div> -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1106.131889967534!2d90.27234682923162!3d24.640667217994263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDM4JzI2LjQiTiA5MMKwMTYnMjIuNCJF!5e1!3m2!1sen!2sbd!4v1603031551239!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<?php get_footer();?>