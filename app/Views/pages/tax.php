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
                <p>The Firm completes its corporate and commercial practice with advice on potential tax implications on
                    the structuring and implementation of various transactions. The Firm advises both Tanzanian and
                    foreign clients on various tax issues including income and other employment taxes, corporation tax,
                    value added tax, withholding tax, stamp duty, excise duty, etc.
                    Furthermore, we represent Clients at tax appellate levels. This includes appeals before the Tax
                    Revenue Appeals Board (TRAB) and the Tax Revenue Appeals Tribunal (TRAT) where a Client is not
                    satisfied with assessments issued by the Tax Revenue Authority. Therefore, where a Client wishes to
                    object to arbitrary tax assessments, our tax law expertise and experience in the appellate tribunals
                    is pivotal.</p>





            </div>
        </div>
    </div>
</section>
<!-- End Services Detail Section -->

<?=$this->include('components/practice')?>

<?=$this->endSection();