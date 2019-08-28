<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="css/style2.css">
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <title>To do list</title>
</head>
<body>
       <h1>My to do list is as follows</h1>
       <form action="index2.php" method="post">
           <input type="text" name="todoEntry" >
           <button type="submit" >Add</button>
       </form>
   <?php
if($_POST){
   echo "<br>"."\n<ul>\n<li>".$_POST['todoEntry']."</li>\n</ul>";
}
   ?>
<script src="js/main.js"></script>
</body>
</html>
