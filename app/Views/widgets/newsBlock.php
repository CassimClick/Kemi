<?php foreach ($blogs as $blog): ?>
<?php $str = strip_tags($blog->description)?>
<!-- News Block -->
<div class="col-lg-4 col-md-6 col-sm-12 case-block">
    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="inner-box">
            <figure class="image-box">
                <img src="<?=$blog->image_url?>" alt="" style="height: 250px;">
                <div class="link"><a href="<?=base_url() . '/blogDetails/' . $blog->blog_id?>"><i
                            class="flaticon-link"></i></a></div>
                <div class="overlay-layer"></div>
            </figure>
            <div class="lower-content">
                <div class="box">
                    <div class="icon-box"><i class="flaticon-calendar"></i></div>
                    <p><b>
                            <?=dateFormatter($blog->created_at)?>
                        </b></p>
                    <h4><a href="<?=base_url() . '/blogDetails/' . $blog->blog_id?>">
                            <?=$blog->title?>
                        </a></h4>
                </div>
                <div class="text">
                    <?=substr($str, 0, 120) . '
                    [...]'?>
                </div>
                <div class="link"><a href="<?=base_url() . '/blogDetails/' . $blog->blog_id?>"><i
                            class="flaticon-right"></i>Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endforeach;?>
<!-- News Block -->