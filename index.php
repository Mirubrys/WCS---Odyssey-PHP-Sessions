<?php
require 'inc/head.php';
require 'inc/data/products.php';

if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if(isset($_GET['add_to_cart']))
{
    $idCookie = $_GET['add_to_cart'];
    $cookie = array_key_exists($idCookie, $_SESSION['cart']);
    if($cookie)
    {
        $_SESSION['cart'][$idCookie] += 1;
    }
    else
    {
        $_SESSION['cart'][$idCookie] = 1;
    }
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>

<?php require 'inc/foot.php'; ?>
