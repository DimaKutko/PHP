<?php include_once __DIR__ . '/header.php' ?>

<div id="myModal" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php if (!empty($title)) { ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?= $title ?></h5>
                </div>
            <?php } ?>
            <?php if (!empty($message)) { ?>
                <div class="modal-body">
                    <p><?= $message ?></p>
                </div>
            <?php } ?>

            <?php if (!empty($btn)) { ?>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"><?= $btn ?></button>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<script>
    document.onclick = function() {
        location.href = "/";
    };
    var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
        keyboard: false
    });
    myModal.show();
</script>

<?php include_once __DIR__ . '/footer.php' ?>
