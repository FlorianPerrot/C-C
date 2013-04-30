$time_menu = 1000;
$time_site = 2000;
$template_directory = "wp-content/themes/C-C";
var tab_color = ["#00349a","#ff6600","#d11001","#019e59","#2d9500", "#d6191f"];/* Taille du tableau = nombre de lien dans le menu*/
var tab_pos = [90,50,30,50,70,50];
$taille_menu = tab_color.length;
var margin_menu = "0px";

jQuery(document).ready(function () {
    //DOM est défini

    /*INIT MENU FERME*/
	$('.sous-page').hide();
	$('.main-titre').hide();
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
		
		$('.main').animate({width:"8%"},$time_menu);
		$('.sous-page').animate({width:"88%"},$time_menu);
    };

    function fermeture_sous_page() {
		$('.main-titre').hide();
		$('article').show();
		$('.article-description').hide();
		$('.main').animate({width:"96%"},$time_menu);
		$('.sous-page').animate({width:"0%"},$time_menu,function(){
			$('.article-description').show($time_menu);
			$('.sous-page').hide();
		});
		
    }
	
	function fermeture_site() {
		$('#content').hide($time_site);
		$('footer .actions-site').attr('src',$template_directory + '/img/lock.png')
	};
	
	function ouverture_site() {
		$('#content').show($time_site);
		$('footer .actions-site').attr('src',$template_directory + '/img/unlock.png')
	};
	
	function init(){
		/* BOUTON ET FOCUS*/
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
		
		$('.menu a').mouseenter(function(){
			margin_menu = $(this).css("margin-left");
			$(this).animate({"margin-left":"0px"},1000);
		})
		.mouseleave(function(){
				$(this).animate({"margin-left":margin_menu},1000);
		});
		
		/* Traitement menu */
		for(var x=1;x<=$taille_menu;x+=1){
			$('.menu a:nth-of-type('+x+')').css('margin-left',tab_pos[x-1]+'px');
			$('.menu a:nth-of-type('+x+') b').css('background',tab_color[x-1]);
			$('.menu a:nth-of-type('+x+') p').css('background',tab_color[x-1]);
			
		}
	}
	
	/**************/
	/*  TEST	  */
	/**************/
	//ouverture_sous_page();
	
	/******************/
	/*	INIT ACTIONS  */
	/******************/
	init();
});