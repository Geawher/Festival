<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    
   
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
                <li class="x"><a  href="" class="active" >Search</a></li>
                <li class="x"> <a  href="./chart.php">Chart</a></li>
                <li class="x"> <a  href="./../HTML/index.html">Contact</a></li>
                <li class="slider"></li>
              </ul>
              <article>
            
              <br><br> <br><br>
              <div class="topnav">
  
  <div class="search-container">
    <form action="./cherche.php" method="POST">
    <select name="idCat" style="margin-left:175px" >
                   <option value="none" style="color:gray">Select Filter</option>
                   <option value="name">Name</option>
                   <option value="place">Place</option>
                   
                 
            </select>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<br><br><br>
    
            
</body>
