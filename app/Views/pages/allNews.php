<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<section class="page-title style-two" style="background:url(assets/images/keyboard.jpg) no-repeat center/cover">
    <div class="auto-container">
        <h1>recent news</h1>
        <ul class="page-breadcrumb">
            <li><a href="<?=base_url()?>">home</a></li>
            <li>Recent news</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->
<!-- case-style-three -->
<section class="case-style-three bg-color-2" style="background: #F5F5F5;">
    <div class="auto-container">

        <div class="row clearfix">

            <?=$this->include('widgets/newsBlock')?>




        </div>
    </div>
</section>
<!-- case-style-three end -->



<?=$this->endSection();