<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title" style="background:url(assets/images/write.jpg) no-repeat center/cover">
    <div class="auto-container">
        <h1>Publications</h1>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>Publications</li>
        </ul>
    </div>
</section>
<!-- Case Study Section -->
<section class="case-study-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">


                <?=$this->include('widgets/articleBlock')?>
                <?=$this->include('widgets/articleBlock')?>
                <?=$this->include('widgets/articleBlock')?>
                <?=$this->include('widgets/articleBlock')?>



            </div>
        </div>
    </div>
</section>
<!-- End Case Study Section -->
<?=$this->endSection();