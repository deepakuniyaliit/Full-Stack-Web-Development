<html>
<h1>Variables</h1>
<?php
    $name = "PHP";
    $x = 10;
    $y = 10.5;
    echo "Programming Language - $name is very Easy<br>";
    echo "Both the values are $x and $y<br>";  
    echo 'Both the values are $x and $y'."<br>";
?>

<?php
    //Local, Global and Static
    #Local, Global and Static
    /*
    Multiline Comment
    */  
    $var1 = 10; //Global
    $var2 = 20;
    function scopeFunction(){
        #global $var1, $var2;
        #$var2 = $var1 + $var2;
        $GLOBALS['var2'] = $GLOBALS['var1'] + $GLOBALS['var2'];
        echo "Var2 Inside- ".$GLOBALS['var2']."<br>";
        $var3 = 100; //Local
        echo "Var3 - ".$var3."<br>";
    }
    
    scopeFunction();
    
    echo "Var1 - ".$var1."<br>";
    echo "Var2 Outside- ".$var2."<br>";
?>
    
<?php
    echo "__________________________________________<br>";
function staticCheck(){
    static $st = 0;
    echo $st."<br>";
    $st++;
}   
    staticCheck();
    staticCheck();
    staticCheck();
?>
</html>