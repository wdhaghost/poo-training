<?php
function preVarDump($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

}
spl_autoload_register();

use App\Objects\Elementary;
use App\Objects\School;
use App\Objects\MiddleSchool;
use App\Objects\HighSchool;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des écoles</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">POO - Des écoles</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link active">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt"> 
                Créer une classe permettant de gérer des écoles avec un nom d'école et une ville.
                <br>
                Créer 2 écoles et afficher leurs proprités.
            </p>
            <div class="exercice-sandbox">
                <?php
                $school1=new School("Robespierre","Le Havre");
                $school2=new School("Lycée Jules Siegfried","Le Havre");
                PreVarDump($school1);
                PreVarDump($school2);
                ?>
            </div>
        </section>
        
        
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt"> 
                Créer 3 classes correspondants aux 3 types d'école suivants : primaire, des collège et des lycée.
                <br>
                Pour chaque type d'école définir la liste des niveaux scolaires qu'il prend en charge (ex de niveau scolaire : "CP", "CM2", "5ème", "Terminale", ...).
                <br>
                Créer une école de chaque type.
            </p>
            <div class="exercice-sandbox">
                <?php
                 $school3=new Elementary("Robespierre","Le Havre");
                 $school4=new MiddleSchool("Collège Eugène Varlin","Le Havre");
                 $school5=new HighSchool("Lycée Jules Siegfried","Le Havre");
                 PreVarDump($school3);
                 PreVarDump($school4);
                 PreVarDump($school5);
                ?>
            </div>
        </section>

        
        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt"> 
                Créer une méthode permettant d'interroger un type d'école pour savoir s'il prend en charge un niveu scolaire.
                <br>
                Tester la méthode créée.
            </p>
            <div class="exercice-sandbox">
                <?php
                PreVarDump( $school3->haveGrade("CP"));
                PreVarDump( $school3->haveGrade("6e"));
                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt"> 
                Remplacer les propriétés "école" des élèves et des professeurs par la classe créée.
                <br>
                Ajuster le code de toutes les classes afin que tous les exercices précédents fonctionnent à nouveau.
            </p>
            <div class="exercice-sandbox">
                
            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>