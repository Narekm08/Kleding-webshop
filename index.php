<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kledingwinkel</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
   <script>

function Scrolldown() {
    window.location.hash = '#iWantToScrollHere';
}
</script>
</head>
    
<body>
<header>

<h1>Welkom Smith & Oak</h1>
  
<nav>
<ul>
<li><a href="#">Home</a></li>
    
    
    
    
    
<li><a href="#" onclick="scrolldown()">Dames</a></li>
<li><a href="#">Heren</a></li>
<li><a href="#">Kinderen</a></li>
<li><a href="#">Over ons</a></li>
<li><a href="#">Contact</a></li>
    
<button style="font-size:16px">Winkelwagen <i class="fa fa-shopping-cart"></i></button> 
</ul>
</nav>
  
</header>
<main>
<section class="product">
<img src="images/product1.jpg" alt="Kledingstuk 1">
<h2>Kledingstuk 1</h2>
<p>Beschrijving van het kledingstuk.</p>
<p>Prijs: $XX.XX</p>
<button>Toevoegen aan winkelwagen</button>
</section>
    
    <?php
   echo  $_COOKIE['broek'];
echo $_COOKIE['trui'];
    
    ?>   
<!-- Voeg meer productsecties toe zoals hierboven -->
</main>
<footer>
<p id="iWantToScrollHere" name="iWantToScrollHere">&copy; 2023 Smith & Oak</p>
</footer>
</body>
</html>