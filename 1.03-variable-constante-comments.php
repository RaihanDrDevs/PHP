<h1><?php echo "Learn PHP " ?> </h1> <hr>
<h3>1.03-variable-constante-comments.php</h3>

<hr>
<h4><i> <u> কোড </u></i></h4> 
<pre>
$task = "read";
echo $task;
$task = "wirte";
echo $task;


// define constant Value
            define("PI", 3.14159);

// String with constant Not use
            echo "Value of PI = {PI}".PI;
// Only constant echo
            echo constant ('PI') ;
// String with constant no - 1
            $constant = 'constant';
// String with constant no - 2
            echo " Value of PI = {$constant ('PI')}";
// String with constant no - 3
            echo "Valuje of PI = " .PI;

// Single Line Comment

/* 
    Multiline Comment
    Multiline Comment
    Multiline Comment
*/
</pre>




<hr>

<h3>1.03-variable-constante-comments.php</h3>
<h4><i> <u> প্রাকটিস </u></i></h4> 
<?php 
$task = "read";
echo $task; echo "<br/>";
$task = "wirte"; echo "<br/>";
echo $task; echo "<br/>";

// define constant Value
define("PI", 3.14159);

// String with constant Not use
echo "Value of PI = {PI}".PI; echo "<br/>" ;
// Only constant echo
echo constant ('PI') ; echo "<br/>" ;
// String with constant no - 1
$constant = 'constant'; echo "<br/>" ;
// String with constant no - 2
echo " Value of PI = {$constant ('PI')}";  echo "<br/>" ;
// String with constant no - 3
echo "Valuje of PI = " .PI;   echo "<br/>" ;

// Single Line Comment
/* 
    Multiline Comment
    Multiline Comment
    Multiline Comment
*/
?>
