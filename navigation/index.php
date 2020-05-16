<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="遨游星瀚丨个人导航  简单实用的个人导航网页，收录几个够用的网站；可以实现多引擎搜索，如谷歌，品葱">
    <meta name="keywords" content="导航,简单实用的导航,多搜索引擎,谷歌,品葱,膜乎">
    <meta name="generator" content="萨格尔王 丨 1989.06.04">
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
    <link rel="shortcut icon" href="img/icon-winnie.png">
    <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/m_dh.style.css">
    <title>遨游星瀚丨个人导航</title>
    <script src="js/jquery.min.js"></script>
</head>
    
<body id="killie" >
<!--使用了Semantic-UI进行美化-->



<div class="ui main container">
    <img class="centerlog" src="img/universe.png">
    <div class="ui search">
        <div class="ui input">
            <input id="search" name="wd" class="prompt" placeholder="" type="text" autofocus="autofocus">
        </div>
</div>
    <div class="ui sbuttons">
        <button class="ui button" id="google" >
            谷歌
        </button>
       
		<button class="ui button" id="duckduckgo" >
			DuckDuckGo
		</button>
        <button class="ui button" id="github">
            GitHub
        </button>
        <button class="ui button" id="startpage">
            StartPage
        </button>
        <button class="ui button" id="yandex">
            Yandex
        </button>
        <button class="ui button" id="amazon" >
            亚马逊
        </button>
        <button class="ui button" id="youtube" >
            YouTube
        </button>
        <button class="ui button" id="pornhub">
            Pornhub
        </button>
        <button class="ui button" id="pincong">
           品葱
        </button>
        <button class="ui button" id="mohu">
            膜乎
        </button>
        <button class="ui button" id="2049bbs" >
            2049bbs
        </button>
    </div>
    <div class="ui  two column grid stables ">
    <div class="column ">
        <table class="ui definition small table ">
            <?php
                $servername = "127.0.0.1";      //change the ip address to the server's
                $databasename = "news_content";
                $username = "root";
                $password = "";
                try{
                    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
                    $conn->query("SET NAMES utf8"); 
                    $sql = $conn->prepare('SELECT * FROM `navigation` WHERE `cat_type` = 1 AND `cat_weight` = 1');
                    $sql->execute();
                    $init_weight = 1;
                    
                    while($result=$sql->fetch(PDO::FETCH_ASSOC)){
                        $init_weight = $init_weight + 1;
                        $category = $result['category'];
                        
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td align = 'center'>" . $category . "</td>";
                        $new = $conn->prepare("SELECT * FROM `navigation` WHERE `category` = '" . 
                                              $category . "'ORDER BY content_weight");
                        $new->execute();
                        while($result = $new->fetch(PDO::FETCH_ASSOC)){
                            echo "<td align = 'center'><a href = " . $result['content_link'] . ">" 
                                . $result['content'] . "</a></td>";
                        }
                        echo "</tr>";
                        echo "</tbody>";
                        $sql = $conn->prepare('SELECT * FROM `navigation` WHERE `cat_type` = 1 AND `cat_weight` = ' 
                                              . $init_weight);
                        $sql->execute();
                    }
                    
                }
                catch(PDOException $e) {     
                        echo $sql . "<br>" . $e->getMessage();
                }
            ?>
            
            

        </table>
    </div>
    <div  class=" column">
        <table class="ui definition small table ">
            <?php
                $servername = "127.0.0.1";      //change the ip address to the server's
                $databasename = "news_content";
                $username = "root";
                $password = "";
                try{
                    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
                    $conn->query("SET NAMES utf8"); 
                    $sql = $conn->prepare('SELECT * FROM `navigation` WHERE `cat_type` = 2 AND `cat_weight` = 1');
                    $sql->execute();
                    $init_weight = 1;
                    
                    while($result=$sql->fetch(PDO::FETCH_ASSOC)){
                        $init_weight = $init_weight + 1;
                        $category = $result['category'];
                        
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td align = 'center'>" . $category . "</td>";
                        $new = $conn->prepare("SELECT * FROM `navigation` WHERE `category` = '" . 
                                              $category . "'ORDER BY content_weight");
                        $new->execute();
                        while($result = $new->fetch(PDO::FETCH_ASSOC)){
                            echo "<td align = 'center'><a href = " . $result['content_link'] . ">" 
                                . $result['content'] . "</a></td>";
                        }
                        echo "</tr>";
                        echo "</tbody>";
                        $sql = $conn->prepare('SELECT * FROM `navigation` WHERE `cat_type` = 2 AND `cat_weight` = ' 
                                              . $init_weight);
                        $sql->execute();
                    }
                    
                }
                catch(PDOException $e) {     
                        echo $sql . "<br>" . $e->getMessage();
                }
            ?>
            
        </table>

    </div>
    </div>
    <div class="FooterPush"></div>
</div>

<div class="ui footer segment  inverted vertical">
   <div class="footer-inner" >
    <div class="copyright">
        ©
        <span itemprop="copyrightYear">Powered By</span>
        <div class="ui inverted small horizontal link list">
        <a href="https://github.com/Mirko4512/daohang/" class="item">Morey丨个人导航</a>
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" class="item"  style="display: inline-block; vertical-align: middle; margin-left: 10px;"><img alt="知识共享许可协议" style="border-width:0" src="https://mirrors.creativecommons.org/presskit/buttons/80x15/svg/by-nc-sa.svg"></a>
        </div>
    </div>

    
    </div>
</div>

</body>
<script src="js/semantic.min.js"></script>

<!--搜索引擎-->
<script src="js/search.js"></script>


    <!--劝退IE-->
<script src="js/checkIE.js"></script>
<!-- 引入superplaceholder.js，实现input打字机效果 -->
<script src="js/superplaceholder.js"></script>
<script src="js/checkOs.js"></script>
</html>
