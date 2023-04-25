<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="nav container">
            <a href="https://www.youtube.com/watch?v=3Z2J4bEuEGQ" class="logo">PLAYBOI CARTI STORE</a>
            <a href="#"><img src="fotos/narcissist.webp" class="logo2" alts=""></a>
            <i class='bx bx-shopping-bag' id="cart-icon"></i>
            <div class="cart">
                <h2 class="cart-title">Your Cart(i)</h2>
                <div class="cart3456-5678ujkmnbvcontent">
                    <div class="cart-box">
                        <img src="fotos/product2.jpg" alt="" class="cart-img">
                        <div class="detail-box">
                            <div class="cart-product-title">VAMP HOODIE</div>
                            <div class="cart-price">$66.66</div>
                            <input type="number" value="1" class="cart-quantity">
                            </div>
                            <i class='bx bxs-trash-alt cart-remove'></i>
                    </div>
                </div>
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">$0</div>
                </div>
                <button type="button" class="btn-buy">Buy Now</button>
                <i class='bx bx-x' id="close-cart"></i>
            </div>
        </div>
    </header>
    <body>
    <section class="shop container">
        <h2 class="section-title">Shop Products</h2>
        <div class="shop-content">
            
        
        <?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "webshop";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
require "connection.php";

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
 
    ?>


    <div class="product-box">
    <img src="<?php echo $row["img"];?>" alt="" class="product-img">
    <div class="product-title"> <?php echo $row["name"];?></div>
    <span class="price"><?php echo $row["price"];?></span>
    <span class="price"><?php echo $row["color"];?></span>
    <i class='bx bx-shopping-bag add-cart'><a href="./product1.html" i class='bx bx-shopping-bag add-cart'></i></a></i>
    </div>


<?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
        
          
         
           
        </div>
    </section>
    <script src="main.js"></script>
</body>
<footer>
    <div id="socials">
        <div class="instalogo">
            <a href="https://www.instagram.com/playboicarti/" target="_blank">
                <img src="fotos/instablack.png" alt="cartiinsta">
            </a>
        </div>
        <div class="ytlogo" >
            <a href="https://www.youtube.com/watch?v=sf7CXcpJTj0&list=PLxwk2ZgJMXatsfriQxqLdz4f4jvtk0ggb" target="_blank">
                <img src="fotos/youtubeblack3.png" alt="CARTI LEAKS">
            </a>
        </div>
    
</footer>
</html>