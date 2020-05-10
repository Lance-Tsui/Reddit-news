<html lang="zh-Hans-CN">
<head>
	<meta charset="UTF-8">
	<title>翻车评论</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/icon-winnie.png">
    <meta HTTP-EQUIV="pragma" CONTENT="no-cache">      
    <meta HTTP-EQUIV="Cache-Control" CONTENT="no-store, must-revalidate">      
    <meta HTTP-EQUIV="expires" CONTENT="Wed, 26 Feb 1997 08:21:57 GMT">      
    <meta HTTP-EQUIV="expires" CONTENT="0">

</head>
<body>
<header id="header">
	
</header>
<div id="adver">
	
	<br></br>
</div>

</body>
</html>

<?php

    
    $lower_id = @$_POST['lower_id'];

    $id = substr($lower_id, 0, 4);
    $item = substr($lower_id, 4);
    
    $servername = "127.0.0.1";
    $databasename = "news_content";
    $username = "root";
    $password = "";	//input your password here
    
    
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare('SELECT * FROM `comment` WHERE `id` = :id and `item` = :item');
        $sql->execute(array(':id' => $id,  ':item' => $item));
        $numcount=$sql->rowCount();
        if($numcount == 0){
            echo "<center><h1><font color = 'green'>没有评论哦</font></h1></center>";
            exit();
            
        }else{
            $conn = new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->query("SET NAMES utf8"); 
            $sql = $conn->prepare('SELECT * FROM `picture` WHERE `id` = :id and `item` = :item');
            $sql->execute(array(':id' => $id, ':item'=>$item));
            echo "<div id='tour'>";
            echo "<figure>";
            $result=$sql->fetch(PDO::FETCH_ASSOC);
            echo "<img src = " . $result['link'] . ">";
            
            $sql = $conn->prepare('SELECT * FROM `comment` WHERE `id` = :id and `item` = :item');
            $sql->execute(array(':id'=>$id, ':item'=>$item));
            echo "<figcaption>";
            echo "<div>";
            echo "<label>以下为全部评论:</label><br>";
            while($result=$sql->fetch(PDO::FETCH_ASSOC)){
                echo "<label>" . $result['content'] . "</label><br>";
            }
            echo "</div>";
            echo "</figcaption>";
            echo "</figure>";
            echo "</div>";
            exit();
        }
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }


?>
