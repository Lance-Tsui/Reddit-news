<html>
<head>
<title>Login</title>    
</head>
<body>
    <br>
    <form method = 'POST' action = 'manage.php'>
        
        <table width = "600" border = "0">

        <tr>
        <td>Username: </td>
        <td><input type = "text" name = "username" size = "20" maxlength = "15"></td>
        
        <td>Password: </td>
        <td><input type = "password" name = "password" size = "20" maxlength = "15"></td>
        
        <td><input name = "submit" type = "submit" value = "Login"></td>
        </tr>    
        </table>
    </form>    
    
</body>
</html>

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