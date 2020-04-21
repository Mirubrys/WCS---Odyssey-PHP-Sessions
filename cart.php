<?php
require 'inc/head.php';
if(!isset($_SESSION['user']))
{
    header('Location: login.php');
}
require 'inc/data/products.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <h1>Your cart :</h1>
        <?php if(isset($_SESSION['cart']) && !empty($_SESSION['cart']))
        {
            foreach ($_SESSION['cart'] as $key => $amount)
            { ?>
                <ul class="list-group col-12 col-lg-6">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $catalog[$key]['name'] ?>
                        <span class="badge badge-primary badge-pill"><?= $amount ?></span>
                    </li>
                </ul>
        <?php }
        }
        else
        {
            echo "<h2>Empty</h2>";
        }?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
