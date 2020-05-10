<!DOCTYPE html>
<html lang="zh-Hans-CN">
<head>
	<meta charset="UTF-8">
	<title>翻车新闻</title>
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
	<div class="center">
		<h1 class="logo" ><a href = "#">请注意，倒车！</h1>
	
	<nav class="link">
			<ul>
				<li class="active"><a href="../index.html">返回主页</a></li>
				
				
			</ul>
		</nav>
	</div>
</header>
<div id="adver">
	
	<br></br>
</div>

</body>
</html>


<?php
    
    
    $url = $_SERVER['REQUEST_URI'];
    $index = strpos($url, '?');
    $value = substr($url, $index + 1);
    $page_title = '';

    $servername = "127.0.0.1";
    $databasename = "news_content";
    $username = "root";
    $password = "";	//input your password here
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->query("SET NAMES utf8"); 
        $sql = $conn->prepare('SELECT * FROM `picture` WHERE `id` = :value');
        $sql->execute(array(':value' => $value));
        $numcount=$sql->rowCount();
        if($numcount == 0){
            $page_title = "Vol" . $value;
            echo "<script>document.title = \"".$page_title."\" </script>";
            echo "<center><h1><font color = 'green'>敬请期待</font></h1></center>";
            
            exit();
        }else{
            $page_title = "Vol" . $value;
            echo "<script>document.title = \"".$page_title."\" </script>";
            echo "<div id='tour'>";
	
	        echo "<section class='center'>";
		    echo "<h2>翻车精选</h2>";
		
	        echo "</section>";
            while($result=$sql->fetch(PDO::FETCH_ASSOC)){
                $lower_id = $result['id'] . $result['item'];
                
                echo "<figure>";
                echo "<img src = " . $result['link'] . ">";
                echo "<figcaption>";
                echo "<label>" . "故事简介: " . $result['note'] . "</label>";
                echo "<br>";
                echo "<br>";
                
                echo "<form action = 'read.php' method = 'POST'>";
                echo "<div>";
                echo "<input type = 'hidden' name = 'lower_id' value = $lower_id >";
                echo "<input type = 'submit' value = '查看评论' class = 'find-button'>";
                echo "</div>";
                echo "</form>";
                echo "<br>";
                echo "<br>";
                echo "<div>";
				echo "<form action = 'write.php' method = 'POST'>";
				echo "<input type = 'hidden' name = 'lower_id' value = $lower_id />";
				echo "<input type = 'text' name = 'text' maxlength = '30' class = 'textbox-style'/>";
				echo "<input type = 'submit' name = 'submit' value = '微博发布' class = 'send-button'/>";
				echo "</form>";
			    echo "</div>";
                echo "<div class='type'>" . $result['type'] . "</div>";
                echo "</figcaption>";
                echo "</figure>";
            }
            echo "</div>";
        }
        
    }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    
    
    
    
?>

<!--禁止回车键提交表单-->
<script>
    document.onkeydown = function(event) {
        var target, code, tag;
        if (!event) {
            event = window.event; //针对ie浏览器
            target = event.srcElement;
            code = event.keyCode;
            if (code == 13) {
                tag = target.tagName;
                if (tag == "TEXTAREA") { return true; }
                else { return false; }
            }
        }
        else {
            target = event.target; //针对遵循w3c标准的浏览器，如Firefox
            code = event.keyCode;
            if (code == 13) {
                tag = target.tagName;
                if (tag == "INPUT") { return false; }
                else { return true; }
            }
        }
    };
</script>
