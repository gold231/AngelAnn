	var lock1 = 1;
	var lock = 1;
	
$( document ).ready(function() {

	$('.slide-main01').animate({marginTop: '40%'}, 1500);
	$('.slide-main02').animate({marginTop: '0%'}, 1500);
	$('.slide-main03').animate({marginTop: '16%'}, 1500);
	setTimeout(() => lock1 = 0, 1500);
	
    $('.slide-main1').click(function() {
		$('.sl2').addClass('slide-out-top-sl-2');
		$('.slide-main1').animate({marginTop: '-60%'}, 1500);
		$('.slide-main2').animate({marginTop: '-62%'}, 1500);
		setTimeout(() => lock = 0, 1500);		
	});
	$('.slide-main2').click(function() {
		$('.sl2').addClass('slide-out-top-sl-2');
		$('.slide-main1').animate({marginTop: '-60%'}, 1500);
		$('.slide-main2').animate({marginTop: '-62%'}, 1500);
		setTimeout(() => lock = 0, 1500);		
	});
	$('.slide-main3').click(function() {
		$('.sl2').addClass('slide-out-top-sl-2');
		$('.slide-main1').animate({marginTop: '-60%'}, 1500);
		$('.slide-main2').animate({marginTop: '-62%'}, 1500);
		setTimeout(() => lock = 0, 1500);		
	});
	$('.slide-main4').click(function() {
		$('.sl2').addClass('slide-out-top-sl-2');
		$('.slide-main1').animate({marginTop: '-60%'}, 1500);
		$('.slide-main2').animate({marginTop: '-62%'}, 1500);
		setTimeout(() => lock = 0, 1500);		
	});

	$( ".sl2_img_top" ).hover(function(){
		if(lock != 1) {	
			$(this).parent().animate({marginTop: '5%'}, 5000);
		}
	}, function(){ 
		$(this).parent().stop();
		$(this).parent().css('margin-top','-60%');
	});
	$( ".sl2_img_bottom" ).hover(function(){ 
		if(lock != 1) {	
			$(this).parent().animate({marginTop: '-120%'}, 5000);
		}
	}, function(){ 
		$(this).parent().stop();
		$(this).parent().css('margin-top','-60%');
	});
	
	
	$( ".sl2_img_top1" ).hover(function(){
		if(lock1 != 1) {	
			$(this).parent().animate({marginTop: '50%'}, 5000);
		}
	}, function(){ 
		$(this).parent().stop();
		$(this).parent().css('margin-top','0%');
	});
	$( ".sl2_img_bottom1" ).hover(function(){ 
		if(lock1 != 1) {
			$(this).parent().animate({marginTop: '5%'}, 5000);
		}
	}, function(){ 
		$(this).parent().stop();
		$(this).parent().css('margin-top','40%');
	});
	$( ".sl2_img_bottom2" ).hover(function(){ 
		if(lock1 != 1) {
			$(this).parent().animate({marginTop: '-50%'}, 5000);
		}
	}, function(){ 
		$(this).parent().stop();
		$(this).parent().css('margin-top','0%');
	});
	$( ".sl2_img_top2" ).hover(function(){
		if(lock1 != 1) {	
			$(this).parent().animate({marginTop: '50%'}, 5000);
		}
	}, function(){ 
		$(this).parent().stop();
		$(this).parent().css('margin-top','16%');
	});
});