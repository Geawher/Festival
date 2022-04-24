<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    
   
    <link href="./../CSS/navbar.css" rel="stylesheet" >
    <link href="./../CSS/bootstrap/css/bootstrap.css" rel="stylesheet" >
    <link rel="icon" type="image/png" href="./../assests/concert.png" />
    <link href="./../CSS/Home.css" rel="stylesheet" >
    
</head> 
<body >
            <ul class="menu"  >
                <li class="x"><a href="./index.html" class="active">Home</a></li>
                <li class="x"><a  href="./search.php">Search event</a></li>
                <li class="x"> <a  href="./LRU.html">Chart</a></li>
                <li class="x"> <a  href="./../HTML/index.html">Contact</a></li>
                <li class="slider"></li>
              </ul>
              <article>
            
              <br><br><br><br><br><br><br><br>
    
              <div class="row" >
    <?php 
    include "./config.php";
    $base = connect ();
    $id = $_GET ['id'];
    $requette="SELECT * from evenement Where id_event=$id ";
    $data =$base->query($requette);

    while($product = $data->fetchObject()) { 
        $imagePath="./../assests/$product->picture "?> 
                <div class="col-lg-12 ">
                <div class="container border bg-light " style="margin-right:150px">
               
                
           
<?php echo "<img src=\"$imagePath\" / height='200px'>"; ?>
               <p > Name : <?php echo $product->nom; ?></p>
               <p > Category : <?php echo $product->category; ?></p>
                   <p> Description: <?php echo $product->descriptionn; ?></p>
                   <p> Place: <?php echo $product->place; ?></p> 
                   <p> Prix: <?php echo $product->price; ?> Dt</p> 
                   <p> Date : <?php echo $product->date_event; ?> </p> 
                   <p> Time : <?php echo $product->time_event; ?> </p> 
                   <p> Number of tickets remaining : <?php echo $product->nb_ticket; ?> </p> 
                   <a href="./add_chart.php?id= <?php echo $product->id_event; ?>" class="btn btn-info">Add to Chart</a>
                       <a href="./Home.php" class="btn btn-warning">All events</a>
                   </div> 
        <br>
    </div>

    <?php } ?>
                   </div>       
                   
<?php  ?>
</body>