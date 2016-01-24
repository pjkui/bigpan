<?
//此代码将创建一个可阅读的字符串，使其更接近词典中的单词，实用且具有密码验证功能。
/************** 
*@length - length of random string (must be a multiple of 2) 
**************/ 
function readable_random_string($length){ 
    $conso=array("b","c","d","f","g","h","j","k","l", 
    "m","n","p","r","s","t","v","w","x","y","z"); 
    $vocal=array("a","e","i","o","u"); 
    $password=""; 
    srand ((double)microtime()*1000000); 
    $max = $length/2; 
    for($i=1; $i<=$max; $i++) 
    { 
    $password.=$conso[rand(0,19)]; 
    $password.=$vocal[rand(0,4)]; 
    } 
    return $password; 
} 
echo readable_random_string(10);