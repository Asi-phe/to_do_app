
<!--Creating a form and a condition that displays the output of the form-->
?>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
   <?php foreach ($Questions as $QuestionNo => $Value){ ?>
       <h3><?php echo $Value['Question']; ?></h3>
       <?php
           foreach ($Value['Answers'] as $Letter => $Answer){
           $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
           echo '<br />';
       ?>
         <div>
           <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
           <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
       </div>
       <?php } ?>
   <?php } ?>
   <?php }
    
   echo $Answers ?>
   <input id="button" type="submit" value="Submit Quiz" />
   </form>
<?php
if($counter){
}
?>

Today
Asiphe Mazamisa 12:55 PM
<?php
//starting the session with the session start function
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>To do list</title>
</head>
<body>
  <!-- <div class="list">
      <h1 class="header">Welcome to my to do list:</h1>
      <ul class="items">
          <li>
              <span class="item">Study for exams</span>
          </li>
          <li>
              <span class="item done">Cook for supper</span>
          </li>
      </ul> -->
      <!-- class="input" placeholder="add item in the to do list" autocomplete="off " required> -->
      <form action="index.php" method="post">
          <input type="text" name="todoEntry" >
          <button type="submit" >Add</button>
      </form>
  <!-- </div> -->
  <?php
if($_POST){
  echo "<br>"."\n<ul>\n<li>".$_POST['todoEntry']."</li>\n</ul>";
}
  ?>
<script src="js/main.js"></script>
</body>
</html>
