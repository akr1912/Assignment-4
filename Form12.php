<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Transformation</title>
</head>
<style>
    h1 {
        background: linear-gradient(#ee2424, #f6da40, #0ee80e);
    }
    body {
        background: linear-gradient(orange,yellow,green,yellow);
    }
    input[type=text] {
        border-color: red;
    }
</style>
<body>
<h1 style="text-align: center; color: yellow">ASSIGNMENT-4</h1>
<h2 style="text-align: center; color: Green">By ADITYA</h2>
<form method="post">
  <table>
    <tr>
        <td>1. Enter string to calculate MD5 hash</td>
        <td><input type="text" name="a" placeholder="enter string"></td>
    <tr><td><input type="submit" name="mmmd" value="CALCULATE MD5 HASH"></td></tr>
    </tr>
    <tr>
      <td>2. Enter string to display number format</td>
      <td><input type="text" name="b" placeholder="Ex.12345"></td>
    <tr><td><input type="submit" name="format" value="CONVERT TO NO. FORMAT"></td></tr>
    </tr>
    <tr>
      <td>3. Enter character/number to find ASCII value</td>
      <td><input type="text" name="c" placeholder="Ex. A-Z, a-z, 0-9"></td>
      <tr><td><input type="submit" name="asc" value="Find ASCII"></td></tr>
    </tr>
    <tr>
      <td>4. Enter complete string</td>
      <td><input type="text" name="d" placeholder="Enter string"></td>
      <td>(a). Enter characters/words from above string to remove</td>
      <td><input type="text" name="e" placeholder="right-side words to remove"></td>
    <tr><td><input type="submit" name="rtriimm" value="FINAL STRING"></td></tr>
    </tr>
    <tr>
      <td>5. Enter string</td>
      <td><input type="text" name="f" placeholder="Enter String"></td>
      <td>(a). Enter word from 5 that you want to replace</td>
      <td><input type="text" name="g" placeholder="Word to replace"></td>
      <td>(b). Enter new word in place of(a) </td>
      <td><input type="text" name="h" placeholder="New word"></td>
      <tr><td><input type="submit" name="replace" value="FINAL RESULT"></td></tr>
    </tr>
    <tr>
      <td>6. Enter string to find length</td>
      <td><input type="text" name="i" placeholder="Enter string"></td>
    <tr><td><input type="submit" name="lent" value="FIND LENGTH"></td></tr>
    </tr>
    <tr>
      <td>7. Enter strings to compare</td>
      <td><input type="text" name="j" placeholder="STRING 1"></td>
      <td><input type="text" name="k" placeholder="STRING 2"></td>
    <tr><td><input type="submit" name="cmpr" value="COMPARE"></td></tr>
    </tr>
    <tr>
      <td>8. Enter string containing more than 2 similar words</td>
      <td><input type="text" name="l" placeholder="Ex.this is that, that is this"></td>
    </tr>
    <tr>
      <td>8(a). Enter the word from 8 to find last occurrence</td>
      <td><input type="text" name="m" placeholder="enter here"></td>
    <tr><td><input type="submit" name="occ" value="FINAL OCCURRENCE"></td></tr>
    </tr>
    <tr>
      <td>9. Enter complete string</td>
      <td><input type="text" name="n" placeholder="Enter"></td>
      <td>(a). Enter the length of substring from above you want</td>
      <td><input type="number" name="o" placeholder="Enter length"></td>
    <tr><td><input type="submit" name="subs" value="FIND SUBSTRING"></td></tr>
    </tr>
    <tr>
      <td>10. Enter string to convert in LOWERCASE</td>
      <td><input type="text" name="p" placeholder="Enter UPPERCASE String"></td>
    <tr><td><input type="submit" name="lowr" value="Convert to lowercase"></td></tr>
    </tr>
    <tr>
      <td>11. Enter string to convert in hexadecimal</td>
      <td><input type="text" name="q" placeholder="Enter String"></td>
    <tr><td><input type="submit" name="hexc" value="Convert to HEX"></td></tr>
    </tr>
    <tr>
      <td>12. Enter string to chop whitespaces, predefined characters</td>
      <td><input type="text" name="r" placeholder="Ex.tab,newline,whitespace"></td>
    <tr><td><input type="submit" name="chopstr" value="Chop Predefined Characters"></td></tr>
    </tr>
  </table>
</form>
<h1 style="text-align: center; color: yellow">SOLUTIONS</h1>
<?php
    if(isset($_POST['mmmd']))
    {
        $str1 = $_POST['a'];
        $res = md5($str1);
echo "The MD5 Hash of $str1 is: ".$res;
} if(isset($_POST['format']))
    {
        $num = $_POST['b'];
        $res = number_format($num);
        echo "The Number Format Of $num is: ".$res;
} if(isset($_POST['asc']))
    {
        $str1 = $_POST['c'];
        $res = ord($str1);
        echo "The ASCII Of $str1 is: ".$res;
} if(isset($_POST['rtriimm']))
    {
        $str1 = $_POST['d'];
        $str2 = $_POST['e'];
        $res = rtrim($str1,$str2);
        echo "The initial string is \" $str1 \" . After removing \" $str2 \" The string becomes: ".$res;
} if(isset($_POST['replace']))
    {
        $str1 = $_POST['f'];
        $str2 = $_POST['g'];
        $str3 = $_POST['h'];
        $res = str_replace($str2,$str3,$str1);
        echo "The initial string is \" $str1 \" . After replacing \"$str2\" with \"$str3\" . The Resultant String becomes: ".$res;
} if(isset($_POST['lent']))
    {
        $str1 = $_POST['i'];
        $res = strlen($str1);
        echo "The Length of \" $str1 \" is: ".$res;
} if(isset($_POST['cmpr']))
    {
        $str1 = $_POST['j'];
        $str2 = $_POST['k'];
        $res = strcasecmp($str1,$str2);
        echo "The Comparison of \" $str1 \" & \" $str2 \" is: ".$res;
} if(isset($_POST['occ']))
    {
        $str1 = $_POST['l'];
        $str2 = $_POST['m'];
        $res = strrpos($str1,$str2);
        echo "The Last Occurrence of \" $str2 \" in \" $str1 \" is at: ".$res;
} if(isset($_POST['subs']))
    {
        $str1 = $_POST['n'];
        $num1 = $_POST['o'];
        $res = substr($str1,$num1);
        echo "The Substring of \" $str1 \" from index \"$num1\" is: ".$res;
} if(isset($_POST['lowr']))
    {
        $str1 = $_POST['p'];
        $res = strtolower($str1);
        echo "The lowercase of \" $str1 \" is: ".$res;
} if(isset($_POST['hexc']))
    {
        $str1 = $_POST['q'];
        $res = bin2hex($str1);
        echo "The Hex Representation of \" $str1 \" is: ".$res;
} if(isset($_POST['chopstr']))
    {
        $str1 = $_POST['r'];
        $example = "<--This space is now chopped\n\t";
        $res = chop($str1);
        echo "The Chop removes the whitespace/predefined chars. from last character of \" $str1 \" like this: ".$res;
        echo $example;
    }
?>
<h1 style="text-align: center; color: yellow">THANK YOU</h1>
</body>
</html>