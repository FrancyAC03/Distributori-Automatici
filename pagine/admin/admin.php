<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
<link rel="stylesheet" href="form2.css">
</head>
<body>
    <div class="login-box">
        <h2>LOGIN</h2>
        <form action="database.php" method="POST">
            <div class="user-box">
                <input type="text" name="nome" required="">
            <label>Username</label>    
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <?php
            if($_POST["nome"]=="admin"$_POST["password"]=="admin")
            {
                echo'  <a href="./database.php" name ="invia">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </a>';
            }
            ?>
          
            <!--That's all-->
        </form>
    </div>
</body>
</html> 
