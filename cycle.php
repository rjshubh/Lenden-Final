<?php include('include.php') ?> 
<?php include('server.php') ?>

			<div id="heading-block">
                <h2><a name="prod">Cycles</a></h2>
            </div>
            <div class="prod-container">
                <!--first product-->
                            <?php
                $query = ("SELECT * FROM products WHERE category = 'cycle'");
                    $result = mysqli_query($db,$query);
                    while ($row = mysqli_fetch_array($result)){
                     echo '<div class="prod-box">';
                     echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>';   

                    echo '<div class="prod-trans">';
                    echo '<div class="prod-feature">';
                    echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                    echo '<p style="color:#fff;font-weight:bold;">Rs'.$row["price"].' </p>';
                    ?>
                    <a href="wishlist.php?id=<?php echo $row['id'] ?>"><input type="button" value="Add to wishlist" ></a>;
                    <?php
                            echo '<input type="button" value="Tap to chat">';
                    echo '</div>';                     
                    echo '</div>';
                    echo '</div>';
            }
            ?>

</div>
</div>
</body>
</html>