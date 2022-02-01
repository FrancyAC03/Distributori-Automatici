<?php
if($var==1)
{
if(isset($_POST["-0"]))
{
    if($quantita[0]!=0)
    {
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdDistributore=$var && contenere.IdBevanda = 1";
    $resultdec=mysqli_query($conn,$decremento);
    }
    else
    {

    }
}
if(isset($_POST["-1"]))
{
    if($quantita[1]!=0)
    {
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 2";
    $resultdec=mysqli_query($conn,$decremento);
    }
    else
    {

    }
}
if(isset($_POST["-2"]))
{
    if($quantita[2]!=0)
    {
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 3";
    $resultdec=mysqli_query($conn,$decremento);
    }
    else
    {

    }
}
if(isset($_POST["-3"]))
{
    if($quantita[3]!=0)
    {
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 4";
    $resultdec=mysqli_query($conn,$decremento);
    }
}
if(isset($_POST["-4"]))
{
    if($quantita[4]!=0)
    {
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 5";
    $resultdec=mysqli_query($conn,$decremento);
    }
}
if(isset($_POST["-5"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 6";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-6"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 7";
    $resultdec=mysqli_query($conn,$decremento);
}
}
if($var==2)
{
if(isset($_POST["-0"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 8";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-1"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 9";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-2"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 10";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-3"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 11";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-4"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 12";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-5"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 13";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-6"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 14";
    $resultdec=mysqli_query($conn,$decremento);
}
}
if($var==3)
{
if(isset($_POST["-0"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 15";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-1"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 16";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-2"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 17";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-3"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 18";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-4"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 19";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-5"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 20";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-6"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 21";
    $resultdec=mysqli_query($conn,$decremento);
}
}
if($var==4)
{
if(isset($_POST["-0"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 22";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-1"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 23";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-2"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 24";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-3"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 25";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-4"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 26";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-5"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 27";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-6"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 28";
    $resultdec=mysqli_query($conn,$decremento);
}
}
if($var==5)
{
if(isset($_POST["-0"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 29";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-1"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 30";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-2"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 31";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-3"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 32";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-4"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 33";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-5"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 34";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-6"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 35";
    $resultdec=mysqli_query($conn,$decremento);
}
}
if($var==6)
{
if(isset($_POST["-0"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 36";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-1"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 37";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-2"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 38";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-3"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 39";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-4"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 40";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-5"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 41";
    $resultdec=mysqli_query($conn,$decremento);
}
if(isset($_POST["-6"]))
{
    $decremento = "UPDATE gestiredistributori.contenere SET Quantita = Quantita-1 WHERE contenere.IdContenere = 42";
    $resultdec=mysqli_query($conn,$decremento);
}
?>