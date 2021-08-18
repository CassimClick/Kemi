<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url(assets/images/write.jpg) no-repeat center/cover">
    <div class="auto-container">
        <h1><?=$title?></h1>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <!-- <li>Corporate and Commercial</li> -->
        </ul>
    </div>
</section>
<!-- Services Detail Section -->
<section class="services-block" style="background: #F8F8F8;">
    <div class="auto-container">
        <div class="inner-">
            <!-- <div class="image">
					<img src="images/resource/service-6.jpg" alt="" />
				</div> -->
            <div class="lower-content">
                <h2><?=$title?></h2>
                <p>We have considerable experience in the sale and purchase of residential and commercial properties and
                    liaising with relevant institutions/individuals for financing such sales. Commercial Property
                    transactions range from basic acquisitions and disposals of private property, Farms, small
                    commercial buildings to large multi-storey buildings and also bare land for development purposes. We
                    have a broad range of expertise in real estate and conveyance that includes </p>
                <div class="row clearfix">
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Acquisition of Leasehold Titles and Rights of Occupancy </li>
                            <li>Acquisition of derivative rights through the Tanzania Investment Center and Export
                                Processing Zones </li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Estate and town planning. </li>
                            <li>Acquisition of Unit Titles </li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Transfer and conveyance of property
                            </li>

                        </ul>
                    </div>

                </div>




            </div>
        </div>
    </div>
</section>
<!-- End Services Detail Section -->

<?=$this->include('components/practice')?>

<?=$this->endSection();