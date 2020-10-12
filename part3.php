<?php
function palindrome($string){
    for($i=0;$i<=strlen($string);$i++){
    
        if($string[$i[0]]===$string[strlen($string)-1]){
            return true;
        }
      
    }
    return false;
}
$str = palindrome("madam");
if($str === true){
echo "This is a palindrome";
}
else{
echo "This is not a palindrome";
}
?>