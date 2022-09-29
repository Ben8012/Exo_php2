<?php
// 1 - Calculer la moyenne de 5 variables
echo " EX 1 ";
echo "<br>";
$nb1 = 2;
$nb2 = 3;
$nb3 = 4;
$nb4 = 5;
$nb5 = 6;

echo "Moyenne  : ".($nb1+$nb2+$nb3+$nb4+$nb5/5);
echo "<br>";
echo "---------";
echo "<br>";
//2 - Définir 2 variables et afficher les deux avec un seul echo (concaténation)
echo " EX 2 ";
echo "<br>";
$prenom ="Benjamin";
$nom ="Sterckx";

echo $prenom." ".$nom;
echo "<br>";
echo "---------";
echo "<br>";
//3 - Réaliser une boucle qui affiche tous les nombres pair jusqu'à 50 (SANS utiliser l'incrémentation +2)
echo " EX 3 ";
echo "<br>";

for ($i=0; $i <=50 ; $i++) { 
    if($i%2==0){
        echo $i." | "; 
    }
}
echo "<br>";
echo "---------";
echo "<br>";
//4 - Réaliser une boucle qui affiche tous les multiples de 3 jusqu'à 60
echo " EX 4 ";
echo "<br>";

for ($i=0; $i <=50 ; $i++) { 
    if($i%3==0){
        echo $i." | ";
    }
}
echo "<br>";
echo "---------";
echo "<br>";

//5 - En utilisant la boucle for, afficher la table de multiplication du chiffre 5.
echo " EX 5 ";
echo "<br>";

for ($i=0; $i <=10 ; $i++) { 
    echo $i." x 5 = ".$i*5;
    echo "<br>";
}

echo "---------";
echo "<br>";

//6 - En utilisant la boucle while, afficher tous les codes postaux possibles pour les codes postaux 1300.
echo " EX 6 ";
echo "<br>";
$code = 1300;

while($code < 1400){
    echo $code." | ";
    $code++;
}
echo "<br>";
echo "---------";
echo "<br>";

//7 - Ecrire un programme qui signale si vous êtes majeure ou pas en fonction d'un age.
echo " EX 7 ";
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
echo "<br>";
echo "---------";
echo "<br>";

//8 - Déclarer une variable $sexe qui contient une chaîne de caractères. Créer une condition qui affiche un message différent en fonction de la valeur de la variable.

echo " EX 8 ";
echo "<br>";
?>
<form method="post" action="">
<label for="valeur">Indiquez le sexe : </label>
<input type="text" name="sexe" id="valeur">
<input type="submit">
</form>
<?php

$sexe ="";
if(isset($_POST['sexe'])){
    $sexe = $_POST['sexe'];
}


switch ($sexe) {
    case "M":
        echo " est un homme";
        break;
    case "F":
        echo " est une femme";
        break;
    case "":
        echo " sexe indefini";
        break;
    default:
        echo " sexe incorrect";
        break;
}
echo "<br>";
echo "---------";
echo "<br>";

//9 - Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24. Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.

echo " EX 9";
echo "<br>";

?>
<form method="post" action="">
<label for="valeur">Indiquez une heure : </label>
<input type="text" name="value" id="valeur">
<input type="submit">
</form>
<?php
$heure = 0;
//echo $_POST['value'];
if(isset($_POST['value'])){
    $heure = $_POST['value'];
}
    
switch ($heure) {
    case $heure > 0 && $heure < 12:
        echo " c'est le matin";
        break;
    case $heure == 12:
        echo "il est midi";
        break;
    case $heure > 12 && $heure <= 18:
        echo " c'est l'apres-midi";
        break;
    case $heure > 18 && $heure <= 24:
        echo " c'est le soir";
        break;
    default:
        echo "heure incorrect";
        break;
}
echo "<br>";

echo "<br>";
echo "-----------------------------------------------";

// les fonctions

