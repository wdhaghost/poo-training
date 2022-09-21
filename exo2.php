<?php
    spl_autoload_register();
    use App\Objects\School;
    use App\Objects\Teacher;
    use App\Objects\HighSchool;
    use App\Objects\MiddleSchool;
    use App\Objects\Elementary;
    use App\Views\Page;
    use App\Views\Question; 
    use App\Views\Nav; 
    $nav= new Nav([
    ["href"=>"index.php","class"=>"main-nav-link","ttl"=>"Des élèves"],
    ["href"=>"exo2.php","class"=>"main-nav-link active","ttl"=>"Des profs"],
    ["href"=>"exo3.php","class"=>"main-nav-link","ttl"=>"On s'organise"],
    ["href"=>"exo4.php","class"=>"main-nav-link","ttl"=>"Des écoles"],
    ["href"=>"exo5.php","class"=>"main-nav-link","ttl"=>"Des vues"]
    ]);
    
$pageContent='';

//Question 1

$gyro= new Teacher("Gyro","Zepelli",new Elementary("STB", "USA"));
$johnny= new Teacher("Johnny","Joestar",new Elementary("Jockey School","Japon"));

$q1=new Question([
    "number"=>1,
    "question"=>"Créer une classe permettant de créer des professeurs ayant un nom, un prénom, une liste des matières qu'il enseigne et le nom de l'école où il enseigne.
    <br>
    Définir toutes les propriétés à l'instanciation en rendant la liste des matières et le nom de lécole faculative.
    <br>
    Créer 2 professeurs différents.",
    "answer"=>$gyro->getfirstName()." : ".$gyro->getSchool()->getName().",".$gyro->getSchool()->getCity()."<br>".$johnny->getfirstName()." : ".$johnny->getSchool()->getName().",".$johnny->getSchool()->getCity()
]);

//Question 2

$gyro->getSchool()->setName("STB School");
$johnny->getSchool()->setName("Wheelchair School");

$q2=new Question([
    "number"=>2,
    "question"=>"Créer les getters et les setters permettant de gérer toutes les propriétés des professeurs.
    <br>
    Modifier les écoles des 2 professeurs.
    <br>
    Afficher les écoles des 2 professeurs.",
    "answer"=>$gyro->getSchool()->getName()."<br>".$johnny->getSchool()->getName()
]);


//Question 3
$johnny->addCourse("jockey");
$johnny->addCourse("how to get Shot 101");
$johnny->addCourse("Stand fight 101");
$gyro->addCourse("infinite swag");
$gyro->addCourse("infinite rotation");

$q3=new Question([
    "number"=>3,
    "question"=>"Créer une méthode permettant d'interroger un type d'école pour savoir s'il prend en charge un niveu scolaire.
    <br>
    Tester la méthode créée.",
    "answer"=>$johnny->getListOfCourse()."<br>".$gyro->getListOfCourse()
]);

//Question 4

$q4=new Question([
    "number"=>4,
    "question"=>"Donner la possibilité aux professeurs de se présenter en affichant la phrase suivante :<br>
    \"Bonjour, je m'appelle XXX XXX et j'enseigne à l'école XXX les matières suivantes : XXX, XXX, XXX.\".
    <br>
    Afficher la phrase de présentation des 2 profs.",
    "answer"=>$gyro->presentYourself()."<br>".$johnny->presentYourself()
]);

//Display

$pageContent.=$q1->getHtml();
$pageContent.=$q2->getHtml();
$pageContent.=$q3->getHtml();
$pageContent.=$q4->getHtml();
$page = new Page([
    'title'=>'POO - Des professeurs',
    'headerTitle'=>'POO - Des professeur',
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
    <title>POO - Des professeurs</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">POO - Des professeurs</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link active">Des profs</a></li>
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
                Créer une classe permettant de créer des professeurs ayant un nom, un prénom, une liste des matières qu'il enseigne et le nom de l'école où il enseigne.
                <br>
                Définir toutes les propriétés à l'instanciation en rendant la liste des matières et le nom de lécole faculative.
                <br>
                Créer 2 professeurs différents.
            </p>
            <div class="exercice-sandbox">
                <?php
                function preVarDump($value){
                    echo "<pre>";
                    var_dump($value);
                    echo "</pre>";
                }
              
               
                PreVarDump($gyro);
                PreVarDump($johnny);
                ?>
            </div>
        </section>
        
        
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de gérer toutes les propriétés des professeurs.
                <br>
                Modifier les écoles des 2 professeurs.
                <br>
                Afficher les écoles des 2 professeurs.
            </p>
            <div class="exercice-sandbox">
                <?php
                   
                ?>
        
            </div>
        </section>
                
        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Créer les méthodes permettant d'ajouter une matière, de retirer une matière et d'afficher la liste des matières d'un prof.
                <br>
                Tester l'ajout, la suppression et l'affichage sur chacun des profs.
            </p>
            <div class="exercice-sandbox">
            <?php
                   
                   echo $johnny->getListOfCourse()."<br>";
                   $johnny->removeCourse("jockey");
                   echo $johnny->getListOfCourse()."<br>";
                   echo $gyro->getListOfCourse()."<br>";
                   $gyro->removeCourse("infinite swag");
                   echo $gyro->getListOfCourse()."<br>";
                ?>
            </div>
        </section>


        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux professeurs de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX et j'enseigne à l'école XXX les matières suivantes : XXX, XXX, XXX.".
                <br>
                Afficher la phrase de présentation des 2 profs.
            </p>
            <div class="exercice-sandbox">
                <?php
                echo $gyro->presentYourself()."<br>";
                echo $johnny->presentYourself();
                ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>