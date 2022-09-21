<?php
function preVarDump($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}
spl_autoload_register();

use App\Objects\HighSchool;
use App\Objects\MiddleSchool;
use App\Objects\Elementary;
use App\Objects\Student;
use App\Views\Page;
use App\Views\Question; 
use App\Views\Nav; 
$nav= new Nav([
["href"=>"index.php","class"=>"main-nav-link active","ttl"=>"Des élèves"],
["href"=>"exo2.php","class"=>"main-nav-link","ttl"=>"Des profs"],
["href"=>"exo3.php","class"=>"main-nav-link","ttl"=>"On s'organise"],
["href"=>"exo4.php","class"=>"main-nav-link","ttl"=>"Des écoles"],
["href"=>"exo5.php","class"=>"main-nav-link","ttl"=>"Des vues"]
]);

// preVarDump($nav->buildNav());
//question 1

$jotaro = new Student("Jotaro", "Kujo", new DateTime("1995-12-07"), new Elementary("Stand School", "Mirio"), "master");
$dio = new Student("Dio", "Brando", new DateTime("1997-10-03"), new HighSchool("Jules Ferry", "Paris"), "BTS");

$q1=new Question([
    "number"=>1,
    "question"=>"Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
    <br>
    Définir toutes les propriétés à l'instanciation.
    <br>
    Créer 2 étudiants différents.",
    "answer"=>$jotaro->getFirstName()." ".$jotaro->getlastName().",".$jotaro->getSchool()->getName()."<br>".$dio->getFirstName()." ".$dio->getlastName().",".$dio->getSchool()->getName()
]);

//Question 2
$jotaro->setGrade("lycéen");
$dio->setGrade("lycéen");

$q2=new Question([
    "number"=>2,
    "question"=>"Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
    <br>
    Modifier le niveau scolaire des 2 élèves et les afficher.",
    "answer"=>$dio->getGrade()."<br>".$jotaro->getGrade()
]);
//Question 3


$q3=new Question([
    "number"=>3,
    "question"=>"Remplacer la propriété d'âge par la date de naissance de l'élève.
    <br>
    Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.",
    "answer"=>$dio->getBirthDate()->format("Y/m/d")."<br>".$jotaro->getBirthDate()->format("Y/m/d")
]);

//Display
$pageContent="";
$pageContent.=$q1->getHtml();
$pageContent.=$q2->getHtml();
$pageContent.=$q3->getHtml();
// $pageContent.=$q4->getHtml();
$page = new Page([
    'title'=>'POO - Des élèves',
    'headerTitle'=>'Programmation Orientée Objet - Des élèves',
    "nav"=>$nav->buildNav(),
    'content'=>$pageContent
]);
$page->display();
exit
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des élèves</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des élèves</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
                <br>
                Définir toutes les propriétés à l'instanciation.
                <br>
                Créer 2 étudiants différents.
            </p>
            <div class="exercice-sandbox">
                

                
                preVarDump($dio);
                preVarDump($jotaro);

                ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
                <br>
                Modifier le niveau scolaire des 2 élèves et les afficher.
            </p>
            <div class="exercice-sandbox">
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                
            </p>
            <div class="exercice-sandbox">
                <?php
                preVarDump($dio->getBirthDate());
                preVarDump($jotaro->getBirthDate());
                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de donner leur âge.
                <br>
                Afficher l'âge des 2 élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                preVarDump($dio->getAge());
                preVarDump($jotaro->getAge());
                ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">
                On veut aussi savoir le nom de l'école où va un élève.
                <br>
                Ajouter la propriété et ajouter la donnée sur les élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                PreVarDump($jotaro->getSchool()->getName());
                PreVarDump($dio->getSchool()->getName());
                                ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en class de XXX.".
                <br>
                Afficher la phrase de présentation des 2 élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                echo $jotaro->presentYourself() . "<br>";
                echo $dio->presentYourself();
                ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>

</html>