echo "<br>";
echo "Les fonctions ";
echo "<br>";
echo "---------";
echo "<br>";
echo "<br>";
//1 - Faite en sorte que la fonction HelloWorld retourne exactement la valeur Hello World!

echo " EX 1";
echo "<br>";

function helloWorld(){
    return "Hello World";
}
echo helloWorld();


echo "<br>";
echo "---------";
echo "<br>";

//2 - Créer une fonction qui s'appelle jeRetourneMonArgument(). 
//Exemple : Arg = "abc" ==> Return abc Arg = 123 ==> Return 123

echo " EX 2";
echo "<br>";

function jeRetourneMonArgument($arg){
    return $arg;
}
$result2 = jeRetourneMonArgument("123");
echo "result EX2 : " ;
echo $result2;


echo "<br>";
echo "---------";
echo "<br>";

//3 - Créer une fonction qui s'appelle concatenation(). 
//Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux.

echo " EX 3";
echo "<br>";

function concatenation(string $arg1 ,string $arg2){
    return $arg1." ". $arg2;
}
echo "result EX3 : ";
echo concatenation("Benjamin" , "aime le php");

echo "<br>";
echo "---------";
echo "<br>";


//4 - Créer une fonction qui s'appelle multiplication(). 
//Elle prendra deux arguments de type int. Elle devra retourner la somme des deux

echo " EX 4";
echo "<br>";

function multiplication(int $arg1 , int $arg2){
    return $arg1 + $arg2;
}
echo "result de la multiplicaton : 2 * 6 = ";
echo multiplication(2,6);

echo "<br>";
echo "---------";
echo "<br>";


//5 - Créer une fonction qui s'appelle estIlMajeure(). 
//Elle prendra un argument de type int. Elle devra retourner un boolean.

echo " EX 5";
echo "<br>";

function estIlMajeure(int $arg1 ){
    if($arg1 < 18){
        return false;
    }else{
        return true;
    }
    
}
echo "est il majeur ? : ";
$bool = estIlMajeure(14);
echo var_dump($bool);
echo "<br>";
echo "---------";
echo "<br>";

//6 - Créer une fonction qui s'appelle plusGrand(). 
//Elle prendra deux arguments de type int. Elle devra retourner le plus grand des deux.

echo " EX 6";
echo "<br>";

function plusGrand(int $arg1, int $arg2 ){
    if($arg1 < $arg2){
        return  $arg2;
    }else if ($arg1 > $arg2){
        return  $arg2;
    }else{
        return $arg1." = ".$arg2;
    }
    
}
echo "result Ex 6 : ";
echo plusGrand(4,4);

echo "<br>";
echo "---------";
echo "<br>";

//7 - Créer une fonction qui s'appelle plusPetit(). 
//Elle prendra trois arguments de type int. Elle devra retourner le plus petit des trois.

echo " EX 7";
echo "<br>";

function plusPetit(int $arg1, int $arg2, int $arg3 ){
    if($arg1 < $arg2){
        if ($arg1 < $arg3){
            return $arg1;
        }
    }else{
        if($arg2 < $arg3){
            return $arg2;
        }else{
            return $arg3;
        }
    }
    
}
echo "le plus petit est : ";
echo plusPetit(5,1,2);

echo "<br>";
echo "---------";
echo "<br>";


//8 - Créer une fonction qui s'appelle plusGrandTab(). 
//Elle prendra un argument de type array. Elle devra retourner 
//le plus grand des élements présent dans l'array. Si l'array est vide, 
//il faudra retourner null;*/


echo " EX 8";
echo "<br>";

function plusGrandTab(array $array){
    $temp = $array[0];
    for ($i=0; $i < count($array)-1 ; $i++) { 
        if($temp<$array[($i+1)]){
            $temp = $array[($i+1)];
        }
    }
    return $temp;
    
}
echo "le plus plus grand est : ";
$array = array(2,3,6);
echo plusGrandTab($array);

echo "<br>";
echo "---------";
echo "<br>";

?>
