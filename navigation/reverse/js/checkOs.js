/*
* 检验当前系统
* */
var typeOs = function () {
    var platform = navigator.platform;
    console.log(platform.indexOf("Linux"));
    if (platform.indexOf("Linux")>=0){
        return "linux";
    }
}

var spHolder= function(senentces,options) {
    superplaceholder({
        el: document.querySelector('#search'),
        sentences: senentces,
        options: options
    });
}
if (typeOs()==='linux'){
    var options={
        // delay between letters (in milliseconds)
        letterDelay: 0, // milliseconds
        // delay between sentences (in milliseconds)
        sentenceDelay: 0,
        // should start on input focus. Set false to autostart
        startOnFocus: false,
        loop: false,
        cursor: ''
    };
    var senentces =['大海掀翻小池塘...没有没有通过👇~人均八千万~ 我继续担任共和国主席~'];

    spHolder(senentces,options);

}else {
    var options={
        // delay between letters (in milliseconds)
        letterDelay: 100, // milliseconds
        // delay between sentences (in milliseconds)
        sentenceDelay: 1000,
        // should start on input focus. Set false to autostart
        startOnFocus: false,
        // loop through passed sentences
        loop: true,
        // Initially shuffle the passed sentences
        shuffle: false,
        // Show cursor or not. Shows by default
        showCursor: false,
        // String to show as cursor
        cursor: ''
    };
    var senentces =['亲自指挥...亲自部署👇~', '微博发布~', '头上三尺有神明~', '萨格尔王~', '一定要有敬畏之心~'];

    spHolder(senentces,options);

}

