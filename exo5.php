<?php
    function preVarDump($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }
    spl_autoload_register();
    use App\Views\Page;
    use App\Views\Question;
    use App\Views\Nav;
$nav= new Nav([
    ["href"=>"index.php","class"=>"main-nav-link ","ttl"=>"Des élèves"],
    ["href"=>"exo2.php","class"=>"main-nav-link","ttl"=>"Des profs"],
    ["href"=>"exo3.php","class"=>"main-nav-link","ttl"=>"On s'organise"],
    ["href"=>"exo4.php","class"=>"main-nav-link","ttl"=>"Des écoles"],
    ["href"=>"exo5.php","class"=>"main-nav-link active","ttl"=>"Des vues"]
    ]);

    $pageContent='';
    $q1=new Question([
        "number"=>1,
        "question"=>"Créer une classe permettant de gérer l'affichage d'un template HTML en lisant un fichier grace à la fonction file_get_contents(). ",
        "answer"=>''
    ]);
    $q2=new Question([
        "number"=>2,
        "question"=>"Créer une classe permettant de gérer l'affichage des pages de ce mini-site. ",
        "answer"=>''
    ]);
    $q3=new Question([
        "number"=>3,
        "question"=>"Créer une classe permettant de gérer le menu de navigation de ce site.
        ",
        "answer"=>''
    ]);
    $q4=new Question([
        "number"=>4,
        "question"=>"Créer une classe permettant de gérer l'affichage des questions sur ce site.",
        "answer"=>''
    ]);
    $pageContent.=$q1->getHtml();
    $pageContent.=$q2->getHtml();
    $pageContent.=$q3->getHtml();
    $pageContent.=$q4->getHtml();
    $page = new Page([
        'title'=>'POO - Des Vues',
        'headerTitle'=>'POO - Des Vues',
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
    <title>POO - Des vues</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">POO - Des vues</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link active">Des vues</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt"> 
                Créer une classe permettant de gérer l'affichage d'un template HTML en lisant un fichier grace à la foncton file_get_contents(). 
            </p>
            <div class="exercice-sandbox">
                <?php
                    var_dump($view->getFileContent())
                ?>
            </div>
        </section>
        
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt"> 
                Créer une classe permettant de gérer l'affichage des pages de ce mini-site.
            </p>
            <div class="exercice-sandbox">
                
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt"> 
                Créer une classe permettant de gérer le menu de navigation de ce site.
            </p>
            <div class="exercice-sandbox">
                
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt"> 
                Créer une classe permettant de gérer l'affichage des questions sur ce site.
            </p>
            <div class="exercice-sandbox">
                
            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>