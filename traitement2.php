<?php
$reponse=$_GET["question1"] ?>
<?php
$reponse2=$_GET["question2"]?>
<?php
$reponse3=$_GET["question3"]?>
<?php
$compteur=0?>

<html>
<head>
    <meta charset='utf-8'> 
    <link rel="stylesheet" href="votre_style.css"/>
    <title>QCM réponses</title>
</head> 


<body> 

    <h2> Réponses : </h2>
    Vous avez répondu : <?php echo $reponse; ?> 
    <br>
    <?php
    if ($reponse=="Des chanteurs virtuels"){
        echo "VRAI";
        $compteur=$compteur+1;
    }
    else {
        echo "FAUX, la bonne réponse était : Des chanteurs virtuels";
    }
    ?>
    <br>
    <br>


    Vous avez répondu : <?php echo $reponse2; ?> 
    <br>
    <?php
    if ($reponse2=="Yamaha"){
        echo "VRAI";
        $compteur=$compteur+1;
    }   
    else
        {echo "FAUX, la bonne réponse était : Yamaha";}?>
    <br>
    <br>


    Vous avez répondu : <?php echo $reponse3; ?> 
    <br>
    <?php
    if ($reponse3=="Miku"){
        echo "VRAI";
        $compteur=$compteur+1;
    }   
    else
        {echo "FAUX, la bonne réponse était : Miku";}?>
    <br>
    <br>
    <br>

    Vous avez obtenu un score de : <?php echo $compteur; ?>/3 
</body>

</html> 
