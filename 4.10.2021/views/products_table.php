<?php include_once __DIR__ . '/header.php'; ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < 20; $i++) { ?>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php include_once __DIR__ . '/footer.php'; ?>
