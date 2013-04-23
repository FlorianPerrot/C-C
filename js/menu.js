$time_menu = 1500;

jQuery(document).ready(function () {
    //DOM est défini

    /*INIT MENU FERME
	$('.menu_secondaire').hide();*/

	/* INIT MENU OUVERT*/
    $('#main').css('width', '2%');
    $('.menu_secondaire').css('width', '48%');

    $('.menu_secondaire').show();
	$('article').hide();
	$('.home-name').hide();
	$('.main-titre').show();
	
    function ouverture_menu() {
		$('.main-titre').show();
		$('.home-description').hide();
		$('.home-name').hide();
		$('.menu_secondaire').show();
		$("#main").animate({width:"2%"},$time_menu);
		$('.menu_secondaire').animate({width:"48%"},$time_menu,function(){
		});
    }

    function fermeture_menu() {
		$('.main-titre').hide();
		$('.home-name').show();
		$("#main").animate({width:"50%"},$time_menu);
		$('.menu_secondaire').animate({width:"0%"},$time_menu,function(){
			$('.home-description').show($time_menu);
			$(".menu_secondaire").hide();
		});
		
    }
	
	//fermeture_menu();
	//ouverture_menu();
});