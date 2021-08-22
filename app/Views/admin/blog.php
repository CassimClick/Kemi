<?php $session = \Config\Services::session()?>
<?=$this->extend('layouts/adminLayout')?>
<?=$this->section('content')?>

<div class="container p-10">
    <h3>blog page</h3>
    <div class="col-md-12">
        <button type="button" id="newBlog" class="btn btn-success btn-sm mb-2 pull-right" data-toggle="modal"
            data-target="#blog">
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
            <strong>Blog Published Successfully</strong>
        </div>
        <?php endif;?>
        <?php if ($session->get('deleted')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Blog Deleted Successfully</strong>
        </div>
        <?php endif;?>

    </div>






    <table class="table table-striped">
        <thead class="">
            <tr>
                <th scope="col">blog Title</th>
                <th scope="col">Date</th>

                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogs as $blog): ?>

            <tr>
                <td><?=ucfirst($blog->title)?></td>
                <td><?=dateFormatter($blog->created_at)?></td>

                <td><img style="width: 50px ; height:50px; border-radius:50%; box-shadow: -1px 4px 10px -1px rgba(36,36,36,0.6);"
                        class="blog-thumb" src="<?=$blog->image_url?>" alt=""></td>
                <td>
                    <div class="button-group">
                        <button onclick="viewBlog('<?=$blog->blog_id?>')" class="btn btn-sm btn-success"><i
                                class="fas fa-eye"></i></button>
                        <button onclick="editBlog('<?=$blog->blog_id?>')" class="btn btn-sm btn-primary"><i
                                class="fas fa-edit"></i></button>
                        <a href="<?=base_url()?>/deleteBlog/<?=$blog->blog_id?>" class="btn btn-sm btn-danger"><i
                                class="fas fa-trash-alt"></i></a>
                    </div>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
<?=$this->include('components/newBlog');?>

<!-- ======================================= -->
<div class="modal blogPreview fade" id="blog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <div>
                    <h3 id="a-title"></h3>

                    <spans id="a-date"></spans>
                </div>



                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" id="thumbnail" alt="" style="width: 100%; height:350px">
                <br>

                <p id="a-description"></p>


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

<!-- A modal to edit an blog -->
<div class="modal blogEdit fade" id="blogEdit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <div>
                    <h3>Edit...</h3>

                    <!-- <spans id="a-date"></spans> -->
                </div>



                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input id="blogIdEdit" class="form-control" type="text" hidden>
                <div class="form-group">
                    <label for="my-input">Title</label>
                    <input id="blogTitleEdit" class="form-control" type="text" name="">
                </div>
                <div class="form-group">
                    <label for="my-input">Date</label>
                    <input id="blogDateEdit" class="form-control" type="date" name="">
                </div>

                <div class="form-group">
                    <label for="my-textarea">Description</label>
                    <textarea id="blogDescEdit" class="form-control" name="" rows="3"></textarea>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="updateBtn" class="btn btn-primary">Update</button>
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
//=================Update blog====================
document.querySelector('#xxx').DataTable();
$('#updateBtn').click(function() {
    const theId = $('#blogIdEdit')
    const title = $('#blogTitleEdit')
    const date = $('#blogDateEdit')
    const description = $('#blogDescEdit')
    const image = $('#image')

    function clearInputs() {
        const title = $('#blogTitleEdit').val(' ')
        const date = $('#blogDateEdit').val(' ')
        const description = $('#blogDescEdit').val(' ')
    }

    function validator(input) {
        if (input.val() == '') {
            input.css('border', '1px solid red')
            return false
        } else {
            input.css('border', '1px solid green')
            return true
        }
    }

    if (validator(title) && validator(date) && validator(description)) {
        $.ajax({
            type: "POST",
            url: "updateBlog",
            dataType: "json",
            data: {
                theId: theId.val(),
                title: title.val(),
                date: date.val(),
                description: description.val(),
                image: image.val(),
            },

            success: function(response) {
                $('.modal').modal('hide');
                clearInputs()

                console.log(response)
                // Swal.fire(
                //     '',
                //     `${response}`,
                //     'success'
                // );
                // location.reload(true);
            }
        });
    }


});

//=================Publishing new blog====================
$('#blogForm').on('submit', function(e) {
    e.preventDefault()


    const title = $('#blogTitle')
    const date = $('#blogDate')
    const description = $('#blogDescription')
    const image = $('#image')

    //alert(image.val())



    function clearInputs() {
        const title = $('#blogTitle').val(' ')
        const date = $('#blogDate').val(' ')
        const description = $('#blogDescription').val(' ')
    }

    function validator(input) {
        if (input.val() == '') {
            input.css('border', '1px solid red')
            return fasse
        } else {
            input.css('border', '1px solid green')
            return true
        }
    }
    if (validator(title) && validator(date) && validator(description)) {
        $.ajax({
            type: "POST",
            url: "publishBlog",
            dataType: "json",
            data: {
                title: title.val(),
                date: date.val(),
                description: description.val(),
                image: image.val(),
            },

            success: function(response) {
                console.log(response)
                // $('.modal').modal('hide');
                // clearInputs()
                // Swal.fire(
                //     '',
                //     `${response}`,
                //     'success'
                // );
                // location.reload(true);
            }
        });
    }

})
//=====================================

function viewBlog(id) {
    const title = $('#a-title')
    const date = $('#a-date')
    const description = $('#a-description')
    const img = $('#thumbnail')

    $.ajax({
        type: "POST",
        url: "viewBlog",
        data: {
            id: id
        },
        dataType: "json",
        success: function(response) {

            title.html(response.title)
            date.html(response.date)
            description.html(response.description)
            img.attr("src", response.image_url)
        }
    });


    $('.blogPreview').modal('show');
}

function editBlog(blogId) {

    //alert(blogId)
    $('.blogEdit').modal('show');
    const theId = $('#blogIdEdit')
    const title = $('#blogTitleEdit')
    const date = $('#blogDateEdit')
    const description = $('#blogDescEdit')

    $.ajax({
        type: "POST",
        url: "viewSingleBlog",
        data: {
            id: blogId
        },
        dataType: "json",
        success: function(response) {
            // console.log(response)
            theId.val(response.id)
            title.val(response.title)
            date.val(response.date)
            description.val(response.description)
        }
    });



}





function deleteBlog(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

            deleteFile(id)

        }
    })





    //=================Delete blog====================
    function deleteFile(recordId) {


        console.log(recordId);
        // $.ajax({
        //     type: "POST",
        //     url: "deleteBlog",
        //     data: {
        //         id: recordId
        //     },
        //     dataType: "json",
        //     success: function(response) {

        //         Swal.fire(
        //             'Deleted!',
        //             `${response}`,
        //             'success',
        //             location.reload(true)
        //         )
        //     }
        // });
    }


}
</script>
<?=$this->endSection()?>