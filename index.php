<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kledingwinkel</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
   <script>

    
    </script>
        
    <style>
        .kledingplaatje {
          height: 200px;
          margin-right: 90px;

        }

.product > div {
    height: 300px;
    width: 250px;
    margin-right: 5px;
    float: left;
}

#fix{
clear: both;
}



#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
  z-index: -6;
  margin-top: -100px;
top: 230px;

}
    </style>
</head>
    
<body>
<header>
<h1>Welkom Smith & Oak</h1>
  
<nav>
<ul>
<li><a href="#">Home</a></li>
    
    
    
    
    
<li><a href="dames.php">Dames</a></li>       
<li><a href="heren.php">Heren</a></li>
<li><a href="kinderen.php">Kinderen</a></li>
<li><a href="overons.php">Over ons</a></li>
<li><a href="contact.php">Contact</a></li>
 <li><a href="account.php">Account</a></li>   
<button style="font-size:16px">Winkelwagen <i class="fa fa-shopping-cart"></i></button> 
</ul>
</nav>
  
</header>
<main>
<center> <video id="myVideo"  autoplay muted loop>
        <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
</center>
        </video>    


</section>
    
    <?php
   echo  $_COOKIE['broek'];
echo $_COOKIE['trui'];
    
    ?>   
<!-- Voeg meer productsecties toe zoals hierboven -->
</main>
<footer>
<p id="iWantToScrollHere" name="iWantToScrollHere"></p>

        
        
        
        
        
        
</footer>
</body>

     
        
        
        
        
        
        
        
        
        
        </html>