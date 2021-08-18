<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url(assets/images/slider/litiation.jpg) no-repeat center/cover">
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
                <p>Our Litigation and Alternative Dispute Resolution (ADR) team provides competent Litigation services
                    for our clients. Specifically, we are experienced on Commercial Litigation, Corporate Law Issues
                    including: </p>
                <div class="row clearfix">
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Commercial Disputes </li>
                            <li>Shareholder Disputes</li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Employment and Labour Disputes </li>
                            <li>Debt Recovery and Securities enforcement Litigation</li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">
                            <li>Insurance </li>
                            <li>Receiverships</li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">

                            <li>Administrative Actions</li>
                            <li>Arbitration and Contractual Disputes</li>
                        </ul>
                    </div>
                    <div class="column col-lg-3 col-md-6 col-sm-6">
                        <ul class="list-style-one">

                            <li>Tort Litigation, </li>

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