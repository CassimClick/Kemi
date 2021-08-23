<!-- Case Block -->

<?php foreach ($articles as $article): ?>
<?php $articleUrl = base_url() . '/articleDetails/' . $article->article_id?>

<div class="case-block col-lg-6 col-md-6 col-sm-12">
    <div class="inner-box"
        style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
        <div class="image">
            <!-- <div class="tag">Tax issue</div> -->
            <a href="<?=$articleUrl?>"><img src="<?=$article->image_url?>" alt="" /></a>
        </div>
        <div class="lower-content">
            <h3><a href="<?=$articleUrl?>"><?=$article->title?></a></h3>
            <a href="<?=$articleUrl?>" class="theme-btn btn-style-three"><span class="txt">Read more <i
                        class="arrow flaticon-right"></i></span></a>
        </div>
    </div>
</div>
<?php endforeach;?>

<!-- Case Block -->