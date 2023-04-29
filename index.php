<!DOCTYPE html>
<html lang="en">
<head>
  <title>EY ECOMMERCE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<?php require_once 'db.php'; ?>
<?php include 'navbar.php'; ?>
<div class="container" >
  <h2 class="text-center">Ürünler</h2>
<div class="row">
    <?php $products = $db->query("SELECT * FROM products");
    $products = $products->fetchAll(PDO::FETCH_ASSOC);
    
         foreach($products as $product){ ?>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="<?php echo $product["img_url"];?>" alt="...">
            <div class="caption">
                <h3><?php echo $product["product_name"]; ?></h3>
                <p><?php echo $product["detail"]; ?></p>
               <p class="text-right price-container"> <strong> <?php echo $product["price"]; ?>TL </strong> </p>
                <button product-id="<?php echo $product["id"];?>" class="btn btn-primary btn-block addToCartBtn" role="button">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Sepete Ekle
         </button>

            </div>
        </div>
    </div>
    <?php } ?>

   

</div>
</div>
<script>
  $(".addToCartBtn").click(function(){
        
        var url = "http://localhost/s/cart_db.php";
        var data = {
           p : "addToCart",
           product_id: $(this).attr("product-id")
           
        } 
  
      $.post(url , data , function(response){
        
        $(".cart-count").text(response);
      })
      })
  
      
      $(".removeFromCartBtn").click(function(){
  
          var url = "http://localhost/s/cart_db.php";
          var data = {
             p : "removeFromCart",
             product_id: $(this).attr("product-id")
             
          } 
  
  
        $.post(url , data , function(response){
          
          window.location.reload();
        })
      })
      </script>




</body>
</html>
