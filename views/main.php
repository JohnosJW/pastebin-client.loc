<div class="container">
    <h2>Pastes list</h2>
    <?php if ($data->paste) : ?>

    <table class="table">
        <thead>
        <tr>
            <th>Paste key</th>
            <th>Paste url</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($data->paste as $paste) : ?>
                <tr>
                    <td><?= $paste->paste_key ?></td>
                    <td><?= $paste->paste_url ?></td>
                    <td>
                        <a type="submit" href="get?paste_key=<?= $paste->paste_key ?>" class="btn btn-default">Get</a>
                    </td>
                    <td>
                        <a type="submit" href="destroy?paste_key=<?= $paste->paste_key ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else : ?>
        <div class="alert alert-info" role="alert">List is empty. Please create a paste.</div>
    <?php endif; ?>
</div>