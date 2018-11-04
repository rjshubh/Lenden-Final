<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
<title>add posting section</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="header">
    <h2>POST HERE</h2>
</div>
<form method="post" action="add.php">
<?php include('errors.php'); ?>

<div >
<select name="CATEGORY">
<option value ="none">SELECT CATEGORY</option>
<option value ="books">Books</option>
<option value ="clothes">Clothes</option>
<option value ="cycle">Cycle</option>
<option value ="electronics">Electronics</option>
</div>
<br />
<br />
<table width="100%" cellspacing="0" cellpadding="0">
<tr>
    <td width="150" class="text"><span style="color:red;">*</span>Ad Photos:</td>
   <td><label for="photo"></label>
     <input type="file" name="photo" id="photo">
     <br/><span class="valid"><?php echo $msg;?></span></td>
  </tr>
  </tr>
   <tr>
    <td width="150" class="text">Description for your ad:</td>
   <td ><textarea name="description" cols="" rows="" class="textarea" > </textarea></td>
  </tr>
  </tr>
  </tr>
   <tr>
   <td style="font-size:12px; font-family:'Times New Roman';" > <p> Price <input name="price" type="number" size="20" maxlength="50"  id="currency" placeholder="example: 50.00"> Rs</td>
  </tr>
</table>
</form>

</body>

</html>
