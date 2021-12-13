<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissors</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="~/lib/Font-Awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="~/lib/Font-Awesome/css/regular.min.css">
    <link rel="stylesheet" href="~/lib/Font-Awesome/css/solid.min.css">
</head>
<body>
    <div class="box">
        <h1>Rock Paper Scissors</h1>
        <form method="get" action="index.php" autocomplete="off">
            <input type="text" name="keuze" placeholder="Make your choice" class="form-control">
            <input type="submit" name="submit" value="Shoot!" class="btn btn-success mb-2">
        </form>
<?php

include 'game.php';

?>

</div>

<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-12">

  <footer class="text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-2">
      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/krystian-dutka-0170a0223/" role="button"
        ><i class="fa fa-linkedin"></i></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/xkrystiandutka" role="button"
        ><i class="fa fa-github"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 text-dark">
    © 2021 Copyright:
    <a class="text-dark" href="https://github.com/xkrystiandutka/SelfLearningPHP/tree/master/Projects/rockPaperScissors">Krystian Dutka</a>
  </div>
  <!-- Copyright -->
</footer>
  
</div>
<!-- End of .container -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html> 