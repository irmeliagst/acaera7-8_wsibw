<?php include("index.php"); ?>

<?php 
$stefan = new person();
$jimmy = new person;
$stefan->set_name("stefan uhuyy");
$jimmy->set_name("nich ehee");
echo "stefan's full name : " .$stefan->get_name();
echo "jimmy's full name : " .$jimmy->get_name();
?>