<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP </title>
</head>

<body>
    <main>
      <h2>1.07-PHPOperators02Assignment</h2>
      <hr>
    <h4>Code = </h4>
    <pre>
      $x = 10;
      $y = 10;
      $z = 10;
      $x = $y =  $z = 10; // One line  variable = value ; 
      echo $x;
      echo $y;
      echo $z;
    </pre>
    <h4> result = </h4> <br/>
    <?php
      $x = 10;
      $y = 10;
      $z = 10;
      $x = $y =  $z = 10; // One line  variable = value ; 
      echo $x; echo "<br/>";
      echo $y; echo "<br/>";
      echo $z; echo "<br/>";
    ?> 
    <!--  -->
    <br/>
      <h4>Code (+=) Addition </h4>
      <pre>
        $x = 20;  
        $x += 100; // $x = 20 +100
        echo $x;
       </pre>
       <h4> (+=) Addition </h4> <br/>
    <?php
      $x = 20;  
      $x += 100; // $x = 20 +100
      echo $x;
    ?> 
    <!--  -->
    <br/> <br/>
      <h4>Code (- =) Subtraction </h4>
      <pre>
        $x = 100;  
        $x -= 20; // $x = 100 - 20
        echo $x;
       </pre>
       <h4> result  (- =) Subtraction </h4> <br/>
    <?php
       $x = 100;  
       $x -= 20; // $x = 100 - 20
       echo $x;
    ?> 
    <!--  -->
    <br/> <br/>
      <h4>Code (* =) Multiplication </h4>
      <pre>
        $x = 100;  
        $x *= 20; // $x = 100 * 20
        echo $x;
       </pre>
       <h4> result  (*=) Multiplication </h4> <br/>
    <?php
       $x = 100;  
       $x *= 20; // $x = 100 - 20
       echo $x;
    ?> 
    <!--  -->
    <br/> <br/>
      <h4>Code (/ =) Division </h4>
      <pre>
        $x = 100;  
        $x /= 20; // $x = 100 / 20
        echo $x;
       </pre>
       <h4> result  (/ =) Division</h4> <br/>
    <?php
       $x = 100;  
       $x /= 20; // $x = 100 / 20
       echo $x;
    ?> 
    <!--  -->
    <br/> <br/>
      <h4>Code (% =) Modulus </h4>
      <pre>
        $x = 101;  
        $x %= 20; // $x = 100 / 20
        echo $x;
       </pre>
       <h4> result  (% =) Modulus </h4> <br/>
    <?php
       $x = 101;  
       $x %= 20; // $x = 100 % 20
       echo $x;
    ?> 
    </main>

</body>
</html>