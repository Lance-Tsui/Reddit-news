<?php
    function is_valid($value){
        $value = trim($value);
        return !empty($value);
    }
?>

<?php
    $length = count($_POST['id']);
    $servername = "127.0.0.1";
    $databasename = "news_content";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query("SET NAMES utf8");
    if($_POST['submit'] == 'manage'){
        for($i = 0; $i < $length; $i++){
            if(is_valid($_POST['id'][$i]) and is_valid($_POST['item'][$i]) and
               is_valid($_POST['type'][$i]) and is_valid($_POST['link'][$i])){ 
                $sql = "INSERT INTO picture (id, item, type, note, link)
                        VALUES ('" . $_POST['id'][$i] . "', '" . $_POST['item'][$i] . "', '" . 
                        $_POST['type'][$i] . "', '" . $_POST['note'][$i] . "', '"  . $_POST['link'][$i] . "')";

                $conn->exec($sql);
            }
        }
        echo "<script>confirm('add successful!')</script>";
    }else if($_POST['submit'] = 'update'){
        
        $sql = $conn->prepare("SELECT * FROM `picture` WHERE `id` = :id and `item` = :item");
        $sql->execute(array(':id' => $_POST['id'][0], ':item' => $_POST['item'][0]));
        $numcount=$sql->rowCount();
        if($numcount == 0){
            echo "<script>confirm('no sql matches')</script>";
        }else{
            $sql = "UPDATE `picture` SET `type` = '" . $_POST['type'][0] . "', `note` = '" . $_POST['note'][0] . 
                    "', `link` = '" . $_POST['link'][0] . "' WHERE `id` = '" . $_POST['id'][0] . 
                    "' AND `item` = '" . $_POST['item'][0] . "';";
            
            $conn->exec($sql);
            echo "<script>confirm('update successful')</script>";
        }
    }
    
    echo "<script>history.back(-1);</script>";
    exit();
    
?>