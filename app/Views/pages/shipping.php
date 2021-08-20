<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url(assets/images/slider/ship.jpg) no-repeat center/cover">
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
                    Kemi Advocates, in this aspect of international trade deals with matters including marine commerce,
                    shipping, law of the sea generally, the transportation of passengers and goods by sea, and custom
                    permits and rules as to tariffs and related matters. We also cover many commercial activities,
                    although land based or occurring wholly on land, that are maritime in character. Our work includes
                    advice to clients on interpreting the scope and applicability of Tanzania’s export controls,
                    economic sanctions and determining the export and import classification of products and
                    technologies, obtaining licenses and other authorizations, obtaining commodity jurisdiction
                    determinations, and defending clients in tax, regulatory, be it environmental, healthy, energy,
                    administrative and criminal enforcement actions. We frequently assist clients in the development and
                    implementation of internal compliance programs, the conduct of internal investigations and the
                    design of remedial measures (including in-house training programs).
                </p>





            </div>
        </div>
    </div>
</section>
<!-- End Services Detail Section -->

<?=$this->include('components/practice')?>

<?=$this->endSection();