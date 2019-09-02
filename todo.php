<?php
session_start();
// unset($_SESSION['todo']);
$todo = $_POST['todo_input'];
$date = $_POST['todo_date'];
$submit = $_POST['submit'];
$delete_todo = $_GET['delete'];
$_SESSION['todo'][] = [
   "todo_item" => $todo,
   "todo_dates" => $date,
   "delete" => $delete_todo
];
if (isset($todo, $date)) {
   header("location:index.php");
}