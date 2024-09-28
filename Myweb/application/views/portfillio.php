<?php $this->load->view('header') ?>
<section class="section">
    <div class="container text-center">
        <p class="section-subtitle">What I Did ?</p>
        <h6 class="section-title mb-6">Portfolio</h6>
        <!-- row -->
        <div class="row">
            <div class="col-md-4">
                <a href="https://ritish-d2a5a.web.app/" target="_blank" class="portfolio-card">
                    <img src="<?= base_url('assets/imgs/r2.jpeg')?>" class="portfolio-card-img" alt="" height="380px">
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
<?php $this->load->view('footer') ?>