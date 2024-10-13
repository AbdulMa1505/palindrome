<?php
Function Palindrome($number){
    $StringNumber =(string)$number;
    $reversedString=strrev($StringNumber);
    return $reversedString===$StringNumber;
        
    
   
}
$number =111;
if(Palindrome($number)){
    echo "the number is a palindrome";

}
else{
    echo "the number is not a palindrome ";
}
?>