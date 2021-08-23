<?php $session = \Config\Services::session()?>
<?=$this->extend('layouts/adminLayout')?>
<?=$this->section('content')?>

<div class="container p-10">
    <h3>Article page</h3>
    <div class="col-md-12">
        <button type="button" id="newArticle" class="btn btn-success btn-sm mb-2 pull-right" data-toggle="modal"
            data-target="#article">
            Add
        </button>

        <?php if (isset($validation)): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <?=$validation->listErrors()?>
        </div>
        <?php endif;?>

        <?php if ($session->get('published')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Article Published Successfully</strong>
        </div>
        <?php endif;?>
        <?php if ($session->get('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Article Deleted Successfully</strong>
        </div>
        <?php endif;?>

    </div>






    <table class="table table-striped">
        <thead class="">
            <tr>
                <th scope="col">Article Title</th>
                <th scope="col">Date</th>

                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>

            <tr>
                <td><?=ucfirst($article->title)?></td>
                <td><?=dateFormatter($article->created_at)?></td>

                <td><img style="width: 50px ; height:50px; border-radius:50%; box-shadow: -1px 4px 10px -1px rgba(36,36,36,0.6);"
                        class="Article-thumb" src="<?=$article->image_url?>" alt=""></td>
                <td>
                    <div class="button-group">
                        <button onclick="viewArticle('<?=$article->article_id?>')" class="btn btn-sm btn-success"><i
                                class="fas fa-eye"></i></button>
                        <!-- <button onclick="editArticle('<?=$article->article_id?>')" class="btn btn-sm btn-primary"><i
                                class="fas fa-edit"></i></button> -->
                        <a href="<?=base_url()?>/deleteArticle/<?=$article->article_id?>"
                            class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
<?=$this->include('components/newArticle');?>

<!-- ======================================= -->
<div class="modal articlePreview fade" id="article">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <div>
                    <h3 id="article-title"></h3>

                    <spans id="article-date"></spans>
                </div>



                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" id="thumbnail" alt="" style="width: 100%; height:350px">
                <br>

                <p id="article-description"></p>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!-- <button type="button" id="publishBtn" class="btn btn-primary">Publish</button> -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<script>
$(function() {
    // Summernote
    $('.textEditor').summernote()
})
</script>


<script>
//=====================================

function viewArticle(id) {
    const title = $('#article-title')

    const description = $('#article-description')
    const img = $('#thumbnail')

    $.ajax({
        type: "POST",
        url: "viewArticle",
        data: {
            id: id
        },
        dataType: "json",
        success: function(response) {
            console.log(response);
            title.html(response.title)

            description.html(response.description)
            img.attr("src", response.image_url)
        }
    });


    $('.articlePreview').modal('show');
}
</script>
<?=$this->endSection()?>