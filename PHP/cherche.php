<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All events</title>
    
   
    <link href="./../CSS/navbar.css" rel="stylesheet" >
    <link href="./../CSS/bootstrap/css/bootstrap.css" rel="stylesheet" >
    <link rel="icon" type="image/png" href="./../assests/concert.png" />
    <link href="./../CSS/Home.css" rel="stylesheet" >
    <link href="./../CSS/searchbar.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head> 
<body >
            <ul class="menu"  >
                <li class="x"><a href="./Home.php" >Home</a></li>
                <li class="x"><a  href="./search.php"  >Search</a></li>
                <li class="x"> <a  href="./chart.php">Chart</a></li>
                <li class="x"> <a  href="./../HTML/index.html">Contact</a></li>
                <li class="slider"></li>
              </ul>
              <article>
            
              <br><br> <br><br>
<br><br><br>
    
              <div class="row" >
    <?php 
    include "./config.php";
    $base = connect ();  
    $cat=$_POST['idCat'];
    $cher=$_POST['search']; 

   if ($cat=="name")
    {$requette="SELECT * from evenement where nom='$cher'"; }
   else if ($cat=="place")
  { $requette="SELECT * from evenement where place='$cher' "; }

    $data =$base->query($requette);
     
     while($product = $data->fetchObject()) { 
        $imagePath="./../assests/$product->picture "?> 
                <div class="col-lg-7 ">
                <div class="container border bg-light " style="margin-right:150px">
                   
           
<?php echo "<img src=\"$imagePath\" / height='100px'>"; ?>
               <p > Name : <?php echo $product->nom; ?></p>
                   <p> Description: <?php echo $product->descriptionn; ?></p>
                   <p> Place: <?php echo $product->place; ?></p> 
                   <p> Prix: <?php echo $product->price; ?> Dt</p> 
                   <a href="./add_chart.php?id= <?php echo $product->id_event; ?>" class="btn btn-outline-info">Add to Chart</a>
                       <a href="./detail.php?id= <?php echo $product->id_event; ?>" class="btn btn-outline-success">View more details</a>
                   </div> 
        <br>
    </div>
  
                   <?php } ?>
                   </div>       
                   
<?php  ?>

</body>
