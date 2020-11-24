/*// JavaScript Document
function htmlPosition(obj) {
    obj.data_top = obj.offsetTop;
}
var aelFix = document.getElementById('lm-chapter-fix');
var eclFix = document.getElementById('lm-chapter-flexible-fix');
var laalFix = document.getElementById('lm-article-aside-flexible');
htmlPosition(aelFix);
htmlPosition(laalFix);

function htmlScroll() {
    var top = document.body.scrollTop || document.documentElement.scrollTop;
    if (aelFix.data_top < top) {
        //aelFix.style.position = 'fixed';
        aelFix.style.borderBottom = '1px solid #A8A8A8';
        aelFix.style.background = 'rgba(250,250,250,0.95)';
        eclFix.style.borderBottom = '0';
        eclFix.style.background = 'transparent';
    } else {
        //aelFix.style.position = 'static';
        aelFix.style.borderBottom = '0';
        aelFix.style.background = 'transparent';
        eclFix.style.borderBottom = '1px solid #A8A8A8';

    }
}

function laahtmlScroll() {
    var top = document.body.scrollTop || document.documentElement.scrollTop;
    if (laalFix.data_top < top) {
        laalFix.style.position = 'fixed';

    } else {
        laalFix.style.position = 'static'


    }
}
window.onscroll = htmlScroll;
window.onscroll = laahtmlScroll;*/
