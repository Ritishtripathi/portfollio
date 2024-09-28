<?php $this->load->view('header') ?>

<section class="section pt-0">
    <!-- container -->
    <div class="container text-center">
        <!-- about wrapper -->
        <div class="about">

            <div class="about-caption">
                <p class="section-subtitle">Who Am I ?</p>
                <h2 class="section-title mb-3">About Me</h2>
                <p>
                    My name is Ritish Tripathi, and I Am from Mirzapur, Uttar Pradesh. I've recently completed my engineering degree and have been working as a software engineer for the past year. Mirzapur is my hometown, where I find comfort and belonging.<br> Engineering has been my passion, and software engineering allows me to delve into my interests further. I am dedicated to honing my skills and contributing meaningfully to the field. <br>Outside of work, I enjoy exploring nature and spending time with loved ones. My journey as an engineer is just beginning, filled with enthusiasm and determination.
                </p>
                <a href="<?= base_url('assets/pdf/Ritish.pdf') ?>" target="_blank"><button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button></a>
            </div>
            <div class="about-img-holder">
                <img src="<?= base_url('assets/imgs/r2.jpeg') ?>" alt="img" width="100%">
            </div>
        </div><!-- end of about wrapper -->
    </div><!-- end of container -->
</section> <!-- end of about section -->
<?php $this->load->view('footer') ?>