<?php
    require_once('../../open_php.php');

    if (isset($_POST["value"])) {
        echo $_POST["value"];

    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once("../admin/head.php");
?>
<body>
    <header class="ScriptHeader">
        <div class="rt-container">
            <div class="col-rt-12" style="float: left;">
                <h1 class="rt-heading" style="font-size:50px">Seleziona il codice del prodotto</h1>
                <img src="../../Distributori.grafica\Bari Distributore.png" style="width: 50%;">
            </div>
        </div>
    </header>
    <div class="container" style="position: absolute;top:505px;left: 1438px;">
        <form action="bari_distribuzione.php" style="position: absolute;top:-60px;left: 150px;" method="Post" id="form">
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

    <div style="position: absolute;top:313px;left: 511px;">
        <span style="position: absolute; top: -28px;right: 40px; font-size: 14px; font-weight: 800;">13</span>
        <img class="img" src="../.images/cocacola.png">
    </div>
    <div style="position: absolute;top:312px;left: 692px;">
    <span style="position: absolute; top: -28px;right: 40px; font-size: 14px; font-weight: 800;">13</span>
        <img class="img" src="../.images/fanta.png">
    </div>
    <div style="position: absolute;top:472px;left: 490px;">
    <span style="position: absolute; top: -20px; right: 40px; font-size: 14px; font-weight: 800;">13</span>
        <img class="img" src="../.images/pepsi.png">
    </div>
    <div style="position: absolute;top:472px;left: 605px;">
    <span style="position: absolute; top: -20px;right: 40px; font-size: 14px; font-weight: 800;">13</span>
        <img class="img" src="../.images/peroni.png">
    </div>
    <div style="position: absolute;top:472px;left: 721px;">
    <span style="position: absolute; top: -20px;right: 40px; font-size: 14px; font-weight: 800;">13</span>
        <img class="img" src="../.images/sprite.png">
    </div>
    <div style="position: absolute;top:654px;left: 510px;">
    <span style="position: absolute; top: -14px;right: 40px; font-size: 14px; font-weight: 800;">13</span>
        <img style="width:80%"class="img" src="../.images/acqua_frizzante.png">
    </div>
    <div style="position: absolute;top:654px;left: 693px;">
    <span style="position: absolute; top: -14px;right: 40px; font-size: 14px; font-weight: 800;">13</span>
        <img style="width:80%" class="img" src="../.images/acqua_naturale.png">
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