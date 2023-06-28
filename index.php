<?php
function returnTrue(){
    $tru = true;
    echo $tru;
}
returnTrue();

echo "<br />";

function maChain(){
    echo "toto l'asticot";
}
 maChain();

echo "<br />";

function maChain2($ch1, $ch2){
    echo "$ch1 $ch2";
}
 maChain2("hello", "world");

echo "<br />";

function bigNumber($a, $b){
  if($a > $b){
        echo "$a est plus grand que $b";
    }
  if($a < $b){
        echo "$a est plus petit que $b";
    }
   if($a === $b){
        echo "$b et $a sont égaux";
    }
}
bigNumber(9, 10);

 echo "<br />"; 

function charNum($cha, $num){
    echo $cha.$num;
}
charNum("jojo", 10);

 echo "<br />"; 

 function personne($lastName = "bob", $firstName = "jean", $age = 33){
       
       echo "Bonjour $lastName $firstName tu as $age ";
  }
  personne();

  echo "<br />"; 

  function ageGender($age, $gender){
    if($age >= 18 && $gender == "homme"){
        echo "vous etes majeur et vous etes un homme";
    }
    if($age < 18 && $gender == "homme"){
        echo "vous etes mineur et vous etes un homme";
    }
    if($age < 18 && $gender == "femme"){
        echo "vous etes mineur et vous etes une femme";
    }
    if($age >= 18 && $gender == "femme"){
        echo "vous etes majeur et vous etes une femme";
    }
  }
  ageGender(12, "femme");

  echo "<br />"; 

  function calc($a = 3, $b = 3, $c = 3){
    echo $a + $b + $c;
  }
  calc();
?>