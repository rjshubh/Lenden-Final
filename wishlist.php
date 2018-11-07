<?php  include 'server.php' ?>
<?php  include 'include.php' ?>

<div id="heading-block">
                <h2><a name="prod">WISHLIST</a></h2>
            </div>
            <div class="prod-container">

<?php
$user = $_SESSION['username'];
$prod_id =  $_GET['id'];

$q = ("SELECT * FROM products WHERE id = '$prod_id'");
$r = mysqli_query($db,$q);
$row = mysqli_fetch_array($r);
$prod_title = $row["title"];
$prod_image = $row["image"];




$query = ("INSERT INTO wishlist(product_id,user,title) VALUES ('$prod_id','$user','$prod_title')");
$res = mysqli_query($db,$query);







$qry = ("SELECT * FROM products WHERE id IN (SELECT product_id FROM wishlist WHERE user='$user')");
$result = mysqli_query($db,$qry);
                while ($row = mysqli_fetch_array($result)){

                echo '<div class="prod-box">';
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row["image"]).'" width="300px" height="300px"/>'; 
                echo  '<div class="prod-trans">';
                echo  '<div class="prod-feature">';
                    	echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                        echo '<p style="color:#fff;font-weight:bold;">Price : Rs'.$row["price"].' </p>';
                        echo '   <input type="button" value="Add to wishlist">';
                         echo '<input type="button" value="Tap to chat">';
                   echo '</div> ';                  	
                   echo '</div>';
                echo '</div>';
            }
?>









