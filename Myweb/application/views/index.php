<?php $this->load->view('header') ?>

<!-- start of about section -->
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

<!-- service section -->
<section class="section" id="service">
    <div class="container text-center">
        <p class="section-subtitle">What I Do ?</p>
        <h6 class="section-title mb-6">Service</h6>
        <!-- row -->
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="body">
                        <img src="<?= base_url('assets/imgs/pencil-case.svg') ?>" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                        <h6 class="title">Websites developement</h6>
                        <p class="subtitle">"I specialize in website development, crafting digital spaces tailored to your needs."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="body">
                        <img src="assets/imgs/responsive.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                        <h6 class="title">App developement</h6>
                        <p class="subtitle">"I specialize in Application development as part of my services. If you're interested, feel free to reach out!"</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="body">
                        <img src="assets/imgs/toolbox.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                        <h6 class="title">Web hosting</h6>
                        <p class="subtitle">"Offering web hosting services along with website creation expertise. If you need a website, we've got you covered."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="body">
                        <img src="assets/imgs/analytics.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                        <h6 class="title">Business goal</h6>
                        <p class="subtitle">
                            Sure, here are two lines in English:
                            "I specialize in creating websites to help achieve your business goals. If you need one."</p>
                    </div>
                </div>
            </div>
        </div><!-- end of row -->
    </div>
</section><!-- end of service section -->
<!-- skills -->
<section class="section">
    <div class="container text-center">
        <p class="section-subtitle">About My Skills ?</p>
        <h6 class="section-title mb-6">SKILLS SUMMARY</h6>

        <!-- row -->
        <div class="row">
            <div class="col-md-6">
                <div class="testimonial-card">
                    <div class="testimonial-card-img-holder">
                        <img src="<?= base_url('assets/imgs/s2.png')?>" class="testimonial-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="testimonial-card-body">
                        <center><h2>PHP FULL-STACK </h2></center>
                        <p class="testimonial-card-subtitle"></p>
                        <h6 class="testimonial-card-title">
                            <ul>
                                <li>PHP</li>
                                <li>Codeigniter-3</li>
                                <li>MySQL Database</li>
                                <li>JavaScript</li>
                                <li>Html</li>
                                <li>Html 5</li>
                                <li>CSS</li>
                                <li>Bootstrap</li>
                                <li>etc..</li>
                            </ul>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-card">
                    <div class="testimonial-card-img-holder">
                        <img src="<?= base_url('assets/imgs/s3.png')?>" class="testimonial-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="testimonial-card-body">
                    <center><h2>MERN FULL-STACK</h2></center>
                        <p class="testimonial-card-subtitle"></p>
                        <h6 class="testimonial-card-title">
                            <ul>
                                <li>Mongo DB</li>
                                <li>Express JS</li>
                                <li>React JS</li>
                                <li>Node JS</li>
                                <li>JavaScript</li>
                                <li>React Bootstrap</li>
                                <li>Material UI</li>
                                <li>etc..</li>
                            </ul>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end of container -->
</section>
<!-- end skills  -->
<!-- portfolio section -->
<section class="section">
    <div class="container text-center">
        <p class="section-subtitle">What I Did ?</p>
        <h6 class="section-title mb-6">Portfolio</h6>
        <!-- row -->
        <div class="row">
            <div class="col-md-4">
                <a href="https://ritish-d2a5a.web.app/" target="_blank" class="portfolio-card">
                    <img src="<?= base_url('assets/imgs/r2.jpeg')?>" class="portfolio-card-img" alt="">
                    <span class="portfolio-card-overlay">
                        <span class="portfolio-card-caption">
                            <h4>About me</h5>
                            <p class="font-weight-normal">My Portfolio</p>
                          <!-- <a href="" class="font-weight-normal" target="_blank">visit: My Portfolio</a> -->
                        </span>
                    </span>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url()?>" class="portfolio-card">
                    <img class="portfolio-card-img" src="<?= base_url('assets/imgs/p2.jpg')?>" class="img-responsive rounded" alt=""  height="380px">
                    <span class="portfolio-card-overlay">
                        <span class="portfolio-card-caption">
                            <h4>Web Designing</h5>
                                <p class="font-weight-normal">Category: Web Templates</p>
                        </span>
                    </span>
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://www.google.com/search?q=ritish+tripathi&rlz=1C1GCEA_enIN1079IN1079&oq=ritish++&gs_lcrp=EgZjaHJvbWUqDggCEEUYJxg7GIAEGIoFMgYIABBFGDkyCAgBEEUYJxg7Mg4IAhBFGCcYOxiABBiKBTIGCAMQRRg8MgYIBBBFGDwyBggFEEUYPDIGCAYQRRg8MgYIBxBFGDzSAQg0MTg4ajBqN6gCCLACAQ&sourceid=chrome&ie=UTF-8" target="_blank" class="portfolio-card">
                    <img class="portfolio-card-img" src="<?= base_url('assets/imgs/r1.jpeg')?>" class="img-responsive rounded" alt="" height="380px">
                    <span class="portfolio-card-overlay">
                        <span class="portfolio-card-caption">
                            <h4>Web Developer</h5>
                                <p class="font-weight-normal">Category: Web developement</p>
                        </span>
                    </span>
                </a>
            </div>
        </div><!-- end of row -->
    </div><!-- end of container -->
</section>
<!-- end of portfolio section -->


<!-- section -->
<section class="section-sm bg-primary">
    <!-- container -->
    <div class="container text-center text-sm-left">
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-sm offset-md-1 mb-4 mb-md-0">
                <h6 class="title text-light">Want to work with me?</h6>
                <p class="m-0 text-light">Always feel Free to Contact & Hire me</p>
            </div>
            <div class="col-sm offset-sm-2 offset-md-3">
                <button class="btn btn-lg my-font btn-light rounded">Hire Me</button>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section> <!-- end of section -->



<!-- blog section -->
<!-- end of blog section -->

<?php $this->load->view('footer') ?>