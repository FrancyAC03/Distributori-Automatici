<?php
    require_once('../../open_php_user.php');
    $sql="SELECT Quantita FROM Contenere WHERE  IdDistributore = 5"; 
    $result=mysqli_query($conn,$sql);
    $quantita_=array();
    while($row=mysqli_fetch_array($result))
    {
        array_push($quantita_,$row["Quantita"]);
    }
    if (isset($_POST["value"])) {
        $a=$_POST["value"];
        if($a==1){
            if($quantita_[0]!=0){
            $decremento="UPDATE gestiredistributori.contenere SET Quantita=Quantita-1 WHERE contenere.IdContenere =29";
            $resultd=mysqli_query($conn,$decremento);
            }
        }
        if ($a==2){
            if($quantita_[1]!=0){
                $decremento="UPDATE gestiredistributori.contenere SET Quantita=Quantita-1 WHERE contenere.IdContenere =30";
                $resultd=mysqli_query($conn,$decremento);
                }
        }
        if ($a==3){
            if($quantita_[2]!=0){
                $decremento="UPDATE gestiredistributori.contenere SET Quantita=Quantita-1 WHERE contenere.IdContenere =31";
                $resultd=mysqli_query($conn,$decremento);
                }
        }
        if ($a==4){
            if($quantita_[3]!=0){
                $decremento="UPDATE gestiredistributori.contenere SET Quantita=Quantita-1 WHERE contenere.IdContenere =32";
                $resultd=mysqli_query($conn,$decremento);
                }
        }
        if ($a==5){
            if($quantita_[4]!=0){
                $decremento="UPDATE gestiredistributori.contenere SET Quantita=Quantita-1 WHERE contenere.IdContenere =33";
                $resultd=mysqli_query($conn,$decremento);
                }
        }
        if ($a==6){
            if($quantita_[5]!=0){
                $decremento="UPDATE gestiredistributori.contenere SET Quantita=Quantita-1 WHERE contenere.IdContenere =34";
                $resultd=mysqli_query($conn,$decremento);
                }
        }
        if ($a==7){
            if($quantita_[6]!=0){
                $decremento="UPDATE gestiredistributori.contenere SET Quantita=Quantita-1 WHERE contenere.IdContenere =35";
                $resultd=mysqli_query($conn,$decremento);
                }
        }

    }
?>
<!DOCTYPE html>
<html lang="it">
<?php
require_once("../admin/head.php");
 $sql="SELECT Quantita FROM Contenere WHERE  IdDistributore = 5"; 
 $result=mysqli_query($conn,$sql);
 $quantita=array();
 while($row=mysqli_fetch_array($result))
 {
     array_push($quantita,$row["Quantita"]);
 }
 ?>
