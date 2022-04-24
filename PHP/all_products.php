<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="./../CSS/bootstrap/css/bootstrap.css" rel="stylesheet" >
    <title>All products</title>
    <link rel="icon" type="image/png" href="./../assests/concert.png" />
</head>

<body style="  background-image: radial-gradient(circle at center, rgb(100, 115, 146), rgb(60, 50, 61));" > 
<div class="col-lg-12 col-md-4 col-sm-6 col-12">
<a href="./add_product.php" class="btn btn-primary mx-3 my-4">Add event</a>
</div>
<div class="row">
    <?php 
    include "./config.php";
    $base = connect ();
    $requette="SELECT * from evenement ";
    $data =$base->query($requette);
  

     while($product = $data->fetchObject()) { 
        $imagePath="./../assests/$product->picture "?> 
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="container border bg-light mx-3 my-3">
                   
           
<?php echo "<img src=\"$imagePath\" / height='100px'>"; ?>
               <p > Name : <?php echo $product->nom; ?></p>
               <p > Category : <?php echo $product->category; ?></p>
                   <p> Description: <?php echo $product->descriptionn; ?></p>
                   <p> Place: <?php echo $product->place; ?></p> 
                   <p> Prix: <?php echo $product->price; ?> Dt</p> 
                   <p> Date : <?php echo $product->date_event; ?> </p> 
                   <p> Time : <?php echo $product->time_event; ?> </p> 
                   <p> Number of tickets remaining : <?php echo $product->nb_ticket; ?> </p> 
                   <a href="./viewupdateproduct.php?id= <?php echo $product->id_event; ?>" class="btn btn-success">Modify</a>
                       <a href="./deleteproduct.php?id= <?php echo $product->id_event; ?>" class="btn btn-danger">Delete</a>
                   </div> 
        <br>
    </div>
                   <?php } ?>
                   </div>       
                   
    </body>

</html>