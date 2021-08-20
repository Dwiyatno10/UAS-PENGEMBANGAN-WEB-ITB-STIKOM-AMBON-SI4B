<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
        
    <?php 
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>Username atau password salah</h2>";
        }
    ?>
    <header>
      <center><h1>Login</h1></center>
      <form method="post" action="proses_login.php">
        <section class="base">
        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
    </section>
    </form>
</body>
</html> 