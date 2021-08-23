<!-- =========New article======== -->
<div class="modal fade" id="article">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New article</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?=form_open_multipart()?>
                <form id="articleForm" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="my-input">Tittle</label>
                        <input id="articleTitle" class="form-control" type="text" name="title"
                            value="<?=set_value('title')?>">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-control" name="category" id="">
                            <option value="Finance">Finance</option>
                            <option value="Technology">Technology</option>
                            <option value="Cyber">Cyber</option>
                            <option value="Litigation">Litigation</option>

                        </select>
                    </div>
                    <textarea class="textEditor" name="description" placeholder="Place some text here"
                        style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=set_value('description')?></textarea>
                    <div class="form-group">
                        <label for="my-input">Image</label>
                        <input id="image" class="form-control" type="file" name="image" accept="image/*">
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