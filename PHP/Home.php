<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All events</title>
    
   
    <link href="./../CSS/navbar.css" rel="stylesheet" >
    <link href="./../CSS/bootstrap/css/bootstrap.css" rel="stylesheet" >
    <link rel="icon" type="image/png" href="./../assests/concert.png" />
    <link href="./../CSS/Home.css" rel="stylesheet" >
    <link href="./../CSS/searchbar.css" rel="stylesheet" >
    
</head> 
<body >
            <ul class="menu"  >
                <li class="x"><a href="./Home.php" class="active">Home</a></li>
                <li class="x"><a  href="./search.php">Search</a></li>
                <li class="x"> <a  href="./chart.php">Chart</a></li>
                <li class="x"> <a  href="./../HTML/index.html">Contact</a></li>
                <li class="slider"></li>
              </ul>
              <article>
            
              <br><br><br><br><br>
              <form method="POST" action="./../PHP/x.php">
               <select name="idCat" style="margin-right:75px" class="form-control-sm" onChange="document.getElementById('selectedValue').innerHTML = this.value;">
                   <option value="ALL" style="color:gray">ALL</option>
                   <option value="Rock">Rock</option>
                    <option value="Electronic dance music">Electronic dance music</option>
                    <option value="Heavy metal">Heavy metal</option>
                    <option value="RnB">RnB</option>
                    <option value="Rap">Rap</option>
                    <option value="Pop">Pop</option>
                    <option value="Techno">Techno</option>
                    <option value="House Music">House Music</option> 
                   
            </select> 
           <input type="submit" value="Search">
            </form>
    
              <br><br><br>
    
              <div class="row" >
    <?php 
    include "./config.php";
    $base = connect (); 
    $Cat=$_GET['id'] ;
    $requette="SELECT * from evenement ";
    if ($Cat!="ALL")
    $requette="SELECT * from evenement WHERE category='$Cat'";
    $data =$base->query($requette);
  
$i=0;
     while($product = $data->fetchObject()) { 
         $i++;
        $imagePath="./../assests/$product->picture "?> 
                <div class="col-lg-8 ">
                <div class="container border bg-light " style="margin-right:350px">
                   
           
<?php echo "<img src=\"$imagePath\" / height='100px'>"; ?>
               <p > Name : <?php echo $product->nom; ?></p>
               <p > Category : <?php echo $product->category; ?></p>
                   <p> Description: <?php echo $product->descriptionn; ?></p>
                   <p> Place: <?php echo $product->place; ?></p> 
                   <p> Prix: <?php echo $product->price; ?> Dt</p> 
                   <a href="./add_chart.php?id= <?php echo $product->id_event; ?>" class="btn btn-outline-info">Add to Chart</a>
                       <a href="./detail.php?id= <?php echo $product->id_event; ?>" class="btn btn-outline-success">View more details</a>
                   </div> 
        <br>
    </div>
   <!-- <div class="col-lg-3 ">
    <div class="container   " style="margin-top:90px">
    <button class="btn btn-primary">ADD CHART</button>
    <br>
    <br>
    <button class="btn btn-success">View More details</button>
    </div>
    </div>-->
                   <?php } ?> 
<?php if($i==0){ ?>
 <div class="col-lg-10   ">
 <div class="container border bg-warning " style="margin-right:150px">
    

<p >Sorry no event found in this category</p>

    </div> 
<br>
</div>
 <?php } ?>
                   </div>       
                   
<?php  ?>
</body>
