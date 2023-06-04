<?php
//Calculating BMI using pound and inches
//without functions

$myWeight = 153;
$myHeight = 68;
$BMI = 703 * $myWeight/ ($myHeight * $myHeight);

$weight = "Your Weight(lb) is : $myWeight.\n";
echo $weight;
echo "<br/>";
$height = "Your Height(in) is : $myHeight.\n";
echo $height;
echo "<br/>";
$bmi = "Your BMI is : $BMI.\n";
echo $bmi;
echo "<br/>";

if ($BMI < 18.5)
{
    echo "You are Underweight.\n";
}
elseif ($BMI >= 18.5 && $BMI <= 24.9)
{
    echo "You are Normalweight.\n";
}
elseif ($BMI >=25 && $BMI <=29.9)
{
    echo "You are Overweight.\n";
}
elseif ($BMI >= 30 && $BMI <= 34.9)
{
    echo "You are Obese.\n";
}  
else
{
    echo "You are Extremely Obese.\n";
}
echo "<br/>";
?>