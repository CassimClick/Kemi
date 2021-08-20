<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url(assets/images/slider/corparate.jpg) no-repeat center/cover">
    <div class="auto-container">
        <h1>Corporate and Commercial</h1>
        <ul class="page-breadcrumb">
            <li><a href="<?=base_url()?>">home</a></li>
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
                <h2>Expertise In All Aspects Of Corporate</h2>
                <p>We advise on all areas of business and company law. The Firm has vast experience with the provision
                    of a range of Corporate and Commercial Legal Services, which include: </p>
                <div class="row clearfix">
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Incorporations and Company Secretarial Services</li>
                            <li>Corporate restructuring</li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Mergers and acquisition</li>
                            <li>Due diligence</li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Contracts and agreements </li>
                            <li>Regulatory Compliance</li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">

                            <li>Legal opinions</li>
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