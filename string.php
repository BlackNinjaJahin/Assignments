<?php 

//for taking input from user

function getPrompt($prompt){

    echo $prompt;
    return trim (fgets(STDIN)); 
}

// initilized array

$strings = [] ;

// for taking input from user
for($i=0 ; $i<4; $i++){

  $prompt = getPrompt("");
  $strings [] = $prompt;
}


foreach($strings  as $string){

   $vowels = ['a','e','i','o','u','A','E','I','O','U'];
   $VowelC = 0;
   for($i=0; $i<strlen($string);$i++){

       if(in_array ($string[$i],$vowels)){

           $VowelC++;
   }


}


//for reversing 
$revString = '' ;

for($i =strlen($string)-1; $i>=0; $i--){

    $revString .=  $string[$i];


}
echo "Original String: $string, Vowel Count: $vowelC, Reversed String: $revString\n";
}