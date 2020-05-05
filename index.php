<?php
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link href="css/style.css"rel="stylesheet"/>
</head>
<body style="margin-top:50px;">
  <?php
      include('Menu Bar.php')
  ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	   <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <?php
		$i=1;
	  $sql=mysqli_query($con,"select * from slider");
		while($slider=mysqli_fetch_assoc($sql))
		{
		$slider_img=$slider['image'];
		$slider_cap=$slider['caption'];
		$path="image/Slider/$slider_img";
			if($i==1)
			{
		?>
	  <div class="item active">
        <img src="<?php echo $path; ?>" alt="Image">
        <div class="carousel-caption">
			<h2><?php echo $slider_cap; ?></h2>
		</div>
      </div>
		<?php
		}
		else
			{
			?>
		<div class="item">
        <img src="<?php echo $path; ?>" alt="Image">
        <div class="carousel-caption">
        <h2><?php echo $slider_cap; ?></h2>
		</div>
      </div>

		<?php	} ?>


		<?php $i++; } ?>


    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!-- Left and right controls Close Here -->
    </div>
   <h1 style="text-align:center">Welcome to <strong>Books</strong></h1>
   <p>This Webiste is used to store the details of the books that the user contains. The user can add books, search for already owned books to avoid duplication adn can delete books if he wishes to sell any</p>

<br>
<br>

</body>
</html>
