<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url(assets/images/slider/money.jpg) no-repeat center/cover">
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
                <h2><?=$title?> </h2>
                <p>We provide a range of financial legal services for banks, financial institutions and specific
                    clients. We act on their behalf in connection with their implementation of banking securities
                    perfection (mortgages, liens) and project finance loan agreements and securities. We also oversee
                    foreign loan registrations with the central bank (Bank of Tanzania) for specific clients</p>





            </div>
        </div>
    </div>
</section>
<!-- End Services Detail Section -->

<?=$this->include('components/practice')?>

<?=$this->endSection();