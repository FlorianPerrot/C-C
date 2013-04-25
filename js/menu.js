$time_menu = 1500;
$time_site = 2000;

jQuery(document).ready(function () {
    //DOM est défini

    /*INIT MENU FERME*/
	$('.sous-page').hide();

	/* INIT MENU OUVERT
    $('.main').css('width', '2%');
    $('.sous-page').css('width', '48%');

    $('.sous_page').show();
	$('article').hide();
	$('.article-name').hide();
	$('.main-titre').show();*/
	
    function ouverture_sous_page() {
		$('.main-titre').show();
		$('article').hide($time_menu);
		$('.sous-page').show();
		$('.main').animate({width:"2%"},$time_menu);
		$('.sous-page').animate({width:"48%"},$time_menu);
    };

    function fermeture_sous_page() {
		$('.main-titre').hide();
		$('article').show();
		$('.article-description').hide();
		$(".main").animate({width:"50%"},$time_menu);
		$('.sous-page').animate({width:"0%"},$time_menu,function(){
			$('.article-description').show($time_menu);
			$('.sous-page').hide();
		});
		
    }
	
	function fermeture_site() {
		$('#content').hide($time_site);
		$('footer . actions-site').html('src','img/lock.png')
	};
	
	function ouverture_site() {
		$('#content').show($time_site);
	};
	
	/**************/
	/*  TEST	  */
	/**************/
	ouverture_sous_page();
	
	/******************/
	/*	INIT ACTIONS  */
	/******************/
	$('.menu .actions-sous-page').click(function(){
		if($('.sous-page').is(':visible')){
			fermeture_sous_page();
		}
		else{
			ouverture_sous_page();
		}
	});
	$('.sous-page .fermeture-sous-page').click(function(){
			fermeture_sous_page();
	});
	$('footer .actions-site').click(function(){
		if($('#content').is(':visible')){
			fermeture_site();
		}
		else{
			ouverture_site();
		}
	});
});