
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User login and register</title>
  <link rel="stylesheet" href="./userlogin.css">

</head>
<body>

<a href="logout.php">Logout</a>

<br>
Hello, Username
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="Name"/>
      <input type="password" placeholder="Password"/>
      <input type="text" placeholder="Email Address"/>
      <button>register</button>
      <p class="message">Already registered ? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="Name"/>
      <input type="password" placeholder="Password"/>
      <button>Login</button>
      <p class="message">Not registered ? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>

<?php 

?>

