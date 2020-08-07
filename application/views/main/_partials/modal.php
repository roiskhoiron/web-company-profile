<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Isi lengkap data project anda!</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Submit</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Submit your project here!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('main/products/add') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="sender" class="col-form-label">FullName:</label>
                        <input class="form-control <?php echo form_error('sender') ? 'is-invalid':'' ?>" type="text" name="sender" placeholder="Your name" />
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" type="text" name="name" placeholder="Project name" />
                    </div>
                    <div class="form-group">
                        <label for="link" class="col-form-label">Link:</label>
                        <input class="form-control <?php echo form_error('link') ? 'is-invalid':'' ?>" type="text" name="link" placeholder="Project link" />
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description:</label>
                        <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>" name="description" placeholder="Project description..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">ScreenShoot:</label>
                        <input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>" type="file" name="image" />
                    </div>
                    <input class="btn btn-success" type="submit" name="btn" value="Save" />
                </form>
            </div>
        </div>
    </div>
</div>
