<?php
echo "Les formulaires";
echo "<br>";
// <!-- 1 - Faire un formulaire qui demande d'entrer un age
//     et prévenir s'il est majeure ou non
//     (tant que rien n'est entrer, ne pas afficher de message) -->
echo "EX1 : ";
echo "<br>";
?>
<form method="post" action="">
<label for="valeur">Indiquez l'age : </label>
<input type="text" name="age" id="valeur">
<input type="submit">
</form>
<?php
$age=0;
if(isset($_POST['age'])){
    $age = $_POST['age'];
}

if($age != 0){
    switch ($age) {
        case $age < 18:
            echo " est mineur";
            break;
        case $age == 18:
            echo " a 18 ans";
            break;
        case $age >18:
            echo " est majeur";
            break;
        default:
            echo "age incorrecte";
            break;
    }
}

echo "<br>";
echo "---------";
echo "<br>";



// <!-- 2 - Faire un formulaire qui demande d'entrer un nom et prenom
//     et afficher "Bonjour 'nom Prenom !'"
//     (tant que rien n'est entrer, ne pas afficher de message) -->

echo "EX2 : ";
echo "<br>";
?>
<form method="post" action="">
<label for="nom">Votre nom : </label>
<input type="text" name="nom" id="nom">
<label for="prenom">Votre prenom : </label>
<input type="text" name="prenom" id="prenom">
<input type="submit">
</form>
<?php
$nom="";
$prenom="";
if(isset($_POST['nom'])){
    $nom = $_POST['nom'];
}
if(isset($_POST['prenom'])){
    $prenom = $_POST['prenom'];
}
if($nom !="" && $prenom != ""){
    echo "Bonjour ".$nom. " ".$prenom;
}

echo "<br>";
echo "---------";
echo "<br>";


// <!-- 3 - Faire un formulaire qui demande d'entrer un nom et prenom
//     et verifier qu'il n'y ai pas de chiffres ni accents dans ceux-ci
//     (tant que rien n'est entrer, ne pas afficher de message) -->

echo "EX3 : ";
echo "<br>";
?>
<form method="post" action="">
<label for="nom3">Votre nom : </label>
<input type="text" name="nom3" id="nom3">
<label for="prenom3">Votre prenom : </label>
<input type="text" name="prenom3" id="prenom3">
<input type="submit">
</form>
<?php
$nom3="";
$prenom3="";
if(isset($_POST['nom3'])){
    $nom3 = $_POST['nom3'];
}
if(isset($_POST['prenom3'])){
    $prenom3 = $_POST['prenom3'];
}
if($nom3 !="" && $prenom3 != ""){
   
    if(!preg_match("/^([^0-9]+)$/",  $prenom3)){
        echo "<p style='color:red';>";
        echo "prenom : ".$prenom3." invalid : ne peut pas contenir de chiffre";
        echo "</p>";
    }
    if(!preg_match("/([^éèàïäüùç]+)$/", $prenom3)){
        echo "<p style='color:red';>";
        echo "prenom : ".$prenom3." invalid : ne peut pas contenir d'accent ";
        echo "</p>";
    }


    if(!preg_match("/^([^0-9]+)$/",  $nom3)){
        echo "<p style='color:red';>";
        echo "nom : ".$nom3." invalid : ne peut pas contenir de chiffre";
        echo "</p>";
    }
    if(!preg_match("/([^éèàïäüùç]+)$/", $nom3)){
        echo "<p style='color:red';>";
        echo "nom : ".$nom3." invalid : ne peut pas contenir d'accent ";
        echo "</p>";
    }

    if(  preg_match("/^([^0-9]+)$/",  $prenom3) 
        && preg_match("/([^éèàïäüùç]+)$/", $prenom3)
        && preg_match("/^([^0-9]+)$/",  $nom3)
        && preg_match("/([^éèàïäüùç]+)$/", $nom3)
    )
    {
        echo "Bonjour ".$nom3. " ".$prenom3;
    }  
}

echo "<br>";
echo "---------";
echo "<br>";


