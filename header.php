<?php
    session_start();
?>
<meta charset="utf-8">
<link rel="stylesheet" href="styleindex.css">
        <nav>
            <label for="menu-mobile" class="menu-mobile">Menu</label>
            <input type="checkbox" id="menu-mobile" role="button" />
            
            <ul>
                <a class="logogauche" href="menu.php">
                  <img src="img/logo.png">
                </a>

              <!-- GESTION DES ANIMAUX -->
      
              <li class="menu-animaux">
                <a href="#">Gestion des animaux</a>
                <ul class="submenu">
                  <li><a href="ajt_animal.php">Ajout d'un animal</a></li>
                  <li><a href="recherche_animal.php">Recherche un animal</a></li>
                  <li><a href="aff_animal.php">Affichage de tous les animaux</a></li>
                  <li><a href="ajt_enclos.php">Ajout enclot</a></li>
                  <li><a href="ajt_espece.php">Ajout espèce</a></li>
                </ul>
              </li>
      
              <!-- GESTION DU PERSONNEL -->
            <?php 
            if ($_SESSION["fonction"]=="directeur"){
            echo ("             
               <li class='menu-personnel'>
                <a href='#'>Gestion du personnel</a>
                <ul class='submenu'>
                  <li><a href='ajt_employer.php'>Ajout d'un employé</a></li>
                  <li><a href='recherche_employer.php'>Recherche d'un employé</a></li>
                  <li><a href='aff_employer.php'>Affichage de tous les employés</a></li>
                </ul>
              </li>");}

            ?>

      
              <!-- CONTACT -->
      
              <li class="menu-contact">
                <a href="contact.php">Contact</a>
                <ul class="submenu">
                </ul>
              </li>
      
              <!-- DECONNEXION -->
      
              <li class="menu-deco">
                <a href="logout.php">Déconnexion</a>
                <ul class="submenu">
                </ul>
              </li>
      
            </ul>
          </nav>