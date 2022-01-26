<!DOCTYPE html>
<html lang="en">
    <?php
require_once("head.php");
?>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
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
                    <i class='bx bx-box'></i>
                    <span class="links_name">Product</span>
                </a>
            </li>
            <li class="log_out">
                <a href="index.html">
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
                <span class="dashboard">Dashboard</span>
            </div>
        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Order</div>
                        <div class="number">40,876</div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bx-cart-alt cart'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Profit</div>
                        <div class="number">$12,876</div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bx-cart cart three'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Return</div>
                        <div class="number">11,086</div>
                        <div class="indicator">
                            <i class='bx bx-down-arrow-alt down'></i>
                            <span class="text">Down From Today</span>
                        </div>
                    </div>
                    <i class='bx bxs-cart-download cart four'></i>
                </div>
            </div>

            <?php
                /* Qui avrete i dati presi dal db in un array
                <table>
                    for(){
                        qui stampo le singole righe con i singoli campi. come ultimo campo devo avere un link dinamico
                        <a href="edit-distributore.php?id=" $item->id ">Modifica</a>
                    }
                </table>
                */
            ?>


            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title" style="text-align:center">Distributori</div>
                    <div class="sales-details">
                        <ul class="details">
                            <li class="topic">Nome Distributore</li>
                            <li><a href="#">Bari Distribuzione</a></li>
                            <li><a href="#">Grumo Dispenser</a></li>
                            <li><a href="#">Squeo Dispenser</a></li>
                            <li><a href="#">Nicios Dispenser</a></li>
                            <li><a href="#">Distri Puglia</a></li>
                            <li><a href="#">H24</a></li>
                        </ul>
                        <ul class="details">
                        <center>
                        <form action="../user.php" method="post">
                            <li class="topic">Acceso/Spento</li>
                            <li>
                                <label class="switch">
                                <input type="checkbox" name="bari"<?php echo "checked"?> >
                                <span class="slider"></span>
                            </label></li>
                            <li>
                                <label class="switch">
                                <input type="checkbox" name="grumo" <?php echo "checked";?>>
                                <span class="slider"></span>
                            </label></li>
                            <li>
                                <label class="switch">
                                <input type="checkbox" name="squeo" <?php echo "checked";?>>
                                <span class="slider"></span>
                            </label></li>
                            <li>
                                <label class="switch">
                                <input type="checkbox" name="nicios" <?php echo "checked";?>>
                                <span class="slider"></span>
                            </label></li>
                            <li>
                                <label class="switch">
                                <input type="checkbox" name="distri" <?php echo "checked";?>>
                                <span class="slider"></span>
                            </label></li>
                            <li>
                                <label class="switch">
                                <input type="checkbox" name="h24" <?php  echo "checked";?>>
                                <span class="slider"></span>
                            </label></li>
                            <input type="submit" value="Salva">
                            </form>
                            </center>
                        </ul>
                        <ul class="details">
                            <center>
                            <li class="topic">Visualizza</li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M107.4312,99.32427c19.36911,-23.68897 16.76075,-58.40478 -5.93065,-78.93355c-22.6914,-20.52877 -57.49418,-19.65859 -79.1313,1.97853c-21.63712,21.63712 -22.5073,56.4399 -1.97853,79.1313c20.52877,22.6914 55.24458,25.29976 78.93355,5.93065l57.1556,57.1556c2.24964,2.17277 5.82555,2.1417 8.03709,-0.06984c2.21154,-2.21154 2.24261,-5.78745 0.06984,-8.03709zM17.2,63.06667c0,-25.33146 20.53521,-45.86667 45.86667,-45.86667c25.33146,0 45.86667,20.53521 45.86667,45.86667c0,25.33146 -20.53521,45.86667 -45.86667,45.86667c-25.31967,-0.02844 -45.83823,-20.54699 -45.86667,-45.86667z"></path></g></g></svg></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="20" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M107.4312,99.32427c19.36911,-23.68897 16.76075,-58.40478 -5.93065,-78.93355c-22.6914,-20.52877 -57.49418,-19.65859 -79.1313,1.97853c-21.63712,21.63712 -22.5073,56.4399 -1.97853,79.1313c20.52877,22.6914 55.24458,25.29976 78.93355,5.93065l57.1556,57.1556c2.24964,2.17277 5.82555,2.1417 8.03709,-0.06984c2.21154,-2.21154 2.24261,-5.78745 0.06984,-8.03709zM17.2,63.06667c0,-25.33146 20.53521,-45.86667 45.86667,-45.86667c25.33146,0 45.86667,20.53521 45.86667,45.86667c0,25.33146 -20.53521,45.86667 -45.86667,45.86667c-25.31967,-0.02844 -45.83823,-20.54699 -45.86667,-45.86667z"></path></g></g></svg></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="20" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M107.4312,99.32427c19.36911,-23.68897 16.76075,-58.40478 -5.93065,-78.93355c-22.6914,-20.52877 -57.49418,-19.65859 -79.1313,1.97853c-21.63712,21.63712 -22.5073,56.4399 -1.97853,79.1313c20.52877,22.6914 55.24458,25.29976 78.93355,5.93065l57.1556,57.1556c2.24964,2.17277 5.82555,2.1417 8.03709,-0.06984c2.21154,-2.21154 2.24261,-5.78745 0.06984,-8.03709zM17.2,63.06667c0,-25.33146 20.53521,-45.86667 45.86667,-45.86667c25.33146,0 45.86667,20.53521 45.86667,45.86667c0,25.33146 -20.53521,45.86667 -45.86667,45.86667c-25.31967,-0.02844 -45.83823,-20.54699 -45.86667,-45.86667z"></path></g></g></svg></i></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="20"viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M107.4312,99.32427c19.36911,-23.68897 16.76075,-58.40478 -5.93065,-78.93355c-22.6914,-20.52877 -57.49418,-19.65859 -79.1313,1.97853c-21.63712,21.63712 -22.5073,56.4399 -1.97853,79.1313c20.52877,22.6914 55.24458,25.29976 78.93355,5.93065l57.1556,57.1556c2.24964,2.17277 5.82555,2.1417 8.03709,-0.06984c2.21154,-2.21154 2.24261,-5.78745 0.06984,-8.03709zM17.2,63.06667c0,-25.33146 20.53521,-45.86667 45.86667,-45.86667c25.33146,0 45.86667,20.53521 45.86667,45.86667c0,25.33146 -20.53521,45.86667 -45.86667,45.86667c-25.31967,-0.02844 -45.83823,-20.54699 -45.86667,-45.86667z"></path></g></g></svg></i></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="20"viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M107.4312,99.32427c19.36911,-23.68897 16.76075,-58.40478 -5.93065,-78.93355c-22.6914,-20.52877 -57.49418,-19.65859 -79.1313,1.97853c-21.63712,21.63712 -22.5073,56.4399 -1.97853,79.1313c20.52877,22.6914 55.24458,25.29976 78.93355,5.93065l57.1556,57.1556c2.24964,2.17277 5.82555,2.1417 8.03709,-0.06984c2.21154,-2.21154 2.24261,-5.78745 0.06984,-8.03709zM17.2,63.06667c0,-25.33146 20.53521,-45.86667 45.86667,-45.86667c25.33146,0 45.86667,20.53521 45.86667,45.86667c0,25.33146 -20.53521,45.86667 -45.86667,45.86667c-25.31967,-0.02844 -45.83823,-20.54699 -45.86667,-45.86667z"></path></g></g></svg></i></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="20"viewBox="0 0 172 172"style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M107.4312,99.32427c19.36911,-23.68897 16.76075,-58.40478 -5.93065,-78.93355c-22.6914,-20.52877 -57.49418,-19.65859 -79.1313,1.97853c-21.63712,21.63712 -22.5073,56.4399 -1.97853,79.1313c20.52877,22.6914 55.24458,25.29976 78.93355,5.93065l57.1556,57.1556c2.24964,2.17277 5.82555,2.1417 8.03709,-0.06984c2.21154,-2.21154 2.24261,-5.78745 0.06984,-8.03709zM17.2,63.06667c0,-25.33146 20.53521,-45.86667 45.86667,-45.86667c25.33146,0 45.86667,20.53521 45.86667,45.86667c0,25.33146 -20.53521,45.86667 -45.86667,45.86667c-25.31967,-0.02844 -45.83823,-20.54699 -45.86667,-45.86667z"></path></g></g></svg></i></a></li>
                            </center>
                        </ul>
                        <ul class="details">
                        <center>
                            <li class="topic">Modifica</li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="20"viewBox="0 0 172 172"style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M144.31875,5.73333c-5.82465,-0.01829 -11.41409,2.29653 -15.52031,6.4276l-75.51875,75.51875c-0.6246,0.63117 -1.09584,1.39741 -1.37734,2.23958l-11.46667,34.4c-0.58275,1.74714 -0.29068,3.66786 0.78506,5.16281c1.07574,1.49495 2.80417,2.38209 4.64593,2.38459c0.6163,-0.00028 1.22863,-0.09856 1.81406,-0.29114l34.4,-11.46667c0.84421,-0.28269 1.61099,-0.75809 2.23958,-1.38854l75.51875,-75.51875c6.27846,-6.27683 8.15701,-15.71797 4.75948,-23.92007c-3.39753,-8.20211 -11.40186,-13.5495 -20.27979,-13.54816zM22.93333,17.2c-9.4993,0 -17.2,7.7007 -17.2,17.2v114.66667c0,9.4993 7.7007,17.2 17.2,17.2h103.2c9.4993,0 17.2,-7.7007 17.2,-17.2v-57.33333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333c-3.16643,0 -5.73333,2.5669 -5.73333,5.73333v57.33333c0,3.16643 -2.5669,5.73333 -5.73333,5.73333h-103.2c-3.16643,0 -5.73333,-2.5669 -5.73333,-5.73333v-114.66667c0,-3.16643 2.5669,-5.73333 5.73333,-5.73333h68.8c3.16643,0 5.73333,-2.5669 5.73333,-5.73333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333zM144.47552,17.23359c5.71313,0.08812 10.30412,4.73389 10.32448,10.44766c0.00666,2.78128 -1.09791,5.45 -3.06823,7.41302l-74.53333,74.53333l-22.27266,7.44661l7.41302,-22.25026l74.56692,-74.53333c2.00673,-1.99971 4.73718,-3.10239 7.56979,-3.05703z"></path></g></g></svg></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="20"viewBox="0 0 172 172"style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M144.31875,5.73333c-5.82465,-0.01829 -11.41409,2.29653 -15.52031,6.4276l-75.51875,75.51875c-0.6246,0.63117 -1.09584,1.39741 -1.37734,2.23958l-11.46667,34.4c-0.58275,1.74714 -0.29068,3.66786 0.78506,5.16281c1.07574,1.49495 2.80417,2.38209 4.64593,2.38459c0.6163,-0.00028 1.22863,-0.09856 1.81406,-0.29114l34.4,-11.46667c0.84421,-0.28269 1.61099,-0.75809 2.23958,-1.38854l75.51875,-75.51875c6.27846,-6.27683 8.15701,-15.71797 4.75948,-23.92007c-3.39753,-8.20211 -11.40186,-13.5495 -20.27979,-13.54816zM22.93333,17.2c-9.4993,0 -17.2,7.7007 -17.2,17.2v114.66667c0,9.4993 7.7007,17.2 17.2,17.2h103.2c9.4993,0 17.2,-7.7007 17.2,-17.2v-57.33333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333c-3.16643,0 -5.73333,2.5669 -5.73333,5.73333v57.33333c0,3.16643 -2.5669,5.73333 -5.73333,5.73333h-103.2c-3.16643,0 -5.73333,-2.5669 -5.73333,-5.73333v-114.66667c0,-3.16643 2.5669,-5.73333 5.73333,-5.73333h68.8c3.16643,0 5.73333,-2.5669 5.73333,-5.73333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333zM144.47552,17.23359c5.71313,0.08812 10.30412,4.73389 10.32448,10.44766c0.00666,2.78128 -1.09791,5.45 -3.06823,7.41302l-74.53333,74.53333l-22.27266,7.44661l7.41302,-22.25026l74.56692,-74.53333c2.00673,-1.99971 4.73718,-3.10239 7.56979,-3.05703z"></path></g></g></svg></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="20"viewBox="0 0 172 172"style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M144.31875,5.73333c-5.82465,-0.01829 -11.41409,2.29653 -15.52031,6.4276l-75.51875,75.51875c-0.6246,0.63117 -1.09584,1.39741 -1.37734,2.23958l-11.46667,34.4c-0.58275,1.74714 -0.29068,3.66786 0.78506,5.16281c1.07574,1.49495 2.80417,2.38209 4.64593,2.38459c0.6163,-0.00028 1.22863,-0.09856 1.81406,-0.29114l34.4,-11.46667c0.84421,-0.28269 1.61099,-0.75809 2.23958,-1.38854l75.51875,-75.51875c6.27846,-6.27683 8.15701,-15.71797 4.75948,-23.92007c-3.39753,-8.20211 -11.40186,-13.5495 -20.27979,-13.54816zM22.93333,17.2c-9.4993,0 -17.2,7.7007 -17.2,17.2v114.66667c0,9.4993 7.7007,17.2 17.2,17.2h103.2c9.4993,0 17.2,-7.7007 17.2,-17.2v-57.33333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333c-3.16643,0 -5.73333,2.5669 -5.73333,5.73333v57.33333c0,3.16643 -2.5669,5.73333 -5.73333,5.73333h-103.2c-3.16643,0 -5.73333,-2.5669 -5.73333,-5.73333v-114.66667c0,-3.16643 2.5669,-5.73333 5.73333,-5.73333h68.8c3.16643,0 5.73333,-2.5669 5.73333,-5.73333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333zM144.47552,17.23359c5.71313,0.08812 10.30412,4.73389 10.32448,10.44766c0.00666,2.78128 -1.09791,5.45 -3.06823,7.41302l-74.53333,74.53333l-22.27266,7.44661l7.41302,-22.25026l74.56692,-74.53333c2.00673,-1.99971 4.73718,-3.10239 7.56979,-3.05703z"></path></g></g></svg></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="20"viewBox="0 0 172 172"style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M144.31875,5.73333c-5.82465,-0.01829 -11.41409,2.29653 -15.52031,6.4276l-75.51875,75.51875c-0.6246,0.63117 -1.09584,1.39741 -1.37734,2.23958l-11.46667,34.4c-0.58275,1.74714 -0.29068,3.66786 0.78506,5.16281c1.07574,1.49495 2.80417,2.38209 4.64593,2.38459c0.6163,-0.00028 1.22863,-0.09856 1.81406,-0.29114l34.4,-11.46667c0.84421,-0.28269 1.61099,-0.75809 2.23958,-1.38854l75.51875,-75.51875c6.27846,-6.27683 8.15701,-15.71797 4.75948,-23.92007c-3.39753,-8.20211 -11.40186,-13.5495 -20.27979,-13.54816zM22.93333,17.2c-9.4993,0 -17.2,7.7007 -17.2,17.2v114.66667c0,9.4993 7.7007,17.2 17.2,17.2h103.2c9.4993,0 17.2,-7.7007 17.2,-17.2v-57.33333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333c-3.16643,0 -5.73333,2.5669 -5.73333,5.73333v57.33333c0,3.16643 -2.5669,5.73333 -5.73333,5.73333h-103.2c-3.16643,0 -5.73333,-2.5669 -5.73333,-5.73333v-114.66667c0,-3.16643 2.5669,-5.73333 5.73333,-5.73333h68.8c3.16643,0 5.73333,-2.5669 5.73333,-5.73333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333zM144.47552,17.23359c5.71313,0.08812 10.30412,4.73389 10.32448,10.44766c0.00666,2.78128 -1.09791,5.45 -3.06823,7.41302l-74.53333,74.53333l-22.27266,7.44661l7.41302,-22.25026l74.56692,-74.53333c2.00673,-1.99971 4.73718,-3.10239 7.56979,-3.05703z"></path></g></g></svg></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="20"viewBox="0 0 172 172"style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M144.31875,5.73333c-5.82465,-0.01829 -11.41409,2.29653 -15.52031,6.4276l-75.51875,75.51875c-0.6246,0.63117 -1.09584,1.39741 -1.37734,2.23958l-11.46667,34.4c-0.58275,1.74714 -0.29068,3.66786 0.78506,5.16281c1.07574,1.49495 2.80417,2.38209 4.64593,2.38459c0.6163,-0.00028 1.22863,-0.09856 1.81406,-0.29114l34.4,-11.46667c0.84421,-0.28269 1.61099,-0.75809 2.23958,-1.38854l75.51875,-75.51875c6.27846,-6.27683 8.15701,-15.71797 4.75948,-23.92007c-3.39753,-8.20211 -11.40186,-13.5495 -20.27979,-13.54816zM22.93333,17.2c-9.4993,0 -17.2,7.7007 -17.2,17.2v114.66667c0,9.4993 7.7007,17.2 17.2,17.2h103.2c9.4993,0 17.2,-7.7007 17.2,-17.2v-57.33333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333c-3.16643,0 -5.73333,2.5669 -5.73333,5.73333v57.33333c0,3.16643 -2.5669,5.73333 -5.73333,5.73333h-103.2c-3.16643,0 -5.73333,-2.5669 -5.73333,-5.73333v-114.66667c0,-3.16643 2.5669,-5.73333 5.73333,-5.73333h68.8c3.16643,0 5.73333,-2.5669 5.73333,-5.73333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333zM144.47552,17.23359c5.71313,0.08812 10.30412,4.73389 10.32448,10.44766c0.00666,2.78128 -1.09791,5.45 -3.06823,7.41302l-74.53333,74.53333l-22.27266,7.44661l7.41302,-22.25026l74.56692,-74.53333c2.00673,-1.99971 4.73718,-3.10239 7.56979,-3.05703z"></path></g></g></svg></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="20"viewBox="0 0 172 172"style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b15dff"><path d="M144.31875,5.73333c-5.82465,-0.01829 -11.41409,2.29653 -15.52031,6.4276l-75.51875,75.51875c-0.6246,0.63117 -1.09584,1.39741 -1.37734,2.23958l-11.46667,34.4c-0.58275,1.74714 -0.29068,3.66786 0.78506,5.16281c1.07574,1.49495 2.80417,2.38209 4.64593,2.38459c0.6163,-0.00028 1.22863,-0.09856 1.81406,-0.29114l34.4,-11.46667c0.84421,-0.28269 1.61099,-0.75809 2.23958,-1.38854l75.51875,-75.51875c6.27846,-6.27683 8.15701,-15.71797 4.75948,-23.92007c-3.39753,-8.20211 -11.40186,-13.5495 -20.27979,-13.54816zM22.93333,17.2c-9.4993,0 -17.2,7.7007 -17.2,17.2v114.66667c0,9.4993 7.7007,17.2 17.2,17.2h103.2c9.4993,0 17.2,-7.7007 17.2,-17.2v-57.33333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333c-3.16643,0 -5.73333,2.5669 -5.73333,5.73333v57.33333c0,3.16643 -2.5669,5.73333 -5.73333,5.73333h-103.2c-3.16643,0 -5.73333,-2.5669 -5.73333,-5.73333v-114.66667c0,-3.16643 2.5669,-5.73333 5.73333,-5.73333h68.8c3.16643,0 5.73333,-2.5669 5.73333,-5.73333c0,-3.16643 -2.5669,-5.73333 -5.73333,-5.73333zM144.47552,17.23359c5.71313,0.08812 10.30412,4.73389 10.32448,10.44766c0.00666,2.78128 -1.09791,5.45 -3.06823,7.41302l-74.53333,74.53333l-22.27266,7.44661l7.41302,-22.25026l74.56692,-74.53333c2.00673,-1.99971 4.73718,-3.10239 7.56979,-3.05703z"></path></g></g></svg></a></li>
                            </center>
                        </ul>
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



<div id="transition"></div>
<script src="../.js/transition.js"></script>
</body>

</html>