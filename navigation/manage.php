<?php
    session_start();
?>

<html>
<head>
<meta charset="utf-8">
<title>Manage</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link rel = "stylesheet" href = "main.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

<style type="text/css">
    table.table input{ /*可输入区域样式*/
width:100%;
height: 100%;
border:none; /* 输入框不要边框 */
font-family:Arial;
}
</style>
</head>
    
<body>
<div id="container">
<header>
<button class = "button" onclick="window.location.href = 'manage.php'">News Management</button>
<button class = "button" onclick="">Index Management</button>
<button class = "button" onclick="window.location.href = 'update.php'">News Update</button>
</header>
<section class="main">
<br>
<center><h3>News Management</h3></center>
<form method = 'POST' action = 'operate.php'>
<table class="table" border="1" align="center">
    <thead>
    <tr>
        <th>Number</th>
        <th>ID</th>
        <th>Item</th>
        <th>Type</th>
        <th>Note</th>
        <th>Link</th>
    </tr>
    </thead>
    <tbody>
    <tr id="clo">
        <td class="td">1</td>
        <td> <input name = "id[]" maxlength = "4" placeholder="id" /></td>
        <td> <input name = "item[]" maxlength = "1" placeholder="item" /></td>
        <td> <input name = "type[]" maxlength = "10" placeholder="type" /></td>
        <td> <input name = "note[]" placeholder="note" /></td>
        <td> <input name = "link[]" placeholder="link" /></td>
        
    </tr>
    <tr>
        <td class="td">2</td>
        <td> <input name = "id[]" maxlength = "4" placeholder="id" /></td>
        <td> <input name = "item[]" maxlength = "1" placeholder="item" /></td>
        <td> <input name = "type[]" maxlength = "10" placeholder="type" /></td>
        <td> <input name = "note[]" placeholder="note" /></td>
        <td> <input name = "link[]" placeholder="link" /></td>
        
    </tr> 
    </tbody>
</table>
<button type = "button" class = "button" onclick="fun()">Add Row</button>
<button type = "button" class = "button" onclick="del()">Delete Row</button>
<input  type = "submit" class = "button" name = "submit" type = "submit" value = "manage">
</form>
    
</section>
    <footer></footer>
</div>
    
<script type="text/javascript">  
	//前面的序号1,2,3......                 
    var i = 1;
    var length = 2;
    
    $(".td").each(function(){
        $(this).html(i++);
    })
	//添加一行
    
    function fun(){
        
        
        if(length < 6){
            var $td = $("#clo").clone();       //增加一行,克隆第一个对象

            $(".table").append($td);
            var i = 1;
            $(".td").each(function(){       //增加一行后重新更新序号1,2,3......
            $(this).html(i++);
            })
            $("table tr:last").find(":input").val('');   //将尾行元素克隆来的保存的值清空
            length = length + 1;
        }
    }
	//删除一行
    function del(){
        $("table tr:not(:first):not(:first):last").remove();//移除最后一行,并且保留前两行
        if(length >= 2){
            length = length - 1;
        }
    }
</script>
 </body> 
</html>

<?php
    
    $userinfo = @$_POST['username'];
    $passinfo = @$_POST['password'];
    
    $servername = "127.0.0.1";      //change the ip address to the server's
    $databasename = "news_content";
    $username = "root";
    $password = "";
    if(!isset($_SESSION['userinfo'])){
        try{
            $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            $conn->query("SET NAMES utf8"); 
            $sql = $conn->prepare('SELECT * FROM `admin` WHERE `username` = :userinfo
                                        and `password` = :passinfo');
            $sql->execute(array(':userinfo' => $userinfo, ':passinfo' => $passinfo));
            $numcount=$sql->rowCount();

            if($numcount == 0){
                echo "<script>confirm('Password not match!')</script>";
                echo "<script>window.location.href = 'index.php'</script>";
                exit();
            }else{
                $_SESSION['userinfo'] = $userinfo;
            }
        }
        catch(PDOException $e) {     
                echo $sql . "<br>" . $e->getMessage();
        }
    }
?>

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