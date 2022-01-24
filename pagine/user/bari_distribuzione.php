<?php
session_start();
$val1=null;
if(isset($_POST["bottone1"]))
{
    $_SESSION["val1"] = $_POST["bottone1"];
}
if(isset($_SESSION["val1"]))
{
  $val1=$_SESSION["val1"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distributori Automatici</title>
    <meta name="author" content="Codeconvey" />

    <link rel="stylesheet" href="../.css/style.css">
    <link rel="stylesheet" href="../.css/form.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../.css/demo.css" />

</head>

<body>
    <script>
        window.onload = function() {
            document.getElementsByName("bottone").onclick = function() {
                document.getElementsByName("postvar")[0].value = this.value;
                document.forms.myform.submit();
            }
        };
    </script>

    <header class="ScriptHeader">
        <div class="rt-container">
            <div class="col-rt-12" style="float: left;">
                <h1 class="rt-heading" style="font-size:50px">Seleziona il codice del prodotto</h1>
                <img src="../.images/bari_distribuzione.png" style="width: 50%;">
            </div>
        </div>
    </header>
    <input style="position: absolute;top:270px;left: 1275px;" class="display-box" type="text" id="result" disabled value>
    <div class="container" style="position: absolute;top:500px;left: 1600px;">
        <form action="" method="Post">
            <input type="hidden" name="postvar" value="" />
            <input type="submit" value="1" name="bottone1">
            <input type="submit" value="2" name="bottone2">
            <input type="submit" value="3" name="bottone3"><br>
            <input type="submit" value="4" name="bottone4">
            <input type="submit" value="5" name="bottone5">
            <input type="submit" value="6" name="bottone6"><br>
            <input type="reset" value="C" name="bottonec">
            <input style="text-align: center;" type="button" value="7" name="bottone7">
            <input type="submit" value="OK" name="invia"><br>
        </form>
    </div>

    <div style="position: absolute;top:300px;left: 510px;">
        <img class="img" src="../.images/cocacola.png">
    </div>
    <div style="position: absolute;top:300px;left: 690px;">
        <img class="img" src="../.images/fanta.png">
    </div>
    <div>
        <div style="position: absolute;top:470px;left: 483px;">
            <img class="img" src="../.images/pepsi.png">
        </div>
        <div style="position: absolute;top:470px;left: 610px;">
            <img class="img" src="../.images/peroni.png">
        </div>
        <div style="position: absolute;top:470px;left: 740px;">
            <img class="img" src="../.images/sprite.png">
        </div>
        <div style="position: absolute;top:627px;left: 510px;">
            <img class="img" src="../.images/acqua_frizzante.png">
        </div>
        <div style="position: absolute;top:627px;left: 690px;">
            <img class="img" src="../.images/acqua_naturale.png">
        </div>    
</body>
</body>

</html>