<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>
    
   
    <link href="./../CSS/navbar.css" rel="stylesheet" >
    <link href="./../CSS/bootstrap/css/bootstrap.css" rel="stylesheet" >
    <link rel="icon" type="image/png" href="./../assests/concert.png" />
    <link href="./../CSS/Home.css" rel="stylesheet" >
    
</head> 
<body >
            <ul class="menu"  >
                <li class="x"><a href="./Home.php">Home</a></li>
                <li class="x"><a  href="./search.php">Search</a></li>
                <li class="x"> <a  href="./" class="active">Chart</a></li>
                <li class="x"> <a  href="./../HTML/index.html">Contact</a></li>
                <li class="slider"></li>
              </ul>
              <article>
            
              <br><br><br><br><br><br><br><br>
    
              <div class="row" >
    <?php 
    include "./config.php";
    $base = connect ();
    $requette="SELECT * from evenement where id_event in ( SELECT id from panier ) ";
    $data =$base->query($requette);
  

     while($product = $data->fetchObject()) { 
        $imagePath="./../assests/$product->picture "?> 
                <div class="col-lg-10    ">
                <div class="container border bg-light " style="margin-right:150px">
                   
           
<?php echo "<img src=\"$imagePath\" / height='100px'>"; ?>
               <p > Name : <?php echo $product->nom; ?></p>
               <p > Category : <?php echo $product->category; ?></p>
                   <p> Description: <?php echo $product->descriptionn; ?></p>
                   <p> Place: <?php echo $product->place; ?></p> 
                   <p> Prix: <?php echo $product->price; ?> Dt</p> 
                   <form action="./buy.php?id=<?php echo $product->id_event; ?>& nb=<?php echo $product->nb_ticket; ?>" method="POST">
                 <label for="a">Quantity</label>  <input type="number" id="a" name="a" class="col-lg-3" value="1" min="1" max="<?php echo $product-> nb_ticket; ?>" > <br>
                   <input type="submit" value="Buy" class="btn btn-outline-info">  </form>
                       <a href="./delete_chart.php?id= <?php echo $product->id_event; ?>" class="btn btn-outline-success">Delete from chart</a>
                   </div> 
        <br>
    </div>
                   <?php } ?>
                   </div>       
                   
<?php  ?>
</body>
