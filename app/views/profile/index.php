
<script type="text/javascript" src="clothshop/index.js"></script>
<?php
session_start();
require_once "connection.php";
$x= filter_input(INPUT_GET, 'parameter', FILTER_SANITIZE_URL);

$_SESSION['index']=$x;
$sql="SELECT * FROM itemList WHERE id=$x ";
print_r($x);
print_r("ddfdf");
$result=$conn->query($sql); 
print_r($result);
print_r(mysqli_num_rows($result),true);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //header("Content-type: image/png");
        
        $img=$row['img'];
        $price=$row['price'];
        $des=$row['description'];
       $img="http://localhost/clothshop/"."$img";
      
    }
}
        $conn->close();
        ?>



  


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
  <img src="<?php echo $img ?>" alt="Denim Jeans" style="width:100%">
  <h1><?php echo $des ?> </h1>
  <p class="price">Price:<?php echo $price ?></p>
  <p><?php echo $des ?></p>
  <p><button   type="button" onclick="window.location.href='http://localhost/clothshop/login.php'">Add to Cart</button></p>
</div>
<button type="button" onclick="goBack();">Back</button>
</body>
</html>
