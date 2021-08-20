<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url(assets/images/write.jpg) no-repeat center/cover">
    <div class="auto-container">
        <h1><?=$title?></h1>
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
                <h2><?=$title?></h2>
                <p>
                    Employment law is a fast-paced complex and dynamic field of practice. With increased levels of
                    compensation now available, sound legal advice is essential for Employers. The financial and other
                    consequences for the unwary employers can therefore be serious.
                    Effective management of human resources calls for delicately balanced judgments. Decisions often
                    need to be made quickly and clients rely on our responsiveness and we provide objective, commercial
                    and practical legal advice.



                    7 | K e m i A d v o c a t e s


                    We are regularly instructed by employers and senior management on every aspect of the employment
                    relationship, from the formulation of employment policies and the drafting of contracts of
                    employment to compliance. We support the HR and management functions and demands whenever necessary
                    on disciplinary matters, dismissals and proceedings in Employment Tribunals and the High Court
                    (Labor Division).
                </p>





            </div>
        </div>
    </div>
</section>
<!-- End Services Detail Section -->

<?=$this->include('components/practice')?>

<?=$this->endSection();