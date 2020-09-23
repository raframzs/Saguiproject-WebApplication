<?php
    require 'includes/init.php';
    Auth::requiredLogin();
    $conn = require 'includes/db.php';

    if (!empty($_REQUEST['term'])) {
        $products = Product::getByReference($conn, $_REQUEST['term']);
    }
?>
<?php require "includes/header.php" ?>
<div class="container">
    <div class="row searcher">
        <form method="post">
            <input type="text" name="term" class="search" autocomplete="off"/><br />
        </form>
    </div>
    <div class="row table-responsive-sm">
        <?php if (!empty($products)) : ?>
            <table class="table table-sm table-striped table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-primary">Referencia</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Unidades</th>
                        <th scope="col">Fecha</th>
                        <th scope="col" class="text-warning">N° Formulario</th>
                        <th scope="col" class="text-warning">Página</th>
                        <th scope="col">Importador</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Showing the articles -->
                    <?php foreach ($products as $product) : ?>
                    <tr>
                        <td class="text-primary"><?= htmlspecialchars($product['reference']); ?></td>
                        <td><?= htmlspecialchars($product['description']); ?></td>
                        <td><?= htmlspecialchars($product['brand']); ?></td>
                        <td><?= htmlspecialchars($product['units']); ?></td>
                        <td><?= htmlspecialchars($product['date']); ?></td>
                        <td class="text-warning"><?= htmlspecialchars($product['form_id']); ?></td>
                        <td class="text-warning"><?= htmlspecialchars($product['page']); ?></td>
                        <td><?= htmlspecialchars($product['importer']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
    <hr>  
</div>
<?php require "includes/footer.php" ?>