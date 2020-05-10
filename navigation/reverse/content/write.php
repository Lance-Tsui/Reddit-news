<?php
    
    
    $lower_id = @$_POST['lower_id'];
    $text = @$_POST['text'];
    $text = trim($text);
    $id = substr($lower_id, 0, 4);
    $item = substr($lower_id, 4);
    
    $servername = "127.0.0.1";
    $databasename = "news_content";
    $username = "root";
    $password = "";     //input your password here

    $text = $_POST['text'];
    $text = trim($text);
    if($text == ''){
        echo "<script>window.location.href = 'index.php?" . $id  . "';</script>";
        exit();
    }else{
        $conn = new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->query("SET NAMES utf8"); 
        $sql = "INSERT INTO comment (id, item, content)
                VALUES ('" . $id . "', '" . $item . "', '"
                . $text . "')";
                 
        $conn->exec($sql);
        
        
        echo "<script>window.location.href = 'index.php?" . $id . "';</script>";
        exit();
    }
?>


