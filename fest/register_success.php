<?php
session_start();
if(isset($_SESSION['id']))
{
    echo 'Your unique id is '.$_SESSION['id'].' Remember this unique id for future purposes.<br/>';
    unset($_SESSION['id']);
}
if(isset($_SESSION['success']))
{
    echo 'Your submission is successful.<br/>';
    unset($_SESSION['success']);
}
echo '<a href="index.php">Back to Home</a>';
?>