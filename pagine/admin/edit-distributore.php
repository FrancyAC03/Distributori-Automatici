<?php
//ACQUISIZIONE ID E QUERY
require_once("../../open_php.php");
$var = $_GET["id"];
$sql = "SELECT Nome FROM Distributori WHERE  IdDistributore = $var";
$result = mysqli_query($conn, $sql);
$prova = array();
$nome = "SELECT Bevande.Nome FROM Contenere, Distributori, Bevande WHERE Contenere.IdBevanda = Bevande.IdBevanda && Contenere.IdDistributore = Distributori.IdDistributore && distributori.IdDistributore = $var";
$resultn = mysqli_query($conn, $nome);
$bevande = array();
while ($row = mysqli_fetch_array($resultn)) {
    array_push($bevande, $row["Nome"]);
}
$queryquantita = "SELECT Quantita from Contenere where IdDistributore =$var";
$resultq = mysqli_query($conn, $queryquantita);
$quantita = array();
while ($row = mysqli_fetch_array($resultq)) {
    array_push($quantita, $row["Quantita"]);
}
while ($row = mysqli_fetch_array($result)) {
    array_push($prova, $row["Nome"]);
}

?>
<!DOCTYPE html>
<html lang="it">
<?php


// output data of each row
require_once("head.php");
?>
<style>
    .sus {
        color: #fff;
        background: #0A2558;
        border-color: #0A2558;
        padding: 4px 12px;
        font-size: 15px;
        font-weight: 400;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .sus:hover {
        background: #B15DFF;
        border-color: #B15DFF;
    }
</style>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-shield-quarter'></i>
            <span class="logo_name">Admin Page</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-user-plus'></i>
                    <span class="links_name">About us</span>
                </a>
            </li>
            <li class="log_out">
                <a href="../index.html">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Distributori</span>

            </div>
        </nav>
        <div class="home-content">
            <div class="overview-boxes">
            </div>
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title" style="text-align:center"><?php echo $prova[0]; ?>

                    </div>
                    <div class="sales-details">
                        <ul class="details">
                            <?php

                            //QUERY E STAMPA A VIDEO DELLE BEVANDE



                            for ($i = 0; $i < 7; $i++) {
                                echo "<li>" . $bevande[$i] . "</li>";
                            }
                            ?>
                        </ul>
                        <ul>
                        </ul>
                        <ul>
                        </ul>
                        <ul>
                        </ul>
                        <ul>
                        </ul>
                        <ul>
                        </ul>
                        <ul>
                        </ul>
                        <ul>
                        </ul>
                        <ul>
                        </ul>
                        <ul>

                        <form action="edit-distributore.php?id=<?php echo $var; ?>" method="post">
                            <div>
<!---------------------------------------------STAMPA A VIDEO SUBMIT E QUANTITA'------------------------------------------------------------------------------------------>
                            </div>
                        </ul>
                        <ul class="details">
                            <!--qta-->
                            <?php
                            for ($i = 0; $i < 7; $i++) {
                                echo '<li>' . $quantita[$i] . '</li>';
                            }
                            echo ' <li>' . '<input type ="submit" name ="massimo"' . '" value="MAX" class="sus"> ' . '</li>';
                             ?>
                        </ul>
                        <ul>
                        <!--bottoni piu-->
                        <?php
                        $idlattina="SELECT IdBevanda FROM contenere WHERE IdDistributore=$var";
                        $resultid = mysqli_query($conn, $idlattina);
                        $id = array();
                        while ($row = mysqli_fetch_array($resultid)) {
                                array_push($id, $row["IdBevanda"]);
                            }
                        for ($i = 0; $i < 7; $i++) {
                            if($quantita[$i]==0){
                                echo '<li>' . '<input type ="submit" name ="+' .$i . '" value="+5" class="sus">' . '</li>';
                            }
                            else{
                                echo '<li>' . '<input type ="submit" name ="+' .$i . '" value="+5" class="sus" style="opacity: 0%" disabled>' . '</li>';
                            }   
                        }
                        echo '<li>' . '<input type ="submit" name ="massimo"' . '" value="MAX" class="sus" style="opacity: 0%" disabled>' . '</li>';
                        ?>
                        </ul>
                        <ul>
                        <?php
                        for ($i = 0; $i < 7; $i++) {
                            if($quantita[$i]==0){
                                echo '<li>' . '<input type ="submit" name ="+10' .$i . '" value="+10" class="sus">' . '</li>';
                            }
                            else{
                                echo '<li>' . '<input type ="submit" name ="+10' .$i . '" value="+10" class="sus" style="opacity: 0%" disabled>' . '</li>';
                            }
                            
                        
                        }
                        echo '<li>' . '<input type ="submit" name ="+' .$i . '" value="MAX" class="sus" style="opacity: 0%" disabled>' . '</li>';
                        ?>
                        </form>
                        </ul>
                        <ul>
                        </ul>
                        <?php
                         //QUERY INCREMENTO +5
                        if(isset($_POST["+0"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+5 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[0]";
                            $resultinc=mysqli_query($conn,$incremento);
                            header("Refresh:0; url=edit-distributore.php?id=$var");
                        }
                        if(isset($_POST["+1"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+5 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[1]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        if(isset($_POST["+2"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+5 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[2]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        if(isset($_POST["+3"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+5 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[3]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        if(isset($_POST["+4"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+5 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[4]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        if(isset($_POST["+5"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+5 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[5]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        if(isset($_POST["+6"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+5 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[6]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                         //QUERY INCREMENTO +10
                        if(isset($_POST["+100"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+10 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[0]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        if(isset($_POST["+101"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+10 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[1]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        if(isset($_POST["+102"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+10 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[2]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        if(isset($_POST["+103"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+10 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[3]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        if(isset($_POST["+104"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+10 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[4]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        if(isset($_POST["+105"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+10 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[5]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        if(isset($_POST["+106"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita+10 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = $id[6]";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        //QUERY MASSIMO
                        if(isset($_POST["massimo"]))
                        {
                            $incremento = "UPDATE gestiredistributori.contenere SET Quantita =20 WHERE contenere.IdDistributore=$var && contenere.Quantita = 0";
                            $resultinc=mysqli_query($conn,$incremento);
                        }
                        ?>
                        </div>
    </section>
    <script>
        
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>
</body>

</html>




</body>

</html>