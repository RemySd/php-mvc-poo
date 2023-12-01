<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>listing des produits</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php foreach ($products as $product) : ?>
                <a href="index.php?controller=product&action=getProduct&productId=<?= $product['id'] ?>">- <?= $product['name'] ?></p>
            <?php endforeach ?>
        </div>
    </div>
</div>