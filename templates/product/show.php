<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Détails du produit</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>Id: <?= $product['id'] ?></p>
            <p>Nom: <?= $product['name'] ?></p>
            <p>Prix: <?= $product['price'] ?> €</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="index.php?controller=product&action=getProducts">Retour</a>
        </div>
    </div>
</div>