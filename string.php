<?php 
//taking string
$strings = ["Hello", "World", "PHP", "Programming"];
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
echo "Original String: $string, Vowel Count: $VowelC, Reversed String: $revString\n";
}
