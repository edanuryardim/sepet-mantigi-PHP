<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sepet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>



<?php include 'navbar.php'; ?>



<div class="container">
  <?php if($total_count > 0){ ?>
    <h2 class="text-center">Sepetinizde <strong class="color-danger" > <?php echo $total_count; ?> </strong> adet ürün bulunmaktadır. </h2>


<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <table class="table">
        <thead>
          <tr>
            <th class="text-center">Ürün Resmi</th>
            <th class="text-center">Ürün Adı</th>
            <th class="text-center">Fiyat</th>
            <th class="text-center">Adet</th>
            <th class="text-center">Toplam</th>
            <th class="text-center">Sepetten Çıkar</th>
          </tr>
        </thead>

        <tbody>

        <?php foreach($shopping_products as $product){ ?>

    
        <tr> 
            <td class="text-center"><img src="<?php echo $product["img_url"]; ?>" width="100" height="100"></td>
            <td class="text-center"><?php echo $product["product_name"]; ?></td>
            <td class="text-center"><?php echo $product["price"]; ?> TL</td>

            <td class="text-center">
              <a href="cart_db.php?p=incCount&product_id=<?php echo $product["id"]; ?>" class="btn btn-xs btn-success">
                <span class="glyphicon glyphicon-plus"></span>
              </a>
              <input type="text" class="item-count-input" value="<?php echo $product["count"]; ?>"> 
             <a href="cart_db.php?p=decCount&product_id=<?php echo $product["id"]; ?>" class="btn btn-xs btn-danger">
                <span class="glyphicon glyphicon-minus"></span>
              </a>
            </td>
            <td class="text-center"><?php echo $product["price"] * $product["count"]; ?> TL</td>
            <td class="text-center"><button product-id="<?php echo $product["id"];?>" class="btn btn-danger btn-sm removeFromCartBtn">Sepetten Çıkar</button></td>
        </tr>
        <?php } ?>

        </tbody>
        <tfoot>
          <th>
            <td colspan="4" class="text-right">Toplam Tutar</td>
            <td class="text-center"><?php echo $total_price ?> TL</td>
          </th>
        </tfoot>
        

      </table>
    </div>
</div>
<?php } else { ?>
  <div class="alert alert-danger text-center">
    <h2> Sepetinizde ürün bulunmamaktadır. Eklemek için <a href="index.php" > tıklayınız. </a> </h2>

<?php } ?>
</div>

<script src="script.js"></script>

</body>
</html>