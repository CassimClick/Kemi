<?=$this->extend('layouts/mainLayout');?>
<?=$this->section('content');?>
<!-- Page Title -->
<!-- Page Title -->
<section class="page-title style-two" style="background:url(<?=$article->image_url?>)">
    <div class="auto-container">
        <h1><?=$article->title?></h1>
        <ul class="page-breadcrumb">
            <li><a href="<?=base_url()?>">home</a></li>
            <!-- <li>Article Detail</li> -->
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <!-- Block Detail -->
                <div class="blog-detail">
                    <div class="inner-box">

                        <div class="lower-content">
                            <h3><?=$article->title?></h3>
                            <p><?=$article->description?></p>


                            <!-- Post Share Options-->
                            <div class="post-share-options">
                                <div class="post-share-inner clearfix">
                                    <div class="pull-left">
                                        <div class="btn-box">
                                            <a href="<?=base_url() . '/downloadArticlePdf/' . $article->article_id?>"
                                                class="theme-btn btn-style-two"><span class="txt">Download Pdf <i
                                                        class="arrow flaticon-download"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="tags pull-right">
                                        <div class="business">Category: <a href="#">Tax</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar sticky-top">
                    <div class="sidebar-inner">

                        <!-- Search -->
                        <!-- <div class="sidebar-widget search-box">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search ....."
                                        required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div> -->

                        <!--Blog Category Widget-->
                        <!-- <div class="sidebar-widget sidebar-blog-category">
                            <div class="widget-content">
                                <div class="sidebar-title">
                                    <h5>Categories</h5>
                                </div>
                                <ul class="cat-list-two">
                                    <li><a href="#">Consulting <span>(25)</span></a></li>
                                    <li><a href="#">Life Style<span>(80)</span></a></li>
                                    <li><a href="#">Technology<span>(95)</span></a></li>
                                </ul>
                            </div>
                        </div> -->

                        <!-- Popular Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <div class="widget-content">
                                <div class="sidebar-title">
                                    <h5>Recent Publications</h5>
                                </div>

                                <?php foreach ($articles as $article): ?>

                                <article class="">

                                    <div class="text"><a
                                            href="<?=base_url() . '/articleDetails/' . $article->article_id?>"><?=$article->title?></a>
                                    </div>
                                    <div class="post-info"><?=dateFormatter($article->created_at)?></div>
                                </article>
                                <hr>
                                <?php endforeach;?>






                            </div>
                        </div>



                    </div>
                </aside>
            </div>

        </div>
    </div>
</div <?=$this->endSection();