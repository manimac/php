<?php
 require('header.php'); 
    echo "<h1><b><u>haisd</u></b></h1>";
    // echo "<script>alert('test')</script>";
    $name = 'Dinesh';
    $val = 10;
    echo $name ."<br>";
    echo $val."<br>";
    $avalue = 20;
    $bvalue = 20;
    if($avalue < $bvalue){
        echo "B is greater than A";
    }
    elseif($avalue > $bvalue){
        echo "A is greater than B";
    }
    else{
        echo "Both are equal";
    }

    if(isset($_POST['save'])){
        $avalue = $_POST['a'];
        $bvalue = $_POST['b'];
        if(!$avalue){
            echo "<script>alert('Please enter a value')</script>";
        }
        else if(!$bvalue){
            echo "<script>alert('Please enter b value')</script>";
        }
        else{
            if($avalue < $bvalue){
                echo "B is greater than A";
            }
            elseif($avalue > $bvalue){
                echo "A is greater than B";
            }
            else{
                echo "Both are equal";
            }
        }        
    }

    $test = array('dinesh','karthick','aravind','karthick');

    echo "<br><b>".$test[2]."</b><br>";
    echo count($test);

    for($i=0;$i<count($test);$i++){
        if($test[$i]=='karthick'){
            echo "<br>" .$test[$i];
        }
    }
?>

<html>
    <head>
    </head>
    <body>
    
    <form method="post">
        <input type="text" name="a">
        <input type="text" name="b">
        <input type="submit" name="save" value="Save">
    </form>
    
    
    </body>
</html>