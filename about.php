<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why us?</h3>
         <p>In the campus environment, students frequently face significant challenges when it comes to acquiring and disposing of textbooks and academic materials. These challenges include high costs, limited availability, lack of convenience, and sustainability concerns. The current options for buying new books are often prohibitively expensive, and existing secondhand book exchanges lack a centralized, user-friendly platform that facilitates easy transactions within the campus community.</p>
         <p>BookSwap is a dedicated online marketplace where students can list books for sale and search for books to buy. Powerful search and filtering options to help students quickly find the books they need.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>










<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>