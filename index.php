<?php include('include.php') ?>
<?php include('server.php') ?>

<div class="slideshow-container">
<div class="myslides fade">
<div><img src="images/img1.jpg" width="100%" height="300"></div>
<div class="caption"></div>
</div>
<div class="myslides fade">
<div><img src="images/img1.png" width="100%" height="300"></div>
<div class="caption"></div>
</div>
<div class="myslides fade">
<div><img src="images/img2.jpg" width="100%" height="300"></div>
<div class="caption"></div>
</div>
<div class="myslides fade">
<div><img src="images/img3.jpg" width="100%" height="300"></div>
<div class="caption"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
<div style="text-align:center">
<span class="dots" onclick="currentSlide(1)"></span> 
<span class="dots" onclick="currentSlide(2)"></span> 
<span class="dots" onclick="currentSlide(3)"></span> 
<span class="dots" onclick="currentSlide(4)"></span> 
</div>
<!--     Home slider
  <div id="slider">            
      <img src="images/img3.jpg" width="100%" height="300px">
    </div>
 -->  

      <div id="heading-block">
                <h2><a name="prod">Products</a></h2>
            </div>
            <div class="prod-container">
                <!--first product-->

                <?php 
                    $query = ("SELECT * FROM products WHERE id = 1");
                    $result = mysqli_query($db,$query);
                    while ($row = mysqli_fetch_array($result)){
                     echo '<div class="prod-box">';
                     echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>';   

                    echo '<div class="prod-trans">';
                    echo '<div class="prod-feature">';
                    echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                    echo '<p style="color:#fff;font-weight:bold;">Rs'.$row["price"].' </p>';
                    echo '<input type="button" value="Add to wishlist" onclick="wishlist.php">';
                    echo '<input type="button" value="Tap to chat">';
                    echo '</div>';                     
                    echo '</div>';
                    echo '</div>';
                    }
                    
                    $query = ("SELECT * FROM products WHERE id = 2");
                    $result = mysqli_query($db,$query);
                    while ($row = mysqli_fetch_array($result)){
                     echo '<div class="prod-box">';
                     echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>';   

                    echo '<div class="prod-trans">';
                    echo '<div class="prod-feature">';
                       echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                           echo '<p style="color:#fff;font-weight:bold;">Rs'.$row["price"].' </p>';
                            echo '<input type="button" value="Add to wishlist" onclick="wishlist.php">';
                            echo '<input type="button" value="Tap to chat">';
                    echo '</div>';                     
                    echo '</div>';
                    echo '</div>';
                    }

                    $query = ("SELECT * FROM products WHERE id = 3");
                    $result = mysqli_query($db,$query);
                    while ($row = mysqli_fetch_array($result)){
                     echo '<div class="prod-box">';
                     echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>';   

                    echo '<div class="prod-trans">';
                    echo '<div class="prod-feature">';
                        echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                            echo '<p style="color:#fff;font-weight:bold;">Rs'.$row["price"].' </p>';
                            echo '<input type="button" value="Add to wishlist" onclick="wishlist.php">';
                            echo '<input type="button" value="Tap to chat">';
                    echo '</div>';                     
                    echo '</div>';
                    echo '</div>';
                    }

                    $query = ("SELECT * FROM products WHERE id = 4");
                    $result = mysqli_query($db,$query);
                    while ($row = mysqli_fetch_array($result)){
                     echo '<div class="prod-box">';
                     echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>';   

                    echo '<div class="prod-trans">';
                    echo '<div class="prod-feature">';
                        echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                            echo '<p style="color:#fff;font-weight:bold;">Rs'.$row["price"].' </p>';
                            echo '<input type="button" value="Add to wishlist" onclick="wishlist.php">';
                            echo '<input type="button" value="Tap to chat">';
                    echo '</div>';                     
                    echo '</div>';
                    echo '</div>';
                    }




                    $query = ("SELECT * FROM products WHERE id = 5");
                    $result = mysqli_query($db,$query);
                    while ($row = mysqli_fetch_array($result)){
                     echo '<div class="prod-box">';
                     echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>';   

                    echo '<div class="prod-trans">';
                    echo '<div class="prod-feature">';
                        echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                            echo '<p style="color:#fff;font-weight:bold;">Rs'.$row["price"].' </p>';
                            echo '<input type="button" value="Add to wishlist" onclick="wishlist.php">';
                            echo '<input type="button" value="Tap to chat">';
                    echo '</div>';                     
                    echo '</div>';
                    echo '</div>';
                    }



                    $query = ("SELECT * FROM products WHERE id = 6");
                    $result = mysqli_query($db,$query);
                    while ($row = mysqli_fetch_array($result)){
                     echo '<div class="prod-box">';
                     echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>';   

                    echo '<div class="prod-trans">';
                    echo '<div class="prod-feature">';
                        echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                            echo '<p style="color:#fff;font-weight:bold;">Rs'.$row["price"].' </p>';
                            echo '<input type="button" value="Add to wishlist" onclick="wishlist.php">';
                            echo '<input type="button" value="Tap to chat">';
                    echo '</div>';                     
                    echo '</div>';
                    echo '</div>';
                    }



                    $query = ("SELECT * FROM products WHERE id = 7");
                    $result = mysqli_query($db,$query);
                    while ($row = mysqli_fetch_array($result)){
                     echo '<div class="prod-box">';
                     echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>';   

                    echo '<div class="prod-trans">';
                    echo '<div class="prod-feature">';
                        echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                            echo '<p style="color:#fff;font-weight:bold;">Rs'.$row["price"].' </p>';
                            echo '<input type="button" value="Add to wishlist" onclick="wishlist.php">';
                            echo '<input type="button" value="Tap to chat">';
                    echo '</div>';                     
                    echo '</div>';
                    echo '</div>';
                    }



                    $query = ("SELECT * FROM products WHERE id = 8");
                    $result = mysqli_query($db,$query);
                    while ($row = mysqli_fetch_array($result)){
                     echo '<div class="prod-box">';
                     echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>';   

                    echo '<div class="prod-trans">';
                    echo '<div class="prod-feature">';
                        echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                            echo '<p style="color:#fff;font-weight:bold;">Rs'.$row["price"].' </p>';
                            echo '<input type="button" value="Add to wishlist" onclick="wishlist.php">';
                            echo '<input type="button" value="Tap to chat">';
                    echo '</div>';                     
                    echo '</div>';
                    echo '</div>';
                    }

                ?>

            <!-- <div id = "footer">
            <div class = "container3">
                <div class = "footer-sub1">
                    <h2>About us</h2>
                    <p><a name="about">About us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us detailsAbout us details</a></p>
                </div>
                <div class = "footer-sub2">
                    <center>
                        <h2>Important links</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="cycle.html">Cycles</a></li>
                            <li><a href="books.html">Books</a></li>
                            <li><a href="electronics.html">Electronics</a></li>
                            <li><a href="clothes.html">Clothes</a></li>
                            <li><a href="furniture.html">Furniture</a></li>
                            <li><a href="#prod">Products</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </center>
                </div>
                <div class = "footer-sub3">
                    <center>
                        <h2>Subscribe us</h2>
                <input type="email" class="subs" placeholder="Write your email id">
                <input type="submit" name="submit_btn" value= "Subscribe" class="sub_btn">
                    <p id = 'italics'>Enter your email id and get the latest updates from us </p>
                    </center>
                </div>

            </div>
                
            </div>
 -->


<script type="text/javascript" src = slider.js>
</script>

</body>
</html>