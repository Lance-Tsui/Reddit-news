const sInfor = document.getElementById("search");
const sDuckDuckGo = document.getElementById("duckduckgo");
const sGoogle = document.getElementById("google");
const sGitHub = document.getElementById("github");
const sStartPage = document.getElementById("startpage");
const sYandex = document.getElementById('yandex');
const sAmazon = document.getElementById('amazon');
const sTaoBao = document.getElementById('taobao');
const sYouTube = document.getElementById('youtube')
const sPornhub = document.getElementById("pornhub");
const sPincong = document.getElementById("pincong");
const sMohu = document.getElementById("mohu");
const s2049BBS = document.getElementById("2049bbs");



//isEmpty;
let isEmpty =function (obj)  {
    if (obj === null) return true;
    if (typeof obj === 'undefined') {
      return true;
    }
    if (typeof obj === 'string') {
        let reg = new RegExp("^([ ]+)|([　]+)$");
        //判断有空格，如果有空格，删除左边空格；
        if( reg.test(obj)){
            obj=obj.replace(/(^\s*)/g,"");
        }

      if (obj === "") {
        return true;
      }


    }
    return false;
}
//doAction 搜索跳转方法
/*  
p：搜索网址前段 
n: 搜到网址后段
h: 搜索首页
*/
let doAction=function(p,n,s){
    if(isEmpty(sInfor.value)){
        window.open(s);
    }else{
        window.open(p+sInfor.value+n);
    }
    
}

//拼接网址
let p='';
let n='';
let s='';

document.onkeydown = function (e) { // 回车提交表单
    // 兼容FF和IE和Opera
        var theEvent = window.event || e;
        var code = theEvent.keyCode || theEvent.which || theEvent.charCode;
        if (code == 13) {   
                p="https://www.google.com/search?q=";

    n="&gws_rd=cr&nfpr=1&newwindow=1&num=30";

    s='https://www.google.com/webhp?gws_rd=cr&nfpr=1&newwindow=1&num=30';
                doAction(p,n,s);
    };
}


//Google
sGoogle.onclick=function(){
      p="https://www.google.com/search?q=";

    n="&gws_rd=cr&nfpr=1&newwindow=1&num=30";

    s='https://www.google.com/webhp?gws_rd=cr&nfpr=1&newwindow=1&num=30';
   doAction(p,n,s);

}

//DuckDuckgo
sDuckDuckGo.onclick= function()  {
    p="https://duckduckgo.com/?q=";
	n='';
	s='https://duckduckgo.com/';
    doAction(p,n,s);
}



//GitHub
sGitHub.onclick= function () {
    p="https://github.com/search?q=";
    n='';
    s='https://github.com/';
    doAction(p,n,s);
}

//StartPage
sStartPage.onclick = function () {
    p="https://startpage.com/do/search/";
    n='';
    s='https://startpage.com/';
    doAction(p,n,s);
}

//Yandex
sYandex.onclick= function () {
    p="https://yandex.com/search/?text=";
    n='';
    s='https://www.yandex.com/';
    doAction(p,n,s);
}
//Amazon
sAmazon.onclick = function () {
    p="https://www.amazon.com/s?k=";
    n='';
    s='https://www.amazon.com/';
    doAction(p,n,s);
}

//YouTube
sYouTube.onclick =function () {
    p="https://www.youtube.com/results?search_query=";
    doAction(p,n,p);
}

//Pornhub
sPornhub.onclick =function () {
    p='https://www.pornhub.com/video/search?search=';
    n='';
    s='https://www.pornhub.com';
    doAction(p,n,s);
}

//Pincong
sPincong.onclick = function () {
    p='https://www.google.com/search?q= ';
    n='	site:pincong.rocks';
    s='https://pincong.rocks';
    doAction(p,n,s);
}

//Mohu
sMohu.onclick = function () {
    p='https://www.google.com/search?q= ';
    n='	site:mohu.pincong.rocks';
    s='https://mohu.pincong.rocks';
    doAction(p,n,s);
}

//2049bbs
s2049BBS.onclick = function () {
    p='https://www.google.com/search?q= ';
    n='	site:2049bbs.xyz';
    s='https://2049bbs.xyz';
    doAction(p,n,s);
}


