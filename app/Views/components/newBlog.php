<!-- =========New blog======== -->
<div class="modal fade" id="blog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New blog</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?=form_open_multipart(base_url('publishBlog'))?>
                <form id="blogForm" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="my-input">Tittle</label>
                        <input id="blogTitle" class="form-control" type="text" name="title">
                    </div>
                    <textarea class="textEditor" name="description" placeholder="Place some text here"
                        style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    <div class="form-group">
                        <label for="my-input">Image</label>
                        <input id="image" class="form-control" type="file" name="image-file" accept="image/*">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            <?=form_close()?>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>