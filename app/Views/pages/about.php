<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url('assets/images/law.jpg') no-repeat center/cover">
    <div class="auto-container">
        <h1>About Us</h1>
        <ul class="page-breadcrumb">
            <li><a href="<?=base_url()?>">home</a></li>
            <li>About</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Case Section -->
<section class="about" style="background:#F8F8F8">
    <div class="auto-container">
        <div class="inner-container">
            <div class="clearfix">

                <!-- Image Column -->
                <!-- <div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="images/resource/case-1.jpg" alt="" />
							</div>
						</div>
					</div> -->

                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>Kemi Advocates</h2>
                            <div class="textx">
                                Kemi Advocates is a legal consultancy firm based in Tanzania having a variety of
                                practices that caters for local and multinational corporations and organizations,
                                financial institutions, as well as private business individuals concerning their legal
                                needs.
                                The firm has two offices; (1) Arusha office situated at NSSF Mafao House, 6th Floor, Old
                                Moshi Arusha Rd, with P.O. Box 534 Arusha. (2) Dar Es Salaam office situated at Chole
                                Road, Oysterbay, 3rd Floor, Oysterpearl House, with P. O. Box 23197, Dar Es Salaam.
                                The Firm is geared at providing tailor-made legal services to a vast array of clientele
                                and work dedicated to provide the best legal solutions. Its expertise is centered on
                                commercial, corporate and land laws, tax, labour and compliance laws, together with
                                specialized civil and criminal litigation

                            </div>

                        </div>

                        <section class="">
                            <div class="auto-container">

                                <div class="row clearfix">

                                    <!-- Services Block Two -->
                                    <div class="services-block-two col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="webIcon flaticon-target"></div>
                                            <h5>OUR MISSION </h5>
                                            <div class="text">Kemi Advocates strives to offer customized and
                                                professional legal solutions of the highest quality to our clients. Our
                                                core business values and ethics are centered on efficiency, quality and
                                                integrity</div>

                                        </div>
                                    </div>

                                    <!-- Services Block Two -->
                                    <div class="services-block-two col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="webIcon flaticon-eye"></div>
                                            <h5>OUR VISION</h5>
                                            <div class="text">Our vision is to perfect our services through merging the
                                                traditional practice with the modern environment to provide efficient
                                                and quality professional legal services for our local and international
                                                clients.</div>

                                        </div>
                                    </div>



                                </div>
                            </div>
                        </section>

                    </div>
                </div>


            </div>
        </div>
        <!-- about text -->
        <!-- Services Section Two -->

    </div>
</section>


<!-- Services Section Two -->
<section class="values">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>our values</h2>
        </div>
        <div class="row clearfix">

            <!-- Services Block Two -->
            <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"
                    style="box-shadow: rgba(99, 99, 99, 0.25) 0px 2px 8px 0px;">
                    <div class="webIcon flaticon-energy-saving"></div>
                    <h5>Efficiency </h5>
                    <div class="text">Efficiency is a forefront of our values. We carry out our duties and serve our
                        clients in the most efficient manner. In pursuit of efficiency, we constantly endeavor to
                        innovate new techniques, applications and approaches to continuously improve our service
                        delivery to our clients. We think outside the box and develop ingenious ways of serving our
                        clients and delivering value</div>
                    <a class="arrow flaticon-right-arrow-3" href="#"></a>
                </div>
            </div>

            <!-- Services Block Two -->
            <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                    style="box-shadow: rgba(99, 99, 99, 0.25) 0px 2px 8px 0px;">
                    <div class="webIcon flaticon-statistics"></div>
                    <h5>Integrity</h5>
                    <div class="text">QWe are devoted to a high standard of values that promote honesty and sincerity;
                        dependable and consistent in actions that support meeting clients’ needs. We also believe that
                        it is vital to build trust with our clients. We strive to be transparent, fair and ethical in
                        everything we do and in all our transactions with clients, investors and co-workers.
                    </div>
                    <a class="arrow flaticon-right-arrow-3" href="#"></a>
                </div>
            </div>

            <!-- Services Block Two -->
            <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                    style="box-shadow: rgba(99, 99, 99, 0.25) 0px 2px 8px 0px;">
                    <div class="webIcon flaticon-briefcase"></div>
                    <h5>Professionalism </h5>
                    <div class="text">Utmost professionalism is on forefront of our values. We adhere to professional
                        and personal standards in carrying out our duties and serving our clients. We conduct ourselves
                        with dignity, and our professional expertise and attitude is evident in the quality of tasks and
                        interactions with our clients</div>
                    <a class="arrow flaticon-right-arrow-3" href="#"></a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services Section Two -->
<?=$this->include('components/team')?>
<?=$this->endSection();