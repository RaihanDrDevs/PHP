<!-- 1.04-Outputprint.php -->
<h2><?php echo "Learn PHP " ?> </h2> <hr>
<h3>1.04-Outputprint.php</h3>
<hr>
    <h4><i> <u> কোড </u></i></h4> 
<pre>

    $age = 35;
    var_dump($age);

    $name = "Raihan Ali";
    var_dump($name);

    $decimal =3.2554;
    var_dump($decimal);

    $name1 = "Raihan";
    $name2 = "Ali";
    var_dump($name1 ,$name2);

    $result = true;
    var_dump($result);
    
    echo "==============";

    // single & double 
    $live ="Earth";
    echo 'we\'re living on '.$live;
    echo "we're living on .{$live}";
   
    // uppercase php function. 
    $ulive = strtoupper($live);
    echo "we're living on .{$ulive}";
    // Print F
    printf("We're Liveing on %s", $live);

    // variable replace. %s %s 
    $fplace= " Dinajpur ";
    $lplace = " Rangpur ";
    printf("His address is %s %s", $fplace, $lplace);
    
    //  variable replace. %s %s & String 
    printf ("His %s is %s %s", "address",  $fplace, $lplace);
    
    // 
    echo "
    ------- <br/>
    My Place is <br/>
    {$fplace}, {$lplace} <br>
    Where your place ? 
    "
    echo "Output echo & print ";
    // Output echo & print 
    $location1 = " Rangpur ";
    $location2 = " Dinajpur ";

    echo " Division is ".$location1." and District is ".$location2;
    echo " Division is {location1} and District is {$location2}";
    printf(" Division is %s and District is %s",$location1,$location2);
    printf(" Division is %s and District is %s",strtoupper($location1), strrev($location2));
    
    echo "Learn Echo & Pring wiht ver_dump";
</pre>
<h2><?php echo "Learn PHP " ?> </h2> <hr>
<h3>1.04-Outputprint.php</h3>
<hr>
<h4><i> <u> প্রাকটিস </u></i></h4> 
<h5>var_dump দিয়ে ভ্যারিয়েবলের ভ্যালুর টাইপ গুলো দেখায়</h5>
<?php
    $age = 35;
    var_dump($age); echo "<br/>";
    $name = "Raihan Ali";
    var_dump($name); echo "<br/>";
    $decimal =3.2554;
    var_dump($decimal); echo "<br/>";
    $name1 = "Raihan";
    $name2 = "Ali";
    var_dump($name1 ,$name2); echo "<br/>";
    $result = true;
    var_dump($result);  echo "<br/>";
    echo "=============="; echo "<br/>";
    // single & double 
    $live ="Earth";
    echo 'we\'re living on '.$live;  echo "<br/>";
    echo "we're living on .{$live}";  echo "<br/>";
    // uppercase php function. 
    $ulive = strtoupper($live);
    echo "we're living on .{$ulive}";  echo "<br/>";
    // Print F
    printf("We're Liveing on %s", $live); echo "<br/>";
    // variable replace. %s %s 
    $fplace= " Dinajpur ";
    $lplace = " Rangpur ";
    printf("His address is %s %s", $fplace, $lplace); echo "<br/>";
    //  variable replace. %s %s & String 
    printf ("His %s is %s %s", "address",  $fplace, $lplace); echo "<br/>";
    // ------
    echo "
    My Place is <br/>
    {$fplace}, {$lplace} <br>
    Where your place ?" ;
    echo "<br/>------------<br/>" ;
    echo "Output echo & print " ; echo "<br/>";
    // Output echo & print 
    $location1 = " Rangpur ";
    $location2 = " Dinajpur ";
    echo " Division is ".$location1." and District is ".$location2; echo "<br/>" ;
    echo " Division is {location1} and District is {$location2}"; echo "<br/>" ;
    printf(" Division is %s and District is %s",$location1,$location2);  echo "<br/>" ;
    printf(" Division is %s and District is %s",strtoupper($location1), strrev($location2));  echo "<br/>" ;
    echo "<br/>------------<br/>" ;
    echo "Learn Echo & print with ver_dump ()";
    
?>
<hr>
  <pre>
  PHP Data Type
    1. String
    2. Integer
    3. Float (floating point numbers - also called double)
    4. Boolean
    5. Array
    6. Object
    7. NULL
    8. Resource

  </pre>