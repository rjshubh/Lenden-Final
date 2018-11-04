<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style2.css">

</head>
<body>
  <div id = "wrapper">
    <div id = "header ">
      <div id = "subheader">
        <div class = "container2" >
          <p>Len-den Bana Aasaan!</p>
          <a href="#about">About</a><a href="downloadapp.html">Download App</a><a href="contact.html">Contact</a>
        </div>    
      </div>
    <!--MAIN HEADER -->
      <div id = "main-header">
      <!--LOGO -->
      <div id = "logo">    
        <span id ="ist">LEN-DEN LOGO</span> 
      </div>  
    <!--Search Area-->
    <div id = "search">
    <form action="search.php" METHOD="POST">
      <input class = "search-area" type="text" name="text" placeholder="Search here">
      <input class = "search-button" type="submit" name="submit" value="SEARCH">
    </form>
    </div>



<?php if (isset($_SESSION['username'])) { ?>
<div id = "user-menu">
<div class="dropdown">
<li class="dropbtn"><a href=""><strong><?php echo $_SESSION['username']; ?></strong> ⮟ </a></li>  <div class="dropdown-content">
    <a href="myads.php">My Ads</a>
    <a href="#">Purchased</a>
    <a href="#">Sold</a>
    <a href="#">My Chats</a>
    <a href="#">Wishlist</a>

	<a href="index.php?logout='1'" >Logout</a>
  </div>

</div>
</div>
<?php } else { ?>
	<div id = "user-menu2">
                <li><a href="login.php">Sign in</a></li>
    </div>
    <?php } ?>


    <!--User Menu -->
    

  </div>
  </div>
    <!-- Navigation bar -->
    <div id="navigation">
    <nav>
      <a href="index.php">Home</a>
            <a href="cycle.php">Cycles</a>
            <a href="books.php">Books</a>
            <a href="electronics.php">Electronics</a>
            <a href="clothes.php">Clothes</a>
            <a href="furniture.php">Furniture</a>
      
<?php if (isset($_SESSION['username'])) : ?>
<button id = "sell" style="float: right; margin-right: 30px;"><a href="post.php" style="float: right; margin-right: 30px;">SUBMIT A FREE AD</a></button>
<?php endif; ?>
</nav>
</div>
</div>


