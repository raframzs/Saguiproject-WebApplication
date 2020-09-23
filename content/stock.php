<?php
    require 'includes/init.php';
    Auth::requiredLogin();
    $conn = require 'includes/db.php';

    if (!empty($_REQUEST['term'])) {
        $products = Stock::getByReference($conn, $_REQUEST['term']);
    }
?>
<?php require "includes/header.php" ?>
<div class="container">
    <div class="row searcher">
        <form method="post">
            <input type="text" name="term" class="search" autocomplete="off" /><br />
        </form>
    </div>
    <div class="row table-responsive-sm">
        <?php if (!empty($products)) : ?>
        <table class="table table-sm table-striped table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-primary">Referencia</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">P.V.P</th>
                    <th scope="col" class="text-warning">Latino</th>
                    <th scope="col" class="text-warning">Cedi</th>
                    <th scope="col" class="text-danger">Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- Showing the stock items -->
                <?php foreach ($products as $product) : ?>
                <tr>
                    <td class="text-primary"><?= htmlspecialchars($product['reference']); ?></td>
                    <td><?= htmlspecialchars($product['description']); ?></td>
                    <td>$ <?= htmlspecialchars(number_format($product['price'])); ?></td>
                    <td class="text-warning"><?= htmlspecialchars($product['latino']); ?></td>
                    <td class="text-warning"><?= htmlspecialchars($product['cedi']); ?></td>
                    <td class="text-danger"><?= htmlspecialchars($product['total']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
    <hr>
</div>
<?php require "includes/footer.php" ?>