<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url(assets/images/slider/house.jpg) no-repeat center/cover">
    <div class="auto-container">
        <h1><?=$title?> </h1>
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
                <h2><?=$title?> </h2>
                <p>The Firm has a record of representation of non-profit companies, Non-Governmental Organizations
                    (NGOs), and other public interest organizations. The Firm’s work covers business and corporate
                    matters such as incorporation, registration, post registration secretarial and compliance services.
                    Furthermore, the Firm offers legal advice on programmatic and advocacy issues</p>





            </div>
        </div>
    </div>
</section>
<!-- End Services Detail Section -->

<?=$this->include('components/practice')?>

<?=$this->endSection();