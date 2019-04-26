var img = document.querySelector(".jumbotron_section");
var titre = document.getElementsByClassName(".text-center");
function change(){
    setTimeout((function(){img.backgroundImage="../img/FB_IMG_1554859571804.jpg";}),1000)
    setTimeout((function(){img.backgroundImage="../img/FB_IMG_1554858703796.jpg";}),1000)
    setTimeout((function(){img.src="../img/FB_IMG_1554858703796.jpg";}),1000)
    setTimeout((function(){img.src="../img/FB_IMG_1554858703796.jpg";}),1000)
    setTimeout((function(){img.src="../img/FB_IMG_1554859431589.jpg";}),2000)
    setTimeout((function(){img.src="../img/FB_IMG_1554595861987.jpg";}),3000)

};
(function(){
    setInterval(change,3000)
})();

