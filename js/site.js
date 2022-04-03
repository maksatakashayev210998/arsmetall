var act = 0;
function showmobmenu(){
    $('.mobmenu').slideToggle(300);
    act++;
    if(act % 2 == 1){
        $('.burger').addClass('active');
    }else{
        $('.burger').removeClass('active');
    }
}
function slideleft(){
    var cursor = $('#cursor').val();
    var lf = 0;
    if(cursor > 0){
        cursor--;
        lf = cursor * 285;
        $('#ctsd').css('margin-left', '-'+lf+'px');
        $('#cursor').val(cursor);
    }
}
function slideright(){
    var cursor = $('#cursor').val();
    var lf = 0;
    if(cursor < 17){
        cursor++;
        lf = cursor * 285;
        $('#ctsd').css('margin-left', '-'+lf+'px');
        $('#cursor').val(cursor);
    }
}
function slidemleft(){
    var num = $('#pgnomer').val();
    num--;
    if(num == 0) num = 21;
    for(var i = 1; i<=21; i++){
        $('#mats'+i).css('display', 'none');
    }
    $('#mats'+num).css('display', 'block');
    $('#pgnomer').val(num);
}
function slidemright(){
    var num = $('#pgnomer').val();
    num++;
    if(num == 22) num = 1;
    for(var i = 1; i<=21; i++){
        $('#mats'+i).css('display', 'none');
    }
    $('#mats'+num).css('display', 'block');
    $('#pgnomer').val(num);
}
$("#a1").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#g1").offset().top
    }, 600);
});
$("#a2").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#g2").offset().top
    }, 600);
});
$("#a3").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#g3").offset().top
    }, 600);
});
$("#a4").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#g4").offset().top
    }, 600);
});
$("#a5").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#g5").offset().top
    }, 600);
});
$("#am1").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#g1").offset().top
    }, 600);
});
$("#am2").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#g2").offset().top
    }, 600);
});
$("#am3").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#g3").offset().top
    }, 600);
});
$("#am4").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#g4").offset().top
    }, 600);
});
$("#am5").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#g5").offset().top
    }, 600);
});

var k = 0;
function showall(){
    k++;
    if(k % 2 == 1){
        $('.sliderblock').slideUp();
        $('.allprod').slideDown(300);
        $('.showall').html('Скрыть предложения');
    }else{
        $('.sliderblock').slideDown(300);
        $('.allprod').slideUp(300);
        $('.showall').html('Смотреть все предложения');
    }
}
window.onscroll = function (e) {
    var x = window.scrollY;
    var n1=0;
    var n2=0;
    var n3=0;
    var n4=0;
    if(x >= 2000){
        if(n1 == 0){
            $('#num1').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: 2000
                }, 
                {
                    duration: 1500,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
        n1++;
        if(n2 == 0){
            $('#num2').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: 2
                }, 
                {
                    duration: 1500,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
        n2++;
        if(n3 == 0){
            $('#num3').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: 10
                }, 
                {
                    duration: 1500,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
        n3++;
        if(n4 == 0){
            $('#num4').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: 1
                }, 
                {
                    duration: 1500,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
        n4++;
    }
};
var xs = 0;
setInterval(function(){
    xs++;
    if(xs == 2){
        $('#num4').html('30 000');
    }
},1000);
