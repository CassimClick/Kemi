<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title" style="background:url(assets/images/slider/corparate.jpg)">
    <div class="auto-container">
        <h1>Contact Us</h1>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->
<!-- Map Section -->
<section class="map-section">
    <div class="auto-container">
        <div class="inner-container">
            <!-- Map Boxed -->
            <div class="map-boxed">
                <!-- Map Outer -->
                <?=$this->include('widgets/map')?>
            </div>
        </div>
    </div>
</section>
<!-- End Map Section -->

<!-- Contact Form Section -->
<?=$this->include('components/contactForm')?>

<!-- End Contact Form Section -->




<?=$this->endSection();