$(function(){

	$('.mobile').click(function(){
       		$('.mobile > ul').slideToggle();
      });

 });
	
	$('.setas').click(function(){


	
	$('.wraper-single-2').fadeOut(1000,function(){
		$('.single-click').fadeIn(1000 , function(){
			$('.single-click').fadeOut(3000 , function(){
				$('.wraper-single-2').fadeIn(2000);
			})
		})
	})

});	