function isPalindrome($str){
    $i = 0;
    $j = strlen($str)-1;

    while($i < $j){
        if($str[$i] != $str[$j]){
            return false;
        }
        $i++;
        $j--;
    }

    return true;
}

echo isPalindrome("malayalam") ? "Palindrome" : "Not Palindrome";
echo isPalindrome("geek") ? "Palindrome" : "Not Palindrome";