
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kledingwinkel</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="account.css">
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
<li><a href="account.php">Account</a></li>     
</button> 
</ul>
</nav>
  
</header>
        
        
        
        
        
        <form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn"  >Sign Up </button>
    </div>
  </div>
</form>