// <!-- 4 - Faire un formulaire qui demande d'entrer un nom, prenom et un age
//     et verifier que l'utilisateur a bien remplis TOUS les champs.
//     Si pas, alors prévenir quel champ(s) est vide. -->

echo "EX4 : ";
echo "<br>";
?>
<form method="post" action="">
<label for="nom4">Votre nom : </label>
<input type="text" name="nom4" id="nom4">
<br>
<label for="prenom4">Votre prenom : </label>
<input type="text" name="prenom4" id="prenom4">
<br>
<label for="age4">Votre age : </label>
<input type="text" name="age4" id="age4">
<br>
<input type="submit">
</form>
<?php
$nom4="";
$prenom4="";
$age4="";
if(isset($_POST['nom4'])){
    $nom4 = $_POST['nom4'];
}
if(isset($_POST['prenom4'])){
    $prenom4 = $_POST['prenom4'];
}
if(isset($_POST['age4'])){
    $age4 = $_POST['age4'];
}

if($nom4==""){
    echo "<p style='color:red';>";
    echo "le nom doit doit etre rempli";
    echo "</p>";
}
if($prenom4==""){
    echo "<p style='color:red';>";
    echo "le prenom doit doit etre rempli";
    echo "</p>";
}

if($age4==""){
    echo "<p style='color:red';>";
    echo "l'age doit doit etre rempli";
    echo "</p>";
}

if($nom4 !="" && $prenom4 !="" && $age4!=""){
 
    echo "Bonjour ".$nom4. " ".$prenom4." tu as ".$age4." ans";
}

echo "<br>";
echo "---------";
echo "<br>";

// <!-- 
// 5 - Faire une formulaire qui demande un nom/prenom/age/sex/etatCivil
//     comme dans l'image et afficher l'encodage une fois terminé. -->

echo "EX5 : ";
echo "<br>";
?>
<fieldset style= "width:300px;">
<form method="post" action="">
<p><label for="prenom5">Prénom : </label></p>
<input type="text" name="prenom5" id="prenom5">
<br>
<p><label for="nom5">Nom : </label></p>
<input type="text" name="nom5" id="nom5">
<br>
<p><label for="age5">Age : </label></p>
<input type="text" name="age5" id="age5">
<br>
<p><label for="sexe5">Sexe : </label></p>
<p>
<input type="radio" id="homme" name="sexe5" value="homme">
<label for="homme"> homme </label>

<input type="radio" id="femme" name="sexe5" value="femme">
<label for="femme"> femme </label>

<input type="radio" id="autre" name="sexe5" value="autre">
<label for="autre"> autre </label>
</p>

<p>
<label for="etatCivil5">Votre etat civil : </label>
<select name="etatCivil5" id="sexe5">
    <option >Merci de choisir !</option>
    <option value="marié">marié</option>
    <option value="cohabitant">cohabitant</option>
    <option value="célibataire">célibataire</option>
    <option value="bof">bof</option>
    <option value="Blobfish">Blobfish</option>
    <option value="Autre">Autre</option>
</select>

</p>
<input type="submit">
</form>
</fieldset>
<?php
$nom5="";
$prenom5="";
$age5="";
$sexe5="";
$etatCivil5="";
if(isset($_POST['nom5'])){
    $nom5 = $_POST['nom5'];
}
if(isset($_POST['prenom5'])){
    $prenom5 = $_POST['prenom5'];
}
if(isset($_POST['age5'])){
    $age5 = $_POST['age5'];
}
if(isset($_POST['sexe5'])){
    $sexe5 = $_POST['sexe5'];
}
if(isset($_POST['etatCivil5'])){
    $etatCivil5 = $_POST['etatCivil5'];
}

if($nom5==""){
    echo "<p style='color:red';>";
    echo "le nom doit doit etre rempli";
    echo "</p>";
}
if($prenom5==""){
    echo "<p style='color:red';>";
    echo "le prenom doit doit etre rempli";
    echo "</p>";
}

