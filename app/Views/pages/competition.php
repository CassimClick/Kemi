<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url(assets/images/slider/lit.jpg) no-repeat center/cover">
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
                <p>We exhibit fluent knowledge of procedural rules and legal systems and our advocates have a good
                    firsthand track record of dealing and achieving results in; Competition investigations and
                    inquiries, mergers and acquisitions, regulatory proceedings before the Fair Competition Commission,
                    the Fair Competition Tribunal, EWURA, SUMATRA, TCRA and high profile private antitrust lawsuits
                    before the High Court (Commercial Division and the Main Division) and the Court of Appeal of
                    Tanzania.
                    <br>

                    This department also houses regulatory lawyers who have offered services to a wide range of local
                    and international clients in the area of Tobacco (both downstream and upstream), Telecommunication,
                    Energy, Water, Transport, and Maritime among others. We understand that compliance to the regulatory
                    regime is important to the sustainability of a business. We usually work closely with the regulatory
                    authorities in identifying the specific sector risks and advise our clients on how to manage such
                    risks. In this regard, we boast a strong relationship with regulatory authorities in Tanzania.
                </p>





            </div>
        </div>
    </div>
</section>
<!-- End Services Detail Section -->

<?=$this->include('components/practice')?>

<?=$this->endSection();