<?php session_start();
if(isset($_SESSION["shoppingCart"])){
  
  $shoppingCart = $_SESSION["shoppingCart"];
  $total_count = $shoppingCart["summary"]["total_count"];
  $total_price = $shoppingCart["summary"]["total_price"];
  $shopping_products = $shoppingCart["products"];

}
else{
    $total_count = 0;
    $total_price = 0.0;
}
?>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://www.linkedin.com/in/eda-nur-yardım-9a474a202/">EY</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Ürünler</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="shopping-cart.php"><span class="glyphicon glyphicon-shopping-cart cart-icon"></span> 
      <span class="badge cart-count"><?php echo $total_count; ?></span></a></li>    
    </a></li>
    </ul>
  </div>
</nav>