if($age5==""){
    echo "<p style='color:red';>";
    echo "l'age doit doit etre rempli";
    echo "</p>";
}

if($sexe5==""){
    echo "<p style='color:red';>";
    echo "l'age doit doit etre rempli";
    echo "</p>";
}

if($etatCivil5==""){
    echo "<p style='color:red';>";
    echo "l'age doit doit etre rempli";
    echo "</p>";
}

if($nom5 !="" && $prenom5 !="" && $age5!="" && $sexe5!="" && $etatCivil5!=""){
 
    echo "Bonjour ".$nom5. " ".$prenom5." tu as ".$age5." ans, tu es un ".$sexe5." et tu es ".$etatCivil5;
}

echo "<br>";
echo "---------";
echo "<br>";



// <!-- 6 - Faire un formulaire pour allimenter l'exercice 1 du cours3. -->
        /*
1 - Créer une fonction qui permet d'ajouter un element à un tableau.
    Return le tableau complété.
  (2 arg : le tableau / l'élement à ajouter) [$tableau1]
*/


echo "EX6 : ";
echo "<br>";
$tabFruit = ["pomme"];
?>
<form method="post" action="">
<p>
    <label for="fruit">Encodez un fruit : </label>
    <input type="text" name="fruit" id="fruit">
</p>
<p>
    <input type="submit">
</p>

</form>
<?php
$fruit="";
if(isset($_POST['fruit'])){
    $fruit = $_POST['fruit'];
    echo $fruit;
    array_push($tabFruit,$fruit);
}
echo "<pre>";
var_dump($tabFruit);
echo "<br>";
echo "---------";
echo "<br>";


// <!-- 7 - Faire un formulaire pour allimenter l'exercice 7 du cours3. -->

    /*
(Exos défi!)
7 - Ajouter deux etudiants($tableau6 & $tableau7) au $tableau4
 !!!!!! Mettre a jour la clé 'etudiant....'!!!!!!!!!
*/


$tableau4 =[
    "cours" => "5WID4",
    "local" => [
                "numero" => 106,
                "heure" => "18th",
                "nbPlace" => 25,
                "typeCours" =>"info" ,
                "etudiants" =>[
                                "etudiant1" => [
                                    "nom" => "Verheyen",
                                    "prenom" => "Raphael",
                                    "age" => 31
                                ],
                                "etudiant2" =>[
                                    "nom" => "Delbar",
                                    "prenom" => "Benjamin",
                                    "age" => 31
                                ],
                                "etudiant3" =>[
                                    "nom" => "Lacroix",
                                    "prenom" => "Alexandre",
                                    "age" => 31
                                ],
                                "etudiant4" =>[
                                    "nom" => "Coucou",
                                    "prenom" => "Hibou",
                                    "age" => 1337
                                ]
                                
                            ]
            ]
];

echo "EX7 : ";
echo "<br>";
?>
<form method="post" action="">
<label for="nom7">Votre nom : </label>
<input type="text" name="nom7" id="nom7">
<br>
<label for="prenom7">Votre prenom : </label>
<input type="text" name="prenom7" id="prenom7">
<br>
<label for="age7">Votre age : </label>
<input type="text" name="age7" id="age7">
<br>
<input type="submit">
</form>
<?php
$nom7="";
$prenom7="";
$age7="";
if(isset($_POST['nom7'])){
    $nom7 = $_POST['nom7'];
}
if(isset($_POST['prenom7'])){
    $prenom7 = $_POST['prenom7'];
}
if(isset($_POST['age7'])){
    $age7 = $_POST['age7'];
}

$tableau6 = ["nom"=> $nom7,
             "prenom"=>$prenom7,
             "age"=>$age7];

array_push($tableau4["local"]["etudiants"],$tableau6);
$tableau4["local"]["etudiants"]["etudiant5"]=$tableau4["local"]["etudiants"][0] ;
unset($tableau4["local"]["etudiants"][0]);


echo'<pre>';
var_dump($tableau4);

echo "<br>";
echo "-----------------------------------------------------------------";
echo "<br>";








?>