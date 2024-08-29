<?php

$connection= mysqli_connect('localhost', 'root','','buy_db');
if(isset($_POST['send'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $number= $_POST['phone'];
  $address= $_POST['address'];
  $which_products= $_POST['products'];
  $how_many= $_POST['number'];
  $sizes= $_POST['sizes'];
 
  
  $request = "insert into book_form(name,	email,	phone,	address,	which_products,	how_many	)values
  ('', '$name','$email','$number',' $address',' $which_products','$how_many','$sizes')";

 mysqli_query($connection,$request);

header('location:book.php');
}else{
  echo "something went wrong: ".mysqli_error($connection);
}

?>