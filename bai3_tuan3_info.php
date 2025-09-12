<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_REQUEST["name"])){
            $name=$_REQUEST["name"];
        }
        echo "Chào mừng bạn ". $name ."!<br>";
    }


    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_REQUEST["age"])){
            $age=$_REQUEST["age"];
            $age-=2000;
        }
        echo "Bạn có tuổi là ". $age .".";
    }

?>
