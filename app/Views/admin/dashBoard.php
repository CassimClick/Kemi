<?=$this->extend('layouts/adminLayout')?>
<?=$this->section('content')?>
<div class="container-fluid">
    <br>
    <h3 class="">Admin page</h3>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-primary elevation-2 p-10"><i class="fas fa-newspaper"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">Blog Posts</span>
                    <span class="">12</span><br>

                </div>

            </div>

        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-2 p-10"><i class="fas fa-file"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">Publications</span>
                    <span class="">55</span><br>

                </div>

            </div>

        </div>

    </div>
</div>
<?=$this->endSection()?>