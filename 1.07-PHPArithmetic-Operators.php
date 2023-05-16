<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP </title>
  <style>
    * {
      margin: 20px 20px;
      padding: 0;
    }
    pre{
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
<h1><?php echo "Learn PHP " ?> </h1>
<h3>1.07-PHP Arithmetic-Operators.php</h3>
<hr>

<h3><?php echo "Code use" ?> </h3>
<h3><?php echo "-----------" ?> </h3>

<h3><?php echo "Code result " ?> </h3>

<!-- <p><?php echo " Multiplication, <br/>  /  Division ,<br/> %  Modulus <br/> ** ---- Exponentiation" ?> </p> -->

<h3><?php echo "+  Addition" ?> </h3>

<!-- + -->
            <pre>
              $number1 = 12;
              $number2 = 13;
              echo $number1 + $number2 ; //
            </pre>
<?php  
$number1 = 12;
$number2 = 13;
echo $number1 + $number2 ;
?>
<br/>
<h3><?php echo " - Subtraction" ?> </h3>

          <pre>
              $number1 = 20;
              $number2 = 13;
              echo $number1 - $number2;
          </pre>
<?php 
  $number1 = 20;
  $number2 = 13;
  echo $number1 - $number2;
?>

<h3><?php echo " * Multiplication" ?> </h3>
            <pre>
              $number1 = 20;
              $number2 = 13;
              echo $number1 * $number2;
          </pre>
<?php 
  $number1 = 20;
  $number2 = 13;
  echo $number1 * $number2;
?>
<h3><?php echo " / Division" ?> </h3>
            <pre>
              $number1 = 205;
              $number2 = 10;
              echo $number1 / $number2;
          </pre>
<?php 
  $number1 = 205;
  $number2 = 10;
  echo $number1 / $number2;
?>
<h3><?php echo " % Modulus" ?> </h3>
            <pre>
              $number1 = 205;
              $number2 = 10;
              echo $number1 % $number2;
          </pre>
<?php 
  $number1 = 205;
  $number2 = 10;
  echo $number1  %  $number2;
?>
<h3><?php echo " * * Exponentiation" ?> </h3>
            <pre>
              $number1 = 3;
              $number2 = 3 ;
              echo $number1 % $number2;
          </pre>
<?php 
  $number1 = 3;
  $number2 = 3 ;
  echo $number1 ** $number2;
?>

<h3><?php echo " + - * / exercise" ?> </h3>
            <pre>
              echo 20 - 2 + 2 * 25 + (15-3) * 2 / 5 ;5 ;
              (), or, /, *, +, - 
            </pre>
<?php 
  echo 20 - 2 + 2 * 25 + (15-3) * 2 / 5 ;5 ;
?>

</body>
</html>







