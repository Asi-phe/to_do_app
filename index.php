<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <title>To do list</title>
</head>
<body>
       <h1>Welcome to my to do list</h1>
       <form action="index.php" method="post">
           <input type="text" name="todoEntry" id="name" >
           <button type="submit" >Add</button>
       </form>
   <?php
if(isset($_POST)){
   // $item = $_SESSION["listItems"];
   if(!(isset($_SESSION["listItems"]))){
       $_SESSION["listItems"] = $item;
       $_SESSION['listItems'] [] = $_POST['todoEntry'];
       displayist();
       // var_dump($_SESSION['listItems']);
   }else{
       $_SESSION["listItems"]  [] =$_POST['todoEntry'];
       // var_dump($_SESSION['listItems']);
      displaylist();
   }
}
   // echo "<br>"."\n<ul>\n<li>".$_POST['todoEntry']."</li>\n</ul>";
function displaylist(){
   echo "<ul>";
       foreach($_SESSION['listItems'] as $item){
           echo "<li>" . $item . "</li>";
       }
   echo "<ul>";
}
   ?>
<script src="js/main.js"></script>
</body>
</html>






