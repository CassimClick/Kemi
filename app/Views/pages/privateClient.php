<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url(assets/images/write.jpg) no-repeat center/cover">
    <div class="auto-container">
        <h1><?=$title?> </h1>
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
                <p>We work with individuals, families, and trusts on a range of legal issues. We assist our clients to
                    manage, preserve and transfer their wealth to future generations either for the benefit of their
                    families or for society at large through wills, trusts, disposition of assets or gifts depending on
                    the particular client’s objective.
                    Our private Client services include: </p>

                <div class="row clearfix">
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Wills, Probate and Administration of Estates, </li>
                            <li>SPrivate trust arrangements</li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Private property transactions </li>
                            <li>Trust set-ups </li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Employment/criminal proceedings matters </li>
                            <li>Executorship/Trustee services</li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Immigration issues</li>

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