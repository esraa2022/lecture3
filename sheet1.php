<?php

# Q1---------
echo "Q1--------------------------------------------------------------------------------<br>";
function ThreeDigits($num)
{
    $d1 = (int)($num / 100);
    $num %= 100;
    $d2 = (int)($num / 10);
    $num %= 10;
    $d3 = $num;
    return ($d1 + $d2) * $d3;
}

$result = ThreeDigits(342);
echo $result."<br>";



#Q2-------------
echo "Q2--------------------------------------------------------------------------------<br>";
function sizeOfBox($height)
{
   $length= 5;
   $width=10;
    return  $length * $width * $height;
}

$result = sizeOfBox(3);
echo $result."<br>";





#Q3-------------
echo "Q3--------------------------------------------------------------------------------<br>";
function hoursToSeconds($hours)
{
   $minutes_in_hour= 60;
   $seconds_in_minute=60;
    return  ($hours* $minutes_in_hour* $seconds_in_minute);
}

$result = hoursToSeconds(2);
echo $result."<br>";



#Q4-------------
echo "Q4--------------------------------------------------------------------------------<br>";
function areaOfTriangle($base,$height)
{
   
    return  0.5*$base*$height;
}

$result = areaOfTriangle(4,7);
echo $result."<br>";



#Q5-------------
echo "Q5--------------------------------------------------------------------------------<br>";
function yearsToDays($years)
{
   $days_in_year= 365;
   
    return $years * $days_in_year;
}

$result = yearsToDays(2);
echo $result."<br>";




#string 
#Q6-------------
echo "Q6--------------------------------------------------------------------------------<br>";
function lengthOfString($sentence)
{
  
   
    return strlen($sentence);
}

$result = lengthOfString('EraaSoft Learn by practice');
echo $result."<br>";




#Q7-------------
echo "Q7--------------------------------------------------------------------------------<br>";
function lengthOfCharacters($sentence)
{
     $number_of_spaces= substr_count($sentence,' ');
    return strlen($sentence)- $number_of_spaces;
}

$result =  lengthOfCharacters('EraaSoft Learn by practice');
echo $result."<br>";





#Q8-------------
echo "Q8--------------------------------------------------------------------------------<br>";
function CountOfWords($sentence)
{
    
     return str_word_count($sentence);
}

$result =  CountOfWords('EraaSoft Learn by practice');
echo $result."<br>";



#Q9-----------------------------
echo "Q9--------------------------------------------------------------------------------<br>";
function findBy($sentence)
{
    
     return str_contains($sentence,'by');
}

$result =  findBy('EraaSoft Learn by practice');
echo $result."<br>";




#Q10-----------------------------
echo "Q10--------------------------------------------------------------------------------<br>";
function getEraasoft($sentence)
{
    $postion = strpos($sentence,'EraaSoft');
     return substr('EraaSoft',$postion );
}

$result =  getEraasoft('EraaSoft Learn by practice');
echo $result."<br>";



#Q11-----------------------------
echo "Q11--------------------------------------------------------------------------------<br>";
function removeBy($sentence)
{
    echo "(".$sentence.")|" ,"|(".str_replace('by','', $sentence).")";
}

$result =  removeBy('EraaSoft Learn by practice');
echo $result."<br>";



#Q12-----------------------------
echo "Q12--------------------------------------------------------------------------------<br>";
function concatenation($string1,$string2)
{
    return $string1.$string2;
}

$result =  concatenation("Eraa","Soft");
echo $result."<br>";


#Q13-----------------------------
echo "Q13--------------------------------------------------------------------------------<br>";
function compareTowStrings($string1,$string2)
{
    return strnatcasecmp($string1,$string2);
}

$result =  compareTowStrings("EraaSoft","EraaSoft Learn by practice");
echo $result."<br>";



#Q14-----------------------------
echo "Q14--------------------------------------------------------------------------------<br>";
function splitString($string)
{
    return chunk_split($string,2,"/");
}

$result =  splitString("ErraSoft");
echo $result."<br>";



#Q15-----------------------------
echo "Q15--------------------------------------------------------------------------------<br>";
function OddOrEven(int $var)
{
    if($var%2==0)
    return "Even ";

     return"Odd";
}

$result =  OddOrEven(1);
echo $result."<br>";


#Q16-----------------------------
echo "Q16--------------------------------------------------------------------------------<br>";
function OddOrEvenLength($str)
{
    if(strlen($str)%2==0)
    return "Even ";
    
     return"Odd";
}

$result =  OddOrEvenLength("Eraa");
echo $result."<br>";


#Q17-----------------------------
echo "Q17--------------------------------------------------------------------------------<br>";
function ifExist($str)
{
    if(str_contains($str,'pain') || str_contains($str,'gain'))
    return "success word";
return "wrong word";
}

$result =  ifExist("");
echo $result."<br>";


#Q18-----------------------------
echo "Q18--------------------------------------------------------------------------------<br>";
function isBool(bool $num)
{
 return !$num;
}

$result = isBool(0);
echo $result."<br>";


#Q19-----------------------------
echo "Q19--------------------------------------------------------------------------------<br>";
function singularOrPlural($word)
{
    $postion =strrpos($word,'s');

   if(strlen($word)-1==$postion)
   return "Plural";
return "Singular";
}

$result = singularOrPlural("cats");
echo $result."<br>";


#Q20-----------------------------
echo "Q20--------------------------------------------------------------------------------<br>";
function calculator($num1,$num2,$op)
{
    switch ($op) {
        case '+':
            echo $num1 + $num2;
            break;
        case '-':
            echo $num1 - $num2;
            break;
        case '*':
            echo $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                echo "Division by zero is not allowed";
            } else {
                echo $num1 / $num2;
            }
            break;
        case '%':
            if ($num2 == 0) {
                echo "Division by zero is not allowed";
            } else {
                echo $num1 % $num2;
            }
            break;
            case '^':
                echo pow($num1 , $num2);
                break;
        default:
            echo "Invalid operator";
}   }

$result = calculator(3,5,'^');
echo $result."<br>";

?>