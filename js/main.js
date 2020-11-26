var lock1 = 1;
var lock = 1;
$( document ).ready(function() {
	if ($(window).width() <= '900'){
		$('.slide-main02').animate({marginTop: '0px'}, 2000);
		var h = $('.main_col2').height();
		$('.main_col5').height(h);
		setTimeout(() => lock = 0, 2000);	
	} else {				//alert($('#col1').width());
		//$('.slide-main01').animate({marginTop: '-'+1.05*($('#col1').width())+'px'}, 2000);
		$('.slide-main01').animate({marginTop: '0px'}, 2000);
		$('.slide-main02').animate({marginTop: '0px'}, 2000);
		setTimeout(() => lock = 0, 2000);		
	}	
	$( ".slide-main01" ).hover(function(){ 
		if(lock != 1) {	
			$(this).animate({marginTop: '-120%'}, 3000);
		}
	}, function(){ 
		$(this).stop();
		$(this).css('margin-top','0%');
	});
	$( ".slide-main02" ).hover(function(){ 
		if(lock != 1) {	
			$(this).animate({marginTop: '-120%'}, 3000);
		}
	}, function(){ 
		$(this).stop();
		$(this).css('margin-top','0%');
	});
});

	var end = new Date('12/15/2020 10:1 AM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('n1').innerHTML = days;
        document.getElementById('n2').innerHTML = hours;
        document.getElementById('n3').innerHTML = minutes;
        document.getElementById('n4').innerHTML = seconds;
    }

    timer = setInterval(showRemaining, 1000);