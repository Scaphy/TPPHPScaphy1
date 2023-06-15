<?php echo 'test'; ?>

<?php


$prixHt=12;
$pirxTTC=$prixHt*1.2;

echo 'Le prix hors tax est : '.$prixHt.' le prix ttc est : '.$pirxTTC.' La TVA est 20%';

?>

/*
    Créer un programme qui demande une valeur entière et qui affiche son double si cette donnée est inférieur à un seuil
        - Le seuil doit être défini dans une variable
        - La valeur doit être entrée directement dans une variable
    
    EXEMPLE :
        le seuil : 10
        la variable : 5
        Affichera :
            10 (5*2)
    AUTRE EXEMPLE :
        le seuil : 10
        la variable : 20
        Affichera :
            20
    Pour cela, vous allez entrer la valeur en dur (directement sur la variable)
    Vous allez devoir utiliser les conditions
*/
<?php 

$seuil=10;
$variable1=5;


if($variable1<=$seuil){
$resultat=$variable1*2;
echo "Le resultat est : $resultat";
}else{
    echo'Le seuile de : '.$seuil.'est dépasseé';
}

?>