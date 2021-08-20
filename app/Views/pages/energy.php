<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url(assets/images/slider/power.jpg) no-repeat center/cover">
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
                <p>Kemi Advocates can facilitate our clients in energy, oil, gas and mining to structure projects,
                    acquire finance and implement projects and manage their investments since we have the aforesaid
                    expertise. We recognize all the stakeholders’ needs in large scale projects. With our local know-how
                    and relationships, transactional capability and broad-ranging skills in finance, corporate, tax,
                    real estate, securities, environmental and competition law, we can deliver integrated legal services
                    that are unrivaled to assist our investing client accessing a smooth investment plan and realizing
                    its goals. Our ultimate aim is to efficiently provide commercially effective solutions at every
                    stage of such investments in the energy, oil, gas and mining industry

                    Our specialty include: biofuel, biomass, carbon capture, coal, geothermal, hydroelectric, natural
                    gas, oil & gas, solar, wind and waste to energy..</p>





            </div>
        </div>
    </div>
</section>
<!-- End Services Detail Section -->

<?=$this->include('components/practice')?>

<?=$this->endSection();