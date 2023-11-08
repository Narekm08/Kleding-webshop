

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
    </style>
</head>
    
<body>
<header>
<h1>Welkom Smith & Oak</h1>
  
<nav>
<ul>
<li><a href="index.php">Home</a></li>
    
    
    
    
    
<li><a href="dames.php">Dames</a></li>
<li><a href="heren.php">Heren</a></li>
<li><a href="kinderen.php">Kinderen</a></li>
<li><a href="overons.php">Over ons</a></li>
<li><a href="contact.php">Contact</a></li>
    
<button style="font-size:16px">Winkelwagen <i class="fa fa-shopping-cart"></i></button> 
</ul>
</nav>
  
</header>





<div class="container">
<link rel="stylesheet" href="contact.css">
        <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
     <option value="usa">Japan</option>
        <option value="usa">Nederland</option>  
        
        </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>