<?php
$username = "Fred Smith";
echo $username;
echo "<br />";
$current_user = $username;
echo $current_user;
echo "<br />";
 $x = 0;
 if(++$x == 10);
 echo $x;

echo "<br />";

 $y = 2;
 if ($y-- == 0);
 echo $y;

 echo "<br />";

 $w = 2;
 if (--$w == 0);
 echo $w;

 echo "<br />";

 $heading = "Date\tName\tPayment";
 echo $heading;

 echo "<br />";

 $headi =  "Date\nName\nPayment";
 echo $headi;
echo "<br />";

$author = "Alfred E Newman";

header('Content-type: text/plain');
echo "This is a headline\r\n

This is the first line.\r\n
This is the second.\r\n
Written by $author";

echo"<br />";

$authoor = "the KKK Motherfucker !! ";
$text = "This is the headline\n

This is the first line.
This is the second.
Written by $authoor";

echo $text;

echo "<br />";

$autthor = "Alfred E Newman";

header('Content_type: text/plain');
echo <<<_END
This is the headline

This is the first line.
\"Check this out\",
This is the second.
-Written by $autthor.
_END;

echo "<br />";

header('Content-type: text/plain');
echo "Line 1\nLine 2";

echo "<br />";
echo "-------------";
$number = 567489 * 345889;
echo substr($number, 3,1);
echo "<br />";

echo longdate(time());

function longdate($timestamp)
{
    $temp = date("l F jS Y", $timestamp);
    return "The date is $temp";
}
echo "<br />";
echo "<br />";
echo "Example 4:";

$temp = "The date is: ";
echo $temp . longdati(time());

function longdati($timestamp)
    {
        return date("l F jS Y", $timestamp);
    }

echo "<br />";
echo "Example 5";
echo "<br />";
echo "Consider this the following output";
echo "<br />";
$tempi = "The date is: ";
echo longdat($tempi , time());

function longdat($text, $timestamp)
    {
        return $text . date("l F jS Y", $timestamp);
    }

    echo "<br />";

echo "a: [".(20 > 9) ."]  <br />";
echo "b: [".(5==6) ."] <br />";
echo "c: [".(55== 4) ."] <br />";
echo "d: [".(3 < 76) ."] <br />";

echo "<br />";


echo "TRUE IS: [" . TRUE . "] <br />";
echo "FALSE IS: [" . FALSE . "] <br />";


echo "<br />";

$j = 10;
if ($j <= 10)
    {echo "This is the first line of the loop <br />";
     echo "Here's the second <br />";
     echo "Here's the third, Adios mafucker <br />";
    }

    echo "<br />";
?>

<?php


$page = "Home";

switch ($page)
    {
    case "Rich":
        echo "This is the About page <br />";
        break;

    case "Home":
        echo "This is the home page <br />";
        break;

    case "DT":
        echo "This is the the DT category <br />";
        break;

    case "Wealthy":
        echo "This is the Rich muthefuckers zone, bitch! <br />";
        break;

}

echo "<br />";

print strtoupper("<b> defining functions :<b/> <br />");



function fix_name($n1,$n2,$n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
        return $n1." ". $n2." ". $n3;
    }
echo fix_name("WILLIAM","vellin","UndeRson");

echo "<br />";
 print strtoupper("<b> returning an array with php</b> <br />");

 $names = fix_majina("WILLIAM","valhelsin","gatES");
 echo $names[0]."<br />".$names[1]."<br />".$names[2];

 function fix_majina($n4,$n5,$n6)
     {
         $n4 = ucfirst(strtolower($n4));
         $n5 = ucfirst(strtolower($n5));
         $n6 = ucfirst(strtolower($n6));
         return array($n4,$n5,$n6);
     }




?>
