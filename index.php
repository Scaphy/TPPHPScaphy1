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
/*
    Créer un petit programme qui permet de saisir un prix HT
    et d'afficher le prix TTC correspondant
    // INFORMATIONS
    - Le prix HT, doit être renseigné directement sur le formulaire sur la page (get)
    - Vous allez faire le calcul et stocker le montant TTC sur une variable
    - Vous allez faire un echo affichant :
        Le prix HT est = (ajouter la variable du prixHT), le prix TTC est = (ajouter la variable du prix TTC), le montant total de la TVA est = (ajoutez le montant de la TVA)
    - Taux TVA = 20%
    // EXEMPLE
    Si le prix HT est 10, vous devez afficher :
    Le prix HT est = 10€, le prix TTC est = 12€, le montant total de la TVA est = 2€


 Le prix HT doit être récupéré directement sur le formulaire
*/


<?php 

if(isset($_GET["data"]) && !empty($_GET["data"])){
            echo "<p> Voici la donnée envoyée : {$_GET["data"]} </p>";
        } else {
            echo "<p>Veuillez saisir une donnée.</p>";
        }

?>
    <form action="#" method="get">
        <label for="texte">Entrez un texte :</label>
        <input type="text" id="texte" name="data" placeholder="Entrez un texte">

        <input type="submit" value="Envoyer !">
    </form>
<?php

$prixHT = $_GET["data"];
$TVA = 20;
$montantTVA = $prixHT * $TVA/100;
$prixTTC = $prixHT + $montantTVA;

echo "Le prix HT est = $prixHT €, le prix TTC est = $prixTTC €, le montant total de la TVA est = $montantTVA €";

?>


//exercice TP01 post
<?php
/*
    Créer un petit programme qui permet de saisir un prix HT
    et d'afficher le prix TTC correspondant
    // INFORMATIONS
    - Le prix HT, doit être renseigné directement sur le formulaire sur la page (POST)
    - Vous allez faire le calcul et stocker le montant TTC sur une variable
    - Vous allez faire un echo affichant :
        Le prix HT est = (ajouter la variable du prixHT), le prix TTC est = (ajouter la variable du prix TTC), le montant total de la TVA est = (ajoutez le montant de la TVA)
    - Taux TVA = 20%
    // EXEMPLE
    Si le prix HT est 10, vous devez afficher :
    Le prix HT est = 10€, le prix TTC est = 12€, le montant total de la TVA est = 2€
*/

// Le prix HT doit être récupéré directement sur le formulaire

// Ternaire = if, else sur une seule ligne
// if(!empty($_GET['prixht'])){
//     $prixHT = $_GET['prixht'];
// } else {
//     $prixHT = null;
// }

// Ternaire :
// laVariable = (condition a tester) ? valeur si vraie : valeur si faux
$prixHT = (!empty($_POST['prixht'])) ? $_POST['prixht'] : null;
// $prixHT = $_GET['prixht'];
$TVA = 20;
$montantTVA = $prixHT * $TVA/100;
$prixTTC = $prixHT + $montantTVA;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul Prix TTC</title>
</head>
<body>
    <h1>Calculer le prix TTC</h1>
    <?php 
        if(!empty($prixHT)){
            echo "<p>Le prix HT est = $prixHT €, le prix TTC est = $prixTTC €, le montant total de la TVA est = $montantTVA €</p>";
        }
    ?>
    <form action="#" method="POST">
        <label for="prix">Entrez un prix HT :</label>
        <input type="number" name="prixht" id="prix">
        <input type="submit" value="Calculer !">
    </form>
</body>
</html>


<?php 
/*
    Ecrire une boucle for qui affiche tous les nombres impairs
    de 0 à 100 (inclu)
    de 0 à 100 (inclus)
*/

for($i=1;$i<=100;$i+=2){
    echo  $i;
}

?> 

<?php 
$number=100;
$i=0;
while ($i <= $number) { // Condition
    echo "LUn nombre pair : $i <br/>";

    $i+=2;  // Modification de l'amorce
}
?>
<?php 
/*
    Vous allez ajouter le code HTML de base pour une page web (!)
    Vous allez ajouter un titre H1 (Veuillez renseigner les informations)
    Vous allez y ajouter un formulaire qui vous demande :
        - Votre prénom
        - Votre nom
        - Votre age
    Lorsque l'utilisateur renseigne les informations et valide le formulaire
    vous allez envoyer les données en méthode POST
    Une fois que les données ont été envoyées,
    vous allez vérifier si elles ne sont pas vide
    si les données sont vide, vous allez afficher un message d'erreur
    si les données sont remplies, vous allez les stocker sur les cookies
    Une fois les données stockées sur les cookies
    Vous allez afficher :
        "Bonjour PRENOM NOM, tu as AGE ans"
    Exemple :
        "Bonjour Jean-Louis ERRANTE, tu as 36 ans"
    Informations importantes :
        - Le message d'erreur doit s'afficher sous le champ qui pose problème
        - Le message "Bonjour..." doit s'afficher à la place du H1 de base
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo "Bonjour {$_COOKIE['prenom']} {$_COOKIE['nom']} {$_COOKIE['age']}<br>"; ?></h1>

    <form action="#" method="POST">
        <label for="nom" >Entrer le nom</label>
        <input type="text" id="nom" name="nom" />
        <label for="prenom" >Entrer le prenom</label>
        <input type="text" id="prenom" name="prenom" />
        <label for="age" >Entrer l'age</label>
        <input type="number" id="age" name="age" />
        <input type="submit" value="envoyer" />
    </form>
<?php 
    $leNom=$_POST['nom'];
    $lePrenom=$_POST['prenom'];
    $lage=$_POST['age'];
    if(empty($leNom)){
        echo("Veuillez renseigner le nom");
    }elseif(empty($lePrenom)){
        echo("Veuillez renseigner le prenom");
    }elseif(empty($lage)){
        echo("Veuillez renseigner l'age");
    }else{
        setcookie('prenom', $lePrenom, time()+3600);
        setcookie('nom', $leNom, time()+3600);
        setcookie('age', $lage, time()+3600);
    }

?>

    </body>
</html>

<?php 
/*
    Vous allez ajouter le code HTML de base (!)
    Vous allez ajouter un formulaire de connexion
        - Login
        - mot de passe
    A la soumission du formulaire :
        - Vous allez vérifier si le login est égal à : mail@contat.com
        - Vous allez vérifier si le mot de passe est égal à : pwd123
    Si le login et le mot de passe ne correspondent pas :
        - Vous allez afficher un message d'erreur
    Si le login et le mot de passe correspondent :
        - Vous allez masquer le formulaire de contact
        - Vous allez inclure un fichier qui contient un titre (h1)
        - Vous allez afficher un lien "Déconnexion"
        - Vous allez enregistrer le login en COOKIE ou en SESSION
    Si l'utilisateur clique sur "Déconnexion" :
        - Vous allez afficher le formulaire de connexion
        - Vous allez supprimer la connexion (variable COOKIE ou SESSION)
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
        <label for="login" >Entrer le login/label>
        <input type="text" id="login" name="login" />
        <label for="password" >Entrer le mot de passe</label>
        <input type="password" name="password" id="password" />
        <input type ="submit" value="Se connecter" name="conection" />
</form>
<?php 
if(isset($_POST['conection'])){
    if($_POST['login']=='mail@contact.com' && $_POST['password']=='pwd123' )
    {
        include_once('fichierH1.html');
        ?> 
        <input type="texte" >Deconnexion</input>
        <?php 
        session_start();

        $_SESSION["login"] = $_POST["login"];

    }
}
    ?>
</body>
</html>





