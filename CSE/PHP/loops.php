<html>
<h1>Conditional Statements, Arrays and Loops</h1>
<?php
//  $i=1;
//  $j=2;
//    if($i==10){
//        echo "Hello";
//    }
//    elseif($j==2){
//        echo "Hi";
//    }
//    else{
//        echo "Bye";
//    }
    
    $numbers = array(1,2,3,4,5);
    for($i=0; $i<count($numbers);$i++){
        echo $numbers[$i]."  ";
    }
    
    echo "<br>____________________________<br>";
    $marks = array("Eng"=>90, "Science"=>95);
    $marks['Maths'] = 86;
    
    foreach($marks as $key=>$value){
        echo $key."=>".$value."<br>";
    }
?>
</html>