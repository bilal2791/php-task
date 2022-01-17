<?php

$productid = $_GET['id'];

require 'lib/redbean/rb-mysql.php';
require 'config.php';
use RedBeanPHP\Facade as R;
R::setup("mysql: host=localhost;dbname=eshop", "root", "");
$products = R::getAll("select * from products where id=$productid");




?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
<div class="container d-flex justify-content-center">
    <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"> <img src="<?php echo $products[0]['image']?>"> </a>
        <figcaption class="info-wrap">
            <div class="row">
                <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true"><?php echo $products[0]['title']; ?> </a> <span class="rated">Mobile</span> </div>
                <div class="col-md-3 col-xs-3">
                    <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="rated">Rated 4.0/5</span> </div>
                </div>
            </div>
        </figcaption>
        <div class="bottom-wrap-payment">
            <figcaption class="info-wrap">
                <div class="row">
                    <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true">$<?php echo $products[0]['price'] ?></a> <span class="rated"></span> </div>
                    <div class="col-md-3 col-xs-3">
                        <div class="rating text-right"> #### 8787 </div>
                    </div>
                </div>
            </figcaption>
        </div>
      
<form action="/submit" method="post">
<script 
src="https://checkout.stripe.com/checkout.js" class="stripe-button"
data-key="<?php echo $publishedKey ?>"
data-amount="500"
data-name="programming with bilal"
data-description= "Description:"
data-image="<?php echo $products['image'] ?>"
data-currency="pkr"
data-email="test@manaknights.com"
></script> 
</div>
        </div>
    </figure>
</div>
 

