<?php
    session_start();
?>

<html>
<head>
<title>Manage</title>
</head>
<body>
    
    <form method = 'POST' action = 'operate.php'>
        
        
        <?php for($i = 0; $i < 5; $i++){
        echo "<table width = '700' border = '0'>";

        echo "<tr>";
        echo "<td>ID: </td>";
        echo "<td><input type = 'text' name = 'id[]' size = '5' maxlength = '4'></td>";
        
        echo "<td>Item: </td>";
        echo "<td><input type = 'text' name = 'item[]' size = '5' maxlength = '1'></td>";
        echo "<td>Type:</td>";
        echo "<td><input type = 'text' name = 'type[]' size = '10' maxlength = '6' ></td>";
        echo "<td>Note:</td>";
        echo "<td><input type = 'text' name = 'note[]' size = '20'></td>";
        echo "<td>Link:</td>";
        echo "<td><input type = 'text' name = 'link[]' size = '30'></td>";
        
        echo "</tr>";
        echo "</table>";
        echo "<hr>";
        }
        ?>
        
        
        <table width = "775" border = "0">
        <tr>
        <td>ID: </td>
        <td><input type = "text" name = "id[]" size = "5" maxlength = "4"></td>
        
        <td>Item: </td>
        <td><input type = "text" name = "item[]" size = "5" maxlength = "1"></td>
        <td>Type:</td>
        <td><input type = "text" name = "type[]" size = "10" maxlength = "6" ></td>
        <td>Note:</td>
        <td><input type = "text" name = "note[]" size = "20"></td>
        <td>Link:</td>
        <td><input type = "text" name = "link[]" size = "30"></td>
        <td><input name = "submit" type = "submit" value = "insert"></td>
        </tr>
        
        </table>
        
    </form>
    <hr>
    <form method = 'POST' action = 'operate.php'>
        <table width = "750" border = "0">
        <tr>
        <td>ID: </td>
        <td><input type = "text" name = "id[]" size = "5" maxlength = "4"></td>
        
        <td>Item: </td>
        <td><input type = "text" name = "item[]" size = "5" maxlength = "1"></td>
        <td>Type:</td>
        <td><input type = "text" name = "type[]" size = "10" maxlength = "6" ></td>
        <td>Note:</td>
        <td><input type = "text" name = "note[]" size = "20"></td>
        <td>Link:</td>
        <td><input type = "text" name = "link[]" size = "30"></td>
        <td><input name = "submit" type = "submit" value = "update"></td>
        </tr>
        
        </table>
    </form>
    

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