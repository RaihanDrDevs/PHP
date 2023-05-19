<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP: 1.07-Operators03 Comparison </title>
    
    
</head>
<body>
    <main>
        <h2> 1.07-Operators03Comparison </h2>
            <hr>
            <!--  -->
            <div>          
            <h4>Code  ( <=>) Spaceship </h4>
                <pre>
                    $a1 = 20;
                    $a2 = 21;
                    $a3 = 20;

                    $b1 = 20;
                    $b2 = 20;
                    $b3 = 21;
                    
                    var_dump($a1 <=> $b1);
                    var_dump($a2 <=> $b2); 
                    var_dump($a3 <=> $b3);
                        
                </pre>
                <!--  -->
            <h4> result ( <=> ) Spaceship  </h4> <br/>
                <?php
                $a1 = 20;
                $a2 = 21;
                $a3 = 20;

                $b1 = 20;
                $b2 = 20;
                $b3 = 21;
                
                var_dump($a1 <=> $b1); echo " // a1 এর ভ্যালু  b1 এর সমান তাই 0 <br>";
                var_dump($a2 <=> $b2); echo " // a2 এর ভ্যালু  b2 এর থেকে বড় তাই 1 সত্য<br>";
                var_dump($a3 <=> $b3); echo " // a3 এর ভ্যালু  b3 এর থেকে ছোট তাই -1 <br>";
            ?>    
        </div>
        <!--  --><br/>
            <div>          
            <h4>Code  ( <= ) Less than or equal to </h4>
                <pre>
                    $a1 = 20;
                    $a2 = 21;
                    $a3 = 20;

                    $b1 = 20;
                    $b2 = 20;
                    $b3 = 21;
                    
                    var_dump($a1 <= $b1);
                    var_dump($a2 <= $b2); 
                    var_dump($a3 <= $b3);
                        
                </pre>
                <!--  -->
            <h4> result ( >= )	Greater than or equal to </h4> <br/>
                <?php
                $a1 = 20;
                $a2 = 20;
                $a3 = 21;

                $b1 = 20;
                $b2 = 21;
                $b3 = 20;
                
                var_dump($a1 <= $b1); echo " // a1 এর ভ্যালু  b1 এর সমান তাই সত্য <br>";
                var_dump($a2 <= $b2); echo " // a2 এর ভ্যালু  b2 এর থেকে ছোট তাই সত্য<br>";
                var_dump($a3 <= $b3); echo " // a3 এর ভ্যালু  b3 এর থেকে বড় তাই মিথ্যা <br>";
            ?>    
        </div>
        <!--  --><br/>
            <div>          
            <h4>Code  ( >= )	Greater than or equal to </h4>
                <pre>
                    $a1 = 20;
                    $a2 = 21;
                    $a3 = 20;

                    $b1 = 20;
                    $b2 = 20;
                    $b3 = 21;
                    
                    var_dump($a1 >= $b1);
                    var_dump($a2 >= $b2); 
                    var_dump($a3 >= $b3);  
                </pre>
                <!--  -->
            <h4> result ( >= )	Greater than or equal to </h4> <br/>
                <?php
                $a1 = 20;
                $a2 = 21;
                $a3 = 20;

                $b1 = 20;
                $b2 = 20;
                $b3 = 21;
                
                var_dump($a1 >= $b1); echo " // a1 এর ভ্যালু  b1 এর সমান তাই সত্য <br>";
                var_dump($a2 >= $b2); echo " // a2 এর ভ্যালু  b2 এর থেকে বড় তাই সত্য<br>";
                var_dump($a3 >= $b3); echo " // a3 এর ভ্যালু  b3 এর থেকে ছোট তাই মিথ্যা <br>";
            ?>    
        </div>
        <!--  --><br/>
        <div>          
            <h4>Code  ( < ) Less  than </h4>
                <pre>
                    $a1 = 20;
                    $a2 = 21;
                    $a3 = 20;

                    $b1 = 20;
                    $b2 = 20;
                    $b3 = 21;
                    
                    var_dump($a1 < $b1);
                    var_dump($a2 < $b2); 
                    var_dump($a3 < $b3);
                        
                </pre>
                <!--  -->
            <h4> result ( < ) Less  than  </h4> <br/>
                <?php
                $a1 = 20;
                $a2 = 21;
                $a3 = 20;

                $b1 = 20;
                $b2 = 20;
                $b3 = 21;
                
                var_dump($a1 < $b1); echo "// a1 এর ভ্যালু  b1 এর সমান কিন্তু ছোট না তাই মিথ্যা <br>";
                var_dump($a2 < $b2); echo "// a2 এর ভ্যালু  b2 এর থেকে বড় তাই মিথ্যা <br>";
                var_dump($a3 < $b3); echo "// a3 এর ভ্যালু  b3 এর থেকে ছোট তাই সত্য <br>";
            ?>    
        </div>
        <!--  --><br/>
        <div>          
            <h4>Code  ( > ) Greater than </h4>
                <pre>
                    $a1 = 20;
                    $a2 = 20;
                    $a3 = 21;

                    $b1 = 20;
                    $b2 = 21;
                    $b3 = 20;
                    
                    var_dump($a1 > $b1); 
                    var_dump($a2 > $b2);
                    var_dump($a3 > $b3);
                    
                </pre>
            <!--  -->
            <h4> result ( > ) Greater than </h4> <br/>
            <?php
                $a1 = 20;
                $a2 = 20;
                $a3 = 21;

                $b1 = 20;
                $b2 = 21;
                $b3 = 20;
                
                var_dump($a1 > $b1); echo "// a1 এর ভ্যালু  b1 এর সমান কিন্তু বড় না তাই মিথ্যা <br>";
                var_dump($a2 > $b2); echo "// a2 এর ভ্যালু  b2 এর থেকে ছোট তাই মিথ্যা <br>";
                var_dump($a3 > $b3); echo "// a3 এর ভ্যালু  b3 এর থেকে বড় তাই সত্য <br>";
            ?>    
        </div>
        <!--  --><br/> 
        <div>          
            <h4>Code  (!==) Not identical </h4>
                <pre>
                    $a = 20;
                    $b1 = 20;
                    $b2 = "20";
                    $b3 = "30";
                    var_dump($a != $b1);
                    var_dump($a != $b2);
                    var_dump($a != $b3); 
                </pre>
                <!--  -->
            <h4> result (!==) Not identical </h4> <br/>
            <?php
                $a = 20;
                $b1 = 20;
                $b2 = "20";
                $b3 = "30";
                var_dump($a != $b1); echo "// ডাটা টাইপ  ও ভ্যালু একই তাই মিথ্যা  <br>";
                var_dump($a != $b2); echo "// ডাটা টাইপ ভিন্ন কিন্তু ভ্যালু একই তাই মিথ্যা  <br>";
                var_dump($a != $b3); echo "// ডাটা টাইপ  ও ভ্যালু  ভিন্ন তাই সত্য<br>";
            ?> 
        </div>
        <!--  --><br/>   
        <div>
            <h4>Code  ( != / <> ) 	Not equal </h4>
            <pre>
                $x = 100;  
                $y1 = "100"; 
                $y2 = 100; 
                $y3 = 200;
                var_dump($x != $y1); echo "
                var_dump($x != $y2); echo "
                var_dump($x != $y3); echo "
            </pre> 
            <!--  -->
            <h4> result ( != / <> ) 	Not equal </h4> <br/>
            <?php
                $x = 100;  
                $y1 = "100"; 
                $y2 = 100; 
                $y3 = "200";
                var_dump($x != $y1); echo "// ১। ডাটা টাইপ  ভিন্ত কিন্তু ভ্যালু একই হলে মিথ্য হবে <br/> ";
                var_dump($x != $y2); echo "// ২। ডাটা টাইপ ও ভ্যালু একই হলে মিথ্য হবে <br/> ";
                var_dump($x != $y3); echo "// ৩। ডাটা টাইপ ও ভ্যালু ভিন্ন হলে  সত্য";
            ?> 
        </div>
        <!--  --><br/><br/>
        <div>
            <h4>Code  ( = = = )</h4>
            <pre>
                $x = 100;  
                $y1 = "100";
                $y2 = 100;
                var_dump($x === $y1); 
                var_dump($x === $y2); 
            </pre> 
            <!--  -->
            <h4> result  </h4> <br/>
            <?php
                $x = 100;  
                $y1 = "100"; 
                $y2 = 100;
                var_dump($x === $y1); echo " // ভ্যারিয়েবল এর ডাটা টাইপ ভিন্ন কিন্তু ভ্যালূ একই তবুও মিথ্যা <br/>";
                var_dump($x === $y2); echo " // ভ্যারিয়েবল এর ডাটা টাইপ মিল হলে রেজাল্ট সত্য  <br/>";
            ?> 
        
        </div>
        <!--  --><br/><br/>
        <div>
            <h4>Code ( = = )</h4>
                <pre>
                    $x = 100;  
                    $y = "100";
                    var_dump($x == $y);
                    var_dump($x == $y2);
                </pre>
                
                <!--  -->
            <h4> result ( == ) </h4> <br/>
            <?php
                $x = 100;  
                $y = 100;
                $y2 = "100";
                // $y = ;
                var_dump($x == $y); echo "// x and y ভ্যালু ও ডাটা টাইপ একই তাই সত্য <br/>";
                var_dump($x == $y2); echo "// x and y ডাটা টাইপ ভিন্ন কিন্তু ভ্যালু একই তাই সত্য";
            ?> 
            <!--  --><br/><br/>
        </div>
    </main>
</body>
</html>