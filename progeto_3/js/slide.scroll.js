$(function(){
	var amt;
	var delay = 3000;
	var curIndex = 0;

	autoplay();
	scrollslide();
	 function scrollslide(){
	 	amt = $('.parti-rigth').length;
	 	var size = 100 * amt;
	 	var sizebox = 100 / amt;
	 	$('.parti-rigth').css('width',sizebox+'%');
	 	$('.scrollwraper').css('width',size+'%');
	 	

	 	for(var i = 0; i < amt; i++){
	 		if (i == 0){
	 			$('.bolinhas').append('<span style="background-color:black;"></span>');
	 		}else
	 			$('.bolinhas').append('<span></span>');	
	 	}
	 	
	 }

	 function autoplay(){
	 	setInterval(function(){
	 		curIndex++;
	 		if (curIndex == amt)
	 			curIndex = 0;
	 		gotoSlider(curIndex);
	 	},delay)
	 }

	 function gotoSlider(curIndex){
	 	var offSetX = $('.parti-rigth').eq(curIndex).offset().left - $('.scrollwraper').offset().left;
	 	$('.bolinhas span').css('background-color','grey')
	 	$('.bolinhas span').eq(curIndex).css('background-color', 'black')
	 	$('.scrollEquipe').stop().animate({'scrollLeft':offSetX+'px'})
	 }

	 $(window).resize(function(){
	 	$('.scrollEquipe').stop().animate({'scrollLeft':'0'})
	 })
})