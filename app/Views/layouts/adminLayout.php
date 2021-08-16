<?=$this->include('layouts/adminHeader.php');?>
<!-- /.navbar -->
<!-- Main SideMenu Container -->
<?=$this->include('layouts/sideMenu.php');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?=$this->renderSection('content');?>
</div>
<!-- Main Content end Here -->
<!-- footer -->
<?=$this->include('layouts/adminFooter.php');?>