<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="/emails/edit/<?= esc($email["email_id"]) ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="email_id" class="hidden" value="<?= esc($email["email_id"]) ?>" /><br />
    <label for="email">Email</label>
    <input type="email" name="email" value="<?= esc($email["email"]) ?>" /><br />

    <input type="submit" name="submit" value="Update email" />
</form>
<a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= esc($email["email_id"]) ?>">Delete</a>
<form action="/emails/delete/<?= esc($email["email_id"]) ?>" method="post">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Are you sure want to delete this email?</h4>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="email_id" class="emailID">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function() {
        $('.btn-delete').on('click', function() {
            const id = $(this).data('id');
            $('.emailID').val(id);
            $('#deleteModal').modal('show');
        });

    });
</script>