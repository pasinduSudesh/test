<?php 
    $itemID = $data[0];
    $img = $data[1];
    $price = $data[2];
    $description = $data[3];
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#div{
  margin-top:40px;
}

.card {
  margin-top:30px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>



<div class="card" id="div">
  <img src="<?= $img ?>" alt="Denim Jeans" style="width:100%">
  <h1><?=$description?> </h1>
  <p class="price">Price:<?=$price ?></p>
  <p><?=$description?></p>
 <form action="addToCart" method="post"> 
<a href="#" ><button method="post" type="submit" id="itemIDCart" name="itemIDCart" value="<?= $itemID ?>" >Add to Cart</button></a>
  
 </form>
</div>

<a href="gallery"> <button type="button">Back</button></a>
</body>
</html>