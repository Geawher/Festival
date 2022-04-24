<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <link rel="icon" type="image/png" href="./../assests/concert.png" />
    <link href="./../CSS/login.css" rel="stylesheet" >
    
    
</head>
<body>
   
<?php 
    include "./config.php";
    $base = connect ();
    $id = $_GET ['id'];
    $requette="SELECT * from evenement where id_event=$id";
    $data =$base->query($requette);
    $product=$data->fetchObject();
     
    ?>

    <section id="about">
        <div class="container" style="margin-top: 0px; margin-bottom: 10px;">
            <header class="section-header" id="hh2">
                <h1 style="font-size:xx-large; color: rgb(163, 88, 147); ">ADD PRODUCT</h1>
    
                <form method="POST" action="./../PHP/updateproduct.php?id=<?php echo $product->id_event; ?>">
                <div class="row align-items-center" style="margin-left: 150px;">
                    <label for="nom">Name</label> <br>
                    <input type="text" id="nom" name="nom" class="form-control" value="<?php  echo $product->nom; ?>" required > <br>
                    <label for="cat">Category</label> <br>

                    <select name="category" id="cat" class="form-control " style="width: 60%;">
                       <option value="Rock">Rock</option>
                       <option value="Electronic dance music">Electronic dance music</option>
                         <option value="Heavy metal">Heavy metal</option>
                       <option value="RnB">RnB</option>
                        <option value="Rap">Rap</option>
                        <option value="Pop">Pop</option>
                        <option value="Techno">Techno</option>
                          <option value="House Music">House Music</option>
                         </select> 
                          <br>
                    <label for="description">Description</label> <br>
                    <input type="textarea" id="description" name="description" class="form-control" value="<?php  echo $product->descriptionn; ?>" required > <br>
                    <label for="prix">Price</label> <br>
                    <input type="number" id="prix" name="prix"  class="form-control" value="<?php  echo $product->price; ?>" required > <br>
                    <label for="nb_ticket">Ticket number</label> <br>
                    <input type="number" id="nb_ticket" name="nb_ticket" class="form-control" value="<?php  echo $product->nb_ticket; ?>" required > <br>
                    <label for="place">Place</label> <br>
                    <input type="text" id="place" name="place" class="form-control" value="<?php  echo $product->place; ?>" required > <br>
                    <label for="date">Date</label> <br>
                    <input type="date" id="date" name="date" class="form-control" value="<?php  echo $product->date_event; ?>" required > <br>
                    <label for="time">time</label> <br>
                    <input type="time" id="time" name="time" class="form-control" value="<?php  echo $product->time_event; ?>" required > <br>
                  <!--  <label for="pic">Picture</label> <br>
                    <input type="file" id="pic" name="pic" class="form-control" accept="image/*" value="<?php $product->picture; ?>"  > <br>-->
                    
                    <input type="Submit" class="bt" value="Modify" > 
                </div>
               
            </form>   
            <a href="./all_products.php"> <button class="bt " >Cancel</button></a>   
                  </header>
        </div>
        
    </section>

</body>
</html>
