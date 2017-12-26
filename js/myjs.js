$(document).ready(function(){

$("#tae").click(function(){
$("nav").animate({left: '0px'});
$("article").animate({left: '108px'});
$("i").css({
'-webkit-transform':'rotate(180deg)',
'-moz-transform':'rotate(180deg)',
'transform':'rotate(180deg)'}
);
});
});