<body>
    <header class="ScriptHeader">
        <div class="rt-container">
            <div class="col-rt-12" style="float: left;">
                <h1 class="rt-heading" style="font-size:50px">Seleziona il codice del prodotto</h1>
                <img src="../../Distributori.grafica\Grumo%20Dispenser1.png" style="width: 50%;">
            </div>
        </div>
    </header>
    <div class="container" style="position: absolute;top:505px;left: 1438px;">
        <form action="5grumo_dispenser.php" style="position: absolute;top:-60px;left: 150px;" method="Post" id="form">
            <input class="display-box" type="number" id="result" disabled>
            <input type="hidden" id="result_hidden" name="value">
        </form>

        <div id="bottoni">
            <input type="hidden" name="postvar" value="" />
            <input type="submit" value="1">
            <input type="submit" value="2">
            <input type="submit" value="3"><br>
            <input type="submit" value="4">
            <input type="submit" value="5">
            <input type="submit" value="6"><br>
            <input type="reset" value="C">
            <input style="text-align: center;" type="button" value="7">
            <input type="submit" value="OK"><br>
        </div>
    </div>
    <div style="position: absolute; top:3px; right:13px" >
    <a href="../index.html"><button>TORNA ALLA HOME</button></a>
    </div>
    <div style="position: absolute;top:313px;left: 511px;">
        <span style="position: absolute; top: -28px;right: 40px; font-size: 14px; font-weight: 800;"><?php
                                                                                                       if($quantita[0] == 0){
                                                                                                        echo "VUOTO";
                                                                                                       }
                                                                                                       else
                                                                                                       {echo $quantita[0];}?></span>
        <img class="img" src="../.images/cocacola.png" <?php if($quantita[0]==0){echo 'style="opacity:0%"';}?>>
    </div>
    <div style="position: absolute;top:312px;left: 692px;">
    <span style="position: absolute; top: -28px;right: 40px; font-size: 14px; font-weight: 800;"><?php
                                                                                                       if($quantita[1] == 0){
                                                                                                        echo "VUOTO";
                                                                                                       }
                                                                                                       else
                                                                                                       {echo $quantita[1];}?></span>
        <img class="img" src="../.images/fanta.png"<?php if($quantita[1]==0){echo 'style="opacity:0%"';}?>>
    </div>
    <div style="position: absolute;top:472px;left: 490px;">
    <span style="position: absolute; top: -20px;right: 40px; font-size: 14px; font-weight: 800;"><?php
                                                                                                       if($quantita[2] == 0){
                                                                                                        echo "VUOTO";
                                                                                                       }
                                                                                                       else
                                                                                                       {echo $quantita[2];}?></span>
        <img class="img" src="../.images/pepsi.png"<?php if($quantita[2]==0){echo 'style="opacity:0%"';}?>>
    </div>
    <div style="position: absolute;top:472px;left: 605px;">
    <span style="position: absolute; top: -20px;right: 40px; font-size: 14px; font-weight: 800;"><?php
                                                                                                       if($quantita[3] == 0){
                                                                                                        echo "VUOTO";
                                                                                                       }
                                                                                                       else
                                                                                                       {echo $quantita[3];}?></span>
        <img class="img" src="../.images/peroni.png"<?php if($quantita[3]==0){echo 'style="opacity:0%"';}?>>
    </div>
    <div style="position: absolute;top:472px;left: 721px;">
    <span style="position: absolute; top: -20px;right: 40px; font-size: 14px; font-weight: 800;"><?php
                                                                                                       if($quantita[4] == 0){
                                                                                                        echo "VUOTO";
                                                                                                       }
                                                                                                       else
                                                                                                       {echo $quantita[4];}?></span>
        <img class="img" src="../.images/sprite.png"<?php if($quantita[4]==0){echo 'style="opacity:0%"';}?>>
    </div>
    <div style="position: absolute;top:654px;left: 510px;">
    <span style="position: absolute; top: -14px;right: 40px; font-size: 14px; font-weight: 800;"><?php
                                                                                                       if($quantita[5] == 0){
                                                                                                        echo "VUOTO";
                                                                                                       }
                                                                                                       else
                                                                                                       {echo $quantita[5];}?></span>
        <img style="width:80%<?php if($quantita[5]==0){echo ';opacity:0%;';}?>" class="img" src="../.images/acqua_frizzante.png">
    </div>
    <div style="position: absolute;top:654px;left: 693px;">
    <span style="position: absolute; top: -14px;right: 40px; font-size: 14px; font-weight: 800;"><?php
                                                                                                       if($quantita[6] == 0){
                                                                                                        echo "VUOTO";
                                                                                                       }
                                                                                                       else
                                                                                                       {echo $quantita[6];}?></span>
        <img style="width:80%<?php if($quantita[6]==0){echo ';opacity:0%;';}?>" class="img" src="../.images/acqua_naturale.png">
    </div>

    <script>
        let input_principale = $("form input")
        let input_hidden = $("#result_hidden"); // questa è l'input che viene inviata al server php.
        let form = $("#form")
        $("div#bottoni input").click(function () {
            if ($(this).val() === 'C') {
                input_principale.val('')
                input_hidden.val('')
            } else if ($(this).val() === 'OK' && input_principale.val() !== '' && input_principale.val() !== null) {
                form.submit()
            } else {
                input_principale.val($(this).val())
                input_hidden.val($(this).val())
            }
        })
    </script>
</body>
</html>